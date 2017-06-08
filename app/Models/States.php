<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $table = 'states';

    protected $fillable = ['name'];

    public function photos()
    {
        return $this->hasMany(Photos::class);
    }
}
