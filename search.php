<?php
include('header.php');
if (isset($_GET['search'])) {
    $name = $_GET['search'];
    include('config.php');

?>
    <div class="container clearfix pt-1">
        <div class="row">
            <div class="col">

                <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 20;
                $offset = ($pageno - 1) * $no_of_records_per_page;

                $total_pages_sql = "SELECT COUNT(*) from patient where FirstName like '%$name%' or LastName like '%$name%';";
                $result = mysqli_query($conn, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "select * from patient where FirstName like '%$name%' or LastName like '%$name%' LIMIT $offset, $no_of_records_per_page; ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_all($result);
                    mysqli_close($conn);

                ?>
                    <table class="table table-striped table-inverse table-responsive">
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
                                <th>Xem chi tiết</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($row as $post) {
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
                            <li class="page-item"><a class="page-link" href="?pageno=1">Đầu</a></li>
                            <li class="page-item <?php if ($pageno <= 1) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno <= 1) {
                                                                echo '#';
                                                            } else {
                                                                echo "?pageno=" . ($pageno - 1);
                                                            } ?>">Trước</a>
                            </li>
                            <li class="page-item <?php if ($pageno >= $total_pages) {
                                                        echo 'disabled';
                                                    } ?>">
                                <a class="page-link" href="<?php if ($pageno >= $total_pages) {
                                                                echo '#';
                                                            } else {
                                                                echo "?pageno=" . ($pageno + 1);
                                                            } ?>">Sau</a>
                            </li>
                            <li class="page-item"><a class="page-link"" href=" ?pageno=<?php echo $total_pages; ?>">Cuối</a></li>
                        </ul>
                    </div>
                <?php } else {

                    echo "<h3>Không tìm thấy dữ liệu</h3>";
                }

                ?>
            </div>
        </div>
    </div>

<?php include('footer.php');
} ?>