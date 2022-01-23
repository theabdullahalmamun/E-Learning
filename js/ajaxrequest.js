$(document).ready(function(){
    //email exist check
    $("#stuemail").on("keypress blur", function(){
    var stuemail=$("#stuemail").val();
    $.ajax({
        url:'student/addstudent.php',
        method: 'POST',
        data:{
            checkemail:"checkmail",
            stuemali: stuemail,
        },
        success: function(data){
            //console.log(data);
            if(data!=0){
                $("#stmsg2").html('<small style="color:red;"><br> This Email Already Exist');
                ;
                $("signup").attr("disabled",true);   
            }
        },
    });
    });
    });
    

//insert Student

function addStu(){
   var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname=$("#stuname").val();
    var stuemail=$("#stuemail").val();
    var stupass=$("#stupass").val();
    ////checking filed
if(stuname.trim()==""){
        $("#stmsg1").html('<small style="color:red;"><br> Please Enter Name');
        $("stuname").focus();
        return false;
}else if(stuemail.trim()==""){
        $("#stmsg2").html('<small style="color:red;"><br> Please Enter Email');
        $("stuemail").focus();
        return false;
}else if(stuemail.trim() !="" && !reg.test(stuemail))
{  $("#stmsg2").html('<small style="color:red;"><br> Please Enter Valid Email e.g example@mail.com</small>');
 $("stuemail").focus();
return false;

 }else if(stupass.trim()==""){
   
            $("#stmsg3").html('<small style="color:red;"><br> Please Enter Password');
            $("stupass").focus();
            return false;
    }else{
        $.ajax({
            url:'Student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data:{
                stusignup:"stusignup",
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass,
            
            
    
            
            },
            success:function(data){
                console.log(data);
                if(data=="OK"){
                    $("#sMsg").html("<span class='alert alert-success'> Registration Sucessfull</span>");
                  clearStuRegField();  
                }else if(data=="Failed"){
                    $("#sMsg").html("<span class='alert alert-danger'> Unable to register</span>");
                }
            }
    
        })
        //end ajax

    }


   
}

///clear fields
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#stmsg1").html("");
    $("#stmsg2").html("");
    $("#stmsg3").html("");
    }



//ajax call for student login

function checkStuLogin(){
    //console.log("Login Clicked");
    var stuLogEmail= $("#stulogmail").val();
    var stuLogPass= $("#stulogpass").val();
    $.ajax({
        url: "Student/addstudent.php",
        method : "POST",
        data:{ 
            checkLogEmail: "checklogmail",
            stuLogEmail:stuLogEmail,
            stuLogPass: stuLogPass,
        },
        success:function(data){
           console.log(data);
           if(data==0){
               $("#statusLogMsg").html('<small class="alert alert-danger">Your email or Password invalid!</small>')

           }else if(data==1){
            $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
            location.reload();
            // setTimeout(() => {
            //     window.location.href="index.php";
            // }, 1000);

           }
        },
    });
}