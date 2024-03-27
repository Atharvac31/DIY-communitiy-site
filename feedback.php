<!-- <?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?> -->

<script>
  function validation()
{
    var firstname=document.getElementById("fn").value;
    var lastname=document.getElementById("ln").value;
    var email=document.getElementById("em").value;
    var feed=document.getElementById("fd").value;
    var phno=document.getElementById("ph").value;

    if(feed===""&& phno===""&&firstname===""&&lastname===""&&email===""){
        alert("fields cannot be empty");
  }
  else{
    var regex = /^[a-zA-Z]+$/;
     if(!regex.test(firstname)){
      alert("firstname should contain only characters");
     }

     var emregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     if(!emregex.test(email)){
      alert("Invalid email")
     }
     var phregex = /^\+?[0-9]{8,15}$/;
     if(!phregex.test(phno)){
        alert("Invalid Phone Number")
     }
     var fedregex = /^[^\W_]+$/;
     
     else{
      alert("Success");
     }
  }

}
</script>
<?php include 'includes/header.php'; ?>
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
    	<p class="login-box-msg">Feedback</p>

    	<form action="feedback2.php" onsubmit="validation()" method="POST">
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
        		<input id="ph"  class="form-control" name="phno" placeholder="Phone Number"  >
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input id="fd" type="textarea" class="form-control" name="feedback" placeholder="Feedback" >

          </div>
        
        
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>

  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>
