<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// VD1:
echo "Hello World!";
// VD2:
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
// VD3:
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
// Khai báo (declaring) biến trong PHP
$txt = "Hello world!";
$x = 5;
$y = 10.5;
// Các biến đầu ra (Output Variables)
// C1
$txt = "W3Schools.com";
echo "I love $txt!";
// C2
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
$x = 5;
$y = 4;
echo $x + $y;
// Muốn thực hiện ví dụ này thì phải cmt tất cả cái trước đó

// $x = 5; // global scope

// function myTest() {
//   // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $x</p>";

// Biến với local scope
// function myTest() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   }
//   myTest();
  
//   // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";

//   $x = 5;
//   $y = 10;
  
// dùng từ khoá globles trong function
//   function myTest() {
//     global $x, $y;
//     $y = $x + $y;
//   }
  
//   myTest();
//   echo $y; // outputs 15

// mảng globle lưu trữ: 
// $x = 5;
// $y = 10;

// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y; // outputs 15
// static: 
// function myTest() {
//     static $x = 0;
//     echo $x;
//     $x++;
//   }
  
//   myTest();
//   myTest();
//   myTest();
  
?> 
<!-- PHẦN BÀI TẬP THỰC HÀNH -->
<?php
function CheckOddEven($x) { 
      if($x % 2 == 0) {
        echo "$x la so chan";
      }
      else {
        echo "$x la so le";
      }
    }
    CheckOddEven(10);
// Hàm xếp hạng học lực của sinh viên 
function academicRanking($x){
    if($x > 10.0){
        echo "Điểm hệ số 10 phải là số nhỏ hơn hoặc bằng 10, vui lòng nhập lại";
    }
    else if($x >= 9.0 && $x <= 10.0){
        echo "Xuất sắc";
    }else if($x >= 7.0 && $x < 9.0){
        echo "Giỏi";
    }else if($x >= 5.0 && $x < 7.0){
        echo "Khá";
    }else{
        echo "Yếu";
    }
} 
$x = 14;
academicRanking($x);
function CheckYear($year){
    if($year % 2 == 0) {
        echo "Năm nay la năm chẵn";
      }
      else {
        echo "Năm nay là năm lẻ";
      }
    
}
$year = date('Y');
    CheckYear($year);

// Bài tập 1: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function PrintNumber(){
    for($i = 1; $i <= 100; $i++){
        echo $i . " ";
    }
}
PrintNumber();
// Bài tập 2: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$year = array(2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020);    

function PrintYear($year){
    foreach($year as $value){
        echo $value . " ";
    }
}

PrintYear($year);

echo("<p>fgqedqddwecfwe</p></phihi><br>");
echo("<p>fgqedqddwecfwe</p></phihi><br>");
echo("<p>fgqedqddwecfwe</p></phihi><br>");
// dhbjhdfefjewvfefw