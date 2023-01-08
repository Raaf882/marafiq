<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Building;

class image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'img',
    ];
    public function building(){
        return $this->belongTo(Building::class);
    }


}
