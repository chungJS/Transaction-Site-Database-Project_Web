<?php
session_start();

// 세션에서 사용자 ID 등의 정보를 가져오기
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

    // Oracle DB 연결 정보
    $oracle_username = "S3_501";
    $oracle_password = "pw1234";
    $oracle_db = "(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=203.249.87.57)(PORT=1521)))(CONNECT_DATA=(SERVICE_NAME=orcl)))";

    // Oracle DB 연결
    $oracle_conn = oci_connect($oracle_username, $oracle_password, $oracle_db,'UTF8');

    // Oracle DB 연결 여부 확인
    if (!$oracle_conn) {
        // 연결 실패시 JavaScript를 사용하여 팝업 표시
        echo '<script type="text/javascript">alert("Oracle DB 연결 실패");</script>';
        } else {
        // 연결 성공시 쿼리 실행
            $query = "SELECT * FROM Users WHERE Users.userid = '$userid'";
            
            $stmt = oci_parse($oracle_conn, $query);
            oci_execute($stmt);
            // 결과 가져오기
            $row = oci_fetch_assoc($stmt);
            // 팝업으로 결과 표시
            if ($row) {
            $userName = $row['USERNAME'];
            $userPhoneNumber = $row['USERPHONE'];
            $userEmail = $row['USEREMAIL'];
            $userCity = $row['USERCITY'];
            $user_created_date = $row['CREATED_DATE'];
    
            echo '<style>
                table {
                    width: 50%;
                    border-collapse: collapse;
                    margin: 20px 0;
                    font-size: 16px;
                }

                th, td {
                    border: 1px solid #ddd;
                    padding: 10px;
                    text-align: center;
                }

                th {
                    background-color: #f2f2f2;
                }
            </style>';

            echo '<table>';
            echo '<tr><th>User Name</th><th>Phone Number</th><th>E-mail</th><th>City</th><th>Created Date</th></tr>';
            echo '<tr>';
            echo '<td>' . $userName . '</td>';
            echo '<td>' . $userPhoneNumber . '</td>';
            echo '<td>' . $userEmail . '</td>';
            echo '<td>' . $userCity . '</td>';
            echo '<td>' . $user_created_date . '</td>';
            echo '</tr>';
            echo '</table>';
            
            } else {
                echo '<h3>사용자를 찾을 수 없습니다.</h3>';
                }
                          
            // 리소스 해제
            oci_free_statement($stmt);
            }
} else {
    echo "로그인 세션이 없거나 만료하였습니다. 다시 로그인해주세요 :)";
}
?>
