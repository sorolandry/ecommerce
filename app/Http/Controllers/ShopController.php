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
    
}