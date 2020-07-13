<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model{
    protected $table = 'invoices';
    public $timestamps = false;
    protected $fillable = ['customer_name','customer_phone_number','customer_email','customer_address','total_price','payment_method'];

    public function getProductName(){
        $in = Product::find($this->product_id);
        if($in){
            return $in->name;
        }

        return null;
    }

    public function phuongTTT(){
        $x = 1;
        $payment_method = Invoice::where('payment_method','LIKE',"'$x'");
        if ($x == 1) {
            return "Chuyển Khoản";
        }
            return "Tiền mặt";
    }

    public function getInvoiceName(){
        $inv = InvoiceDe::find($this->invoice_id);
        if($inv){
            return $inv->customer_name;
        }
        return null;
        
    }
    public function getInvoicePhone(){
        $inv = Invoice::find($this->invoice_id);
        if($inv){
            return $inv->customer_phone_number;
        }
        return null;
        
    }

    public function getInvoiceEmail(){
        $inv = Invoice::find($this->invoice_id);
        if($inv){
            return $inv->customer_email;
        }
        return null;
        
    }
    public function getInvoiceAddress(){
        $inv = Invoice::find($this->invoice_id);
        if($inv){
            return $inv->customer_address;
        }
        return null;
    }
    
    public function getInvoiceUP(){
        $inv = Invoice::find($this->invoice_id);
        if($inv){
            return $inv->total_price;
        }
        return null;
    }
    

    
}

?>