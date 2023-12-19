<?php include 'header.php' ?>

<?php
   if ($_SESSION['urole']!=="Admin") {
      echo "<script>window.location='home'</script>";
   }

?>
 <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
            <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Active Employees</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-primary mr-2"> <i class="ri-user-fill"></i></div>
                                 <h2><?php echo number_format($ActiveEmp) ?></h2>
                              </div>
                              <div class="iq-map text-primary font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Current Month Payroll</h6>
                              <span class="iq-icon"><i class="ri-list-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-danger mr-2"><i class="ri-wallet-line"></i></div>
                                 <h2>₦<?php echo $payroll;?></h2></div>
                               <div class="iq-map text-danger font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6> Monthly Deduction</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-warning mr-2"><i class="ri-price-tag-3-line"></i></div>
                                 <h2>₦<?php echo $deduction;?></h2></div>
                               <div class="iq-map text-warning font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Average payment delay</h6>
                              <span class="iq-icon"><i class="ri-information-fill"></i></span>
                           </div>
                           <div class="iq-customer-box d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                 <div class="rounded-circle iq-card-icon iq-bg-info mr-2"><i class="ri-refund-line"></i></div>
                                 <h2>27h</h2></div>
                               <div class="iq-map text-info font-size-32"><i class="ri-bar-chart-grouped-line"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-7">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Income/Expenses</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="home-chart-02"></div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-5">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Efficiency</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton-three" data-toggle="dropdown" >
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-three">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body p-0">
                           <div id="home-chart-03"></div>
                        </div>
                     </div>
                  </div>
               </div>
           
               <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body p-0">
                           <div class="p-3 bg-primary mb-3 rounded position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="icon iq-icon-box bg-primary rounded border" data-wow-delay="0.2s">
                                    <i class="ri-user-fill"></i>
                                 </div>
                                 <div class="ml-2">
                                    <a href="javascript:void();" class="d-flex align-items-center mr-4">
                                       <span class="bg-white p-1 rounded mr-2"></span>
                                       <p class="text-white mb-0">New Visitors</p>
                                    </a>
                                    <div id="progress-chart-1"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center pb-3">
                              <div class="col-lg-6">
                                 <div class="ml-2">
                                    <h5 class="mb-1">Total Visitors</h5>
                                    <span class="h4 text-dark mb-0 counter d-inline-block w-100">60,586</span>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="d-flex align-items-center justify-content-between mt-4 position-relative">
                                    <div class="iq-progress-bar bg-primary-light mt-3 iq-progress-bar-icon">
                                       <span class="bg-primary iq-progress progress-1 position-relative" data-percent="67">
                                       <span class="progress-text text-primary">67%</span>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body p-0">
                           <div class="p-3 bg-info mb-3 rounded position-relative">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="icon iq-icon-box bg-info rounded border" data-wow-delay="0.2s">
                                    <i class="ri-user-fill"></i>
                                 </div>
                                 <div class="ml-2">
                                    <a href="javascript:void();" class="d-flex align-items-center mr-4">
                                       <span class="bg-white p-1 rounded mr-2"></span>
                                       <p class="text-white mb-0">New Visitors</p>
                                    </a>
                                    <div id="progress-chart-2"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center pb-3">
                              <div class="col-lg-6">
                                 <div class="ml-2">
                                    <h5 class="mb-1">Paid Visitors</h5>
                                    <span class="h4 text-dark mb-0 counter d-inline-block w-100">45,395</span>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="d-flex align-items-center justify-content-between mt-4 position-relative">
                                    <div class="iq-progress-bar bg-info-light mt-3 iq-progress-bar-icon">
                                       <span class="bg-info iq-progress progress-1 position-relative" data-percent="50">
                                       <span class="progress-text text-info">50%</span>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"> Employee Performance</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 m-0">
                              <li class="d-flex mb-3 align-items-center p-3 sell-list border-primary rounded">
                                 <div class="user-img img-fluid">
                                    <img src="images/user/01.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                                 </div>
                                 <div class="media-support-info ml-3">
                                    <h6>Pete Sariya</h6>
                                    <p class="mb-0 font-size-12">24 jan, 2020</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="badge badge-pill badge-primary">157</div>
                                 </div>
                              </li>
                              <li class="d-flex mb-3 align-items-center p-3 sell-list border-success rounded">
                                 <div class="user-img img-fluid">
                                    <img src="images/user/02.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                                 </div>
                                 <div class="media-support-info ml-3">
                                    <h6>Anna Mull</h6>
                                    <p class="mb-0 font-size-12">15 feb, 2020</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="badge badge-pill badge-success">280</div>
                                 </div>
                              </li>
                              <li class="d-flex mb-3 align-items-center p-3 sell-list border-danger rounded">
                                 <div class="user-img img-fluid">
                                    <img src="images/user/03.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                                 </div>
                                 <div class="media-support-info ml-3">
                                    <h6>Alex john</h6>
                                    <p class="mb-0 font-size-12">05 March, 2020</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="badge badge-pill badge-danger">200</div>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center p-3 sell-list border-info rounded">
                                 <div class="user-img img-fluid">
                                    <img src="images/user/04.jpg" alt="story-img" class="img-fluid rounded-circle avatar-40">
                                 </div>
                                 <div class="media-support-info ml-3">
                                    <h6>Cliff Hanger</h6>
                                    <p class="mb-0 font-size-12">10 April, 2020</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="badge badge-pill badge-info">150</div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Training Summary</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline m-0 p-0">
                              <li class="mb-4">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                       <div class="iq-bg-primary rounded icon-date" data-wow-delay="0.2s">
                                          <div class="date-meta">
                                             <h3 class="date"><b>15</b></h3>
                                             <p class="mb-0">Jan</p>
                                             <div class="icon-dot bg-primary"></div>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h5 class="mb-0">Paige Turner</h5>
                                          <small>@paige001245698</small>
                                       </div>
                                    </div>
                                    <h6 class="text-primary">+123.3<i class="ri-arrow-up-fill pl-2"></i></h6>
                                 </div>
                              </li>
                              <li class="mb-4">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                       <div class="iq-bg-success rounded icon-date" data-wow-delay="0.2s">
                                          <div class="date-meta">
                                             <h3 class="date"><b>15</b></h3>
                                             <p class="mb-0">Jan</p>
                                             <div class="icon-dot bg-success"></div>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h5 class="mb-0">Ira Membrit</h5>
                                          <small>@ira001245856</small>
                                       </div>
                                    </div>
                                    <h6 class="text-danger">-80.9<i class="ri-arrow-down-fill pl-2"></i></h6>
                                 </div>
                              </li>
                              <li class="mb-4">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                       <div class="iq-bg-danger rounded icon-date" data-wow-delay="0.2s">
                                          <div class="date-meta">
                                             <h3 class="date"><b>15</b></h3>
                                             <p class="mb-0">Jan</p>
                                             <div class="icon-dot bg-danger"></div>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h5 class="mb-0">Paul Molive</h5>
                                          <small>@paul001245689</small>
                                       </div>
                                    </div>
                                    <h6 class="text-success">+95.42<i class="ri-arrow-up-fill pl-2"></i></h6>
                                 </div>
                              </li>
                              <li>
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="media align-items-center">
                                       <div class="iq-bg-info rounded icon-date" data-wow-delay="0.2s">
                                          <div class="date-meta">
                                             <h3 class="date"><b>15</b></h3>
                                             <p class="mb-0">Jan</p>
                                             <div class="icon-dot bg-info"></div>
                                          </div>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h5 class="mb-0">Greta Life</h5>
                                          <small>@greta001245632</small>
                                       </div>
                                    </div>
                                    <h6 class="text-info">-65.89<i class="ri-arrow-down-fill pl-2"></i></h6>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Total Progress</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="progress-chart-3"></div>
                           <div class="d-flex align-items-center justify-content-between mt-3 text-center">
                              <div class="title position-relative">
                                 <h5>Total</h5>
                                 <p class="mb-0">75%</p>
                              </div>
                              <div class="title">
                                 <h5>Panding</h5>
                                 <p class="mb-0">70%</p>
                              </div>
                              <div class="title">
                                 <h5>Success</h5>
                                 <p class="mb-0">72%</p>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
                  
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-primary">
                                 <i class="ri-home-heart-line"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Employee Insurance</h5>
                                 ₦<span class="h4 text-primary mb-0 counter d-inline-block w-100">300,290</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-success">
                                 <i class="fa fa-comment" aria-hidden="true"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Complaints</h5>
                                 <span class="h4 text-success mb-0 counter d-inline-block w-100">2</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-danger">
                                 <i class="las la-file"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Job Vacancies</h5>
                                 <span class="h4 text-danger mb-0 counter d-inline-block w-100">1</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-warning">
                                 <i class="fa fa-handshake-o" aria-hidden="true"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Auto Insurance</h5>
                                 <span class="h4 text-warning mb-0 counter d-inline-block w-100">28,258</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-info">
                                 <i class="ri-building-line" aria-hidden="true"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Property Insurance</h5>
                                 <span class="h4 text-info mb-0 counter d-inline-block w-100">29,302</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                           <div class="d-flex align-items-center justify-content-between text-right">
                              <div class="icon iq-icon-box rounded-circle bg-secondary">
                                 <i class="ri-discuss-line" aria-hidden="true"></i>
                              </div>
                              <div>
                                 <h5 class="mb-0">Social Insurance</h5>
                                 <span class="h4 text-secondary mb-0 counter d-inline-block w-100">15,287</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Employess Overview</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Employee ID</th>
                                       <th scope="col"></th>
                                       <th scope="col">Name</th>
                                       <th scope="col">Department</th>
                                       <th scope="col">Role</th>
                                       <th scope="col">Join</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody style="font-size: 12px;">
                                 <?php
                                          $fetching = dbConnect()->prepare("SELECT * FROM employee");
                                          $fetching->execute();
                                          $n = 0;
                                          while ($route=$fetching->fetch()) {
                                             $n++;
                                             $employid = $route['id'];
                                             ?>
                                             <tr>
                                                <td>#<?php echo $route['emp_id'];?></td>
                                                <td>
                                                   <div class="iq-media-group">
                                                      <a href="#" class="iq-media">
                                                      <img class="img-fluid avatar-30 rounded-circle" src="uploads/employee/<?php echo $route['emp_img'] ?>" alt="">
                                                      </a>
                                                   </div>
                                                </td>
                                                <td><?php echo $route['firstname'].' '.$route['lastname'];?></td>
                                                <td>
                                                   <p class="mb-2"><?php echo $route['dept']  ?></p>
                                                   <!-- <div class="iq-progress-bar">
                                                      <span class="bg-success" data-percent="70"></span>
                                                   </div> -->
                                                </td>
                                                <td><?php echo $route['role'] ?></td>
                                                <td><?php echo $route['created'] ?></td>
                                                <td>
                                                   <?php 
                                                      $st = $route['status'];
                                                      if($st ==1){$st = "Active"; }else{$st = "In-Active";}
                                                   ?>
                                                   <div class="badge badge-pill badge-success"><?php echo $st?></div>
                                                </td>
                                             </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <?php include 'footer.php' ?>