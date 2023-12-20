<?php


//ex-1
for($i=1; $i <= 10; $i++){
   echo "hi universe";
}
for($i=1; $i <= 10; $i++){
    echo "hi universe</br>";
 }
 for($i=1; $i <= 10; $i++){
    echo "$i</br>";
 }

//ex-2
$start_year = 1990;
$end_year = 2024;
for($i = $start_year; $i <= $end_year; $i++){
   echo "test </br>";
}



 

 
?>

<!--ex-2-->

<select>

    <option value="">select one</option>
   <?php   
      for($i = 1980; $i <= 2014; $i++){
      echo "<option>$i</option>";
      }
    ?>

</select>
<?php


//ex -3

$num = 9;
for($i = 1; $i <= 10; $i++){
 $rslt = $num * $i;
 echo "$num * $i = $rslt";   
}

$num = 4;
for($i = 1; $i <= 10; $i++){
 $rslt = $num * $i;
 echo "$num * $i = $rslt<br>";   
}



//ex- 4
$arr = [
    "email",
    "age",
    "occupation"
];
$len = count($arr);
for ($i = 0; $i <= $len; $i++){
    echo $arr[0];
}

$arr = [
   "email",
    "age",
    "occupation"
];
$len = count($arr);
for ($i = 0; $i < $len; $i++){
    echo $arr[$i];
}

$arr = [
      "email",
    "age",
    "occupation"
];
$len = count($arr);
for ($i = 0; $i < $len; $i++){
    echo $arr[$i]. "</br>"; 
}



//ex-5
for($i = 1; $i <= 10; $i++){
   $test = str_repeat("*", $i);
   echo $test."<br>";
}
for($i = 10; $i >= 1; $i--){
    $test = str_repeat("*", $i);
    echo $test."<br>";
 }


$num_2 = 7;
for($i = 1; $i <= $num_2; $i++){
    for($n = 1; $n <= 10; $n++){
        $result = $i * $n;
        echo "$i * $n = $result<br>";
    }
}

$arr_1 = [
    [
        "name" => "test",
        "age" =>  58
    ],

    [
        "name" => "east",
        "age" =>  48
    ],

    [
        "name" => "west",
        "age" =>  8
    ]
];
$arr_test = count($arr_1);
 for($i = 1; $i<$arr_test ; $i++){
     echo $arr_1[$i]["name"];
 }
 $arr_3 = [
     12,
     "test",
     "test_2"
  ];
 foreach($arr_3 as $arr){
    echo $arr."<br>";
 }
 $arr_3 = [
    12,
    "test",
    "test_2"
 ];
foreach($arr_3 as $key=> $arr){
   echo $key. "-----" .$arr."<br>";
}


$test = [
    12,
    13,
    14,
    15,
    "tst"
];
foreach($test as $data ){
   echo $data."<br>";
}
?>
