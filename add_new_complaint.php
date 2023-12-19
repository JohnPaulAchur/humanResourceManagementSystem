<?php include 'header.php'; ?>

<?php 

if (isset($_POST['submit'])){
      $desc = check_input($_POST['description']);
      $employee = check_input($_POST['employee']);
      $type = check_input($_POST['type']);
      $complaint_date = check_input($_POST['complaint_date']);
      $status = check_input($_POST['status']);
		$created = date('Y-m-d');

   
      if (empty($desc)  || empty($employee) || empty($type) || empty($complaint_date) || empty($status)) {
         echo "<script>alert('You Have Not Completed All Required Fields!')</script>";
      }else{
				$mainImage = $_FILES['attachment']['name'];
				$source = $_FILES['attachment']['tmp_name'];
				$error = $_FILES['attachment']['error'];
				$size = $_FILES['attachment']['size'];
				$imgtype = $_FILES['attachment']['type'];

				$fileExt = explode('.',$mainImage);
				$mainExt = strtolower(end($fileExt));

				$allow = array('jpeg','png','jpg','jpeg','gif');   

				if (in_array($mainExt, $allow)) {
					if ($error === 0) {
						if ($size < 3000000) {
							$newName = uniqid('',true) . "." . $mainExt;

							$destination = 'images/complain/' . $newName;

							$upload = move_uploaded_file($source,$destination);

         $reg = dbconnect()->prepare("INSERT INTO complain(description,employee,complaint_type,complaint_date,status,attachment,created) VALUES(?,?,?,?,?,?,?)");
         $reg->execute([$desc,$employee,$type,$complaint_date,$status,$newName,$created]);
         if($reg){
         echo "<script> alert('Success, Complain Submitted successfully!');</script>";
         }else{
            echo "<script> alert ('Oops, Operation Failed !'); window.location='view_complaint'</script>";
               }
         }else {
            echo "<script> alert('File size is too big!!!');</script>";
         }
      }else {
         echo "<script> alert('An error occurred!!!');</script>";
      }
   }else {
      echo "<script> alert('File extension is not supported!!!');</script>";
   }
   }
 }


?>

<div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New Complain</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="Description">Description:</label>
                                   <textarea  name="description" class="form-control"> </textarea>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="Course">Employee:</label>
                                       <select name="employee" class="form-control">
                                         <option selected disabled> -- Select Employee -- </option>
                                            <?php
                                            $query = dbConnect()->prepare("SELECT * FROM employee");
                                            $query->execute();
                                            while($row=$query->fetch()){
                                                $id = $row['id'];
                                                $username = $row['firstname'].' '.$row['lastname'];?>
                                            <option value="<?php echo $username; ?>"><?php echo $username; ?></option>
                                            <?php } ?>
                                        </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                 <label for="compliant type">Complaint Type:</label>
                                       <select name="type" class="form-control">
                                         <option selected disabled> -- Select Complaint Type -- </option>
                                            <?php
                                            $query = dbConnect()->prepare("SELECT * FROM complaint_type");
                                            $query->execute();
                                            while($row=$query->fetch()){
                                                $id = $row['id'];
                                                $type = $row['type'];?>
                                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                            <?php } ?>
                                        </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="Complaint Date">Complaint Date:</label>
                                    <input name="complaint_date" type="date" class="form-control">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select name="status" type="text" class="form-control">
                                        <option value=""> --Select-- </option>
                                        <option value="Testing">Testing</option>
                                        <option value="Testing 2">Testing 2</option>
                                    </select>
                                </div>
                                 <div class="form-group col-md-12">
                                    <label for="attachment">Attachment:</label>
                                    <input name="attachment" type="file" class="">
                                 </div>
                              </div>
                              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
                </div>
            </div>
          </div>



<?php include 'footer.php'; ?>