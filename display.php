<?php include('header.php');
include('config.php');
$id=$_GET['id'];
$sql="select * from Patient where PatientID='$id'";
mysqli_set_charset($conn,'UTF8');
$result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
    $post=mysqli_fetch_assoc($result);
}
?>
<div class="container well span6">
	<div class="row">
        
        
        <div class="col-sm-8">
            <h3> <?php echo $post['FirstName'].' '.$post['LastName']  ?></h3>
            <h6>Email: <?php echo $post['Email'] ?></h6>
            <h6>Số diện thoại: <?php echo $post['PhoneNumber'] ?></h6>
            <h6>Ngày sinh: <?php echo $post['DateOfBirth'] ?></h6>
            <h6>Giới tính: <?php echo $post['Gender'] ?></h6>
            <h6>Cân nặng: <?php echo $post['Weight'] ?> </h6>
            <h6>Chiều cao:<?php echo $post['Height'] ?> </h6>
            <h6>Nhóm máu: <?php echo $post['BloodGroup'] ?></h6>
        </div>
        
        <div class="col-sm-4">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">
                    Thay đổi 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <?php echo '<li><a href="edit.php?id='.$post['PatientID'].'"> <i class="far fa-edit"></i>&nbsp; Sửa</li>'; ?>
                    <?php echo '<li><a href="delete.php?id='.$post['PatientID'].'"> <i class="fas fa-trash-alt"></i>&nbsp; Xóa</li>'; ?>
                </ul>
            </div>
        </div>
</div>
</div>

<?php include('footer.php') ?>
