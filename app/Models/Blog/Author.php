<?php

namespace App\Models\Blog;

use Database\Factories\Blog\AuthorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    /** @use HasFactory<AuthorFactory> */
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'authors';

    protected $fillable = [
        'name',
        'email',
        'bio',
        'github_handle',
        'twitter_handle',
    ];

    /** @return HasMany<Post, $this> */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}
