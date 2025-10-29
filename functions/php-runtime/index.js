const { exec } = require('child_process');
const path = require('path');

exports.handler = async (event, context) => {
  // Set up PHP environment
  process.env.PHP_CLI_SERVER_WORKERS = '1';

  return new Promise((resolve, reject) => {
    const phpProcess = exec('php artisan serve --host=0.0.0.0 --port=8888', {
      cwd: path.join(__dirname, '../../'),
      env: {
        ...process.env,
        APP_ENV: 'production',
        APP_KEY: process.env.APP_KEY || 'your-app-key-here',
        DB_CONNECTION: 'sqlite',
        DB_DATABASE: path.join(__dirname, '../../database/database.sqlite')
      }
    });

    phpProcess.stdout.on('data', (data) => {
      console.log('PHP Output:', data.toString());
    });

    phpProcess.stderr.on('data', (data) => {
      console.error('PHP Error:', data.toString());
    });

    // Wait for server to start
    setTimeout(() => {
      resolve({
        statusCode: 200,
        body: JSON.stringify({ message: 'Laravel server started' })
      });
    }, 2000);
  });
};
