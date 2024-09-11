@extends('client_layout.master')
@section('title')
View Product By Category
@endsection
@section('content')
 <!-- ********************** start content ********************** -->

    <!-- start banner -->
    <div class="page-banner" style="background-image: url({{asset('storage/banner/'.$banner->photo)}});">
        <div class="inner">
           {{-- <h1>Category: {{$category}}</h1> --}}
        </div>
    </div>
     <!-- end banner -->
  @php
    $increment = 1;
    $increment1 = 1;
    $increment2 = 1;
  @endphp
    <!-- start page content -->
    <div class="page">
        <div class="container">
           <div class="row">
              <div class="col-md-3">
                 <h3>Categories</h3>
                 <div id="left" class="span3">
                    <ul id="menu-group-1" class="nav menu">
                     @foreach ($toplevelcategories as $toplevelcategory)
                       <li class="cat-level-1 deeper parent">
                          <a class="" href="{{url('viewproductbytoplevelcategory',[$toplevelcategory->tcat_name])}}">
                          <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-{{$increment}}" class="sign"><i class="fa fa-plus"></i></span>
                          <span class="lbl">{{$toplevelcategory->tcat_name}}</span>
                          </a>
                          <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-{{$increment}}">
                              @foreach ($midlevelcategories as $midlevelcategory)
                                 <li class="deeper parent">
                                    @if ($midlevelcategory->tcat_id == $toplevelcategory->tcat_name)
                                    <a class="" href="{{url('viewproductbymidlevelcategory',[$midlevelcategory->midcat_name])}}">
                                    <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-{{$increment1}}" class="sign"><i class="fa fa-plus"></i></span>
                                <span class="lbl lbl1">{{$midlevelcategory->midcat_name}}</span> 
                                </a>
                               
                                <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-{{$increment1}}">
                                   <li class="item-111">
                                      <a class="" href="product-category.php?id=1&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Headwear </span>
                                      </a>
                                   </li>
                                   {{-- <li class="item-112">
                                      <a class="" href="product-category.php?id=2&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Sunglasses</span>
                                      </a>
                                   </li>
                                   <li class="item-113">
                                      <a class="" href="product-category.php?id=3&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Watches</span>
                                      </a>
                                   </li>
                                   <li class="item-114">
                                      <a class="" href="product-category.php?id=57&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Belts</span>
                                      </a>
                                   </li>
                                   <li class="item-115">
                                      <a class="" href="product-category.php?id=58&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Multipacks</span>
                                      </a>
                                   </li>
                                   <li class="item-116">
                                      <a class="" href="product-category.php?id=59&type=end-category">
                                      <span class="sign"></span>
                                      <span class="lbl lbl1">Other Accessories</span>
                                      </a>
                                   </li> --}}
                                    </ul>
                                    @endif
                                 </li>
                              @endforeach
                           </ul>
                       </li>
                       @php
                       $increment++;
                       $increment1++;
                       @endphp
                     @endforeach
                    </ul>
                 </div>
              </div>
              <div class="col-md-9">
                 <h3>All Products Under "Men"</h3>
                 <div class="product product-cat">
                    <div class="row">
                     @foreach ($products as $product)
                       <div class="col-md-4 item item-product-cat">
                          <div class="inner">
                             <div class="thumb">
                                    <div class="photo" style="background-image:url({{asset('storage/productimages/'.$product->p_featured_photo)}});"></div>
                                <div class="overlay"></div>
                             </div>
                             <div class="text">
                                <h3><a href="product.php?id=86">{{$product->p_name}}</a></h3>
                                <h4>
                                   ${{$product->p_old_price}} 
                                   <del>
                                   ${{$product->p_current_price}}                                                    </del>
                                </h4>
                                <div class="rating">
                                </div>
                                <p><a href="product.php?id=86"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                             </div>
                          </div>
                       </div>
                     @endforeach
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
    <!-- end page content -->
  
    <!-- ********************** end content ********************** -->
@endsection