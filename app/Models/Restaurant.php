<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable =[
      'name',
      'address',
      'bio'
    ];
    public function foods()
    {
        return $this->belongsToMany(Food::class)->withTimeStamps();
    }
}
