<?php include 'header.php'; ?>

<?php

if(isset($_POST['submit'])){
    $type = check_input($_POST['type']);
	$created = date('Y-m-d');

if (empty($type)) {
    echo "<script>alert('You Have Not Completed All Required Fields!')</script>";
}else{
    $reg = dbconnect()->prepare("INSERT INTO complaint_type(type,created) VALUE(?,?)");
    $reg->execute([$type,$created]);

if($reg){
    echo "<script> alert('Success, Complaint Type created successfully!');</script>";
    }
    else{
       echo "<script> alert ('Oops, Operation Failed !');</script>";
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
                    <h4 class="card-title">Add New Complaint Category</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form method="POST">
                <div class="row">
                        <div class="form-group col-md-12">
                        <label for="type">Complaint Type:</label>
                        <input name="type" type="text" class="form-control" placeholder="Add Complaint Type..." >
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