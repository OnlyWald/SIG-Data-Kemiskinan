<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinsos extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fund(){
        return $this->hasMany(Fund::class);
    }
}
