<?php
include('config.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood = $_POST['blood'];
$error = array();
if (empty(trim($fname))) {
    $error[] = "Chưa nhập Tên!";
}
if (empty(trim($lname))) {
    $error[] = "Chưa nhập họ!";
}
if (empty(trim($date))) {
    $error[] = "Chưa nhập ngày sinh!";
}
if (empty(trim($gender))) {
    $error[] = "Chưa nhập giới tính!";
}
if (empty(trim($phone))) {
    $error[] = "Chưa nhập số điện thoại!";
}
if (empty(trim($email))) {
    $error[] = "Chưa nhập địa chỉ email!";
}
$sql="select * from patient where Email='$email' or PhoneNumber='$phone' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $error[] = "Địa chỉ email hoặc SĐT đã có!";
}
if (empty($error)) {
    $sql = "insert into patient(FirstName, LastName, DateOfBirth, Gender, PhoneNumber, Email, Height, Weight, BloodGroup, CreateOn, ModifiedOn)
    VALUES ('$fname','$lname','$date','$gender', '$phone', '$email', '$height','$weight','$blood', CURRENT_DATE, CURRENT_DATE)";
    mysqli_set_charset($conn, 'UTF8');

    if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
    } else {
        $e = mysqli_error($conn);
        header("Location:error.php?error=$e");
    }
} else { // Report the errors.
    $errorstring = "";
    foreach ($error as $msg) { // Print each error.
        $errorstring .= " - $msg<br>";
    }
    header("location: error.php?error=$errorstring");
}
