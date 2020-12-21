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
<main class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="edit-process.php" method="post">
            <div class="form-group">
                  <label for="">Mã bệnh nhân</label>
                  <input type="text" name="id" id="" class="form-control" value="<?php echo $post['PatientID'] ?>">
                  
                </div>
                <div class="form-group">
                  <label for="">Tên bệnh nhân</label>
                  <input type="text" name="fname" id="" class="form-control" value="<?php echo $post['FirstName'] ?>">
                  
                </div>
                <div class="form-group">
                  <label for="">Họ</label>
                  <input type="text" name="lname" id="" class="form-control" value="<?php echo $post['LastName'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Ngày sinh </label>
                  <input type="text" name="date" id="" class="form-control" placeholder="yyyy-mm-dd" value="<?php echo $post['DateOfBirth'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Giới tính</label><br>
                  <input type="text" name="gender" id="" class="form-control" value="<?php echo $post['Gender'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Số điện thoại</label><br>
                  <input type="text" name="phone" id="" class="form-control" value="<?php echo $post['PhoneNumber'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Email</label><br>
                  <input type="email" class="form-control" name="email" id="" value="<?php echo $post['Email'] ?>">
                </div>
                <div class="form-group">
                  <label for="">Chiều cao</label><br>
                  <input type="number" name="height" id="height" class="form-control" value="<?php echo $post['Height'] ?>"">
                </div>
                <div class="form-group">
                  <label for="">Cân nặng</label><br>
                  <input type="number" name="weight" id="weight" class="form-control" value="<?php echo $post['Weight'] ?>"">
                </div>
                <!-- Nhom mau -->
                <div class="form-group">
                    <label for=""> Nhóm máu</label>
                    <select name="blood" id="" class="form-control"  value="<?php echo $post['BloodGroup'] ?>">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                    </select>
                </div>
                
            <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
            
        </div>
    </div>
</main>
<?php include('footer.php') ?>