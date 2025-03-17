<?php

include "form.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $d_name = $_POST["d_name"];
    $d_physical = $_POST["d_physical"];
    $d_theory = $_POST["d_theory"];
    $d_perform = $_POST["d_perform"];

    // คำนวณเงื่อนไขผ่าน/ไม่ผ่าน/รอพิจารณา
    if ($d_physical == "ผ่าน" && $d_theory >= 80 && $d_perform == "ผ่าน") {
        $d_status = "ผ่านการทดสอบ";
    } elseif ($d_physical == "รอทดสอบ" || $d_perform == "รอทดสอบ") {
        $d_status = "รอพิจารณา";
    } else {
        $d_status = "ไม่ผ่านการทดสอบ";
    }

    // บันทึกข้อมูลลงฐานข้อมูล
    $sql = "INSERT INTO tbl_drive (d_name, d_physical, d_theory, d_perform, d_status)
            VALUES ('$d_name', '$d_physical', '$d_theory', '$d_perform', '$d_status')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('บันทึกผลสำเร็จ!'); window.location.href='form.php';</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาด: " . $conn->error . "');</script>";
    }
}

?>
