<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;

class subcatagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory_id',
        'subcatagory_name',
        'subcatagory_slug',
        
    ];
    public function catagory()
    {
        return $this->belongsTo(catagory::class,'catagory_id');//catagory id foriegn key 
    }
    
}
