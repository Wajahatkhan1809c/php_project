<?php
session_start();
require_once('connection.php');
if(isset($_POST['psub']))
{
    $name=$_POST['pname'];
    $price=$_POST['pprice'];
    $des=$_POST['pdes'];
    $img_name = $_FILES['pimg']['name'];
    $tmp_name = $_FILES['pimg']['tmp_name'];
    $img_type = $_FILES['pimg']['type'];
    $img_size = $_FILES['pimg']['size'];
    $target = 'Images/'.$img_name;
    move_uploaded_file($tmp_name,$target);
    $sql = mysqli_query($con,"INSERT into product(P_Name,P_Price,P_Description,P_img)values('$name',$price,'$des','$target')");

if($sql)
{
   header('location:product.php');
}
else{
    echo "check code ";
}

}

//--------------- Register code --------------- 
if(isset($_POST['reg']))
{
    $name = $_POST['rname'];
    $lastname = $_POST['rlastname'];
    $email = $_POST['remail'];
    $pass = $_POST['rpass'];
    $repeatpass = $_POST['repeatpass'];
    $encp = md5($pass,$repeatpass);

    $sql1 = mysqli_query($con,"INSERT into registration(F_name,L_name,Email,pass,R_pass) values ('$name','$lastname','$email','$pass','$repeatpass')");

    if($sql1)
    {
       
        header('location:Login.php');
    }
}

//---------- Login Code ----------
if(isset($_POST['log']))
{
    $Lemail = $_POST['Lemail'];
    $Lpass = $_POST['Lpass'];
    $sql2 = mysqli_query($con,"SELECT * from registration where Email='$Lemail' and pass='$Lpass'");

    if(mysqli_fetch_array($sql2))
    {
        $_SESSION['user'] = $Lemail;
        header('location:index.php');
    }
    else{
        echo "check the code ";
    }
}

?>