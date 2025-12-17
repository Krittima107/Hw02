<?php
function calculateBMI($weight, $height_cm)
{
    $height_m = $height_cm / 100;
    if ($height_m > 0) {
        return $weight / ($height_m * $height_m);
    } else {
        return 0;
    }
}

$fullname = $_POST['fullname'];
$birthdate = $_POST['birthdate'];
$weight = $_POST['weight'];
$height = $_POST['height'];

$bdate = new DateTime($birthdate);
$today = new DateTime();
$diff = $today->diff($bdate);
$age_text = $diff->y . " ปี " . $diff->m . " เดือน " . $diff->d . " วัน";

$bmi = calculateBMI($weight, $height);
$bmi_show = number_format($bmi, 2);

$result_text = "";
$advice = "";

if ($bmi < 18.50) {
    $result_text = "น้ำหนักน้อย / ผอม";
    $advice = "ควรรับประทานอาหารให้เพียงพอ และออกกำลังกายเสริมสร้างกล้ามเนื้อ";
} elseif ($bmi < 23.00) {
    $result_text = "ปกติ (สุขภาพดี)";
    $advice = "ควรรักษาระดับน้ำหนักนี้ไว้ ทานอาหารให้ครบ 5 หมู่ และออกกำลังกายสม่ำเสมอ";
} elseif ($bmi < 25.00) {
    $result_text = "ท้วม / โรคอ้วนระดับ 1";
    $advice = "ควรเริ่มควบคุมอาหาร ลดของหวาน ของมัน ของทอด และออกกำลังกายมากขึ้น";
} elseif ($bmi < 30.00) {
    $result_text = "อ้วน / โรคอ้วนระดับ 2";
    $advice = "ต้องควบคุมอาหารอย่างจริงจัง ออกกำลังกายสัปดาห์ละ 3-5 วัน หากไม่ลดควรปรึกษาแพทย์";
} else {
    $result_text = "อ้วนมาก / โรคอ้วนระดับ 3";
    $advice = "อันตราย เสี่ยงต่อโรคเบาหวาน ความดัน ควรพบแพทย์เพื่อวางแผนลดน้ำหนักทันที";
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ผลลัพธ์การคำนวณ</title>
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .container {
            border: 1px solid #333;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
        }

        .btn-home {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            text-align: center;
            background-color: #f0f0f0;
            text-decoration: none;
            color: black;
            border: 1px solid #ccc;
        }

        hr {
            margin: 15px 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>ผลการวิเคราะห์สุขภาพ</h3>
        <p><strong>ชื่อ-นามสกุล:</strong> <?php echo $fullname; ?></p>
        <p><strong>วันเกิด:</strong> <?php echo $birthdate; ?></p>
        <p><strong>อายุ:</strong> <?php echo $age_text; ?></p>
        <p><strong>น้ำหนัก:</strong> <?php echo $weight; ?> กก.</p>
        <p><strong>ส่วนสูง:</strong> <?php echo $height; ?> ซม.</p>

        <hr>

        <p><strong>ค่า BMI:</strong> <?php echo $bmi_show; ?></p>
        <p><strong>แปลผลค่า BMI:</strong>
            <span style="color:<?php echo ($bmi >= 18.5 && $bmi < 23) ? 'green' : 'red'; ?>; font-weight:bold;">
                <?php echo $result_text; ?>
            </span>
        </p>
        <p><strong>คำแนะนำ:</strong> <?php echo $advice; ?></p>

        <hr>

        <a href="index.php" class="btn-home">กลับหน้าหลัก</a>
    </div>

</body>

</html>