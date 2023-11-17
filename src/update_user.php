<?php
// update_user.php

// 폼 데이터 검색
$user_id = $_POST['user_id'];
$email = $_POST['email'];
$name = $_POST['name'];

// OracleDB에 연결 ('your_username', 'your_password', 'your_host', 'your_db'를 실제 값으로 대체)
$conn = oci_connect('your_username', 'your_password', 'your_host/your_db');

// 연결 확인
if (!$conn) {
    $error = oci_error();
    die('Connection failed: ' . $error['message']);
}

// 사용자 정보 업데이트
$sql = "UPDATE Users SET user_name = :name, created_date = SYSDATE WHERE user_id = :user_id";

$stid = oci_parse($conn, $sql);
oci_bind_by_name($stid, ":name", $name);
oci_bind_by_name($stid, ":user_id", $user_id);

$result = oci_execute($stid);

// 업데이트가 성공했는지 확인
if ($result) {
    echo "사용자 정보가 성공적으로 업데이트되었습니다.";
} else {
    $error = oci_error($stid);
    echo "사용자 정보 업데이트 오류: " . $error['message'];
}

// 연결 닫기
oci_free_statement($stid);
oci_close($conn);
?>
