
        //ajax call for student login

        function checkAdminLogin(){
            console.log("Login Clicked");
            var adminLogEmail= $("#adminlogemail").val();
            var adminLogPass= $("#adminlogpass").val();
            $.ajax({
                url: "Admin/admin.php",
                method : "POST",
                data:{ 
                    checkLogEmail: "checklogmail",
                    adminLogEmail:adminLogEmail,
                    adminLogPass: adminLogPass,
                },
                success:function(data){
                console.log(data);
                if(data==0){
                    $("#statusAdminLogMsg").html('<small class="alert alert-danger">Your email or password invalid!</small>')

                }else if(data==1){
                    $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading..</small>');
                    window.location.href="Admin/adminDashbord.php";
                    // setTimeout(() => {
                    //     window.location.href="index.php";
                    // }, 1000);

                }
                },
            });
        }