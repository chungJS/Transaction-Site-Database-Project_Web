<!DOCTYPE html>
<?php
  session_start(); // 세션 시작

  // 사용자가 로그인되어 있는지 확인
  if (!isset($_SESSION['userid'])) {
      // 로그인되어 있지 않다면 로그인 페이지로 리다이렉트
      header("Location: auth-login-basic.php");
      exit();
  }
?>
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Database Team 2</title>
    <meta name="description" content="홍익대학교 2023년 DATABASE 강의 2조 프로젝트 입니다." />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://github.com/DataBase-501-Group2-Project-2023/.github/assets/112881296/1437b234-02cc-4109-9c9d-ed9a0155c5b1" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->


        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              <img src="https://github.com/DataBase-501-Group2-Project-2023/.github/assets/112881296/eae17f03-cab2-4615-9917-b2709521b6cd" alt class="w-px-40 h-auto " />
              <span class="app-brand-text demo menu-text fw-bolder ms-2">TEAM 2</span>
            </a>
          </div>
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">품목 및 시세 비교하기</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">공공데이터 LINK</span></li>
            
            <li class="menu-item">
              <a
                href="https://kadx.co.kr/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">전국 시세 공공 데이터</div>
              </a>
            </li>
           
            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Site &amp; Github</span></li>
            <!-- Forms -->
            <li class="menu-item">
              <a
                href="https://www.hongik.ac.kr/index.do"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support"> Hongik.univ</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="http://software.hongik.ac.kr/home/"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Dept.Software</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://github.com/DataBase-501-Group2-Project-2023"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Our Github</div>
              </a>
            </li>

            <!-- Tables -->
            <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Members</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- 홈페이지 이름 -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <img src="https://github.com/DataBase-501-Group2-Project-2023/.github/assets/112881296/1437b234-02cc-4109-9c9d-ed9a0155c5b1" alt class="w-px-40 h-auto " />
                  <svg width="25" viewBox="0 0 25 42"></svg>
                  <span class="app-brand-text demo text-body fw-bolder">농수산물 거래 플랫폼</span>
                  <svg width="25" viewBox="0 0 25 42"></svg>
                </div>
              </div>
              <!-- 홈페이지 이름 부분 -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a> 어서오세요! 반갑습니다! </a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://github.com/DataBase-501-Group2-Project-2023/.github/assets/112881296/6fbf151f-a1e3-4a8a-be28-6b44a1d0110f" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="account-settings.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">내 정보</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        
                        <div class="card-body">
                          <h5 class="card-title text-primary">최근 플랫폼에서 거래된 내역 🎉</h5>
                          <?php
                            include 'recent_transactions.php';
                          ?>

                        </div>
                      </div>
                      <div class="col-sm-4 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="https://github.com/DataBase-501-Group2-Project-2023/.github/assets/112881296/6cabe344-3f9c-4616-872b-5a0a88b1d31e"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">시세 조회</h5>
                        <hr>
                        <div id="totalRevenueChart" class="px-2"></div>
                        <div class="text-center">
                          <div>
                            <p>
                              여기다가 물건 가격 테이블 접근하여서 상품별 상점들의 가격 출력
                            </p>
                          </div>
                          <form onsubmit="return false">
                            <button class="btn btn-outline-primary" type="button">Buy Now</button>
                          </form>
                          
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="dropdown">
                              <button
                                class="btn btn-sm btn-outline-primary dropdown-toggle"
                                type="button"
                                id="growthReportId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                품목
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                <a class="dropdown-item" href="javascript:void(0);">귤</a>
                                <a class="dropdown-item" href="javascript:void(0);">사과</a>
                                <a class="dropdown-item" href="javascript:void(0);">배</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">품목 선정 이후 품목 리스트 추가,  <br>
                          이미지 품목에 맞춰서<br> 이미지 하이퍼링크 걸고 품목 선택시 이미지 표시 </div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              
                            </div>
                            <div class="d-flex flex-column">
                              
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              
                            </div>
                            <div class="d-flex flex-column">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-12 col-lg-8 col-xl-4 order-2 mb-4">
                  
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">해당 상품의 평균 가격</h5>
                        <small class="text-muted">상품 조회를 클릭하시면 조회됩니다.</small>
                      </div>
                    </div>
                    <div class="card-body">
                      
              
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

            
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made by Hongik.university "DataBase and exercise" Team 2 Project.
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS 그래프 부분 -->
    <!--script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script--> 

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
