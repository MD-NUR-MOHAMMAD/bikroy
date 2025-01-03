<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    /**
     * Get all of the divisions for the country through the districts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }
}
