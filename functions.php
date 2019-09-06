<?php

	function getIdByPass($pass)
	{
		$conn = mysqli_connect("localhost", "root");
		mysqli_select_db($conn, "monetbank");

		return mysqli_fetch_row(mysqli_query($conn, "SELECT id FROM account WHERE pass='$pass'"))[0];
	}

	function getNameById($id)
	{
		$conn = mysqli_connect("localhost", "root");
		mysqli_select_db($conn, "monetbank");

		return mysqli_fetch_row(mysqli_query($conn, "SELECT name FROM account WHERE id='$id'"))[0];
	}

	function getBalanceById($id)
	{
		$conn = mysqli_connect("localhost", "root");
		mysqli_select_db($conn, "monetbank");

		return mysqli_fetch_row(mysqli_query($conn, "SELECT value FROM account WHERE id='$id'"))[0];
	}

	function createAccount($id, $pass, $name)
	{
		$conn = mysqli_connect("localhost", "root");
		mysqli_select_db($conn, "monetbank");
		
		mysqli_query($conn, "INSERT INTO account(id, pass, name) VALUES ('$id', '$pass', '$name')");
	}

	function pay($recieverid, $sender_pass, $amount)
	{
		$conn = mysqli_connect("localhost", "root");
		mysqli_select_db($conn, "monetbank");

		if(mysqli_fetch_row(mysqli_query($conn, "SELECT name FROM account WHERE id='$recieverid'"))[0] == "")
			return false;

		$reciever_balance = mysqli_fetch_row(mysqli_query($conn, "SELECT value FROM account WHERE id='$recieverid'"))[0];
		$sender_balance = mysqli_fetch_row(mysqli_query($conn, "SELECT value FROM account WHERE pass='$sender_pass'"))[0];


		if($sender_balance < $amount){
			return false;
		}else{
			$reciever_balance += $amount;
			$sender_balance -= $amount;
			
			mysqli_query($conn, "UPDATE account SET value=$reciever_balance WHERE id='$recieverid'");
			mysqli_query($conn, "UPDATE account SET value=$sender_balance WHERE pass='$sender_pass'");

			return true;
		}
	}
		


	function random_number($length, $keyspace = '123456789')
	{
		$pieces = [];
		$max = mb_strlen($keyspace, '8bit') - 1;
		for ($i = 0; $i < $length; ++$i) {
			$pieces []= $keyspace[random_int(0, $max)];
		}
		return implode('', $pieces);
	}
?>