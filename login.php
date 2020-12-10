<html>  
<head>  
    <title>Login</title>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        
        <style>
            body, html {
            height: 100%;
            margin: 0;}
        </style>
</head>  
<body>  
    
    <div class="topnav">
    <?php include 'menu.php';?>
    </div> 
    <br/>
    <div class="limiter"id = "frm"> 
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">

                </div>
        <form name="f1" class="login100-form validate-form action" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            
           <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">   
               <span class="label-input100">Username</span>
               
                <input type = "text" id ="user" name  = "user" />  
                <span class="focus-input100"></span>
           </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Password</span>
                <input class = "input100" type = "password" id ="pass" name  = "pass" />  
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">     
                <input type =  "submit" id = "btn" value = "Login" class ='btn btn-info' />  
            </div>
        </form>  
    </div>  
   
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>  
</html>  