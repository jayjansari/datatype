<h1>for loop</h1>
<?php
for($a=1;$a<=10;$a++){
    echo $a;
}
?>
<h1>while</h1>
<?php
$b=20;
while($b>=0){
    echo $b;
    $b--; 
}
?>

<h1>do while</h1>
<?php
$z=35;
do{
    echo $z;
    $z--;
}
while($z<=22);
?>

<h1>for reach</h1>
<?php
$abc=array(1,2,3);
echo $abc[0];
echo $abc[1];
echo $abc[2];

foreach($abc as $name){
    echo $name;
}

?>