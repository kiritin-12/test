<?php
// 1. 데이터베이스 접속 정보
// 내 컴퓨터에서 테스트할 때와 AWS RDS 주소는 다릅니다.
$host = "database-1.cp8qkmwms733.ap-northeast-2.rds.amazonaws.com"; // AWS RDS 콘솔에서 복사한 주소
$user = "admin";                             // RDS 생성 시 만든 마스터 사용자 이름
$pass = "ssykdy0802";                     // RDS 비밀번호
$dbname = "database-1";                   // 생성한 데이터베이스 이름

// 2. 연결 시도
$conn = mysqli_connect($host, $user, $pass, $dbname);

// 연결 확인
if (!$conn) {
    die("연결 실패: " . mysqli_connect_error());
}
?>