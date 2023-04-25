<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class spec extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'water',
        'ilumise',
        'ph',
    ];
    public function fishbowl()
    {
        return $this->belongsTo(fishbowl::class, 'id', 'spec_id');
    }
    

}
