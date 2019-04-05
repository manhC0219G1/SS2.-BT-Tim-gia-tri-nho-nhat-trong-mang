<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method ="post">

</form>
<?php
function findMin($array){
    $min=$array[0];
    for($index=0;$index<count($array);$index++){
        if($array[$index]<$min){
            $min = $array[$index];
        }
    }
    echo "So nho nhat trong mang la :"."$min";
}
$array=[1,2,3,4,5,6,7,-4];
findMin($array)
?>
</body>
</html>