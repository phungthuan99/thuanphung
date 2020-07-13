<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model{
    protected $table = 'invoice_detail';
    public $timestamps = false;
    protected $fillable = ['product_id','quantity','unit_price'];

    public function getProductName(){
        $pro = Product::find($this->product_id);
        if($pro){
            return $pro->name;
        }

    }

    public function getInvoiceName(){
        $inde = Invoice::find($this->invoice_id);
        if($inde){
            return $inde->customer_name;
        }
        return null;
        
    }
    public function getInvoicePhone(){
        $inde = Invoice::find($this->invoice_id);
        if($inde){
            return $inde->customer_phone_number;
        }
        return null;
        
    }

    public function getInvoiceEmail(){
        $inde = Invoice::find($this->invoice_id);
        if($inde){
            return $inde->customer_email;
        }
        return null;
        
    }
    public function getInvoiceAddress(){
        $inde = Invoice::find($this->invoice_id);
        if($inde){
            return $inde->customer_address;
        }
        return null;
    }
    
    public function getInvoiceUP(){
        $inde = Invoice::find($this->invoice_id);
        if($inde){
            return $inde->total_price;
        }
        return null;
    }
}

?>