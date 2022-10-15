<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory_name',
        'catagory_slug',
        
    ];
    //capital latter in first letter 
    
    public function setCatagoryNameAttribute($value)

    {
        $this->attributes['catagory_name']=ucfirst($value);
       
    }
}
