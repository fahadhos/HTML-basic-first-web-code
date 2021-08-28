<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel = "icon" href =  "Images/logo.png"  type = "image/x-icon">
   
</head>
<body>
  
  <form class ="row"class="form-horizontal" action="" method="post">
<fieldset>
<div id="header">
      <h2 class="">Register</h2>
    </div>
    
  <table class="table" style="width: 40%;">
    <tr>
        <td>Username: </td>
        <td><input required type="text" name="username"id="username"placeholder="Enter Username">
</td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input required type="email" name="email"id="email"type="email"placeholder="Enter Your Email">
</td>
    </tr>

    <tr>   <td>Gender</td>
                    <td><select id="gender" name="gender" required type="">
                            <option disabled value="" selected>Select Your Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            
                        </select></td>
                </tr>
    <tr>
        <td>Password: </td>
        <td><input required type="password"name="password"id="password"placeholder="Enter Your Password">
</td>
</tr>
<tr>
        <td>Confirm Password: </td>
        <td><input required type="password"name="confirmpassword"id="confirmpassword"placeholder="Confirm Your Password">
</td>
</tr>
</tr>
    <tr>
     <td> <button  class="btn btn-success">Register</button>   
</td>    <!-- <td><input name="submit"type="submit" value="Register"> -->
</td>
</tr>
</table>
<?php
  echo '<pre>';
  $username=$_POST['username'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
 
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
?>
 <table>
    <tr>
        <td>Username: </td>
        <td> <?php echo $username?></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td> <?php echo $email?></td>
   
    </tr>
    <tr><td>Gender: </td>
<td> <?php echo $gender?></td>
    
     </tr>
    <tr>
        <td>Password: </td>
        <td> <?php echo $password?></td>
   
</tr>
<tr>
        <td>Confirm Password: </td>
        <td> <?php echo $confirmpassword?></td>
   
</tr>
</fieldset>
</form>
 
</body>
</html>