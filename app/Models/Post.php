<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $primaryKey = "post_id";
    public function User(){

     return $this->belongsTo("App/User");
    }

    public function Category(){

     return $this->belongsTo("App/Category");
    }

    public function Candidate(){

    return $this->hasMany("App/Candidate");
  }
}
