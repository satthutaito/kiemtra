<!-- C1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
C2: A.TRUE
C3: A.array()
C4: A.readfile()
C5: B.Chuyển đổi một đoios tượng thành một chuỗi -->

<!-- Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử. -->

<?php
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i-1]+$fibonacci[$i-2];
    }
    return $fibonacci;
}
$n = 10;

$ketqua = generateFibonacci($n);

echo "Dãy số Fibonacci đầu tiên có $n phần tử là: " . implode(", ", $ketqua);
?>

<!-- Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
Hiển thị thông tin của tất cả học sinh trong mảng.
Viết hàm để tìm học sinh có điểm cao nhất (grade). -->


<?php

$students = array(
    array("id" => 1, "name" => "Nguyen Ngoc Huy", "age" => 20, "grade" => 100),
    array("id" => 2, "name" => "Bui Thi Hong Hoa", "age" => 21, "grade" => 95),
    array("id" => 3, "name" => "Than Quang Trung", "age" => 22, "grade" => 80),
);

echo "<br><br><br>-----Thông tin của tất cả học sinh:<br>";
foreach ($students as $student) {
    echo "ID: " . $student['id'] . ", Name: " . $student['name'] . ", Age: " . $student['age'] . ", Grade: " . $student['grade'] ,"<br>";
}

function findHighestGradeStudent($students) {
    $diem = 0;
    $hocsinh = null;

    foreach ($students as $student) {
        if ($student['grade'] > $diem) {
            $diem = $student['grade'];
            $hocsinh = $student;
        }
    }
    return $hocsinh;
}

$hocsinh = findHighestGradeStudent($students);

echo "-----Học sinh có điểm cao nhất:<br>";
echo "ID: " . $hocsinh['id'] . ", Name: " . $hocsinh['name'] . ", Age: " . $hocsinh['age'] . ", Grade: " . $hocsinh['grade'] . "\n";
?>
