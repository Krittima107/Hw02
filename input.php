<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประมวลผลดัชนีมวลกาย (BMI)</title>
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
            width: 350px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            box-sizing: border-box;
        }

        .btn-group {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container">
        <center>
            <h2>ประมวลผลดัชนีมวลกาย</h2>
            <form action="result.php" method="POST">
                <label>ชื่อ-นามสกุล:</label>
                <input type="text" name="fullname" required>

                <label>วันเกิด:</label>
                <input type="date" name="birthdate" required>

                <label>น้ำหนัก (กก.):</label>
                <input type="number" step="0.01" name="weight" required>

                <label>ส่วนสูง (ซม.):</label>
                <input type="number" step="0.01" name="height" required>

                <div class="btn-group">
                    <button type="submit">Submit</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
    </div>
    </center>
</body>

</html>