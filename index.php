<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณ</title>
    <style>
        html, body { height: 100%; margin: 0; display: flex; justify-content: center; align-items: center; background: #f4f7f6; font-family: sans-serif; }
        
        .card { max-width: 450px; padding: 25px; background: #fff; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center; }
        .btn { display: inline-block; padding: 6px 12px; background: #007bff; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; margin-bottom: 15px; }
        input[type="number"] { padding: 8px; width: 50%; border: 1px solid #ccc; border-radius: 4px; }
        input[type="submit"] { padding: 8px 15px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        .res { margin: 20px auto 0 auto; text-align: left; background: #f9f9f9; padding: 20px; border-radius: 4px; width: 80%; display: inline-block; }
    </style>
</head>
<body>

<div class="card">
    <h2>งานที่ 1 ณิชาภัทร วงศ์นก BIT.2/5 เลขที่ 26</h2>
    <a href="while.php" class="btn">While Loop</a>

    <form action="" method="GET">
        <label>เลขแม่สูตรคูณ:</label>
        <input type="number" name="num" required>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(!empty($_GET["num"])){
            $num = intval($_GET["num"]);
            echo "<div class='res' style='text-align:center;'>";
            echo "<b>สูตรคูณแม่ $num</b><br><br>";
            echo "<div style='display:inline-block; text-align:left;'>";
            for($i = 1; $i <= 12; $i++){
                echo "$num x $i = <b>" . ($num * $i) . "</b><br>";
            }
            echo "</div></div>";
        }
    ?>
</div>

</body>
</html>