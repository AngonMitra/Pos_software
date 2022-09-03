@extends('backend.mastertemplate.master')
@section('content')


<div class="br-mainpanel">

      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        
        <div>
          <h4>Add Branch</h4>
        </div>
      </div> 
 
    <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-md-3">
                  <div class="form-group">
                     <label for="">Branch Name</label>
                     <span class="text-danger error_br_name"></span>
                      <input type="text" class="br_name form-control">
                    </div>

                    <div class="form-group">
                     <label for="">Branch Manager</label>
                     <span class="text-danger error_br_manager"></span>
                      <input type="text" class="br_manager form-control">
                    </div>

                    <div class="form-group">
                     <label for="">Phone Number</label>
                     <span class="text-danger error_phone"></span>
                      <input type="text" class="phone form-control">
                    </div>

                   <div class="form-group">
                      <label for="">Address</label>
                      <span class="text-danger error_address"></span>
                      <input type="text" class="address form-control">
                    </div>

                    <div class="form-group">
                     <label for="">Email</label>
                     <span class="text-danger error_email"></span>
                      <input type="text" class="email form-control">
                    </div>

                    <div class="form-group pt-3">
              
                    <button class="add-branch form-control btn btn-success">Save</button>
                    </div>
             </div>

             <div class="col-sm-6 col-md-9">
             <span class="alert alert-success msg" style="display:none"></span>

                  <table class="table">
                    <tr>
                        <th>#SL No</th>
                        <th>Branch Name</th>
                        <th>Branch Manager</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <tbody class="allbranch">
                       
                    
                    </tbody>
                 </table>
        </div>

        </div><!-- row -->

       
       
      </div><!-- br-pagebody -->
    
</div><!-- br-mainpanel -->


   <!-- Delete Modal -->
   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are sure want to delete this product
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button value="" type="button" class="delete btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>



@endsection