<!DOCTYPE html>
<link href="css/bootstrap.min.css"rel="stylesheet">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel = "icon" href = 
    "Images/logo.png"  type = "image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<!-- Navigation bar control panel -->
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tutorial</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" target="_blank" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="bootstrap.html">BootStrap_Example</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="javascript.html">Javascript_Example</a>
                    </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" target="" href="index.php">PHP_Viewer</a>
                    </li>   -->
             </ul>      <form class="d-flex">
                    <input class="form-control me-2 mb-lg-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" bg-primary style="color:white">Search</button>
                </form>
                <!-- <ul class="navbar-nav me-3 mb-6 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="login-signup.html" role="button">Login/SignUp</a>      
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                    <!-- </li>
                </ul>  -->
            </div>
        </div>
    </nav>  
<body>
   <?php
     echo "hello welcome to <b>PHP</b> ";

     $variable_name=100;//variable declaration

     echo '<br> The Value of variable is = '.$variable_name;


    echo '<br> <b>The value of num1 = </b>'. $number1=120;
    echo '<br><b> The value of num2 = </b>'. $number2=10;
     echo '<br><b> So The sum of num1 and num2 = '.($number1+$number2).'</b>';
echo '<br>this is array section';
 echo '<pre>';
$ar=array('Hamid','roll',12);
print_r($ar);
var_dump($ar);
echo '<br>ফর লুপ ব্যবহার করে এরে প্রিন্ট করলাম <br>';
for($i=0 ; $i<count($ar); $i++)
{
    echo $ar[$i].'<br>';
}
echo '<br>foreach লুপ  ব্যবহার করে <br>';
foreach($ar as $value)
{
    echo $value."<br>";
}


echo '<br>This is associative array part given bellow<br>';
$associative_array= array(

    "Hamid"=> 'CSE',
    "Alvi"=>'BBA',
    "Jalil"=>'EEE'
);

foreach($associative_array as $abul=> $babul)
{
    echo ' The<b> Name   is : '.$abul.''.' <b>and Dept  </b> is : '.$babul.'<br>'; 
}
echo 'How to use function given bellow:<br>';
function summation($number1 ,$number2)
{
    return $number1+$number2;
}
echo 'The sum of two numbers = '.summation( 10,  30);

?> 
</body>
</html>

