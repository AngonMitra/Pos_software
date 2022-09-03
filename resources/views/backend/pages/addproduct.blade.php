@extends('backend.mastertemplate.master')
@section('content')


<div class="br-mainpanel">

      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        
        <div>
          <h4>Add Products</h4>
        </div>
      </div>

    <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-4 offset-xl-2">
                  <div class="form-group">
                     <label for="">Title</label>
                      <input type="text" class="ptitle form-control">
                    </div>

                   <div class="form-group">
                      <label for="">Description</label>
                      <textarea class="pdes form-control" cols="30" rows="4"></textarea>
                    </div>

                    <div class="form-group">
        
                       <label for="">Category</label>
                         <select class="category form-control">
                          <option value="no">-----Select Category-------</option>
                          <option value="Computer">Computer</option>
                          <option value="Mobile">Mobile</option>
                          <option value="Camera">Camera</option>
                         </select>      

                    </div>
             </div>

             
             <div class="col-sm-6 col-xl-4">
                     <div class="form-group">
                       <label for="">Product Model</label>
                        <input type="text" class="pmodel form-control">
                    </div>

                     <div class="form-group">
                         <label for="">Cost Price</label>
                         <input type="number" class="cost_price form-control">
                     </div>

                     <div class="form-group">
                         <label for="">Sale Price</label>
                         <input type="number" class="sale_price form-control">
                     </div>

                     <div class="form-group">
                         <label for="">Quantity</label>
                         <input type="number" class="quantity form-control">
                     </div>

                      <div class="form-group pt-3">
              
                      <button class="addproduct form-control btn btn-success">Save</button>
                      </div>
                </div><!-- col-3 -->

   
        </div><!-- row -->
       
      </div><!-- br-pagebody -->
    
</div><!-- br-mainpanel -->



@endsection



<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

<script>

  $(document).ready(function(){
         
    $(".addproduct").click(function(){
        $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                    });


        var ptitle = $(".ptitle").val();
        var pdes   = $(".pdes").val();
        var category =$(".category").val();
        var pmodel  = $(".pmodel").val();
        var cost_price =$(".cost_price").val();
        var sale_price = $(".sale_price").val();
        var quantity  = $(".quantity").val();

        $.ajax({

            url:'productstore',
            type:"POST",
            dataType: "JSON",
            data:{
                ptitle:ptitle,
                pdes:pdes,
                category:category,
                pmodel:pmodel,
                cost_price:cost_price,
                sale_price:sale_price,
                quantity:quantity

            },
            success:function(result){
                if(result["msg"]=="success"){
                   
                        alert("Product Saved Successfully");
                      
                    }
                    else{
                        alert("Error");
                    }

            }
        });
    });



    

  });

</script> -->