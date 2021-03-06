<!doctype html>
<html lang="en">

<head>
  <title>Thông tin bệnh nhân</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link href="https://moh.gov.vn/byt-theme/images/favicon.ico" rel="Shortcut Icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- nav -->
  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #235555;">

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link tran" href="index.php" id="list">Danh sách<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle tran" href="#" id="add" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thêm bệnh nhân</a>
          <div class="dropdown-menu" aria-labelledby="add">
            <a class="dropdown-item tran" id="import-form" href="add.php">Nhập form</a>
            <a class="dropdown-item tran" id="import-file" href="upload.php">Nhập file</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle tran" href="#" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ngôn ngữ</a>
          <div class="dropdown-menu langWrap" aria-labelledby="lang">
            <a href="#" class="dropdown-item lang-a active" language="english" >English</a>
            <a href="#" class="dropdown-item lang-a" language="vietnamese">Vietnamese</a>
            <a href="#" class="dropdown-item lang-a" language="japanese">japanese</a>
          </div>
          
    </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input name="search" class="form-control mr-sm-2　" type="text" placeholder="">
      <button class="btn btn-outline-success my-2 my-sm-0 tran" id="search" type="submit">Search</button>
    </form>
    </div>
    <!-- <div class="form-inline my-2 my-lg-0">
            <a name="" id="" class="btn btn-outline-success my-2 my-sm-0 mr-3" href="../index.php" role="button">Exit</a>
            </div> -->
    </div>

  </nav>
  <!-- <div class="langWrap">
          <a href="#" class="lang-a active" language="english" >eng</a>
          <a href="#" class="lang-a" language="vietnamese">vi</a>
          <a href="#" class="lang-a" language="japanese">japanese</a>
          </div> -->