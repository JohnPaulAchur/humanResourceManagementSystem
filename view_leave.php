<?php include 'header.php'; ?>



<div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">View Leave Record</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                         <div id="table" class="table-editable">
                           <table class="table table-bordered table-responsive-md table-striped text-center">
                             <thead>
                               <tr>
                                 <th>#</th>
                                 <th>Employee</th>
                                 <th>Leave Category</th>
                                 <th>Duration</th>
                                 <th>Start Date</th>
                                 <th>End Date</th>
                                 <th>Status</th>
                                 <th width="40%">Description</th>
                                 <th>Updated</th>
                                 <th>Created</th>
                                 <th>Action</th>
                               </tr>
                             </thead>
                             <tbody style="font-size: 12px;">
                               
                             <?php
										$n = 0;
                              $sql = dbConnect()->prepare("SELECT * FROM leave_app");
                              $sql->execute();
										while ($row = $sql->fetch()) {
											$n++;
											$id = $row['id'];
											$employee = $row['employee'];	
											$category = $row['category'];	
											$duration = $row['duration'];
											$start_date = $row['start_date'];
											$end_date = $row['end_date'];
											$status = $row['status'];
											$desc = $row['description'];
											$update = $row['updated_on'];
											$created = $row['created'];	
										
										?>
										<tr>
											<td scope="row"><?php echo $n ?></td>
											<td><?php echo $employee; ?></td>
											<td><?php echo $category; ?></td>
											<td><?php echo $duration; ?></td>
											<td><?php echo $start_date; ?></td>
											<td><?php echo $end_date; ?></td>
											<td><?php echo $status; ?></td>
                                            <td>
                                                <?php
                                                // echo $desc;
                                                if (strlen($desc)>150) {
                                                    echo substr($desc,0,100).'...';
                                                }else {
                                                    echo $desc;
                                                }
                                                ?>
                                            </td>
											<td><?php echo $update; ?></td>
											<td><?php echo $created; ?></td>
											<td style="font-size: 14px;">
											<a href="update_leave?id=<?php echo $id; ?>" class="green"><i class="fa fa-edit"></i></a>
											<a href="del_leave?id=<?php echo $id; ?>"  onclick ="return confirm('Are You Sure You Want To Delete this Leave Record?')" class="red"><i class="fa fa-trash"></i></a>
											</td>
									<?php } ?>
										</tr>

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



<?php include 'footer.php'; ?>