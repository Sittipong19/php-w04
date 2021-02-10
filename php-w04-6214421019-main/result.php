<?php
  $sid = $_POST['sid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Faculty = $_POST['Faculty'];
  $Course = $_POST['Course'];
  $TextareaTH = $_POST['TextareaTH'];
  $tName = $_POST['tName'];
  $category = $_POST['category'];
  $TextareaEng = $_POST['TextareaEng'];
  $TextareaObj = $_POST['TextareaObj'];
  $TextareaScope = $_POST['TextareaScope'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>6214421019</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .form{
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
      }
    </style>
    <!-- Phongpanot -->
  </head>
  <body>
      <div class="container">
        <div class="form">
        <h2 class="text-center mt-3">แบบฟอร์มเสนอโปรเจครายวิชา</h2>
        <br>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-4"><b>รหัสนักศึกษา: </b><?php echo $sid ?></li>
          <li class="list-group-item col-4"><b>ชื่อ: </b><?php echo $fname ?></li>
          <li class="list-group-item col-4"><b>นามสกุล: </b><?php echo $lname ?></li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-4"><b>คณะ: </b><?php echo $Faculty ?></li>
          <li class="list-group-item col-4"><b>หลักสูตร: </b><?php echo $Course ?></li>
          <li class="list-group-item col-4"><b>ชั้นปี: </b>
          <?php 
            if(empty($_POST['syear'])){
              echo '';
            } else {
              echo $_POST['syear'];
            }
          ?>
        </li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-6"><b>อาจารย์ที่ปรึกษาโครงงาน: </b><?php echo $tName ?></li>
          <li class="list-group-item col-6"><b>ประเภทโครงงาน: </b><?php echo $category ?></li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-6"><b>ชื่อโครงงาน (ไทย): </b><?php echo $TextareaTH ?></li>
          <li class="list-group-item col-6"><b>ชื่อโครงงาน (อังกฤษ): </b><?php echo $TextareaEng ?></li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-6"><b>วัตถุประสงค์ของโครงงาน: </b><?php echo $TextareaObj ?></li>
          <li class="list-group-item col-6"><b>ขอบเขต: </b><?php echo $TextareaScope ?></li>
        </ul>
        <ul class="list-group list-group-horizontal ">
          <li class="list-group-item col-12"><b>เครื่องมือที่ใช้ในการพัฒนา: </b>
           <?php
               if(empty($_POST['project_tools'])){
                echo "";
              } else {
                foreach($_POST['project_tools'] as $tools)
                echo $tools."&nbsp;";
              }
           ?>
          </li>
        </ul>

        </div>
      </div>  




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <!-- Phongpanot -->
</html>