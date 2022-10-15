<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;
use App\Models\subcatagory;
use App\Models\User;
class post extends Model
{
    use HasFactory;
    
    protected $fillable = ['catagory_id','subcatagory_id', 'user_id','title', 'slug', 
    'post_date', 'image','description', 'tags','status',
 ];
 //join catagory
 public function catagory()
    {
        return $this->belongsTo(catagory::class,'catagory_id');//catagory id foriegn key 
    }
//join sub catagory
public function subcatagory()
{
    return $this->belongsTo(subcatagory::class,'subcatagory_id');//subcatagory id foriegn key 
} 
//join user table

public function user()
{
    return $this->belongsTo(user::class,'user_id');//user_id foriegn key 
} 


}
