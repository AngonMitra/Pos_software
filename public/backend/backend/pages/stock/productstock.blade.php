@extends('backend.mastertemplate.master')
@section('content')

<div class="br-mainpanel">

   <div class="br-pagetitle">
     <i class="icon ion-ios-home-outline"></i>
        
      <div>
          <h4>Product Stocks</h4>
        </div>
    </div>
<div class="br-pagebody">
   <div class="row row-sm">
     <div class="col-sm-6 col-md-10 offset-md-1">
                
           <table class="table" border="1">
                <tr>
                    <th>Branch Name</th>
                    <th>Branch Manager Name</th>
                    <th>Product Name</th>
                    <th>Cost Price</th>
                    <th>Sales Price</th>
                    <th>Quantity</th>
                </tr>
                <?php $count=0; ?>
                @foreach($allstock as $stock)
                <tr>
                    <td>{{ $stock->br->br_name }}</td>
                    <td>{{ $stock->br->br_manager }}</td>
                </tr>
                
                @endforeach 
              
                <tr>
                    <td  colspan="6" class="text-right">
                    <button class="btn btn-info" onclick="window.print()"><i class="fa fa-print"></i></button>
                    </td>
                </tr>
            </table>
                    

                    
      </div>

                    
              

   
     </div><!-- row -->
       
   </div><!-- br-pagebody -->
    
</div><!-- br-mainpanel -->



@endsection