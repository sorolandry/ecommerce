<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Service;
use App\Models\Banner;





class ClientController extends Controller
{
    public function viewhome(){
        $sliders = Slider::get();
        $increment = 0;
        $increment1=0;
        $services = Service::get();
        // $countproduct = Productsetting::first();
        $featuredproducts = Product::get();
        $latestproducts = Product::get();   
        $popularproducts = Product::get();
        return view('client.home', compact('sliders', 'increment', 'increment1', 'services', 'featuredproducts', 'latestproducts', 'popularproducts'));
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
    public function viewproductbytopcategory($tcat_name){
        $products = Product::where("tcat_id", $tcat_name)->get();
        $banner=Banner::first();
        return view('client.viewproductbycartegory', compact('products','banner'));
    }
    public function viewproductbymidcategory($tcat_name, $mcat_name){
        $products = Product::where("tcat_id", $tcat_name)->where("mcat_id", $mcat_name)->get();
        $banner=Banner::first();    
        return view('client.viewproductbycartegory', compact('products','banner'));
    }
    public function viewproductbyendcategory($tcat_name, $mcat_name, $ecat_name){
        $products = Product::where("tcat_id", $tcat_name)->where("mcat_id", $mcat_name)->where("ecat_id", $ecat_name)->get();
        $banner=Banner::first();    
        return view('client.viewproductbycartegory', compact('products','banner'));
    }
    public function viewproductdetails(){
        return view('client.productdetails');
    }
    public function viewsearchproduct(){
        return view('client.searchproduct');
    }
}