<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\InvoiceDetail;
use App\Models\Product;
use App\Models\User;
use App\Models\Invoice;
class InvoiceController extends BaseController{
    

    public function invoice(){
        $invoices = Invoice::all();    
        $this->render('home.invoice',['invoices'=>$invoices]);  
        // var_dump($invoices);   
    }

    public function invoiceDetail(){
        $invoice_detail = InvoiceDetail::all();
        $this->render('home.invoice-detail',['invoice_detail'=>$invoice_detail]);  
        // dd($invoice_detail);
    }
    public function chiTietHD($id){
        $id = $_GET['id'];
        $invoices = Invoice::find($id);
        $this->render('home.chi-tiet-hoa-don',['invoices'=>$invoices]);
    }

}

?>