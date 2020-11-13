
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <style>
   	.table-align{
   		text-align: center;
   		   	}

   </style>
</head>
<body>

 <?php
   $numbers = array();

for($i = 0; $i < 10; $i++){
	for($j = 0; $j < 5; $j++)
		$numbers[$i][$j] = rand(0,20);
}
?>
<table class="table-align" cellpadding="4" cellspacing="4" border="2"> 
<?php
foreach ($numbers as $rez_col){
        echo "<tr>";
        foreach ($rez_col as $sValue){
                echo "<td>{$sValue}</td>";
        }
        echo "</tr>";
}
?>
</table>

</body>
</html>

<?php 
	//phpinfo();
for ($x = 0; $x <= 10; $x++) {
   echo 'The number is: $x <br>';
}

echo "<br>";

for ($x = 0; $x <= 10; $x++) {
   echo "The number is: $x <br>";
}

echo "<br>";

$index = 1;
echo "test ".$index." end of test <br><br>";


$days = ["Mon", "Tue", "Wed"];
echo "I like " . $days[0] . ", and hate " . $days[1] . " and " . $days[2] . ". <br>";
echo "Array Length: ".count($days)."<br>";
$days = ["Mon", "Tue", "Wed"];

for ($i = 0; $i < count($days); $i++) {
   echo $days[$i];
   echo "<br>";
}

$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
echo "Mon start at " . $age['Mon']."<br>";

foreach($age as $key => $value) {
   echo "Key=" . $key . ", Value=" . $value;
   echo "<br>";
} 




