<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $name = "ผมชื่อ: นาย อนณ สายระดา";
        $class = "ชั้น: ปวช.2";
        $acc = "สาขา: เทคโนโลยีสารสนเทศ";
        $old = "อายุ: 17 ปี";

        $s = 1500;
        $t = $s / (1+ 10 /100);

        $tobal = $s - $t;
    
    ?>
</head>
<body>
    <h1>ข้อที่1</h1>
    <p><?= $name ?></p>
    <p><?= $class ?></p>
    <p><?= $acc ?></p>
    <p><?= $old ?></p>
    <hr>
    <h1>ข้อที่2</h1>
    <p>ต้นทุน <?= (int)$t ?></p>
    <p>กำไร <?= (int)$tobal ?></p>
    <p>รวมขายไปทั้งหมด <?= (int)$s ?></p>
  

    



</body>
</html>