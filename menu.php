<?php 
function menu($id_menu = 0){
	//kết bối db
	$conn = new pdo('mysql:host=localhost;dbname=menu','root','');
	$result = $conn->query("SELECT * from menu where parent_id = $id_menu");
	//thực hiện câu lệch sql
	$result->execute();
	//lấy dữ liệu
	foreach ($result as $menu ) {
		echo "<ul>";
		echo '<li>'.$menu['name'].'</li>'.'<br>';
		menu($menu['id']);
		echo "</ul>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style type="text/css" media="screen">
	</style>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php menu(); ?>
</body>
</html>
