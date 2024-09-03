<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewhome(){
        return view('client.home');
    }
    public function viewabout(){
        return view('client.about');
    }
    public function viewfaq(){
        return view('client.faq');
    }
    public function viewcontact(){
        return view('client.contact');
    }
    public function viewlogin(){
        return view('client.login');
    }
    public function viewregister(){
        return view('client.register');
    }
    public function viewcart(){
        return view('client.cart');
    }
    
    public function viewcheckout(){
        return view('client.checkout');
    }
    public function viewdashboard(){
        return view('client.dashboard');
    }
    public function viewprofile(){
        return view('client.profile');
    }
    public function viewbillingdetails(){
        return view('client.billingdetails');
    }
    public function viewloginpassword(){
        return view('client.loginpassword');
    }
    public function vieworder(){
        return view('client.order');
    }
    public function viewproductbycartegory(){
        return view('client.productbycartegory');
    }
    public function viewproductdetails(){
        return view('client.productdetails');
    }
    public function viewsearchproduct(){
        return view('client.searchproduct');
    }
}