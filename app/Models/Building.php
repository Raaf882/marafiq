<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Building extends Model
{
    use HasFactory;
    protected $table = 'buildings';
    protected $fillable=[
        'name',
        'description',
       ' desc_details',
        'price',
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
