<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logoimage;
use App\Models\Favicon;
use App\Models\Information;
use App\Models\Message;
use App\Models\Productsetting;
use App\Models\Onoffsection;
use App\Models\Metasection;
use App\Models\Featuredproductsection;
use App\Models\Latestproductsection;
use App\Models\Popularproductsection;
use App\Models\Newslettersection;
use App\Models\Banner;
use App\Models\PayementSetting;
use App\Models\Size;
use App\Models\Color;
use App\Models\Country;
use App\Models\ShippingCost;
use App\Models\ShippingCostRest;
use App\Models\Toplevelcategory;
use App\Models\Midlevelcategory;
use App\Models\Endlevelcategory;
use App\Models\Product;
class AdminController extends Controller
{
    public function viewadmindashboard()
    {
        return view('admin.dashboard');
    }
    public function viewsettings()
    {
        $logoimage = Logoimage::first();
        $favicon = Favicon::first();
        $information = Information::first();
        $message = Message::first();
        $productsetting = Productsetting::first();
        $onoffsection = Onoffsection::first();
        $metasection = Metasection::first();
        $featuredproduct = Featuredproductsection::first();
        $latestproduct = Latestproductsection::first();
        $popularproduct = Popularproductsection::first();   
        $newslettersection = Newslettersection::first();
        $banner = Banner::first();
        $payementSetting = PayementSetting::first();
        return view('admin.settings', compact(
            "logoimage",
            "favicon",
            "information",
            "message",
            "productsetting",
            "onoffsection",
            "metasection",
            "featuredproduct",
            "latestproduct",
            "popularproduct",
            "newslettersection",
            "banner",
            "payementSetting"
        ));
    }
    public function viewpagesettings()
    {
        return view('admin.pagesettings');
    }
    public function viewfaq()
    {
        return view('admin.faq');
    }
    public function viewordermanagement()
    {
        return view('admin.ordermanagement');
    }
    public function viewproductmanagement()
    {
        return view('admin.productmanagement');
    }
    public function viewmanagesliders(){
        return view('admin.managesliders');
    }
    public function viewservices(){
        return view('admin.services');
    }
    public function viewsocialmedia(){
        return view('admin.socialmedia');
    }
    public function viewsubscriber(){
        return view('admin.subscriber');
    }
    public function viewregistered(){
        return view('admin.registered');
    }
    public function viewsize(){
        $sizes = Size::get();
        return view('admin.size')->with('sizes',$sizes);
    }
    
    public function viewaddsize(){
        return view('admin.addsize');
    }
    public function viewcolor(){
        $colors = Color::get();
        return view('admin.color')->with('colors',$colors);
    }
    public function vieweditcolor(){
        return view('admin.editcolor');
    }
    public function viewaddcolor(){
        return view('admin.addcolor');
    }
    public function viewaddcountry(){
       
        return view('admin.addcountry');
    }
    public function viewaddfaq(){
        return view('admin.addfaq');
    }
    public function viewaddmidlevelcategory(){
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        return view('admin.addmidlevelcategory',compact('toplevelcategories'));
    }
    public function viewaddendlevelcategory(){
    $endlevelcategories = Endlevelcategory::get();
    $toplevelcategories = Toplevelcategory::get();
    $midlevelcategories = Midlevelcategory::get();
        return view('admin.addendlevelcategory',compact('toplevelcategories','midlevelcategories'));
    }
    public function viewendlevelcategory()
{
    $endlevelcategories = Endlevelcategory::get();
    $toplevelcategories = Toplevelcategory::get();
    $midlevelcategories = Midlevelcategory::get();
    return view('admin.endlevelcategory',compact('endlevelcategories','toplevelcategories','midlevelcategories'));
}
public function viewaddtoplevelcategory(){
    return view('admin.addtoplevelcategory');
}
public function viewedittoplevelcategory(){
    return view('admin.edittoplevelcategory');
}
    public function viewaddproduct(){
        $products = Product::get();
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        return view('admin.addproduct',compact('products','toplevelcategories','midlevelcategories','endlevelcategories'));
    }
    public function viewaddservice(){
        return view('admin.addservice');
    }
    public function viewaddslider(){
        return view('admin.addslider');
    }
    public function viewaddsubscriber(){
        return view('admin.addsubscriber');
    }
    public function viewcountry(){
        $countrys = Country::get();
        return view('admin.country')->with('countrys',$countrys);
    }
    public function vieweditcountry(){
        return view('admin.editcountry');
    }
    public function viewendcategory(){
        return view('admin.endcategory');
    }
    public function vieweditendlevelcategory(){
        $endlevelcategories = Endlevelcategory::get();
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        return view('admin.editendlevelcategory',compact('endlevelcategories','toplevelcategories','midlevelcategories'));
    }
    public function vieweditfaq(){
        return view('admin.editfaq');
    }
    public function viewmidlevelcategory(){
        $midlevelcategories = Midlevelcategory::get();
        $toplevelcategories = Toplevelcategory::get();
        return view('admin.midlevelcategory',compact('midlevelcategories','toplevelcategories'));
    }
    public function vieweditmidlevelcategory(){
        $toplevelcategories = Toplevelcategory::get();  
        $midlevelcategories = Midlevelcategory::get();
        return view('admin.editmidlevelcategory',compact('midlevelcategories','toplevelcategories'));
    }
    public function vieweditproduct(){
        return view('admin.editproduct');
    }
    public function vieweditprofile(){
        return view('admin.editprofile');
    }
    public function vieweditservice(){
        return view('admin.editservice');
    }
    public function vieweditslider(){
        return view('admin.editslider');
    }
    public function vieweditshippingcost(){
        return view('admin.editshippingcost');
    }
    public function viewshippingcost(){
        $countrys = Country::get();
        $shippingcosts = ShippingCost::get();
        $shippingcostrest = ShippingCostRest::first();
        return view('admin.shippingcost',compact('countrys','shippingcosts','shippingcostrest'));
    }
    public function viewtoplevelcategory(){
        $toplevelcategories = Toplevelcategory::get();
        return view('admin.toplevelcategory',compact('toplevelcategories'));
    }
    
}