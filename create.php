<!DOCTYPE html>
<html>
<head>
	<title>Account| Create Account</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<style type="text/css">
	body{
	background-color: #eee;
}
.btn-success {
    color: #fff;
    background-color: #0d2744 !important;
    /*border-color: #dee2e6;*/
}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
  	<div class="container">
  		<a class="navbar-brand" href="#">Canteen</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarsExample03">
	     <ul class="navbar-nav mr-auto">
	                 
	      </ul>
	    <ul class="navbar-nav float-sm-right">

	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Login Account</a>
	      </li>
	       <li class="nav-item active">
	        <a class="nav-link" href="create.php">Create Account</a>
	      </li>
	     
	    </ul>
	  </div>
  	</div>
  </nav>
<p><br></p>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Create Account</h4>
    </div>
<div class="card-body">

        
 <form method="POST" action="#">
 	<div class="form-group row">
    <label for="username" class="col-md-4 col-form-label text-md-right">Student ID / Employee ID</label>

    <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Student ID or Employee ID" name="username" required="" minlength="3" />
    </div>
     </div>
 	 <div class="form-group row">
    <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>

    <div class="col-md-6">
         <input type="text" class="form-control" placeholder="First Name" name="fname" required="" minlength="3" />
    </div>
    </div>

 <div class="form-group row">
    <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>

    <div class="col-md-6">
         <input type="text" class="form-control" placeholder="Last Name" name="lname" required="" minlength="3"/>
    </div>

     </div>


   <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

        <div class="col-md-6">
          <input type="password" class="form-control" name="password" placeholder="Password" required minlength="3">
           
        </div>
    </div>
    <div class="form-group row">
            <label for="con password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
              <input type="password" class="form-control" name="con_password" placeholder="Confirm Password" required="" minlength="3">
               
            </div>
        </div>


 <div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-success btn-lg">
           Create Account
        </button>

   

    </div>
</div>  
    </form>
  </div>
</div>
</div>

<div class="col-md-2"></div>
</div>
</div>

 <p><br></p>
<footer class="footer">
     <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="py-4">
          <p class="text-center">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>    
      </div>
    </div>  
  </div>
</footer>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>
</html>
