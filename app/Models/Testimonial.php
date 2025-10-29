<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'name',
        'email',
        'company',
        'message',
        'rating',
        'is_featured',
        'is_approved',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_approved' => 'boolean',
    ];

    /**
     * Get the contact that owns the testimonial.
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Scope a query to only include approved testimonials.
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * Scope a query to only include featured testimonials.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}

