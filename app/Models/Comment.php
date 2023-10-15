<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','user_id','comment','publish'];
    
    public function getUser()
    {
        return $this->hasOne(Frontuser::class, 'id', 'user_id');
    }
    public function getPost()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }
}
