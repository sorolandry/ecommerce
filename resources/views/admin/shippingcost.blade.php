@extends('admin_layout.master')
@section('title')
Shipping
@endsection
@section('content')
  <!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>Add Shipping Cost</h1>
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
             <form class="form-horizontal" action="{{url('admin/saveshippingcost',[])}}" method="post">
                @csrf
                <div class="box box-info">
                   <div class="box-body">
                      <div class="form-group">
                         <label for="" class="col-sm-2 control-label">Select Country <span>*</span></label>
                         <div class="col-sm-4">
                            <select name="country_id" class="form-control select2" required>
                               <option value="">Select a country</option>
                               @foreach ($countrys as $country)
                               <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                               @endforeach
                               {{-- <option value="1">Afghanistan</option>
                               <option value="2">Albania</option>
                               <option value="3">Algeria</option>
                               <option value="4">American Samoa</option>
                               <option value="5">Andorra</option>
                               <option value="6">Angola</option>
                               <option value="7">Anguilla</option>
                               <option value="8">Antarctica</option>
                               <option value="9">Antigua and Barbuda</option>
                               <option value="10">Argentina</option>
                               <option value="11">Armenia</option>
                               <option value="12">Aruba</option>
                               <option value="14">Austria</option>
                               <option value="15">Azerbaijan</option>
                               <option value="16">Bahamas</option>
                               <option value="17">Bahrain</option>
                               <option value="18">Bangladesh</option>
                               <option value="19">Barbados</option>
                               <option value="20">Belarus</option>
                               <option value="21">Belgium</option>
                               <option value="22">Belize</option>
                               <option value="23">Benin</option>
                               <option value="24">Bermuda</option>
                               <option value="25">Bhutan</option>
                               <option value="26">Bolivia</option>
                               <option value="27">Bosnia and Herzegovina</option>
                               <option value="28">Botswana</option>
                               <option value="29">Bouvet Island</option>
                               <option value="30">Brazil</option>
                               <option value="31">British Indian Ocean Territory</option>
                               <option value="32">Brunei Darussalam</option>
                               <option value="33">Bulgaria</option>
                               <option value="34">Burkina Faso</option>
                               <option value="35">Burundi</option>
                               <option value="36">Cambodia</option>
                               <option value="37">Cameroon</option>
                               <option value="38">Canada</option>
                               <option value="39">Cape Verde</option>
                               <option value="40">Cayman Islands</option>
                               <option value="41">Central African Republic</option>
                               <option value="42">Chad</option>
                               <option value="43">Chile</option>
                               <option value="44">China</option>
                               <option value="45">Christmas Island</option>
                               <option value="46">Cocos (Keeling) Islands</option>
                               <option value="47">Colombia</option>
                               <option value="48">Comoros</option>
                               <option value="49">Congo</option>
                               <option value="50">Cook Islands</option>
                               <option value="51">Costa Rica</option>
                               <option value="52">Croatia (Hrvatska)</option>
                               <option value="53">Cuba</option>
                               <option value="54">Cyprus</option>
                               <option value="55">Czech Republic</option>
                               <option value="56">Denmark</option>
                               <option value="57">Djibouti</option>
                               <option value="58">Dominica</option>
                               <option value="59">Dominican Republic</option>
                               <option value="60">East Timor</option>
                               <option value="61">Ecuador</option>
                               <option value="62">Egypt</option>
                               <option value="63">El Salvador</option>
                               <option value="64">Equatorial Guinea</option>
                               <option value="65">Eritrea</option>
                               <option value="66">Estonia</option>
                               <option value="67">Ethiopia</option>
                               <option value="68">Falkland Islands (Malvinas)</option>
                               <option value="69">Faroe Islands</option>
                               <option value="70">Fiji</option>
                               <option value="71">Finland</option>
                               <option value="72">France</option>
                               <option value="73">France, Metropolitan</option>
                               <option value="74">French Guiana</option>
                               <option value="75">French Polynesia</option>
                               <option value="76">French Southern Territories</option>
                               <option value="77">Gabon</option>
                               <option value="78">Gambia</option>
                               <option value="79">Georgia</option>
                               <option value="80">Germany</option>
                               <option value="81">Ghana</option>
                               <option value="82">Gibraltar</option>
                               <option value="84">Greece</option>
                               <option value="85">Greenland</option>
                               <option value="86">Grenada</option>
                               <option value="87">Guadeloupe</option>
                               <option value="88">Guam</option>
                               <option value="89">Guatemala</option>
                               <option value="83">Guernsey</option>
                               <option value="90">Guinea</option>
                               <option value="91">Guinea-Bissau</option>
                               <option value="92">Guyana</option>
                               <option value="93">Haiti</option>
                               <option value="94">Heard and Mc Donald Islands</option>
                               <option value="95">Honduras</option>
                               <option value="96">Hong Kong</option>
                               <option value="97">Hungary</option>
                               <option value="98">Iceland</option>
                               <option value="99">India</option>
                               <option value="101">Indonesia</option>
                               <option value="102">Iran (Islamic Republic of)</option>
                               <option value="103">Iraq</option>
                               <option value="104">Ireland</option>
                               <option value="100">Isle of Man</option>
                               <option value="105">Israel</option>
                               <option value="106">Italy</option>
                               <option value="107">Ivory Coast</option>
                               <option value="109">Jamaica</option>
                               <option value="110">Japan</option>
                               <option value="108">Jersey</option>
                               <option value="111">Jordan</option>
                               <option value="112">Kazakhstan</option>
                               <option value="113">Kenya</option>
                               <option value="114">Kiribati</option>
                               <option value="115">Korea, Democratic People's Republic of</option>
                               <option value="116">Korea, Republic of</option>
                               <option value="117">Kosovo</option>
                               <option value="118">Kuwait</option>
                               <option value="119">Kyrgyzstan</option>
                               <option value="120">Lao People's Democratic Republic</option>
                               <option value="121">Latvia</option>
                               <option value="122">Lebanon</option>
                               <option value="123">Lesotho</option>
                               <option value="124">Liberia</option>
                               <option value="125">Libyan Arab Jamahiriya</option>
                               <option value="126">Liechtenstein</option>
                               <option value="127">Lithuania</option>
                               <option value="128">Luxembourg</option>
                               <option value="129">Macau</option>
                               <option value="130">Macedonia</option>
                               <option value="131">Madagascar</option>
                               <option value="132">Malawi</option>
                               <option value="133">Malaysia</option>
                               <option value="134">Maldives</option>
                               <option value="135">Mali</option>
                               <option value="136">Malta</option>
                               <option value="137">Marshall Islands</option>
                               <option value="138">Martinique</option>
                               <option value="139">Mauritania</option>
                               <option value="140">Mauritius</option>
                               <option value="141">Mayotte</option>
                               <option value="142">Mexico</option>
                               <option value="143">Micronesia, Federated States of</option>
                               <option value="144">Moldova, Republic of</option>
                               <option value="145">Monaco</option>
                               <option value="146">Mongolia</option>
                               <option value="147">Montenegro</option>
                               <option value="148">Montserrat</option>
                               <option value="149">Morocco</option>
                               <option value="150">Mozambique</option>
                               <option value="151">Myanmar</option>
                               <option value="152">Namibia</option>
                               <option value="153">Nauru</option>
                               <option value="154">Nepal</option>
                               <option value="155">Netherlands</option>
                               <option value="156">Netherlands Antilles</option>
                               <option value="157">New Caledonia</option>
                               <option value="158">New Zealand</option>
                               <option value="159">Nicaragua</option>
                               <option value="160">Niger</option>
                               <option value="161">Nigeria</option>
                               <option value="162">Niue</option>
                               <option value="163">Norfolk Island</option>
                               <option value="164">Northern Mariana Islands</option>
                               <option value="165">Norway</option>
                               <option value="166">Oman</option>
                               <option value="168">Palau</option>
                               <option value="169">Palestine</option>
                               <option value="170">Panama</option>
                               <option value="171">Papua New Guinea</option>
                               <option value="172">Paraguay</option>
                               <option value="173">Peru</option>
                               <option value="174">Philippines</option>
                               <option value="175">Pitcairn</option>
                               <option value="176">Poland</option>
                               <option value="177">Portugal</option>
                               <option value="178">Puerto Rico</option>
                               <option value="179">Qatar</option>
                               <option value="180">Reunion</option>
                               <option value="181">Romania</option>
                               <option value="182">Russian Federation</option>
                               <option value="183">Rwanda</option>
                               <option value="184">Saint Kitts and Nevis</option>
                               <option value="185">Saint Lucia</option>
                               <option value="186">Saint Vincent and the Grenadines</option>
                               <option value="187">Samoa</option>
                               <option value="188">San Marino</option>
                               <option value="189">Sao Tome and Principe</option>
                               <option value="190">Saudi Arabia</option>
                               <option value="191">Senegal</option>
                               <option value="192">Serbia</option>
                               <option value="193">Seychelles</option>
                               <option value="194">Sierra Leone</option>
                               <option value="195">Singapore</option>
                               <option value="196">Slovakia</option>
                               <option value="197">Slovenia</option>
                               <option value="198">Solomon Islands</option>
                               <option value="199">Somalia</option>
                               <option value="200">South Africa</option>
                               <option value="201">South Georgia South Sandwich Islands</option>
                               <option value="202">Spain</option>
                               <option value="203">Sri Lanka</option>
                               <option value="204">St. Helena</option>
                               <option value="205">St. Pierre and Miquelon</option>
                               <option value="206">Sudan</option>
                               <option value="207">Suriname</option>
                               <option value="208">Svalbard and Jan Mayen Islands</option>
                               <option value="209">Swaziland</option>
                               <option value="210">Sweden</option>
                               <option value="211">Switzerland</option>
                               <option value="212">Syrian Arab Republic</option>
                               <option value="213">Taiwan</option>
                               <option value="214">Tajikistan</option>
                               <option value="215">Tanzania, United Republic of</option>
                               <option value="216">Thailand</option>
                               <option value="217">Togo</option>
                               <option value="218">Tokelau</option>
                               <option value="219">Tonga</option>
                               <option value="220">Trinidad and Tobago</option>
                               <option value="221">Tunisia</option>
                               <option value="222">Turkey</option>
                               <option value="223">Turkmenistan</option>
                               <option value="224">Turks and Caicos Islands</option>
                               <option value="225">Tuvalu</option>
                               <option value="226">Uganda</option>
                               <option value="227">Ukraine</option>
                               <option value="229">United Kingdom</option>
                               <option value="231">United States minor outlying islands</option>
                               <option value="232">Uruguay</option>
                               <option value="233">Uzbekistan</option>
                               <option value="234">Vanuatu</option>
                               <option value="235">Vatican City State</option>
                               <option value="236">Venezuela</option>
                               <option value="237">Vietnam</option>
                               <option value="238">Virgin Islands (British)</option>
                               <option value="239">Virgin Islands (U.S.)</option>
                               <option value="240">Wallis and Futuna Islands</option>
                               <option value="241">Western Sahara</option>
                               <option value="242">Yemen</option>
                               <option value="243">Zaire</option>
                               <option value="244">Zambia</option>
                               <option value="245">Zimbabwe</option> --}}
                            </select>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="" class="col-sm-2 control-label">Amount <span>*</span></label>
                         <div class="col-sm-4">
                            <input type="number" class="form-control" name="amount" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="" class="col-sm-2 control-label"></label>
                         <div class="col-sm-6">
                            <button type="submit" class="btn btn-success pull-left" name="form1">Save</button>
                         </div>
                      </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </section>
    <section class="content-header">
       <div class="content-header-left">
          <h1>View Shipping Costs</h1>
       </div>
    </section>
    <section class="content">
       <div class="row">
          <div class="col-md-12">
             <div class="box box-info">
                <div class="box-body table-responsive">
                   <table id="example1" class="table table-bordered table-hover table-striped">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>Country Name</th>
                            <th>Country Amount</th>
                            <th>Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($shippingcosts as $shippingcost)
                         <tr>
                            <td>{{$shippingcost->id}}</td>
                            <td>{{$shippingcost->country_id}}</td>
                            <td>{{$shippingcost->amount}}</td>
                            <td>
                               <a href="{{url('admin/editshippingcost',[$shippingcost->id])}}" class="btn btn-primary btn-xs">Edit</a>
                               {{-- <a href="#" class="btn btn-danger btn-xs" data-href="{{url('admin/deleteshippingcost/'.$shippingcost->id)}}" data-toggle="modal" data-target="#confirm-delete">Delete</a> --}}
                               <form action="{{url('admin/deleteshippingcost',['id'=>$shippingcost->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                               </form>
                            </td>
                         </tr>
                         @endforeach
                         {{-- <tr>
                            <td>2</td>
                            <td>Pakistan</td>
                            <td>10</td>
                            <td>
                               <a href="shipping-cost-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="shipping-cost-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>United Arab Emirates</td>
                            <td>11</td>
                            <td>
                               <a href="shipping-cost-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="shipping-cost-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr>
                         <tr>
                            <td>4</td>
                            <td>United States</td>
                            <td>0</td>
                            <td>
                               <a href="shipping-cost-edit.php?id=4" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="shipping-cost-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                            </td>
                         </tr> --}}
                      </tbody>
                   </table>
                </div>
             </div>
             <h4 style="background: #dd4b39;color:#fff;padding:10px 20px;">NB: If a country does not exist in the above list, the following "Rest of the World" shipping cost will be applied upon that.</h4>
    </section>
    <section class="content-header">
    <div class="content-header-left">
    <h1>Shipping Cost (Rest of the world)</h1>
    </div>
    </section>
    <section class="content">
    <div class="row">
    <div class="col-md-12">
    <form class="form-horizontal" action="{{$shippingcostrest ? url('admin/updaterestamount',[$shippingcostrest->id] ) : url('admin/saverestamount',[]) }}" method="post">
    @csrf
    @if($shippingcostrest)
    @method('PUT')
    @endif
    <div class="box box-info">
    <div class="box-body">
    <div class="form-group">
    <label for="" class="col-sm-2 control-label">Amount <span>*</span></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="amount" value="{{$shippingcostrest ? $shippingcostrest->amount : ''}}" required>
    </div>
    </div>
    <div class="form-group">
    <label for="" class="col-sm-2 control-label"></label>
    <div class="col-sm-6">
    <button type="submit" class="btn btn-success pull-left" name="form2">{{$shippingcostrest ? 'Update' : 'Save'}}</button>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </section>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
    </div>
    <div class="modal-body">
    Are you sure want to delete this item?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    <a class="btn btn-danger btn-ok">Delete</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end content -->
@endsection