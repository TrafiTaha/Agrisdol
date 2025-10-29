<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

    /**
     * Get the testimonial created from this contact.
     */
    public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
}
