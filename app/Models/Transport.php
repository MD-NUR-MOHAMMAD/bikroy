<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $guarded = [];

    /**
     * The shipping that this transport belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }
}
