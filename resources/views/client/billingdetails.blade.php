@extends('client_layout.master')
@section('title')
Billing and Shipping Unfilled
@endsection
@section('content')
	  <!-- ********************** start content ********************* -->

	  <!-- start banner -->
      <div class="page-banner" style="background-image: url({{asset('frontend/assets/uploads/banner_checkout.jpg')}})">
        <div class="overlay"></div>
        <div class="page-banner-inner">
           <h1>Checkout</h1>
        </div>
     </div>
     <!-- end banner -->

     <!-- start page content -->
     <div class="page">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h3 class="special">Order Details</h3>
                 <div class="cart">
                    <table class="table table-responsive table-hover table-bordered">
                       <tr>
                          <th>#</th>
                          <th>Photo</th>
                          <th>Product Name</th>
                          <th>Size</th>
                          <th>Color</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th class="text-right">Total</th>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                             <img src="{{asset('frontend/assets/uploads/product-featured-86.jpg')}}" alt="">
                          </td>
                          <td>Amazfit GTS 3 Smart Watch for Android iPhone</td>
                          <td>Free Size</td>
                          <td>Black</td>
                          <td>$179</td>
                          <td>1</td>
                          <td class="text-right">
                             $179                            
                          </td>
                       </tr>
                       <tr>
                          <th colspan="7" class="total-text">Sub Total</th>
                          <th class="total-amount">$179</th>
                       </tr>
                       <tr>
                          <td colspan="7" class="total-text">Shipping Cost</td>
                          <td class="total-amount">$100</td>
                       </tr>
                       <tr>
                          <th colspan="7" class="total-text">Total</th>
                          <th class="total-amount">
                             $279                            
                          </th>
                       </tr>
                    </table>
                 </div>
                 <div class="billing-address">
                    <div class="row">
                       <div class="col-md-6">
                          <h3 class="special">Billing Address</h3>
                          <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                             <tr>
                                <td>Full Name</td>
                                <td></p></td>
                             </tr>
                             <tr>
                                <td>Company Name</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Phone Number</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Country</td>
                                <td>
                                </td>
                             </tr>
                             <tr>
                                <td>Address</td>
                                <td>
                                </td>
                             </tr>
                             <tr>
                                <td>City</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>State</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Zip Code</td>
                                <td></td>
                             </tr>
                          </table>
                       </div>
                       <div class="col-md-6">
                          <h3 class="special">Shipping Address</h3>
                          <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                             <tr>
                                <td>Full Name</td>
                                <td></p></td>
                             </tr>
                             <tr>
                                <td>Company Name</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Phone Number</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Country</td>
                                <td>
                                </td>
                             </tr>
                             <tr>
                                <td>Address</td>
                                <td>
                                </td>
                             </tr>
                             <tr>
                                <td>City</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>State</td>
                                <td></td>
                             </tr>
                             <tr>
                                <td>Zip Code</td>
                                <td></td>
                             </tr>
                          </table>
                       </div>
                    </div>
                 </div>
                 <div class="cart-buttons">
                    <ul>
                       <li><a href="cart.php" class="btn btn-primary">Back to Cart</a></li>
                    </ul>
                 </div>
                 <div class="clear"></div>
                 <h3 class="special">Payment Section</h3>
                 <div class="row">
                    <div class="col-md-12">
                       <div style="color:red;font-size:22px;margin-bottom:50px;">
                          You must have to fill up all the billing and shipping information from your dashboard panel in order to checkout the order. Please fill up the information going to <a href="customer-billing-shipping-update.php" style="color:red;text-decoration:underline;">this link</a>.
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end page content -->

     <!-- ********************** end content *********************** -->
@endsection