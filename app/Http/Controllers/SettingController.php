<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Logoimage;
use App\Models\Favicon;
use App\Models\Information;
use App\Models\Message;
use App\Models\Productsetting;
use App\Models\Onoffsection;
use App\Models\Metasection;
class SettingController extends Controller
{
    public function savelogo(Request $request){
        $this->validate($request,[
            'photo_logo' => 'image|nullable|max:1999|required'
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo_logo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo_logo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo_logo')->storeAs('public/logoimage',$fileNameToStore);

        $logoimage = new Logoimage();
        $logoimage->photo_logo = $fileNameToStore;
        $logoimage->save();
        return back()->with('status','The logo image saved successfully');
    }
    public function updatelogo(Request $request, $id){
        $this->validate($request,[
            'photo_logo' => 'image|nullable|max:1999|required'
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo_logo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo_logo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //delete old image      
        $logoimage = Logoimage::find($id);
        //delete the image
        Storage::delete('public/logoimage/'.$logoimage->photo_logo);
        // 5 : Upload Image
        $path = $request->file('photo_logo')->storeAs('public/logoimage',$fileNameToStore);
        
        $logoimage->photo_logo = $fileNameToStore;
        $logoimage->update();
        return back()->with('status','The logo image updated successfully');
    }
    public function savefavicon(Request $request){
        $this->validate($request,[
            'photo_favicon' => 'image|nullable|max:1999|required'
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo_favicon')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo_favicon')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo_favicon')->storeAs('public/favicon',$fileNameToStore);

        $favicon = new Favicon();
        $favicon->photo_favicon = $fileNameToStore;
        $favicon->save();
        return back()->with('status','The favicon image saved successfully');
    }
    public function updatefavicon(Request $request, $id){
        $this->validate($request,[
            'photo_favicon' => 'image|nullable|max:1999|required'
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo_favicon')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo_favicon')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //delete old image      
        $favicon = Favicon::find($id);
        //delete the image
        Storage::delete('public/favicon/'.$favicon->photo_favicon);
        // 5 : Upload Image
        $path = $request->file('photo_favicon')->storeAs('public/favicon',$fileNameToStore);
        
        $favicon->photo_favicon = $fileNameToStore;
        $favicon->update();
        return back()->with('status','The favicon image updated successfully'); 
    }
    public function saveinformation(Request $request){
        $this->validate($request,[
            'newsletter_on_off' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'contact_address' => 'required',
            'contact_map_iframe' => 'required',
            'footer_copyright' => 'required',
        ]);
        $infomation = new Information();
        $infomation->newsletter_on_off = $request->input('newsletter_on_off');
        $infomation->contact_phone = $request->input('contact_phone');
        $infomation->contact_email = $request->input('contact_email');
        $infomation->contact_address = $request->input('contact_address');
        $infomation->contact_map_iframe = $request->input('contact_map_iframe');
        $infomation->footer_copyright = $request->input('footer_copyright');
        $infomation->save();
        return back()->with('status','The information saved successfully');
    }
    public function updateinformation(Request $request, $id){
        $this->validate($request,[
            'newsletter_on_off' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'contact_address' => 'required',
            'contact_map_iframe' => 'required',
            'footer_copyright' => 'required',   
        ]);
        $information = Information::find($id);
        $information->newsletter_on_off = $request->input('newsletter_on_off');
        $information->contact_phone = $request->input('contact_phone');
        $information->contact_email = $request->input('contact_email');
        $information->contact_address = $request->input('contact_address');
        $information->contact_map_iframe = $request->input('contact_map_iframe');
        $information->footer_copyright = $request->input('footer_copyright');
        $information->update();
        return back()->with('status','The information updated successfully');
    }
    public function savemessage(Request $request){
        $this->validate($request,[
            'receive_email' => 'required',
            'receive_email_subject' => 'required',
            'receive_email_thank_you_message' => 'required',
            'forget_password_message' => 'required',
        ]);
        $message = new Message();
        $message->receive_email = $request->input('receive_email');
        $message->receive_email_subject = $request->input('receive_email_subject');
        $message->receive_email_thank_you_message = $request->input('receive_email_thank_you_message');
        $message->forget_password_message = $request->input('forget_password_message');
        $message->save();
        return back()->with('status','The message saved successfully');
    }
    public function updatemessage(Request $request, $id){
        $this->validate($request,[
            'receive_email' => 'required',
            'receive_email_subject' => 'required',
            'receive_email_thank_you_message' => 'required',
            'forget_password_message' => 'required',
        ]);
        $message = Message::find($id);
        $message->receive_email = $request->input('receive_email');
        $message->receive_email_subject = $request->input('receive_email_subject');
        $message->receive_email_thank_you_message = $request->input('receive_email_thank_you_message');
        $message->forget_password_message = $request->input('forget_password_message');
        $message->update();
        return back()->with('status','The message updated successfully');
    }
    public function saveproductsetting(Request $request)
    {
        $this->validate($request, [
            'total_featured_product_home' => 'required',
            'total_latest_product_home' => 'required',
            'total_popular_product_home' => 'required',
        ]);

        $productsetting = Productsetting::first();

        $productsetting->total_featured_product_home = $request->input('total_featured_product_home');
        $productsetting->total_latest_product_home = $request->input('total_latest_product_home');
        $productsetting->total_popular_product_home = $request->input('total_popular_product_home');
        $productsetting->save();

        return back()->with('status', 'Les paramètres du produit ont été enregistrés avec succès');
    }
    public function updateproductsetting(Request $request, $id){
        $this->validate($request,[
            'total_featured_product_home' => 'required',
            'total_latest_product_home' => 'required',
            'total_popular_product_home' => 'required',
        ]);
        $productsetting = Productsetting::find($id);
        $productsetting->total_featured_product_home = $request->input('total_featured_product_home');
        $productsetting->total_latest_product_home = $request->input('total_latest_product_home');
        $productsetting->total_popular_product_home = $request->input('total_popular_product_home');
        $productsetting->update();
        return back()->with('status','The product settings updated successfully');
    }
    public function saveonoffsection(Request $request){
        $this->validate($request,[
            'home_service_on_off' => 'required',
            'home_welcome_on_off' => 'required',
            'home_featured_product_on_off' => 'required',
            'home_latest_product_on_off' => 'required',
            'home_popular_product_on_off' => 'required',
        ]);
        $onoffsection = new Onoffsection();
        $onoffsection->home_service_on_off = $request->input('home_service_on_off');
        $onoffsection->home_welcome_on_off = $request->input('home_welcome_on_off');
        $onoffsection->home_featured_product_on_off = $request->input('home_featured_product_on_off');
        $onoffsection->home_latest_product_on_off = $request->input('home_latest_product_on_off');
        $onoffsection->home_popular_product_on_off = $request->input('home_popular_product_on_off');
        $onoffsection->save();
        return back()->with('status','The on/off section saved successfully');
    }
    public function updateonoffsection(Request $request, $id){
        $this->validate($request,[
            'home_service_on_off' => 'required',
            'home_welcome_on_off' => 'required',
            'home_featured_product_on_off' => 'required',
            'home_latest_product_on_off' => 'required',
            'home_popular_product_on_off' => 'required',
        ]);
        $onoffsection = Onoffsection::find($id);
        $onoffsection->home_service_on_off = $request->input('home_service_on_off');
        $onoffsection->home_welcome_on_off = $request->input('home_welcome_on_off');
        $onoffsection->home_featured_product_on_off = $request->input('home_featured_product_on_off');
        $onoffsection->home_latest_product_on_off = $request->input('home_latest_product_on_off');
        $onoffsection->home_popular_product_on_off = $request->input('home_popular_product_on_off');
        $onoffsection->update();
        return back()->with('status','The on/off section updated successfully');
    }
    public function savemetasection(Request $request){
        $this->validate($request,[
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);
        $metasection = Metasection::first();
        $metasection->meta_title = $request->input('meta_title');
        $metasection->meta_description = $request->input('meta_description');
        $metasection->meta_keywords = $request->input('meta_keywords');
        $metasection->save();
        return back()->with('status','The meta section saved successfully');
    }
    public function updatemetasection(Request $request, $id){
        $this->validate($request,[
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);
        $metasection = Metasection::find($id);
        $metasection->meta_title = $request->input('meta_title');
        $metasection->meta_description = $request->input('meta_description');
        $metasection->meta_keywords = $request->input('meta_keywords');
        $metasection->update();
        return back()->with('status','The meta section updated successfully');
    }
}