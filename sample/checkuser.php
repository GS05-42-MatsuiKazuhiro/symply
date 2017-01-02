<?php
function checkuser($fid, $fname, $femail, $fphoto, $mysqli) {

	// すでにユーザーが存在するかどうかを確認する
	$exist_check = "SELECT * FROM fb_login WHERE fid =" .$fid. "";
	$result = $mysqli->query($exist_check);

	if ($result->num_rows == 0) {
		// 新規ユーザーの場合は情報を保存
		$query = "INSERT INTO fb_login(fid, name, email, photo) VALUES('$fid','$fname','$femail', '$fphoto')";
		$mysqli->query($query);
	} else {
		// 既存ユーザーの場合はなにもしない
	}
}