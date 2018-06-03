<html>
    <head>
	     <title> login</title>
	     <link href="style1.css" rel="stylesheet" type="text/css">
	</head>
	     <link href="css\bootstrap.min.css" rel="stylesheet">
    <body>
	        <center>
          	    <header> 
		          <h1 style="background:teal;color:white">Quiz Test Login</h1>	 
                </header> 
			</center>	
				
             <br>
           <div class="container">
              <form class="login form-horizontal" action="#" method="POST">
                    <div class="form-group">
                         <label class="col-sm-4"> EMAIL</label>
                         <div class="col-sm-4">
                                <input class="form-control" type="email" name="email" placeholder="EMAIL"> 						 
	                     </div>
				    </div>	

                     <div class="form-group">
                         <label class="col-sm-4">PASSWORD</label>
                         <div class="col-sm-4">
                             <input class="form-control" type="password" name="pass">
                         </div> 
                     </div>
					 
					 <div class="form-group">
                         <label class="col-sm-2"></label>
                         <label class="col-sm-2"></label>
                         <div class="col-sm-4">
                         <input  type="submit" class="form-control"name="Login" value="Login"style="background:teal;color:white;">
                     </div>
					 </div>
                     <br>


                     <div align="center" class="form-group">
                        <label class ="col-sm-2"></label>
                        <label class="col-sm-2"></label>
                        
                        <label class="col-sm-4"><a href="registration.php">Register</a></label>
                     </div>
					 
                     <div align="center" class="form-group">
                        <label class ="col-sm-2"></label>
                        <label class="col-sm-2"></label>
                        
                        <label class="col-sm-4"><a href="index.php">home</a></label>
                     </div>
                </form>
            </div>
        </body>
</html>