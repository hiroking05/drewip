<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name', 'user_id'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function memos()
    {
        return $this->hasMany(Memo::class);
    }
    
}
