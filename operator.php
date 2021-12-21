<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kiiki</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,100;1,500&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>

<body>
    <?php
$salary = "25000";
echo "เงินเดือน = $salary บาท";
if($salary <= 10000)
{
$bonus = $salary *(80/100) ;
echo "ได้โบนัส = ".$bonus."  บาท";
}elseif( $salary <=50000)
{
$bonus = $salary *(50/100) ;
echo "ได้โบนัส = ".$bonus."  บาท";
}else{
$bonus = $salary *(30/100) ;
echo "ได้โบนัส = ".$bonus."  บาท";
}
$a=$salary+$bonus;
echo "<br>รายรับสุทธิ = ".$a." บาท";
$b=$a*(7/100);
echo "<br>คิดค่าภาษี7%จากรายรับสุทธิ = ".$b." บาท";
$c=$a-$b;
echo "<br>รายรับหลังหักภาษี = ".$c."บาท";
?>
</body>

</html>