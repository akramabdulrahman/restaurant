<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable=['name'];
  //  protected $with=['menu'];

    public function menu (){
        return $this->belongsTo(Menu::class);
    }
    
}
