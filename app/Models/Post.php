<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'image',
        'status',
        'published_at',
    ];

    /**
     * ✅ Post milik satu user (author)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * ✅ Post milik satu kategori
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * ✅ Post punya banyak tag (Many-to-Many)
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    /**
     * ✅ Post punya banyak komentar
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
