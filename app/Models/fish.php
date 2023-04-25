<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fish extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'size',
        'sex_id',
        'fishbowl_id',
        'kind_id',
        'food_id',
        ];

        public function sex()
        {
            return $this->hasOne(sex::class, 'id', 'sex_id');
        }
        public function fishbowl()
        {
            return $this->hasOne(fishbowl::class, 'id', 'fishbowl_id');
        }
        public function kind()
        {
            return $this->hasOne(kind::class, 'id', 'kind_id');
        }
        public function food()
        {
            return $this->hasOne(food::class, 'id', 'food_id');
        }
}
