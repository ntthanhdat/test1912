<?php include('header.php') ?>
     
      <div class="container">
          <div class="row">
              <div class="col">
              <table class="table table-striped table-inverse table-responsive">
                <?php include('config.php');
                   
                    $sql="select * from patient";
                        mysqli_set_charset($conn,'UTF8');
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            $post_list=mysqli_fetch_all($result);
                        }
                    ?>
                  <thead class="thead-inverse">
                      <tr>
                          <th>Mã bệnh nhân</th>
                          <th>Tên</th>
                          <th>Họ</th>
                          <th>Ngày sinh</th>
                          <th>giới tính</th>
                          <th>Số điện thoại</th>
                          <th>Email</th>
                          <th>Chiều cao</th>
                          <th>Cân nặng</th>
                          <th>Nhóm máu</th>
                          <th>Ngày lập sổ</th>
                          <th>Ngày cập nhật</th>
                          <th>Sửa</th>
                          <th>Xóa</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php 
                          foreach($post_list as $post){
                              echo '<tr>';
                              echo '<td scope="row">'.$post[0].'</td>';
                              echo '<td scope="row">'.$post[2].'</td>';
                              echo '<td scope="row">'.$post[1].'</td>';
                              echo '<td scope="row">'.$post[3].'</td>';
                              echo '<td scope="row">'.$post[4].'</td>';
                              echo '<td scope="row">'.$post[5].'</td>';
                              echo '<td scope="row">'.$post[6].'</td>';
                              echo '<td scope="row">'.$post[7].'</td>';
                              echo '<td scope="row">'.$post[8].'</td>';
                              echo '<td scope="row">'.$post[9].'</td>';
                              echo '<td scope="row">'.$post[10].'</td>';
                              echo '<td scope="row">'.$post[11].'</td>';
                              echo '<td> <a href="edit.php?id='.$post[0].'"> <i class="far fa-edit"></i></td>';
                              echo '<td> <a href="delete.php?id='.$post[0].'"> <i class="fas fa-trash-alt"></i></td>';
                              echo '</tr>';
                          }
                          ?>
                          
                          </tr>
                      </tbody>
              </table>
              </div>
          </div>
      </div>
<?php include('footer.php') ?>