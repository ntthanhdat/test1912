<?php include('header.php');
include('config.php');

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM patient";
$result = mysqli_query($conn, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

?>
<div class="container">
<p id="demo">a</p>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-inverse table-responsive">
                <?php 

                $sql = "select * from patient LIMIT $offset, $no_of_records_per_page";
                mysqli_set_charset($conn, 'UTF8');
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $post_list = mysqli_fetch_all($result);
                }
                mysqli_close($conn);
                ?>
                <thead class="thead-inverse">
                    <tr>
                        <th class="tran" id="ID">Mã bệnh nhân</th>
                        <th class="tran" id="lname">Tên</th>
                        <th class="tran" id="fname">Họ</th>
                        <th class="tran" id="dateofbirth">Ngày sinh</th>
                        <th class="tran" id="gender">giới tính</th>
                        <th class="tran" id="phone">Số điện thoại</th>
                        <th class="tran" id="email">Email</th>
                        <th class="tran" id="height">Chiều cao</th>
                        <th class="tran" id="weight">Cân nặng</th>
                        <th class="tran" id="blood">Nhóm máu</th>
                        <th class="tran" id="creat">Ngày lập sổ</th>
                        <th class="tran" id="mod">Ngày cập nhật</th>
                        <th class="tran" id="view">Xem chi tiết</th>
                        <th class="tran" id="edit">Sửa</th>
                        <th class="tran" id="delete">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($post_list as $post) {
                        echo '<tr>';
                        echo '<td scope="row">' . $post[0] . '</td>';
                        echo '<td scope="row">' . $post[2] . '</td>';
                        echo '<td scope="row">' . $post[1] . '</td>';
                        echo '<td scope="row">' . $post[3] . '</td>';
                        echo '<td scope="row">' . $post[4] . '</td>';
                        echo '<td scope="row">' . $post[5] . '</td>';
                        echo '<td scope="row">' . $post[6] . '</td>';
                        echo '<td scope="row">' . $post[7] . '</td>';
                        echo '<td scope="row">' . $post[8] . '</td>';
                        echo '<td scope="row">' . $post[9] . '</td>';
                        echo '<td scope="row">' . $post[10] . '</td>';
                        echo '<td scope="row">' . $post[11] . '</td>';
                        echo '<td> <a href="display.php?id=' . $post[0] . '"> <i class="fas fa-file-alt"></i></td>';
                        echo '<td> <a href="edit.php?id=' . $post[0] . '"> <i class="far fa-edit"></i></td>';
                        echo '<td> <a href="delete.php?id=' . $post[0] . '"> <i class="fas fa-trash-alt"></i></td>';
                        echo '</tr>';
                    }
                    ?>

                    </tr>
                </tbody>
            </table>
            <div class="">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link"  href="?pageno=1">Đầu</a></li>
                    <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                        <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Trước</a>
                    </li>
                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                        <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Sau</a>
                    </li>
                    <li class="page-item"><a class="page-link"" href="?pageno=<?php echo $total_pages; ?>">Cuối</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>