<?php

$name;
$name="Muntarin";
echo $name.'</br>';
//$data= Array(10,20,30,40,'Dhaka');



//$data = Array();

//$data[0]=10;
//$data[1]=15;
//$data[2]=20;

//$data['name']='Muna';
//$data['city']='Dhaka';
//$data['country']='Bangladesh';

//echo $data[3];

//$data =[];
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;

//$data[1][0]=10;
//$data[2][1]=20;
//$data[3][2]=30;


//$data = [10,20,30,'rohim','Dhaka'];

//   foreach ($data as $value){
//       echo $value.' ';
//    }

//$data = [

//        'name' => 'Rohim',
//        'city' => 'Dhaka',
//        'country' => 'Bangladesh',

//   ];

//foreach ($data as $datum){
 //   echo $datum.' ';
//}

$students =[
    '0' => [
        'name' => 'Rohim',
       'city' => 'Dhaka',
        'country' => 'Bangladesh'
    ],
    '1' => [
        'name' => 'korim',
       'city' => 'Banani',
        'country' => 'Bangladesh'
    ],
    '2' => [
        'name' => 'Muna',
        'city' => 'Mohakhali',
        'country' => 'Chanada'
    ],
];
//echo '<pre>';
//print_r($students);
//var_dump($students);
//foreach ($students as $student) {
//    echo $student['name'].' '.$student['city'].' ' .$student['country']. '</br>';

//}

function test($x,$y){
   //$x=10;
    //$y=20;
    $z=$x+$y;
    echo $z;
}

echo '<br/>=======<br/>';
test(10,30);//calling
echo '<br/>=======<br/>';
test(4,5);
echo '<br/>=======<br/>';
test(4,2);



?>

<table border="1" width="500">
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Country</th>
    </tr>
    <?php
    foreach ($students as $student){
    echo "<tr>";
           echo "<td> $student[name]</td>";
           echo "<td> $student[city]</td>";
            echo "<td> $student[country]</td>";
    echo"</tr>";
     }
    ?>

</table>









