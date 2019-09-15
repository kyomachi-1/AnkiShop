<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['card_front', 'card_back'];
    
    public function cards()
    {
        return $this->belongsTo(Ring::class);
    }
}
