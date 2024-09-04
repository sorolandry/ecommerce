<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//Client Routes
Route::get('/', [ClientController::class, 'viewhome']);

Route::get('/about', [ClientController::class, 'viewabout']);
Route::get('/faq', [ClientController::class, 'viewfaq']);
Route::get('/contact', [ClientController::class, 'viewcontact']);
Route::get('/login', [ClientController::class, 'viewlogin']);
Route::get('/register', [ClientController::class, 'viewregister']);
Route::get('/cart', [ClientController::class, 'viewcart']);
Route::get('/checkout', [ClientController::class, 'viewcheckout']);
Route::get('/dashboard', [ClientController::class, 'viewdashboard']);
Route::get('/profile', [ClientController::class, 'viewprofile']);
Route::get('/billingdetails', [ClientController::class, 'viewbillingdetails']);
Route::get('/loginpassword', [ClientController::class, 'viewloginpassword']);
Route::get('/order', [ClientController::class, 'vieworder']);
Route::get('/productbycartegory', [ClientController::class, 'viewproductbycartegory']);
Route::get('/productdetails', [ClientController::class, 'viewproductdetails']); 
Route::get('/searchproduct', [ClientController::class, 'viewsearchproduct']); 

//Admin Routes
Route::get('admin', [AdminController::class, 'viewadmindashboard']); 
Route::get('admin/settings', [AdminController::class, 'viewsettings']); 
Route::get('admin/pagesettings', [AdminController::class, 'viewpagesettings']); 
Route::get('admin/faq', [AdminController::class, 'viewfaq']); 
Route::get('admin/ordermanagement', [AdminController::class, 'viewordermanagement']); 
Route::get('admin/productmanagement', [AdminController::class, 'viewproductmanagement']); 
Route::get('admin/managesliders', [AdminController::class, 'viewmanagesliders']); 
Route::get('admin/services', [AdminController::class, 'viewservices']); 
Route::get('admin/socialmedia', [AdminController::class, 'viewsocialmedia']); 
Route::get('admin/subscriber', [AdminController::class, 'viewsubscriber']); 
Route::get('admin/registered', [AdminController::class, 'viewregistered']); 
Route::get('admin/size', [AdminController::class, 'viewsize']); 
Route::get('admin/editsize', [AdminController::class, 'vieweditsize']); 
Route::get('admin/addsize', [AdminController::class, 'viewaddsize']); 
Route::get('admin/color', [AdminController::class, 'viewcolor']); 
Route::get('admin/editcolor', [AdminController::class, 'vieweditcolor']); 
Route::get('admin/addcolor', [AdminController::class, 'viewaddcolor']); 
Route::get('admin/addcountry', [AdminController::class, 'viewaddcountry']); 
Route::get('admin/addfaq', [AdminController::class, 'viewaddfaq']); 
Route::get('admin/addmidlevelcategory', [AdminController::class, 'viewaddmidlevelcategory']); 
Route::get('admin/addendlevelcategory', [AdminController::class, 'viewaddendlevelcategory']); 
Route::get('admin/addproduct', [AdminController::class, 'viewaddproduct']); 
Route::get('admin/addservice', [AdminController::class, 'viewaddservice']); 
Route::get('admin/addslider', [AdminController::class, 'viewaddslider']); 
Route::get('admin/addsubscriber', [AdminController::class, 'viewaddsubscriber']); 
Route::get('admin/country', [AdminController::class, 'viewcountry']); 
Route::get('admin/editcountry', [AdminController::class, 'vieweditcountry']); 
Route::get('admin/end-category', [AdminController::class, 'viewendcategory']); 
Route::get('admin/editendlevelcategory', [AdminController::class, 'vieweditendlevelcategory']); 
Route::get('admin/editfaq', [AdminController::class, 'vieweditfaq']); 
Route::get('admin/editmidlevelcategory', [AdminController::class, 'vieweditmidlevelcategory']); 
Route::get('admin/editproduct', [AdminController::class, 'vieweditproduct']); 
Route::get('admin/editprofile', [AdminController::class, 'vieweditprofile']); 
Route::get('admin/editservice', [AdminController::class, 'vieweditservice']); 
Route::get('admin/editslider', [AdminController::class, 'vieweditslider']); 
Route::get('admin/editshippingcost', [AdminController::class, 'vieweditshippingcost']); 
Route::get('admin/shippingcost', [AdminController::class, 'viewshippingcost']); 
Route::get('admin/toplevelcategory', [AdminController::class, 'viewtoplevelcategory']); 
Route::get('admin/midlevelcategory', [AdminController::class, 'viewmidlevelcategory']); 
Route::get('admin/endlevelcategory', [AdminController::class, 'viewendlevelcategory']); 

//Settings Routes
Route::post('admin/savelogo', [SettingController::class, 'savelogo']);
Route::put('admin/updatelogo/{id}', [SettingController::class, 'updatelogo']);
Route::post('admin/savefavicon', [SettingController::class, 'savefavicon']);
Route::put('admin/updatefavicon/{id}', [SettingController::class, 'updatefavicon']);
Route::post('admin/saveinformation', [SettingController::class, 'saveinformation']);
Route::put('admin/updateinformation/{id}', [SettingController::class, 'updateinformation']);
Route::post('admin/savemessage', [SettingController::class, 'savemessage']);
Route::put('admin/updatemessage/{id}', [SettingController::class, 'updatemessage']);
Route::post('admin/saveproductsetting', [SettingController::class, 'saveproductsetting']);
Route::put('admin/updateproductsetting/{id}', [SettingController::class, 'updateproductsetting']);
Route::post('admin/saveonoffsection', [SettingController::class, 'saveonoffsection']);
Route::put('admin/updateonoffsection/{id}', [SettingController::class, 'updateonoffsection']);
Route::post('admin/savemetasection', [SettingController::class, 'savemetasection']);
Route::put('admin/updatemetasection/{id}', [SettingController::class, 'updatemetasection']);