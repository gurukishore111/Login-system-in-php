<?php  

session_start();


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'usernamereg');



$name = $_POST['user'];
$password  =$_POST['password'];


$s = "select * from usertable where name ='$name'";


$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);

if($num == 1 ){


    #$_SESSION['username'] = $user;
    
    echo "Username already taken";


}else{

  $reg= "insert into usertable(name ,password) value('name','pass')";
  mysqli_query($con,$reg);
  echo  "Registration successfull";

}




?>