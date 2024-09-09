@extends('admin_layout.master')
@section('title')
    Edit Product
@endsection
@section('content')
		<!-- start content -->
        <div class="content-wrapper">
            <section class="content-header">
               <div class="content-header-left">
                  <h1>Edit Product</h1>
               </div>
               <div class="content-header-right">
                  <a href="{{url('admin/productmanagement')}}" class="btn btn-primary btn-sm">View All</a>
               </div>
            </section>
            @if(Session::has("status"))
            <section class="content" style="min-height:auto;margin-bottom: -30px;">
               <div class="row">
                  <div class="col-md-12">
                     <div class="callout callout-success">
                        <p>{{Session::get('status')}}</p>
                     </div>
                  </div>
               </div>
            </section>
            @endif
            <section class="content">
               <div class="row">
                  <div class="col-md-12">
                     <form class="form-horizontal" action="{{url('admin/updateproduct',[])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box box-info">
                           <div class="box-body">
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Top Level Category Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <select name="tcat_id" class="form-control select2 top-cat">

                                       <option value="">Select Top Level Category</option>
                                       @foreach ($toplevelcategories as $toplevelcategory)
                                       <option value="{{$toplevelcategory->id}}" @if ($product->tcat_id == $toplevelcategory->id) selected @endif>{{$toplevelcategory->tcat_name}}</option>
                                       @endforeach
                                       {{-- <option value="4" >Electronics</option>
                                       <option value="5" >Health and Household</option>
                                       <option value="3" >Kids</option>
                                       <option value="1" >Men</option>
                                       <option value="2" selected>Women</option> --}}
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Mid Level Category Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <select name="mcat_id" class="form-control select2 mid-cat">
                                       <option value="">Select Mid Level Category</option>
                                       @foreach ($midlevelcategories as $midlevelcategory)
                                       <option value="{{$midlevelcategory->id}}" @if ($product->mcat_id == $midlevelcategory->id) selected @endif>{{$midlevelcategory->mcat_name}}</option>
                                       @endforeach
                                       {{-- <option value="4" >Accessories</option>
                                       <option value="3" >Beauty Products</option>
                                       <option value="7" selected>Clothing</option>
                                       <option value="6" >Shoes</option> --}}
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">End Level Category Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <select name="ecat_id" class="form-control select2 end-cat">
                                       <option value="">Select End Level Category</option>
                                       @foreach ($endlevelcategories as $endlevelcategory)
                                       <option value="{{$endlevelcategory->id}}" @if ($product->ecat_id == $endlevelcategory->id) selected @endif>{{$endlevelcategory->ecat_name}}</option>
                                       @endforeach
                                       {{-- <option value="15" >Coats & Jackets</option>
                                       <option value="32" selected>Dresses</option>
                                       <option value="14" >Hoodies</option>
                                       <option value="35" >Pants & Leggings</option>
                                       <option value="37" >Plus Size Clothing</option>
                                       <option value="38" >Socks & Hosiery</option>
                                       <option value="36" >Sportswear</option>
                                       <option value="34" >T-Shirts & Vests</option>
                                       <option value="33" >Tops</option> --}}
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Product Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="p_name" class="form-control" value="{{$product->p_name}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Old Price<br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="p_old_price" class="form-control" value="{{$product->p_old_price}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Current Price <span>*</span><br><span style="font-size:10px;font-weight:normal;">(In USD)</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="p_current_price" class="form-control" value="{{$product->p_current_price}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Quantity <span>*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" name="p_qty" class="form-control" value="{{$product->p_qty}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Select Size</label>
                                 <div class="col-sm-4">
                                    <select name="size[]" class="form-control select2" multiple="multiple">
                                       @foreach ($sizes as $size)
                                       <option value="{{$size->id}}" @if (in_array($size->id, $product->size)) selected @endif>{{$size->size_name}}</option>

                                       @endforeach
                                       {{-- <option value="1" >XS</option>
                                       {{-- <option value="2" >S</option>
                                       <option value="3" >M</option>
                                       <option value="4" >L</option>
                                       <option value="5" >XL</option>
                                       <option value="6" >XXL</option>
                                       <option value="7" >3XL</option>
                                       <option value="8" >31</option>
                                       <option value="9" >32</option>
                                       <option value="10" >33</option>
                                       <option value="11" >34</option>
                                       <option value="12" >35</option>
                                       <option value="13" >36</option>
                                       <option value="14" >37</option>
                                       <option value="15" >38</option>
                                       <option value="16" >39</option>
                                       <option value="17" >40</option>
                                       <option value="18" >41</option>
                                       <option value="19" >42</option>
                                       <option value="20" >43</option>
                                       <option value="21" >44</option>
                                       <option value="22" >45</option>
                                       <option value="23" >46</option>
                                       <option value="24" >47</option>
                                       <option value="25" >48</option>
                                       <option value="26" >Free Size</option>
                                       <option value="27" >One Size for All</option>
                                       <option value="28" >10</option>
                                       <option value="29" >12 Months</option>
                                       <option value="30" >2T</option>
                                       <option value="31" >3T</option>
                                       <option value="32" >4T</option>
                                       <option value="33" >5T</option>
                                       <option value="34" >6 Years</option>
                                       <option value="35" >7 Years</option>
                                       <option value="36" >8 Years</option>
                                       <option value="37" >10 Years</option>
                                       <option value="38" >12 Years</option>
                                       <option value="39" >14 Years</option>
                                       <option value="40" >256 GB</option>
                                       <option value="41" >128 GB</option>
                                       <option value="42" selected>14 Plus</option>
                                       <option value="43" selected>16 Plus</option>
                                       <option value="44" selected>18 Plus</option>
                                       <option value="45" selected>20 Plus</option>
                                       <option value="46" selected>22 Plus</option>
                                       <option value="47" selected>24 Plus</option> --}}
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Select Color</label>
                                 <div class="col-sm-4">
                                    <select name="color[]" class="form-control select2" multiple="multiple">
                                       @foreach ($colors as $color)
                                       <option value="{{$color->id}}" @if (in_array($color->id, $product->color)) selected @endif>{{$color->color_name}}</option>
                                       @endforeach
                                       {{-- {{-- <option value="1" >Red</option>
                                       <option value="2" selected>Black</option>
                                       <option value="3" >Blue</option>
                                       <option value="4" >Yellow</option>
                                       <option value="5" >Green</option>
                                       <option value="6" >White</option>
                                       <option value="7" >Orange</option>
                                       <option value="8" >Brown</option>
                                       <option value="9" >Tan</option>
                                       <option value="10" >Pink</option>
                                       <option value="11" >Mixed</option>
                                       <option value="12" >Lightblue</option>
                                       <option value="13" >Violet</option>
                                       <option value="14" >Light Purple</option>
                                       <option value="15" >Salmon</option>
                                       <option value="16" >Gold</option>
                                       <option value="17" >Gray</option>
                                       <option value="18" >Ash</option>
                                       <option value="19" >Maroon</option>
                                       <option value="20" >Silver</option>
                                       <option value="21" >Dark Clay</option>
                                       <option value="22" >Cognac</option>
                                       <option value="23" >Coffee</option>
                                       <option value="24" >Charcoal</option>
                                       <option value="25" >Navy</option>
                                       <option value="26" >Fuchsia</option>
                                       <option value="27" >Olive</option>
                                       <option value="28" >Burgundy</option>
                                       <option value="29" >Midnight Blue</option> --}}

                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Existing Featured Photo</label>
                                 <div class="col-sm-4" style="padding-top:4px;">
                                    <img src="{{asset('uploads/public/productimages/'.$product->p_featured_photo)}}" alt="" style="width:150px;">
                                    <input type="hidden" name="current_photo" value="{{$product->p_featured_photo}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Change Featured Photo </label>
                                 <div class="col-sm-4" style="padding-top:4px;">
                                    <input type="file" name="p_featured_photo" accept="image/*">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Other Photos</label>
                                 <div class="col-sm-4" style="padding-top:4px;">
                                    <table id="ProductTable" style="width:100%;">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <img src="{{asset('uploads/public/productimages/'.$product->p_featured_photo)}}" alt="" style="width:150px;margin-bottom:5px;">
                                             </td>
                                             <td style="width:28px;">
                                                <a onclick="return confirmDelete();" href="product-other-photo-delete.php?id=132&id1=102" class="btn btn-danger btn-xs">X</a>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Description</label>
                                 <div class="col-sm-8">
                                    <textarea name="p_description" class="form-control" cols="30" rows="10" id="editor1">{{$product->p_description}}</textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Short Description</label>
                                 <div class="col-sm-8">
                                    <textarea name="p_short_description" class="form-control" cols="30" rows="10" id="editor1">{{$product->p_short_description}}</textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Features</label>
                                 <div class="col-sm-8">
                                    <textarea name="featured" class="form-control" cols="30" rows="10" id="editor3">{{$product->featured}}</textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Conditions</label>
                                 <div class="col-sm-8">
                                    <textarea name="p_condition" class="form-control" cols="30" rows="10" id="editor4">{{$product->p_condition}}</textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Return Policy</label>
                                 <div class="col-sm-8">
                                    <textarea name="p_return_policy" class="form-control" cols="30" rows="10" id="editor5">{{$product->p_return_policy}}</textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Is Featured?</label>
                                 <div class="col-sm-8">
                                    <select name="p_is_featured" class="form-control" style="width:auto;">
                                       <option value="0" @if ($product->p_is_featured == 0) selected @endif>No</option>
                                       <option value="1" @if ($product->p_is_featured == 1) selected @endif>Yes</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label">Is Active?</label>
                                 <div class="col-sm-8">
                                    <select name="p_is_active" class="form-control" style="width:auto;">
                                       <option value="0" @if ($product->p_is_active == 0) selected @endif>No</option>
                                       <option value="1" @if ($product->p_is_active == 1) selected @endif>Yes</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-3 control-label"></label>
                                 <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
         </div>
		<!-- end Content -->
@endsection