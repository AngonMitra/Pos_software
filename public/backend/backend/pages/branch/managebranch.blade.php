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
             <div class="col-sm-6 col-xl-8 offset-xl-2">

                 <table>
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



@endsection