<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'desc'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
