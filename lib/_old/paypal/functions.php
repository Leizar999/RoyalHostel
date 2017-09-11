<?php
// functions.php
function check_txnid($tnxid){
	global $link;
	return true;
	$valid_txnid = true;
	//get result set
	$sql = mysqli_query($link, "SELECT * FROM `pago` WHERE txnid = '$tnxid'");
	if ($row = mysqli_fetch_array($sql)) {
		$valid_txnid = false;
	}
	return $valid_txnid;
}

function check_price($price, $id){
	$valid_price = false;
	//you could use the below to check whether the correct price has been paid for the product
	
	/*
	$sql = mysql_query("SELECT amount FROM `products` WHERE id = '$id'");
	if (mysql_num_rows($sql) != 0) {
		while ($row = mysql_fetch_array($sql)) {
			$num = (float)$row['amount'];
			if($num == $price){
				$valid_price = true;
			}
		}
	}
	return $valid_price;
	*/
	return true;
}

function updatePayments($data){
	global $link;
	
	if (is_array($data)) {
		$sql = mysqli_query($link, "INSERT INTO `pago` (txnid, payment_amount, payment_status, itemid, createdtime) VALUES (
				'".$data['txn_id']."' ,
				'".$data['payment_amount']."' ,
				'".$data['payment_status']."' ,
				'".$data['item_number']."' ,
				'".date("Y-m-d H:i:s")."'
				)");
		return mysqli_insert_id($link);
	}
}
