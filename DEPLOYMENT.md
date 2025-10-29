# Laravel Agrisol Deployment Guide

## 🚀 Deployment Options

### Option 1: Netlify (Recommended for Static Sites)
Since this is a Laravel application with authentication, Netlify deployment requires serverless functions.

#### Prerequisites:
- Netlify account
- GitHub repository

#### Steps:
1. **Push to GitHub:**
   ```bash
   git add .
   git commit -m "Prepare for deployment"
   git push origin main
   ```

2. **Connect to Netlify:**
   - Go to [Netlify](https://netlify.com)
   - Click "New site from Git"
   - Connect your GitHub repository
   - Configure build settings:
     - Build command: `npm run build && php artisan config:cache && php artisan route:cache && php artisan view:cache`
     - Publish directory: `public`
     - Node version: 18
     - PHP version: 8.2

3. **Environment Variables:**
   Set these in Netlify dashboard:
   ```
   APP_NAME=Agrisol
   APP_ENV=production
   APP_KEY=your-generated-app-key
   APP_DEBUG=false
   APP_URL=https://your-netlify-site.netlify.app

   DB_CONNECTION=sqlite
   DB_DATABASE=/opt/build/repo/database/database.sqlite

   SESSION_DRIVER=file
   CACHE_DRIVER=file
   QUEUE_CONNECTION=sync

   MAIL_MAILER=log
   ```

4. **Database Setup:**
   - SQLite will be created automatically
   - Run migrations via build command

### Option 2: Traditional Hosting (VPS/Server)
For full Laravel functionality with database persistence.

#### Requirements:
- PHP 8.2+
- MySQL/MariaDB or PostgreSQL
- Composer
- Node.js & npm

#### Steps:
1. **Upload Files:**
   ```bash
   # Upload all files to your server
   scp -r . user@your-server:/path/to/app
   ```

2. **Install Dependencies:**
   ```bash
   composer install --optimize-autoloader --no-dev
   npm install && npm run build
   ```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   # Edit .env with your database credentials
   php artisan key:generate
   ```

4. **Database Setup:**
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

5. **Optimize for Production:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan optimize
   ```

6. **Set File Permissions:**
   ```bash
   chown -R www-data:www-data /path/to/app
   chmod -R 755 storage
   chmod -R 755 bootstrap/cache
   ```

7. **Web Server Configuration:**
   Configure Apache/Nginx to point to `public/index.php`

### Option 3: Laravel Forge/DigitalOcean App Platform
1. Connect your GitHub repository
2. Choose PHP 8.2, Node.js 18
3. Set environment variables
4. Deploy

## 🔧 Post-Deployment Checklist

- [ ] Visit your site URL
- [ ] Test user registration: `/register`
- [ ] Test login with admin: `admin@agrisol.tn` / `admin123`
- [ ] Test contact form
- [ ] Check all pages load correctly
- [ ] Verify email functionality (if configured)

## 🐛 Troubleshooting

### Common Issues:
1. **500 Error:** Check `.env` file and run `php artisan config:clear`
2. **Database Connection:** Verify database credentials
3. **File Permissions:** Ensure storage/ and bootstrap/cache/ are writable
4. **Assets Not Loading:** Run `npm run build` and check public/build/

### Logs:
Check `storage/logs/laravel.log` for detailed error messages.

## 📞 Admin Access
- **Email:** admin@agrisol.tn
- **Password:** admin123
- **Admin Panel:** `/admin/dashboard`

## 🔒 Security Notes
- Change default admin password after first login
- Set `APP_DEBUG=false` in production
- Configure proper SSL certificate
- Set up proper backup strategy for database
