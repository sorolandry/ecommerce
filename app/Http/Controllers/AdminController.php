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
        $metasection = Metasection::first(); // Ajoutez cette ligne
        $featuredproduct = Featuredproductsection::first();
        $latestproduct = Latestproductsection::first();
        $popularproduct = Popularproductsection::first();   
        $newslettersection = Newslettersection::first();
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
            "newslettersection"
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
        return view('admin.size');
    }
    public function vieweditsize(){
        return view('admin.editsize');
    }
    public function viewaddsize(){
        return view('admin.addsize');
    }
    public function viewcolor(){
        return view('admin.color');
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
        return view('admin.addmidlevelcategory');
    }
    public function viewaddendlevelcategory(){
        return view('admin.addendlevelcategory');
    }
    public function viewendlevelcategory()
{
    return view('admin.endlevelcategory');
}
    public function viewaddproduct(){
        return view('admin.addproduct');
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
        return view('admin.country');
    }
    public function vieweditcountry(){
        return view('admin.editcountry');
    }
    public function viewendcategory(){
        return view('admin.endcategory');
    }
    public function vieweditendlevelcategory(){
        return view('admin.editendlevelcategory');
    }
    public function vieweditfaq(){
        return view('admin.editfaq');
    }
    public function viewmidlevelcategory(){
        return view('admin.midlevelcategory');
    }
    public function vieweditmidlevelcategory(){
        return view('admin.editmidlevelcategory');
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
        return view('admin.shippingcost');
    }
    public function viewtoplevelcategory(){
        return view('admin.toplevelcategory');
    }
    
}