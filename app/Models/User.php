<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the products that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stores(): HasMany
    {
        return $this->hasMany(Store::class);
    }

    /**
     * Get all of the reviews for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    /**
     * Get all of the carts for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts(){
        return $this->hasMany(Cart::class);
    }

    /**
     * Get all of the wishlists for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    /**
     * Get all of the orders for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
