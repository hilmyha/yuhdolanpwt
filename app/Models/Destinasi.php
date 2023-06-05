<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Destinasi extends Model
{
    use HasFactory, Sluggable;

    // protected $guarded = ['id'];

    // user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // slug config
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
