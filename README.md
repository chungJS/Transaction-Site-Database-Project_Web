# 농수산물 거래 플랫폼 기능 구현 "repo"

## Log in & create account 기능
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

## 내 정보 [ 유저 개인 정보 수정(구현 중) & 거래 내역 조회 ]
- account-settings.php
- user_information.php
- user_recnet_transcations.php  


### 작동 흐름
1. index.php 접속 / 세션 유효 확인
2. account-settings.php 를 통해 내정보 접속
3. user_information.php 기존 세션을 통해 내 정보 불러오기
4. user_recent_transactions.php 를 통해 해당 회원의 모든 거래 불러오기


     
## 팀 프로젝트 구성원 소개 페이지
- tables-basic.html 

 
## 메인 홈페이지
- index.php
- recent_transactions.php    

### 작동 흐름
1. index.php 접속 / 세션 유효 확인
2. recent_transactions.php 를 통해 최근 거래 상단 3개 불러오기