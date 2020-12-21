<?php include('header.php');
include('config.php');
?>
<main class="container">

    <div class="row">
        <div class="col-md-12">
            <form action="add-process.php" method="post">
                
                <div class="form-group">
                  <label for="">Tên bệnh nhân</label>
                  <input type="text" name="fname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Họ</label>
                  <input type="text" name="lname" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Ngày sinh </label>
                  <input type="text" name="date" id="" placeholder="yyyy-mm-dd" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Giới tính</label><br>
                  <input type="radio" id="male" name="gender" value="nam">
                    <label for="male">Nam</label><br>
                    <input type="radio" id="female" name="gender" value="nữ">
                    <label for="female">Nữ</label><br>
                </div>
                <div class="form-group">
                  <label for="">Số điện thoại</label><br>
                  <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Email</label><br>
                  <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Chiều cao</label><br>
                  <input type="number" name="height" id="height" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Cân nặng</label><br>
                  <input type="number" name="weight" id="weight" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <!-- Nhom mau -->
                <div class="form-group">
                    <label for=""> Nhóm máu</label>
                    <select name="blood" class="form-control"  id="">
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