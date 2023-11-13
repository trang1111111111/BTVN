<?php 
echo " <b>1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. </b> <br>";
$bien1 = 5; 
if ($bien1 % 2 == 0){
    echo $bien1 ." là số chẵn";
} else {
    echo $bien1. " là số lẻ";
}
echo "<hr>";
echo "<b> 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.</b> <br>";
function tinhTong($n){
    $tong = 0;
    for ($i= 1; $i <= $n; $i++){
        $tong += $i;
    }
    return $tong;
}
$n = 6;
$ketQua = tinhTong($n);
echo "tổng là: $ketQua";
echo "<hr>";
echo "<b> 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10 </b> <br>";
for ($i = 1; $i <= 10; $i++){
    for($j = 1; $j <=10; $j++){
        echo "$i * $j = " .($i * $j);

        echo "<br>"; 
    }
}
echo "<hr>";
echo "<b> 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.</b> <br>";
$word = "BTS";
$mystring = "Hello! We are BTS!"; 

if(strpos($mystring, $word) !== false){
    echo "Chuỗi '$mystring' chứa từ '$word'";
} else{
    echo " Chuỗi '$mystring' không chứa từ '$word'";
}

echo "<hr>";
echo "<b> 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. </b> <br>";
function timGiaTriLonNhat($mang) {
    $lonNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri > $lonNhat) {
            $lonNhat = $giaTri;
        }
    }
    return $lonNhat;
}

function timGiaTriNhoNhat($mang) {
    $nhoNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri < $nhoNhat) {
            $nhoNhat = $giaTri;
        }
    }
    return $nhoNhat;
}

$mang = array(3, 8, 1, 6, 2, 10, 7);

$lonNhat = timGiaTriLonNhat($mang);
$nhoNhat = timGiaTriNhoNhat($mang);

echo "Giá trị lớn nhất trong mảng là: $lonNhat <br>";
echo "Giá trị nhỏ nhất trong mảng là: $nhoNhat ";
echo "<hr>";
echo "<b> 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.</b> <br>";
$numbers = array (4,6,8,2,10);
sort ($numbers);
$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++){
    echo $numbers[$x] ." ";

}
echo "<hr>";
echo "<b> 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương </b> <br>";
function tinhGiaiThua($y){
    $giaiThua = 1;
    if ($y == 0 || $y == 1) {
        return $giaithua;
    } else {
        for ($r =2; $r <= $y; $r ++){
            $giaiThua *= $r;
        }
        return $giaiThua;
    }
}
$so = 2;
$ketQua = tinhGiaiThua($so);
echo "Giai thừa của $so là: $ketQua";
echo "<hr>";
echo "<b> 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước </b> <br>";
function kiemTraSoNguyenTo($so){
    if($so < 2 ){
        return false;
    }
    for ($a = 2; $a <= sqrt($so); $a++){
        if ($so % $a == 0){
            return false;
        }

    }
    return true;
}
function timSoNguyenToTrongKhoang ($batDau, $ketThuc){
    echo "Các số nguyên tố trong khoảng $batDau đến $ketThuc là: ";
    for ($b = $batDau; $b <= $ketThuc; $b++){
        if (kiemTraSoNguyenTo($b)){
            echo "$b ";
        }
    }
} 

$batDau = 5;
$ketThuc = 30;

timSoNguyenToTrongKhoang ($batDau, $ketThuc);
echo "<hr>";
echo "<b> 9. Viết chương trình PHP để tính tổng của các số trong một mảng.  </b> <br>";
$arry1 = array(2,3,4,5);
echo "Tổng của các số trong mảng là: " .array_sum($arry1) ;
echo "<hr>";
echo "<b> 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. </b> <br>";
function fibonacci($n){
    $f0 = 1;
    $f1 = 1;
    $fn = 1;
    if($n < 0){
        return -1;
    } elseif ($n == 0 || $n == 1){
        return $n;
    } else {
        for ($i = 2; $i < $n; $i++){
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}

echo ("Dãy số fibonacci là: ");
for ($i =0; $i < 9; $i++){
    echo (fibonacci($i) ." ");
}

echo "<hr>";
echo "<b> 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. </b> <br>";
function check_Armstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $number;

}
$testNumber = 153;
if (check_Armstrong($testNumber)) {
    echo $testNumber . " là số Armstrong.";
} else {
    echo $testNumber . " không là số Armstrong.";
}
    
echo "<hr>";
echo "<b> 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ  </b> <br>";  
$mang_ban_dau1 = array('cam', 'quýt', 'chanh' ,'bưởi' ,'cậy' );
echo " - Mảng ban đầu:  <br>";
foreach ($mang_ban_dau1 as $L )
{
echo "$L ";
}
echo "<br>";
$phan_tu_can_chen = "ổi";
array_splice($mang_ban_dau1 ,3,0, $phan_tu_can_chen);
echo " - Sau khi chèn phần tử 'ổi' thì mảng sẽ như sau:" ."<br>";
foreach ($mang_ban_dau1 as $L){
echo "$L " ;
}

echo "<hr>";
echo "<b> 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.   </b> <br>";
$a = array ("a" => "red", "b" => "green", "c" => "red", "d" => "red");
print_r(array_unique($a));

echo "<hr>";
echo "<b> 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng    </b> <br>";
$colors = array("a" => "blue" , "b" => "grey", "c" => "pig");
echo array_search("pig", $colors);

echo "<hr>";
echo "<b> 15. Viết chương trình PHP để đảo ngược một chuỗi.    </b> <br>";
echo strrev("Hate You");

echo "<hr>";
echo "<b> 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.    </b> <br>";
$brands = array("Celine", "LV", "Calvin klein", "Valentio");
echo count($brands);

echo "<hr>";
echo "<b> 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.    </b> <br>";
function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return "là chuỗi palindrome";  
		  else  
			  return "không phải là chuỗi palindrone";  
		}  
		echo kiem_tra_chuoi_palindrome('did')."<br>";

echo "<hr>";
echo "<b> 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.    </b> <br>";

$arr1 = array(1,2,3,4,9,6,1,1,1,1,10);
$arr_count = array_count_values($arr1);
echo "<pre>";
print_r($arr_count);
echo "</pre>";

echo "<hr>";
echo "<b> 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.    </b> <br>";

$alphabets = array("a", "b", "c", "d", "e", "f" ,"g" ,"h");
rsort($alphabets);
foreach($alphabets as $al ){
    echo  $al ." ";
}

echo "<hr>";
echo "<b> 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng . </b> <br>";
$songs = array("Hate You", "Yes or No", "3D");
echo "Thêm một phần tử vào đầu của một mảng: " .array_unshift($songs, "Seven");
print_r($songs);
echo "<br>";

$weathers = array("Rain", "Snow", "Sunny");
echo "Thêm một phần vào cuối của một mảng: " .array_push($weathers, "Cloudy");
print_r($weathers);

echo "<hr>";
echo "<b> 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.  </b> <br>";




echo "<hr>";
echo "<b> 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.  </b> <br>";




echo "<hr>";
echo "<b> 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.  </b> <br>";
function find_perfect_num($o){
    // flag = 1 => số hoàn hảo
    // flag = 0 => không phải số hoàn hảo

    $flag = 0; $total=0;
    
    //Tìm tổng ước số   
    for ($h=1;$h<$o; $h++){
         if ($o % $h == 0) $total+=$h;//Nếu là ước số thì cộng vào tổng
    }

    //So sánh tổng ước số với số đã cho để tìm ra số hoàn hảo
    if ($total == $o & $o!=0) $flag = 1;

    return $flag;
}
$o = 6;
$total = find_perfect_num($o);
echo $total;

echo "<hr>";
echo "<b> 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. </b> <br>";

function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;
    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
            $soLeLonNhat = $so;
        }
    }
    if ($soLeLonNhat !== null) {
        echo "Số lẻ lớn nhất là: " . $soLeLonNhat;
    } else {
        echo "Không có số lẻ trong mảng.";
    }
}
$mang = array(2, 4, 7, 1, 9, 6, 8);
timSoLeLonNhat($mang);

echo "<hr>";
echo "<b> 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. </b> <br>";
function kiem_tra_so_nguyen_to($q){
    if ($q < 2){
        return false;
    }
    for ($e = 2; $e <= sqrt($q); $e ++){
        if ($q % $e == 0 ){
            return false;
        }  
    }
    return true;
}

$test_number = 20;
if (kiem_tra_so_nguyen_to($test_number)){
    echo $test_number . " là số nguyên tố";
}else {
    echo $test_number ." không phải là số nguyên tố"; 
}

echo "<hr>";
echo "<b> 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. </b> <br>";
$numbers = array (1,10,100,50);
echo "số dương lớn nhất trong mảng là: " . max($numbers);


echo "<hr>";
echo "<b> 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.  </b> <br>";
$numbers = array (-34,-10,-100,-50);
echo "số âm lớn nhất trong mảng là: " .max($numbers);

echo "<hr>";
echo "<b> 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n . </b> <br>";
$j = 6;
$sum = 0;
for ($s = 1; $s <= $j ; $s +=2){
       $sum += $s; 

}
echo "Dãy số từ 1 đến " .$j . " = " .$sum;

echo "<hr>";
echo "<b> 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. </b> <br>";
function timSoChinhPhuong($start, $end) {
    $chinhPhuong = array();

    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            $chinhPhuong[] = $i;
        }
    }

    return $chinhPhuong;
}

$start = 1;
$end = 100;

$socp = timSoChinhPhuong($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($socp as $so) {
    echo $so . " ";
}


echo "<hr>";
echo "<b> 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.  </b> <br>";
$str = 'Like crazy !';
$sub = 'crazy';
if (strpos($str, $sub) !== false) {
    echo 'là chuỗi con của một chuỗi';
    } else {
    echo 'Không là chuỗi con của một chuỗi';
    }
































































?>
