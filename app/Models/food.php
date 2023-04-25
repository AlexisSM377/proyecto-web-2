<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class food extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'diet_id',
        'product_id',
        ];
    
    public function product()
    {
        return $this->hasOne(product::class,'id', 'product_id')->withTrashed();
    }
    public function diet()
    {
        return $this->hasOne(diet::class,'id', 'diet_id');
    }
    public function fish()
    {
        return $this->belongsTo(fish::class, 'fish_id', 'id');
    }
}
