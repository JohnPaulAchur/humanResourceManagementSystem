<?php
$emp = dbConnect()->prepare("Select count(id) as no FROM employee WHERE status=1");
$emp->execute();
$r = $emp->fetch();
$ActiveEmp = $r['no'];

$mon = date('m');
$y = date('Y');

$pa =dbConnect()->prepare("SELECT sum(net) as net, sum(total_deduction) as ded FROM  payment_activity WHERE month=? AND year=? ");
$pa->execute([$mon, $y]);
$rr = $pa->fetch();
$payroll = $rr['net']/1000000;
if($payroll > 1){
    $payroll = number_format($payroll).'M';
}
else{
    $payroll = 0;
}

$deduction = $rr['ded']/1000000;
if($deduction > 1){
    $deduction = number_format($deduction).'M';
}
else{
    $deduction = 0;
}

?>