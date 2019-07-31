<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the user record associated with the company.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
