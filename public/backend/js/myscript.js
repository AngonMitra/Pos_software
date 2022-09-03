$(document).ready(function(){
   
// Product Script
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