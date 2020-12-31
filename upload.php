<?php include('header.php');
include('config.php');

?>
<main class="container clearfix pt-3">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="process-upload.php" method="post" enctype="multipart/form-data">

                
                    <div class="form-group">
                        <span class="btn btn-default btn-file">
                            <input type="file" name="file" id="imgInp">
                        </span>
                    </div>

                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
            </form>

        </div>
    </div>
</main>
<?php include('footer.php') ?>