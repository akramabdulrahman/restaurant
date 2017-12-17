<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Item;

class Order extends Model
{
    public function items (){
        return $this->belongsToMany(Item::class);
    }

    public function services (){
        return $this->belongsToMany(Service::class);
    }
    
    public function payment (){
        return $this->belongsTo(Payment::class);
    }
    
    public function customer (){
        return $this->belongsToMany(Customer::class);
    }
}
