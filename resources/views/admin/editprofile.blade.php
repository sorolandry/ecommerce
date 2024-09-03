@extends('admin_layout.master')
@section('title')
    Edit Profile
@endsection
@section('content')
				<!-- start content -->
                <div class="content-wrapper">
                    <section class="content-header">
                       <div class="content-header-left">
                          <h1>Edit Profile</h1>
                       </div>
                    </section>
                    <section class="content">
                       <div class="row">
                          <div class="col-md-12">
                             <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                   <li class="active"><a href="#tab_1" data-toggle="tab">Update Information</a></li>
                                   <li><a href="#tab_2" data-toggle="tab">Update Photo</a></li>
                                   <li><a href="#tab_3" data-toggle="tab">Update Password</a></li>
                                </ul>
                                <div class="tab-content">
                                   <div class="tab-pane active" id="tab_1">
                                      <form class="form-horizontal" action="" method="post">
                                         <div class="box box-info">
                                            <div class="box-body">
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Name <span>*</span></label>
                                                  <div class="col-sm-4">
                                                     <input type="text" class="form-control" name="full_name" value="Administrator">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                                  <div class="col-sm-6" style="padding-top:6px;">
                                                     <img src="{{asset('backend/uploads/user-1.png')}}" class="existing-photo" width="140">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Email Address <span>*</span></label>
                                                  <div class="col-sm-4">
                                                     <input type="email" class="form-control" name="email" value="admin@mail.com">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Phone </label>
                                                  <div class="col-sm-4">
                                                     <input type="text" class="form-control" name="phone" value="7777777777">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Role <span>*</span></label>
                                                  <div class="col-sm-4" style="padding-top:7px;">
                                                     Super Admin										
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label"></label>
                                                  <div class="col-sm-6">
                                                     <button type="submit" class="btn btn-success pull-left" name="form1">Update Information</button>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                   <div class="tab-pane" id="tab_2">
                                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                         <div class="box box-info">
                                            <div class="box-body">
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">New Photo</label>
                                                  <div class="col-sm-6" style="padding-top:6px;">
                                                     <input type="file" name="photo">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label"></label>
                                                  <div class="col-sm-6">
                                                     <button type="submit" class="btn btn-success pull-left" name="form2">Update Photo</button>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                   <div class="tab-pane" id="tab_3">
                                      <form class="form-horizontal" action="" method="post">
                                         <div class="box box-info">
                                            <div class="box-body">
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Password </label>
                                                  <div class="col-sm-4">
                                                     <input type="password" class="form-control" name="password">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label">Retype Password </label>
                                                  <div class="col-sm-4">
                                                     <input type="password" class="form-control" name="re_password">
                                                  </div>
                                               </div>
                                               <div class="form-group">
                                                  <label for="" class="col-sm-2 control-label"></label>
                                                  <div class="col-sm-6">
                                                     <button type="submit" class="btn btn-success pull-left" name="form3">Update Password</button>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </section>
                 </div>
                <!-- end content -->
@endsection