<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    protected $table = "sales_transaction";
    public $incrementing=false;

    public function product(){
    	return $this->belongsToMany('App\Product', 'product_in_transaction', 'sales_transaction_id', 'product_id')->withPivot('quantity')->withTimestamps();
    }

    public function paymentMethod(){
    	return $this->belongsToMany('App\PaymentMethod', 'payment', 'sales_transaction_id', 'payment_method_id')->withPivot('payment_amount','card_number')->withTimestamps();
    }

    public function sales(){
    	return $this->belongsTo('App\Sales');
    }

    public function salesOutlet(){
    	return $this->belongsTo('App\SalesOutlet');
    }
}
