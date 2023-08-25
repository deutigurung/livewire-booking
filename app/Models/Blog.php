<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description','status','summary','user_id','blog_category_id'];

    public function scopeActive($query){
        return $query->where('status',1);
    }
    
    public function blog_category(){
        return $this->belongsTo(BlogCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
