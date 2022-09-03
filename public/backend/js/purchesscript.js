$(document).ready(function(){
  
    $(document).on("keyup",".pmodel",function(){

        var pmodel = $(this).val();
        
        $.ajax({
            url:"/purches/find/"+pmodel,
            type:"GET",
            dataType:"JSON",
            success:function(response){
                console.log(response.product.cost_price);
                $.each(response.product,function(key, item){
                    $(".cost_price").val(item.cost_price);
                    $(".astock").val(item.quantity);
                })
            }
        });
       
    });

    $(document).on("keyup",".quantity",function(){
        var _quantity = $(this).val();
        var _costprice =$(".cost_price").val();
        var _tcost = (_quantity * _costprice);

        $(".tcost").val(_tcost);
    });


    $(document).on("keyup",".dis",function(){
        var _dis = $(this).val();
        var _tcost =$(".tcost").val();
        var _disamount = (_tcost * _dis)/100;

        $(".disamount").val(_disamount);

        var _tamount = (_tcost - _disamount);
        $(".tamount").val(_tamount);

    });


    $(".addpurches").click(function(){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });

        var date = $(".date").val();
        var br_id = $(".br_id").val();
        var company = $(".company").val();
        var invoice= $(".invoice").val();
        var pmodel= $(".pmodel").val();
        var dis = $(".dis").val();
        var disamount = $(".disamount").val();
        var tamount = $(".tamount").val();
        var quantity = $(".quantity").val();
        
        $.ajax({
            url:"/purches/purchesstore",
            type:"POST",
            dataType:"JSON",
            data:{

                date   : date,
                br_id  : br_id,
                company: company,
                invoice: invoice,
                pmodel : pmodel,
                dis    : dis,
                disamount : disamount,
                tamount  : tamount,
                quantity :quantity
            },
            success:function(response){

                if(response.status=="success"){
                    alert("Purches Added Successfully");
                }
            }
        });

    });



});