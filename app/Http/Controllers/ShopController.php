<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Color;
use App\Models\Country;
use App\Models\ShippingCost;
use App\Models\ShippingCostRest;
use App\Models\TopLevelCategory;
use App\Models\Midlevelcategory;
use App\Models\Endlevelcategory;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Faq;
class ShopController extends Controller
{
    //
    public function savesize(Request $request)
    {
        $size = new Size();
        $size->size_name = $request->input('size_name');
        $size->save();
        return back()->with('status','Size added successfully');
    }
    public function vieweditsize($id){
        $size = Size::find($id);
        return view('admin.editsize',compact('size'));
    }
    public function updatesize(Request $request,$id){
        $size = Size::find($id);
        $size->size_name = $request->input('size_name');
        $size->update();
        return back()->with('status','Size updated successfully');
    }
    public function deletesize($id){
        $size = Size::find($id);
        $size->delete();
        return back()->with('status','Size deleted successfully');
    }
    public function savecolor(Request $request)
    {
        $color = new Color();
        $color->color_name = $request->input('color_name');
        $color->save();
        return back()->with('status','Color added successfully');
    }
    public function vieweditcolor($id){
        $color = Color::find($id);
        return view('admin.editcolor',compact('color'));
    }
    public function updatecolor(Request $request,$id){
        $color = Color::find($id);
        $color->color_name = $request->input('color_name');
        $color->update();
        return back()->with('status','Color updated successfully');
    }
    public function deletecolor($id){
        $color = Color::find($id);
        $color->delete();
        return back()->with('status','Color deleted successfully');
    }
    public function savecountry(Request $request)
    {
        $country = new Country();
        $country->country_name = $request->input('country_name');
        $country->save();
        return back()->with('status','Country added successfully');
    }
    public function vieweditcountry($id){
        $country = Country::find($id);
        return view('admin.editcountry',compact('country'));
    }
    public function updatecountry(Request $request,$id){
        $country = Country::find($id);
        $country->country_name = $request->input('country_name');
        $country->update();
        return back()->with('status','Country updated successfully');
    }
    public function deletecountry($id){
        $country = Country::find($id);
        $country->delete();
        return back()->with('status','Country deleted successfully');
    }
    public function saveshippingcost(Request $request)
    {
        $shippingcost = new ShippingCost();
        $shippingcost->country_id = $request->input('country_id');
        $shippingcost->amount = $request->input('amount');
        $shippingcost->save();
        return back()->with('status','Shipping cost added successfully');
    }
    public function vieweditshippingcost($id){
        $shippingcost = ShippingCost::find($id);
        $countrys = Country::get();
        return view('admin.editshippingcost',compact('shippingcost','countrys'));
    }
    public function updateshippingcost(Request $request,$id){
        $shippingcost = ShippingCost::find($id);
        $shippingcost->country_id = $request->input('country_id');
        $shippingcost->amount = $request->input('amount');
        $shippingcost->update();
        return back()->with('status','Shipping cost updated successfully');
    }
    public function deleteshippingcost($id){
        $shippingcost = ShippingCost::find($id);
        $shippingcost->delete();
        return back()->with('status','Shipping cost deleted successfully');
    }
    public function saverestamount(Request $request)
    {
        $shippingcostrest = new ShippingCostRest();
        $shippingcostrest->amount = $request->input('amount');
        $shippingcostrest->save();
        return back()->with('status','Shipping cost rest added successfully');
    }
    public function vieweditrestamount($id){
        $shippingcostrest = ShippingCostRest::find($id);
        return view('admin.editrestamount',compact('shippingcostrest'));
    }
    public function updaterestamount(Request $request,$id){
        $shippingcostrest = ShippingCostRest::find($id);
        $shippingcostrest->amount = $request->input('amount');
        $shippingcostrest->update();
        return back()->with('status','Shipping cost rest updated successfully');
    }
    public function savetoplevelcategory(Request $request)
    {
        $this->validate($request,[
            'tcat_name' => 'required',
            'show_on_menu' => 'required',
        ]);
        $toplevelcategory = new TopLevelCategory();
        $toplevelcategory->tcat_name = $request->input('tcat_name');
        $toplevelcategory->show_on_menu = $request->input('show_on_menu');
        $toplevelcategory->save();
        return back()->with('status','Top level category added successfully');
    }
    public function viewedittoplevelcategory($id){
        $toplevelcategory = TopLevelCategory::find($id);
        return view('admin.edittoplevelcategory',compact('toplevelcategory'));
    }
    public function updatetoplevelcategory(Request $request,$id){
        $toplevelcategory = TopLevelCategory::find($id);
        $toplevelcategory->tcat_name = $request->input('tcat_name');
        $toplevelcategory->show_on_menu = $request->input('show_on_menu');
        $toplevelcategory->update();
        return back()->with('status','Top level category updated successfully');
    }
    public function deletetoplevelcategory($id){
        $toplevelcategory = TopLevelCategory::find($id);
        $toplevelcategory->delete();
        return back()->with('status','Top level category deleted successfully');
    }
    public function savemidlevelcategory(Request $request)
    {
        $midlevelcategories = new Midlevelcategory();
        $midlevelcategories->tcat_id = $request->input('tcat_id');
        $midlevelcategories->mcat_name = $request->input('mcat_name');
        $midlevelcategories->save();
        return back()->with('status','Mid level category added successfully');
    }
    public function vieweditmidlevelcategory($id){
        $toplevelcategories = Toplevelcategory::get();
        $midlevelcategories = Midlevelcategory::find($id);
        return view('admin.editmidlevelcategory',compact('midlevelcategories','toplevelcategories'));
    }
    public function updatemidlevelcategory(Request $request,$id){
        $midlevelcategories = Midlevelcategory::find($id);
        $midlevelcategories ->tcat_id = $request->input('tcat_id');
        $midlevelcategories->mcat_name = $request->input('mcat_name');
        $midlevelcategories->update();
        return back()->with('status','Mid level category updated successfully');
    }
    public function deletemidlevelcategory($id){
        $midlevelcategories = Midlevelcategory::find($id);
        $midlevelcategories->delete();
        return back()->with('status','Mid level category deleted successfully');
    }
    public function saveendlevelcategory(Request $request)
    {
        $endlevelcategories = new Endlevelcategory();
        $endlevelcategories->mcat_id = $request->input('mcat_id');
        $endlevelcategories->tcat_id = $request->input('tcat_id');
        $endlevelcategories->ecat_name = $request->input('ecat_name');
        $endlevelcategories->save();
        return back()->with('status','End level category added successfully');
    }
    public function vieweditendlevelcategory($id){
        $midlevelcategories = Midlevelcategory::get();
        $toplevelcategories = Toplevelcategory::get();
        $endlevelcategories = Endlevelcategory::find($id);
        return view('admin.editendlevelcategory',compact('endlevelcategories','midlevelcategories','toplevelcategories'));
    }
    public function updateendlevelcategory(Request $request,$id){
        $endlevelcategories = Endlevelcategory::find($id);
        $endlevelcategories->mcat_id = $request->input('mcat_id');
        $endlevelcategories->tcat_id = $request->input('tcat_id');
        $endlevelcategories->ecat_name = $request->input('ecat_name');
        $endlevelcategories->update();
        return back()->with('status','End level category updated successfully');
    }
    public function deleteendlevelcategory($id){
        $endlevelcategories = Endlevelcategory::find($id);
        $endlevelcategories->delete();
        return back()->with('status','End level category deleted successfully');
    }
    public function saveproduct(Request $request)
    {
        $this->validate($request,[
            'tcat_id' => 'required|string',
            'mcat_id' => 'required|string',
            'ecat_id' => 'required|string',
            'p_name' => 'required|string',
            'p_old_price' => 'required|integer',
            // 'p_price' => 'required|integer',
            'p_current_price' => 'required|integer',
            'size' => 'required|array',
            'size.*' => 'required|string',
            'color' => 'required|array',
            'color.*' => 'required|string',
            'p_qty' => 'required|integer',
            'p_featured_photo' => 'required|image|nullable|max:2048',
            'photo' => 'required|array',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_description' => 'required|string',
            'p_short_description' => 'required|string',
            'featured' => 'required|string',
            'p_condition' => 'required|string',
            'p_return_policy' => 'required|string',
            'p_is_featured' => 'required|string',
            'p_is_active' => 'required|string',
        ]);
        $imagedata="";
        $sizes=$request->input('size');
        $colors=$request->input('color');
        $photos=$request->file('photo');
        $sizedata="";
        $colordata="";
        $photodata="";
        
//getting sizes
foreach ($sizes as $size){
    $sizedata=$sizedata.$size."*";
    
}

//getting sizes
foreach ($colors as $color){
    $colordata=$colordata.$color."*";
    
}

if ($request->hasFile('photo')) {
    $photos = $request->file('photo');
    $imagedata = "";

    foreach ($photos as $photo) {
        if ($photo->isValid()) {
            $fileNameWithExt = $photo->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileExt = $photo->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
            $imagedata .= $fileNameToStore . "*";
            $path = $photo->storeAs('public/productimages', $fileNameToStore);
        }
    }
}

// 1 : File name with extension
$fileNameWithExt = $request->file('p_featured_photo')->getClientOriginalName();
// print_r($fileNameWithExt);
// 2 : File name without extension
$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
// print_r($fileName);

// 3 : Get just extension
$extension = $request->file('p_featured_photo')->getClientOriginalExtension();
// 4 : File name to store
$fileNameToStore = $fileName.'_'.time().'.'.$extension;
// 5 : Upload Image
$path = $request->file('p_featured_photo')->storeAs('public/productimages',$fileNameToStore);


        
        $product = new Product();
        $product->tcat_id = $request->input('tcat_id');
        $product->mcat_id = $request->input('mcat_id');
        $product->ecat_id = $request->input('ecat_id');
        $product->p_name = $request->input('p_name');
        $product->p_old_price = $request->input('p_old_price');
        // $product->p_price = $request->input('p_price');
        $product->p_current_price = $request->input('p_current_price');
        $product->size = $sizedata;
        $product->color = $colordata;
        $product->p_qty = $request->input('p_qty');
        $product->p_featured_photo = $fileNameToStore;
        $product->photo = $imagedata;
        $product->p_description = $request->input('p_description');
        $product->p_short_description = $request->input('p_short_description');
        $product->featured = $request->input('featured');
        $product->p_condition = $request->input('p_condition');
        $product->p_return_policy = $request->input('p_return_policy');
        $product->p_is_featured = $request->input('p_is_featured');
        $product->p_is_active = $request->input('p_is_active');
        $product->save();
        return back()->with('status','Product added successfully');
    }
    public function vieweditproduct($id){
        $product = Product::find($id);
        return view('admin.editproduct',compact('product'));
    }
    public function updateproduct(Request $request,$id){
        $this->validate($request,[  
            'tcat_id' => 'required|string',
            'mcat_id' => 'required|string',
            'ecat_id' => 'required|string',
            'p_name' => 'required|string',
            'p_old_price' => 'required|integer',
            // 'p_price' => 'required|integer',
            'p_current_price' => 'required|integer',
            'size' => 'required|array',
            'size.*' => 'required|string',
            'color' => 'required|array',
            'color.*' => 'required|string',
            'p_qty' => 'required|integer',
            'p_featured_photo' => 'required|image|nullable|max:2048',
            'photo' => 'required|array',
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'p_description' => 'required|string',
            'p_short_description' => 'required|string',
            'featured' => 'required|string',
            'p_condition' => 'required|string',
            'p_return_policy' => 'required|string',
            'p_is_featured' => 'required|string',
            'p_is_active' => 'required|string',
        ]);
        $imagedata="";
        $sizes=$request->input('size');
        $colors=$request->input('color');
        $photos=$request->file('photo');
        $sizedata="";
        $colordata="";
        $photodata="";
        
//getting sizes 
foreach ($sizes as $size){
    $sizedata=$sizedata.$size."*";
    
}

//getting sizes
foreach ($colors as $color){
    $colordata=$colordata.$color."*";
    
}

if ($request->hasFile('photo')) {
    $photos = $request->file('photo');
    $imagedata = "";

    foreach ($photos as $photo) {
        if ($photo->isValid()) {
            $fileNameWithExt = $photo->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileExt = $photo->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
            $imagedata .= $fileNameToStore . "*";
            $path = $photo->storeAs('public/productimages', $fileNameToStore);
        }
    }
}

// 1 : File name with extension
$fileNameWithExt = $request->file('p_featured_photo')->getClientOriginalName();
// print_r($fileNameWithExt);
// 2 : File name without extension
$fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
// print_r($fileName);

// 3 : Get just extension
$extension = $request->file('p_featured_photo')->getClientOriginalExtension();
// 4 : File name to store
$fileNameToStore = $fileName.'_'.time().'.'.$extension;
// 5 : Upload Image
$path = $request->file('p_featured_photo')->storeAs('public/productimages',$fileNameToStore);

        $product = Product::find($id);
        $product->tcat_id = $request->input('tcat_id');
        $product->mcat_id = $request->input('mcat_id');
        $product->ecat_id = $request->input('ecat_id');
        $product->p_name = $request->input('p_name');
        $product->p_old_price = $request->input('p_old_price');
        $product->p_price = $request->input('p_price');
        $product->p_current_price = $request->input('p_current_price');
        $product->size = $sizedata;
        $product->color = $colordata;
        $product->p_qty = $request->input('p_qty');
        $product->p_featured_photo = $fileNameToStore;
        $product->photo = $imagedata;
        $product->p_description = $request->input('p_description');
        $product->p_short_description = $request->input('p_short_description');
        $product->featured = $request->input('featured');
        $product->p_condition = $request->input('p_condition');
        $product->p_return_policy = $request->input('p_return_policy');
        $product->p_is_featured = $request->input('p_is_featured');
        $product->p_is_active = $request->input('p_is_active');
        $product->update();
        return back()->with('status','Product updated successfully');
    }
    public function deleteproduct($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('status','Product deleted successfully');
    }
    public function saveslider(Request $request)
    {
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo')->storeAs('public/sliderimages',$fileNameToStore);
        
        $slider = new Slider();
        $slider->photo = $fileNameToStore;
        $slider->heading = $request->input('heading');
        $slider->content = $request->input('content');
        $slider->button_text = $request->input('button_text');
        $slider->button_link = $request->input('button_link');
        $slider->position = $request->input('position');
        $slider->save();
        return back()->with('status','Slider added successfully');
    }
    public function vieweditslider($id){
        $slider = Slider::find($id);
        return view('admin.editslider',compact('slider'));
    }
    public function updateslider(Request $request,$id){
        $this->validate($request,[
            'photo' => 'required|image|nullable|max:2048',
            'heading' => 'required|string',
            'content' => 'required|string',
            'button_text' => 'required|string',
            'button_link' => 'required|string',
            'position' => 'required|integer',
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo')->storeAs('public/sliderimages',$fileNameToStore);
        
        $slider = Slider::find($id);
        $slider->photo = $fileNameToStore;
        $slider->heading = $request->input('heading');
        $slider->content = $request->input('content');
        $slider->button_text = $request->input('button_text');
        $slider->button_link = $request->input('button_link');
        $slider->position = $request->input('position');
        $slider->update();
        return back()->with('status','Slider updated successfully');
    }
    public function deleteslider($id){
        $slider = Slider::find($id);
        $slider->delete();
        return back()->with('status','Slider deleted successfully');
    }
    public function saveservice(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string',
            'content' => 'required|string',
            'photo' => 'required|image|nullable|max:2048',
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo')->storeAs('public/serviceimages',$fileNameToStore);
        
        $service = new Service();
        $service->title = $request->input('title');
        $service->content = $request->input('content');
        $service->photo = $fileNameToStore;
        $service->save();
        return back()->with('status','Service added successfully');
    }   
    public function vieweditservice($id){
        $service = Service::find($id);
        return view('admin.editservice',compact('service'));
    }
    public function updateservice(Request $request,$id){
        $this->validate($request,[
            'title' => 'required|string',
            'content' => 'required|string',
            'photo' => 'required|image|nullable|max:2048',
        ]);
        // 1 : File name with extension
        $fileNameWithExt = $request->file('photo')->getClientOriginalName();
        // print_r($fileNameWithExt);
        // 2 : File name without extension
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        // print_r($fileName);

        // 3 : Get just extension
        $extension = $request->file('photo')->getClientOriginalExtension();
        // 4 : File name to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // 5 : Upload Image
        $path = $request->file('photo')->storeAs('public/serviceimages',$fileNameToStore);
        
        $service = Service::find($id);
        $service->title = $request->input('title');
        $service->content = $request->input('content');
        $service->photo = $fileNameToStore;
        $service->update();
        return back()->with('status','Service updated successfully');
    }
    public function deleteservice($id){
        $service = Service::find($id);
        $service->delete();
        return back()->with('status','Service deleted successfully');
    }
    public function savefaq(Request $request)
    {
        $this->validate($request,[
            'faq_title' => 'required|string',
            'faq_content' => 'required|string',
        ]);
        $faq = new Faq();
                $faq->faq_title = $request->input('faq_title');
        $faq->faq_content = $request->input('faq_content');
        $faq->save();
        return back()->with('status','FAQ added successfully');
    }
    public function vieweditfaq($id){
        $faq = Faq::find($id);
        return view('admin.editfaq',compact('faq'));
    }
    public function updatefaq(Request $request,$id){
        $this->validate($request,[
            'faq_title' => 'required|string',
            'faq_content' => 'required|string',
        ]);
        $faq = Faq::find($id);
        $faq->faq_title = $request->input('faq_title');
        $faq->faq_content = $request->input('faq_content');
        $faq->update();
        return back()->with('status','FAQ updated successfully');
    }
    public function deletefaq($id){
        $faq = Faq::find($id);
        $faq->delete();
        return back()->with('status','FAQ deleted successfully');
    }
    
}