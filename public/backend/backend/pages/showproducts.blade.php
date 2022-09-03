@extends('backend.mastertemplate.master')
@section('content')


<div class="br-mainpanel">

      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Show Products</h4>
        </div>
      </div>

    <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-10 offset-xl-1">
            <table class="table border border-striped">
                <tr>
                   <th>#SL No</th>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Model</th>
                    <th>Cost Price</th>
                    <th>Sale Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <?php $sl=1; ?>

               @foreach($allproduct as $data)
                     <tr>
                         <td>{{$sl}}</td>
                         <td>{{$data->ptitle}}</td>
                         <td>{{$data->pdes}}</td>
                         <td>{{$data->category}}</td>
                         <td>{{$data->pmodel}}</td>
                         <td>{{$data->cost_price}}</td>
                         <td>{{$data->sale_price}}</td>
                         <td>{{$data->quantity}}</td>
                         <td>
                             <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{$data->id}}"><i class="fa fa-edit"></i></a>
                             <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$data->id}}"><i class="fa fa-trash"></i></a>
                         </td>
                     </tr>
                     <?php $sl++ ?>

    <!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Want to delete this product?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{ Route('deleteproduct',$data->id)}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

 <!-- Edit Modal -->
 <div class="modal fade" id="editModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{ Route('updateproduct',$data->id) }}" method="POST">
            @csrf
                   <div class="form-group">
                     <label for="">Title</label>
                      <input type="text" class="ptitle form-control" name="ptitle" value="{{$data->ptitle}}">
                    </div>

                   <div class="form-group">
                      <label for="">Description</label>
                      <textarea class="pdes form-control" name="pdes" cols="30" rows="4">{{  $data->pdes}}</textarea>
                    </div>

                    <div class="form-group">
                       <label for="">Category</label>
                         <select class="category form-control" name="category">
                          <option value="no">-----Select Category-------</option>
                          <option value="Computer" @if($data->category=='Computer') selected @endif>Computer</option>
                          <option value="Mobile" @if($data->category=='Mobile') selected @endif>Mobile</option>
                          <option value="Camera" @if($data->category=='Camera') selected @endif>Camera</option>
                         </select>      
                    </div>
             

             
                     <div class="form-group">
                       <label for="">Product Model</label>
                        <input type="text" class="pmodel form-control" name="pmodel" value="{{  $data->pmodel}}">
                    </div>

                     <div class="form-group">
                         <label for="">Cost Price</label>
                         <input type="number" class="cost_price form-control" name="cost_price" value="{{  $data->cost_price}}">
                     </div>

                     <div class="form-group">
                         <label for="">Sale Price</label>
                         <input type="number" class="sale_price form-control" name="sale_price" value="{{  $data->sale_price}}">
                     </div>

                     <div class="form-group">
                         <label for="">Quantity</label>
                         <input type="number" class="quantity form-control" name="quantity" value="{{  $data->quantity}}">
                     </div>
      
      <div class="modal-footer">
        <div class="form-group">
        <input type="submit" class="form-control btn btn-success" name="submit" value="Update">
        </div>
       

        <!-- <a href="{{ Route('updateproduct',$data->id)}}" type="button" class="btn btn-danger">Update</a> -->
      </div>
      </form>
    </div>
  </div>
</div>

  @endforeach
            </table>

           
          </div><!-- col-3 -->

   
        </div><!-- row -->
       
      </div><!-- br-pagebody -->
    
</div><!-- br-mainpanel -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    


<!-- <script>

$(document).ready(function(){
  function show(){
            
            $.ajax({
                url:'showproduct',
                type:'GET',
                dataType:'JSON',

                success:function(result){
                    if(result["msg"]=="error"){
                        alert("No Record Found");
                    }
                    else{
                        var data="";
                        $.each(result.product, function(key, item){
                           data +=  '<tr>\
                                        <td>'+item.ptitle+'</td>\
                                        <td>'+item.pdes+'</td>\
                                        <td>'+item.category+'</td>\
                                        <td>'+item.pmodel+'</td>\
                                        <td>'+item.cost_price+'</td>\
                                        <td>'+item.sale_price+'</td>\
                                       <td>'+item.quantity+'</td>\
                                       <td>\
                                       <button value="" data-toggle="modal" data-target="#edit" class="btnedit btn btn-info btn-sm">Ed</button>\
                                       <button value="" data-toggle="modal" data-target="#delete" class="deleteid btn btn-danger btn-sm">Dl</button>\
                                       </td>\
                                    </tr>';

                        });

                        $(".allproduct").html(data);
                       
                    }
                }
            });
        }
  });
</script> -->
@endsection