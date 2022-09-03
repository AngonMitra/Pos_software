@extends('backend.mastertemplate.master')
@section('content')

<div class="br-mainpanel">

   <div class="br-pagetitle">
     <i class="icon ion-ios-home-outline"></i>
        
      <div>
          <h4>Add Purches</h4>
        </div>
    </div>
<div class="br-pagebody">
   <div class="row row-sm">
     <div class="col-sm-6 col-md-10 offset-md-1">

          <div class="row border border-primary">
               <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="date form-control">
                  </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group">
                   <label for="">Branch</label>
                       <select   class="br_id form-control">
                          <option value="0">--Select Branch--</option>

                          @foreach($allbranch as $branch)
                             <option value="{{ $branch->id }}">{{  $branch->br_name}}</option>
                          @endforeach
                          

                       </select>
                   </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group">
                         <label for="">Company Name</label>
                         <input type="text" class="company form-control">
                    </div>
               </div>

               <div class="col-md-6">
                    <div class="form-group">
                          <label for="">Invoice Number</label>
                         <input type="text" class="invoice form-control">
                    </div>
               </div>

               <div class="col-md-6">
                   <div class="form-group">
                        <label for="">Available Stock</label>
                        <input readonly type="text" class="astock form-control">
                   </div>
               </div>
          </div>


          <div class="row border border-primary mt-5">
              <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Product Model</label>
                      <input type="text" class="pmodel form-control">
                    </div>
               </div>

               <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Cost Price</label>
                      <input readonly type="text" class="cost_price form-control">
                    </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Quantity</label>
                      <input type="text" class="quantity form-control">
                    </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Total Cost</label>
                      <input readonly type="text" class="tcost form-control">
                   </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group">
                     <label for="">Discount %</label>
                      <input type="text" class="dis form-control">
                    </div>
               </div>

               <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Discount Amount</label>
                      <input readonly type="text" class="disamount form-control">
                   </div>
               </div>

               <div class="col-md-6">
                   <div class="form-group">
                     <label for="">Total Amount</label>
                      <input readonly type="text" class="tamount form-control">
                   </div>
               </div>
               
               <div class="col-md-6 offset-md-3">

                  <div class="form-group">
                  <button class="addpurches form-control btn btn-success">Save</button>

                  </div>
              </div>
          </div>

          

                

                    

                    
      </div>

                    
              

   
     </div><!-- row -->
       
   </div><!-- br-pagebody -->
    
</div><!-- br-mainpanel -->



@endsection