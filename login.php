<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<style>
	.{
	
          font-family: "Lato", sans-serif;
          font-size: 20px;
        
	}
</style>

<script>

// function validation()
//   {
//     var email=document.getElementById("em").value;
//     var pass=document.getElementById("pass").value;
//     if(email==""&& pass="")
//       {
//         alert("fields cannot be empty");
//       }
// }
function validation()
{
    var email=document.getElementById("em").value;
    var pass=document.getElementById("pass").value;
    if(email===""&& pass===""){
        alert("fields cannot be empty");
  }
  
    // var regex = /^.{8}$/;
    //    if(!regex.test(pass)){
    //   alert("password less than 8 characters");
    //  }
    //  var pregex = /^(?=.*[@#$%^&+=])(?=.*[a-zA-Z0-9]).{8,}$/;
    //  if(!pregex.test(pass)){
    //   alert("Password doesnt contain special symbol");
    //  }
    //  var cregex = /^[A-Z][a-zA-Z\s]*$/;
    //  if(!cregex.test(pass)){
    //   alert("fisrt char is not capital");
    //  }

      var emregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     if(!emregex.test(email)){
      alert("Invalid email")
     }
     
     
  }


</script>

<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<!-- <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?> -->
  	<div class="login-box-body">
    	<p class="login-box-msg">Sign in to start your session</p>

    	<form action="verify.php" method="POST" onsubmit="validation()">
      		<div class="form-group has-feedback">
        		<input id="em"  class="form-control" name="email" placeholder="Email" >
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input id="pass" class="form-control" name="password" type="password" placeholder="Password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="password_forgot.php">I forgot my password</a><br>
      <a href="signup.php" class="text-center">Register a new membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<
</body>
</html>