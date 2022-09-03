$(document).ready(function(){
    show();
    $(".add-branch").click(function(){

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });

       var br_name    = $(".br_name").val();
       var br_manager = $(".br_manager").val();
       var phone      = $(".phone").val();
       var address    = $(".address").val();
       var email      = $(".email").val();

       $.ajax({
          
          url:'/branch/branchstore',
          type: "POST",
          dataType: "JSON",
          data:{

              br_name:br_name,
              br_manager:br_manager,
              phone:phone,
              address:address,
              email:email

           },
            success:function(response){
                  if(response.status=="failed"){
                    $(".error_br_name").text(response.errors.br_name);
                    $(".error_br_manager").text(response.errors.br_manager);
                    $(".error_phone").text(response.errors.phone);
                    $(".error_address").text(response.errors.address);
                    $(".error_email").text(response.errors.email);
                  }
                  else{
                      alert("Branch Saved Successfully");
                      show();
                      $(".error_br_name").text("");
                      $(".error_br_manager").text("");
                      $(".error_phone").text("");
                      $(".error_address").text("");
                      $(".error_email").text("");


                      $(".br_name").val("");
                      $(".br_manager").val("");
                      $(".phone").val("");
                      $(".address").val("");
                      $(".email").val("");
                  }
             }
       });
    });


    function show(){
        $.ajax({
            url:'/branch/managebranch',
            type:'GET',
            dataType:'JSON',

            success:function(result){
                    var sl=1;
                    var data="";
                    $.each(result.allbranch, function(key, item){
                       data +=  '<tr>\
                                    <td>'+sl+'</td>\
                                    <td>'+item.br_name+'</td>\
                                    <td>'+item.br_manager+'</td>\
                                    <td>'+item.phone+'</td>\
                                    <td>'+item.address+'</td>\
                                    <td>'+item.email+'</td>\
                                   <td>\
                                   <button value="'+item.id+'" data-toggle="modal" data-target="#edit" class="btnedit btn btn-info btn-sm"><i class="fa fa-edit"></i></button>\
                                   <button value="'+item.id+'" data-toggle="modal" data-target="#deleteModal" class="btndelete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>\
                                   </td>\
                                </tr>';
                                sl++;
                    });
                        
                    $(".allbranch").html(data);
                   
                
            }
        });
    }

   $(document).on("click",".btndelete", function(){
         var id = $(this).val();
         $(".delete").val(id);
   });

   $(document).on("click",".delete", function(){
         var id = $(this).val();

         $.ajax({
             url:"/branch/branchdelete/"+id,
             type:"get",
             dataType:"JSON",
             success:function(response){
                if(response.status=="success"){
                    show();
                    $("#deleteModal").modal("hide");
                    $(".msg").show().text("Branch Deleted");
                    $(".msg").fadeOut(10000);
                  
                    
                }
                else{
                    alert("Branch Not Delete");
                }
             }
         });
   });

});