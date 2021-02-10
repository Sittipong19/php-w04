<!doctype html>
<html lang="en">
  <head>
    <title>แบบฟอร์มหัวข้อโครงงานรายวิชา</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Phongpanot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h2 class="text-center mt-3" style="border: 10px solid DodgerBlue;">แบบฟอร์มเสนอโปรเจครายวิชา</h2>


      <form action="result.php" class="row g-3 mt-3" method="post">
      <legend>ส่วนที่ 1 ข้อมูลนักศึกษา</legend>
        <div class="col-md-4">
          <input type="text" class="form-control" id="sid" name="sid" placeholder="รหัสนักศึกษา">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="fname" name="fname" placeholder="ชื่อ">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="lname" name="lname" placeholder="นามสกุล">
        </div>

        <div class="form-floating col-md-4">
          <select class="form-select" id="floatingSelect" name="Faculty" aria-label="Floating label select example">
            <option selected>กรุณาเลือกคณะ</option>
            <option value="คณะครุศาสตร์">คณะครุศาสตร์</option>
            <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
            <option value="คณะวิทยาการจัดการ">คณะวิทยาการจัดการ</option>
            <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
            <option value="คณะเทคโนโลยีการเกษตร">คณะเทคโนโลยีการเกษตร</option>
            <option value="คณะเทคโนโลยีอุตสาหกรรม">คณะเทคโนโลยีอุตสาหกรรม</option>
            <option value="คณะนิติศาสตร์">คณะนิติศาสตร์</option>
            <option value="คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ">คณะวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
            <option value="คณะอัญมณีศาสตร์และประยุกต์ศิลป์">คณะอัญมณีศาสตร์และประยุกต์ศิลป์</option>
            <option value="คณะนิเทศศาสตร์">คณะนิเทศศาสตร์</option>
            <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
          </select>
          <label for="floatingSelect">คณะ</label>
        </div>

        <div class="form-floating col-md-4">
          <input class="form-control" list="datalistCourse" id="Course" name="Course" placeholder="Type to search...">
          <datalist id="datalistCourse">
            <option value="วิทยาการคอมพิวเตอร์">
            <option value="เทคโนโลยีสารสนเทศ">
            <option value="เทคโนโลยีเครือข่ายคอมพิวเตอร์">
            <option value="ภูมิสารสนเทศ">
          </datalist>
          <label for="Course">หลักสูตร</label>
        </div>

      <div class="form-floating col-4 ">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="syear" id="syear1" value="1">
          <label class="form-check-label" for="syear1">ปี 1</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="syear" id="syear2" value="2">
          <label class="form-check-label" for="syear2">ปี 2</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="syear" id="syear3" value="3">
          <label class="form-check-label" for="syear3">ปี 3</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="syear" id="syear4" value="4">
          <label class="form-check-label" for="syear4">ปี 4</label>
        </div>
      </div>
      <hr>

      <legend>ส่วนที่ 2 ข้อมูลโครงงาน</legend>
      <div class="form-floating col-md-4">
        <textarea class="form-control" placeholder="Leave a comment here" id="TextareaTH" name='TextareaTH' style="height: 100px"></textarea>
        <label for="TextareaTH">ชื่อโครงงาน (ไทย)</label>
      </div>
      <div class="form-floating col-md-4">
        <textarea class="form-control" placeholder="Leave a comment here" id="TextareaEng" name="TextareaEng" style="height: 100px"></textarea>
        <label for="TextareaEng">ชื่อโครงงาน (อังกฤษ)</label>
      </div>
      <div class="form-floating col-md-4">
        <textarea class="form-control" placeholder="Leave a comment here" id="TextareaObj" name="TextareaObj" style="height: 100px"></textarea>
        <label for="TextareaObj">วัตถุประสงค์ของโครงงาน</label>
      </div>
      <div class="form-floating col-md-6">
        <textarea class="form-control" placeholder="Leave a comment here" id="TextareaScope" name="TextareaScope" style="height: 100px"></textarea>
        <label for="TextareaScope">ขอบเขต</label>
      </div>

        <div class="form-floating col-md-6">
          <select class="form-select" id="floatingSelect" name="category" aria-label="Floating label select example">
            <option selected>กรุณาเลือกประเภทโครงงาน</option>
            <option value="Application">Application</option>
            <option value="GameDevelopment">Game Development</option>
            <option value="WebDevelopment">Web Development</option>
          </select>
          <label for="floatingSelect">ประเภทโครงงาน</label>
        </div>
      <br>

      <h5>เครื่องมือที่ใช้ในการพัฒนา</h5> 
      <div class="form-floating col-6 " value=" " name="project_tools[]">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="HTML" value="HTML" name="project_tools[]">
            <label class="form-check-label" for="HTML">HTML</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="Javascript" value="Javascript" name="project_tools[]">
            <label class="form-check-label" for="Javascript">Javascript</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="PHP" value="PHP" name="project_tools[]">
            <label class="form-check-label" for="PHP">PHP</label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="Angular" value="Angular" name="project_tools[]">
            <label class="form-check-label" for="Angular">Angular</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="React" value="React" name="project_tools[]">
            <label class="form-check-label" for="React">React</label>
          </div>
    </div>

      <div class="form-floating col-6 ">
      <input class="form-control" list="datalistOptions" id="tName" name="tName" placeholder="Type to search...">
          <datalist value="" id="datalistOptions">
            <option value="ผู้ช่วยศาสตราจารย์ทิพวรรณ์ นิยมวงศ์">
            <option value="ผู้ช่วยศาสตราจารย์ปฏิคม ทองจริง">
            <option value="อาจารย์วิสันต์ พูนชัย">
            <option value="ผู้ช่วยศาสตราจารย์บุษยา ประทุมยศ">
            <option value="อาจารย์วันดี โชคช่วยพัฒนากิจ">
            <option value="ผู้ช่วยศาสตราจารย์สาธิต สุวรรณเวช">
            <option value="ผู้ช่วยศาสตราจารย์ทิพย์วรรณ ฟูเฟื่อง">
            <option value="อาจารย์นิทัศน์ นิลฉวี">
            <option value="อาจารย์อนุสรณ์ เจริญนาน">
            <option value="อาจารย์ทวีศักดิ์ สัมมา">
            <option value="ผู้ช่วยศาสตราจารย์ณัฐกาญจน์ พึ่งเกิด">
            <option value="อาจารย์วสุพล เผือกนำผล">
            <option value="ผู้ช่วยศาสตราจารย์วิชาญ ทุมทอง">
            <option value="อาจารย์ขนิษฐา สิทธิเทียมจันทร์">
            <option value="อาจารย์ปรัชญา ใจสุทธิ">
            <option value="ผู้ช่วยศาสตราจารย์ ดร.คัมภีร์ ธีระเวช">
            <option value="อาจารย์ขนิษฐา ยารักษ์">
            <option value="ผู้ช่วยศาสตราจารย์ทบทอง ชั้นเจริญ">
            <option value="อาจารย์ ดร.ศศิกานต์ ไพลกลาง">
            <option value="ผู้ช่วยศาสตราจารย์วิระ ศรีมาลา">
          </datalist>
          <label for="tName">อาจารย์ที่ปรึกษาโครงงาน</label>
        </div>
        <h1><button type="submit" class="btn btn-primary">Submit</button></h1>
        </form>
        <hr>
  </div>
    
    <!-- Phongpanot -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>

