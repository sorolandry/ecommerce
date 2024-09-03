@extends('admin_layout.master')
@section('title')
Edit Size
@endsection
@section('content')
		<!-- start content -->
        <div class="content-wrapper">
            <section class="content-header">
               <div class="content-header-left">
                  <h1>Edit Size</h1>
               </div>
               <div class="content-header-right">
                  <a href="size.php" class="btn btn-primary btn-sm">View All</a>
               </div>
            </section>
            <section class="content">
               <div class="row">
                  <div class="col-md-12">
                     <form class="form-horizontal" action="" method="post">
                        <div class="box box-info">
                           <div class="box-body">
                              <div class="form-group">
                                 <label for="" class="col-sm-2 control-label">Size Name <span>*</span></label>
                                 <div class="col-sm-4">
                                    <input type="text" class="form-control" name="size_name" value="XS">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="" class="col-sm-2 control-label"></label>
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