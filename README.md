# 농수산물 거래 플랫폼 기능 구현 "repo"

# Log in & create account 기능
<img width="1470" alt="스크린샷 2023-11-22 오후 11 50 59" src="https://github.com/WellshCorgi/Transaction-Site-Database-Project/assets/112881296/65e4c6b9-dbb4-486a-a80f-9f0ddafb1b59">

### 작동 파일
- db-login.php    
- logout.php  
- auth-login-basic.php         
- db-register.php 
- auth-register-basic.php   
- update_user.php
- encrypted_password.php     


### 작동 흐름
1. index.php 접속 / 세션 유효 확인
2. auth-login-basic.php 실행
3. 회원가입 버튼을 통한 db-register-basic.php 접속
4. 회원 가입 정보 입력 후, update_user.php를 통한 database 회원 등록  
5. encrypted_password.php를 통한 비밀번호 MD5 암호화
6. auth-login-basic.php - db-login.php를 통하여 계정 로그인 #<strong> 로그인 세션 유지</strong>
7. index.php 접속

<br><br><br>
# My Account Information [ 유저 개인 정보 수정 기능 & 거래 내역 조회 ]
<img width="1470" alt="스크린샷 2023-11-22 오후 11 51 28" src="https://github.com/WellshCorgi/Transaction-Site-Database-Project/assets/112881296/05948e2f-78df-4009-8657-1651d762ee5c">

### 작동 파일
- account-settings.php
- user_information.php
- user_recnet_transcations.php
- update_user.php


### 작동 흐름
1. index.php 접속 / 세션 유효 확인
2. account-settings.php 를 통해 내정보 접속
3. user_information.php 기존 세션을 통해 내 정보 불러오기
4. user_recent_transactions.php 를 통해 해당 회원의 모든 거래 불러오기
5. 변경 양식 입력 후 제출 시, update_user.php 를 통해 사용자 정보 수정 


<br><br><br> 
# 팀 프로젝트 구성원 소개 페이지
- tables-basic.php 

 
# 메인 홈페이지
### 작동 파일
- index.php
- recent_transactions.php    
- 상품 조회 후, 물건 선택후 구매하기 기능.php (구현예정)

### 작동 흐름
1. index.php 접속 / 세션 유효 확인
2. recent_transactions.php 를 통해 최근 거래 상단 3개 불러오기