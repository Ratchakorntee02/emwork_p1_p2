<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_testdrive";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>บันทึกผลการทดสอบ</title>
  </head>
  <body>
    <!-- แบบฟอร์มบันทึกผล  -->
    <div class="container mt-4">
        <h2 class="text-center">ฟอร์มบันทึกผลการสอบใบขับขี่</h2>
        <form action="detail.php" method="POST">
            <div class="mb-3">
                <label class="form-label">ชื่อ นามสกุล</label>
                <input type="text" name="d_name" class="form-control" required placeholder="ชื่อ-นามสกุล">
            </div>

            <h3>ผลการทดสอบ</h3>
            <div class="mb-3">
                <label class="form-label">ทดสอบร่างกาย</label>
                <select name="d_physical" class="form-select" required placeholder="ทดสอบร่างกาย">
                    <option value="รอทดสอบ">ยังไม่ทดสอบ</option>
                    <option value="ผ่าน">ผ่าน</option>
                    <option value="ไม่ผ่าน">ไม่ผ่าน</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">คะแนนทดสอบภาคทฤษฎี</label>
                <input type="number" name="d_theory" class="form-control" required min="0" max="100">
            </div>

            <div class="mb-3">
                <label class="form-label">ทดสอบภาคปฏิบัติ</label>
                <select name="d_perform" class="form-select" required placeholder="ทดสอบปฎิบัติ">
                    <option value="รอทดสอบ">ยังไม่ทดสอบ</option>
                    <option value="ผ่าน">ผ่าน</option>
                    <option value="ไม่ผ่าน">ไม่ผ่าน</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">บันทึกผลการทดสอบ</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>