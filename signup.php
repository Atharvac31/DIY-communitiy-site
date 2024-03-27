<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>

<script>
  function validation()
{
    var firstname=document.getElementById("fn").value;
    var lastname=document.getElementById("ln").value;
    var email=document.getElementById("em").value;
    var pass=document.getElementById("pass").value;
    var repass=document.getElementById("rePass").value;
    if(email===""&& pass===""&&firstname===""&&lastname===""){
        alert("fields cannot be empty");
  }
  else{
    var regex = /^[a-zA-Z]+$/;
     if(!regex.test(firstname)){
      alert("firstname should contain only characters");
     }
    var passregex = /^.{8}$/;

      if(!passregex.test(pass)){
      alert("Invalid password")
     }
     var emregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     if(!emregex.test(email)){
      alert("Invalid email")
     }
     if(pass!==repass){
      alert("Password doesnt match")
     }
     
  }

}
</script>
<?php include 'includes/header.php'; ?>
<div class="register-box">
  	<?php
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
    ?>
<body class="hold-transition register-page">
<div class="register-box">
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
  	<div class="register-box-body">
    	<p class="login-box-msg">Register a new membership</p>

    	<form action="register.php" onsubmit="validation()" method="POST">
          <div class="form-group has-feedback">
            <input id="fn" type="text" class="form-control" name="firstname" placeholder="Firstname"  >
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input id="ln" type="text" class="form-control" name="lastname" placeholder="Lastname"  >
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input id="em"  class="form-control" name="email" placeholder="Email"  >
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input id="pass" type="password" class="form-control" name="password" placeholder="Password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input id="rePass" type="password" class="form-control" name="repassword" placeholder="Retype password" >
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <!-- CAPTCHA removed -->
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php">I already have a membership</a><br>
      <a href="index.php"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>
