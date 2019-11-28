<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    
    protected $fillable = ['content' , 'topic_id'];
    
    public function topoic()
    {   
        return $this->belongsTo(Topic::class);
    }
}
