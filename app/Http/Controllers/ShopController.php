<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Color;

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
}