<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Food extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'category',
        'description',
        'price',
        'best_before',
        'supplier_id',
        'picture',
    ];
        public function supplier()
        {
            return $this->belongsTo(Supplier::class);
        }
        public function restaurants()
        {
            return $this->belongsToMany(Restaurant::class)->withTimeStamps();
        }
}


