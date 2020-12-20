<?php 
include('config.php');
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$blood=$_POST['blood'];
$sql="update patient set FirstName='$fname',  LastName='$lname',  DateOfBirth ='$date', Gender ='$gender', PhoneNumber = '$phone', Email ='$email', Height ='$height',
Weight='$weight',  BloodGroup ='$blood',  ModifiedOn = CURRENT_DATE where PatientID=$id";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:index.php");
    }
    else{
        $e= mysqli_error($conn);
       header("Location:error.php?error=$e");
    }

?>