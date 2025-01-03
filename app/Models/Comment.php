<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    /**
     * Get the user that made the comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that the comment belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(){
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the parent comment (for nested comments or replies).
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    /**
     * Get the child comments (replies) for a parent comment.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
}
