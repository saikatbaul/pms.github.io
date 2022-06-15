<?php 

require_once ('../Model/modelTransaction.php');
$dms = showAllPick();

if (isset($_POST['submit']))
{
	foreach ($dms as $i => $dms)
	{
		$data['orderId'] = $dms['orderId'];
		$data['staffName'] = $dms['staffName'];
		$data['totalPrice'] = $dms['totalPrice'];
		$data['paymentDate'] = $dms['date'];
	}	
	addDelivered($data);
	deletePick($dms['orderId']);
}
?>