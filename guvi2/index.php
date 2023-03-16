<?php 

	require 'functions.php';

	if(!is_logged_in())
	{
		redirect('./php/login.php');
	}

	$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

	$row = db_query("select * from users where id = :id limit 1",['id'=>$id]);

	if($row)
	{
		$row = $row[0];
	}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php include '..\index1.html'; ?>
		<?php if(user('id') == $row['id']):?>
		<?php include '..\index2.html'; ?>
		<?php endif;?>
		<?php include '..\index3.html'; ?>
	
</body>
</html>