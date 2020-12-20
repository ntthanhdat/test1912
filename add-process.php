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

$sql="insert into patient(FirstName, LastName, DateOfBirth, Gender, PhoneNumber, Email, Height, Weight, BloodGroup, CreateOn, ModifiedOn)
VALUES ('$fname','$lname','$date','$gender', '$phone', '$email', '$height','$weight','$blood', CURRENT_DATE, CURRENT_DATE)";
mysqli_set_charset($conn,'UTF8');
 if(mysqli_query($conn,$sql)){
     header("Location:index.php");
 }
 else{
     $e= mysqli_error($conn);
    header("Location:error.php?error=$e");
 }
?>