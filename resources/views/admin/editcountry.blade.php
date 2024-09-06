@extends('admin_layout.master')
@section('title')
Edit Country
@endsection
@section('content')

		 <!-- start content -->
         <div class="content-wrapper">
            <section class="content-header">
               <div class="content-header-left">
                  <h1>Edit Country</h1>
               </div>
               <div class="content-header-right">
                  <a href="{{url('admin/country')}}" class="btn btn-primary btn-sm">View All</a>
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
                     <form class="form-horizontal" action="{{url('admin/updatecountry',['id'=>$country->id])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="box box-info">
                           <div class="box-body">
                              <div class="form-group">
                                 <label for="" class="col-sm-2 control-label">Country Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" class="form-control" name="country_name" value="{{$country->country_name}}">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-2 control-label"></label>
                                 <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
         </div>
		 <!-- end content -->
@endsection