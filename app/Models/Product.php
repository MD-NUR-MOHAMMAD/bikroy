<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    /**
     * Get the subcategory that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    /**
     * Get the store that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
 
    /**
     * Get all of the images for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get all of the reviews for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get all of the comments for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get all of the cart entries for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    /**
     * Get all of the wishlists entries for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    /**
     * Get all of the order items for the Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItems(){
        return $this->hasMany(OrderItems::class);
    }
}
