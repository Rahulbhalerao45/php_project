<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


*{
    padding:0;
    margin:0;
    box-sizing:border-box;

}

    .container{
        max-width:8-%;
        background-color:grey;
        margin:auto;
    }
    </style>
<body>
<div class="container">
    <h1>lets learn<h1>
this is a container
</div>
    <?php
 /*$arr=array("cool","dude");
echo $arr[0];
echo count($arr);
$var3=0;
while($var3<5){
    echo $var3;
    echo "<br>";
    $var3++;
}
for($var1=0;$var1<5;$var1++){
    echo $var1;
    echo "<br>";
}
function cool_fun($num){
    echo $num;
}
//cool_fun();
cool_fun(7);
*/
$str="hello bruh";
echo var_dump($str);
echo strlen($str);
echo "<br>";
echo substr($str,0,5);
$str2="cool bruh";



?>
</body>
</html>