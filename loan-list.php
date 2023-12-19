<?php include 'header.php' ?>



<?php 

$msg = "";
if (isset($_POST['submit'])) {
    $title = check_input($_POST['title']);
    $designation = check_input($_POST['designation']);
    $nature = check_input($_POST['nature']);
    $age = check_input($_POST['age']);
    $salary = check_input($_POST['salary']);
    $exp = check_input($_POST['exp']);
    $vacancy = check_input($_POST['vacancy']);
    $cl_date = check_input($_POST['cl_date']);
    $desc = check_input($_POST['desc']);
    $status = 1;
    $created = date('Y-m-d');
    if ( empty($title) || empty($designation) || empty($nature) || empty($age) || empty($salary) || empty($exp) || empty($vacancy) || empty($cl_date) || empty($desc) ) {
    $msg = '<p style="color:red;">Not Added , All Fields Are Required !!!</p>';
    }else{
        $query = dbConnect()->prepare("INSERT INTO jobs SET title=?, nature=?, experience=?, age=?, status=?, close_date=?, description=?, salary=?, vacancy=?, type=?, created=?");
        if( $query->execute([$title,$nature,$exp,$age,$status,$cl_date,$desc,$salary,$vacancy,$designation,$created]) ){
            $msg = '<p style="color:green;">Operation Succesful !!!</p>';
            echo '<script>window.location="jobs_posted"</script>';
        }else{
            $msg = '<p style="color:red;">Oops , An Error Occured!!!</p>';
            echo '<script>window.location="jobs_posted"</script>';
        }
    }
    

    
}


?>

<!-- Page Content  -->
<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Loan Application List</h4>
                        </div>
                        
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                 <div class="user-list-files d-flex float-right">
                                    <a class="iq-bg-primary" href="javascript:void();">
                                       print
                                     </a>
                                     
                                    <a class="iq-bg-primary" href="javascript:void();">
                                       Excel
                                     </a>
                                     <a class="iq-bg-primary" href="javascript:void();">
                                       Pdf
                                     </a>
                                   </div>
                              </div>
                           </div>
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    
                                    <th>Loan Code</th>
                                    <th>Emp. Name</th>
                                    <th>Loan Amount(₦)</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody style="font-size: 12px;">

                                 <?php
                                 
                                 $query = dbConnect()->prepare("SELECT * FROM loan ORDER BY created DESC");
                                 $query->execute();
                                //  $connJobs = mysqli_query($connect2db,$queryJobs);
                                 while ($row=$query->fetch()) {
                                     $id = $row['id'];
                                     $code = $row['code'];
                                     $empId = $row['employee_id'];

                                     $queryEmp = dbConnect()->prepare("SELECT * FROM employee WHERE id=?");
                                     $queryEmp->execute([$empId]);
                                     $rowEmp =  $queryEmp->fetch();
                                     $fullname = $rowEmp['firstname'].' '. $rowEmp['lastname'];

                                     $amount = $row['loan_amount'];
                                     $balance = $row['loan_balance'];
                                     $note = $row['note'];
                                     $status = $row['status'];
                                     $created = $row['created'];
                                     $duration = $row['duration'];
                                     
                                     $note = $row['note']; 
                                                                     
                                 
                                 
                                 ?>
                                 <tr>
                                    <td><?php echo $code; ?></td>
                                    <td><?php echo $fullname; ?></td>
                                    <td><?php echo $amount; ?></td>
                                    <td>
                                        <?php
                                            if ($status == 1) {
                                                echo '<span class="badge iq-bg-success">Approved</span></td>';
                                            }elseif($status == 0){
                                                echo '<span class="badge iq-bg-warning">Pending</span></td>';
                                            }else{
                                                echo '<span class="badge iq-bg-danger">declined</span></td>';
                                            }
                                        ?>
                                        
                                    </td>
                                    <td> <?php echo $created; ?> </td>
                                    <td>
                                    <div class="flex align-items-center list-user-action">
                                       
                                    <!-- view details modal -->
                                    <a class="iq-bg-primary" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $id; ?>"  href="javascript:void();"><i class="fa fa-eye"></i></a>
                                    <!-- view details body modal -->
                                    <div style="width: 40%; left:20%;" class="myown modal fade bd-example-modal-lg<?php echo $id; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Loan Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">

                                                <div class="iq-card">
                                                    <!-- <div class="iq-card-header d-flex justify-content-between">
                                                        <div class="iq-header-title">
                                                            <h2 class="card-title"><span class="badge iq-bg-success" > Job Opportunity Details</span></h2>
                                                        </div>
                                                    </div> -->
                                                    <div class="iq-card-body row">
                                                    
                                                        <div class="about-info m-0 p-0 col-md-12">
                                                            <!-- <hr> -->
                                                             <h4 class="mb-2"><span class="badge iq-bg-primary">Loan Code:</span> <?php echo $code; ?></h4>
                                                             <h4 class="mb-2"><span class="badge iq-bg-primary">employee Name:</span> <?php echo $fullname; ?></h4>
                                                             <h4 class="mb-2"><span class="badge iq-bg-primary">Loan Amount:</span> <?php echo $amount; ?></h4>
                                                             <h4 class="mb-2"><span class="badge iq-bg-primary">Loan Balance:</span> <?php echo $balance; ?></h4>
                                                             <h4 class="mb-2"><span class="badge iq-bg-primary">Loan Duration:</span> <?php echo $duration.' Month'; ?></h4>

                                                            <hr>
                                                        </div>
                                                        <hr>
                                                       

                                                        <hr>

                                                    </div>
                                                </div>

                                                

                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                          
                                          <!--status link  -->
                                             <?php
                                            if ($status == 0) {?>
                                                <a onclick="return confirm('Are Sure You Want To Approve ?')" href="approve-loan?id=<?php echo $id; ?>" class="iq-bg-success fa fa-check-circle"></a>
                                                <a onclick="return confirm('Are Sure You Want To Decline ?')" href="decline-loan?id=<?php echo $id; ?>" class="iq-bg-danger fa fa-close"></a>
                                           <?php }elseif ($status == 2) {
                                                echo '<i  class="iq-bg-danger fa fa-check-circle"></i>';
                                            }else{
                                                echo '<i  class="iq-bg-success fa fa-check-circle"></i>';
                                            }
                                        ?> 
                                         
                                          
                                          
                                       </div>
                                    </td>
                                 </tr>

                                 <?php } ?>
                             </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
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