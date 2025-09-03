<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'author',
        'body',
        'image',
        'tags',
        'author_image'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories(): BelongsToMany{
        return $this->belongsToMany(Category::class);
    }
}
