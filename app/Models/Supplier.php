<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'address',
        'phone_no',
    ];
    
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
