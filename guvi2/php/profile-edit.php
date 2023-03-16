<?php 

	require 'functions.php';

	if(!is_logged_in())
	{
		redirect('login.php');
	}

	$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

	$row = db_query("select * from users where id = :id limit 1",['id'=>$id]);

	if($row)
	{
		$row = $row[0];
	}

?>

<?php include '..\profile_edit1.html'; ?>
	<?php if(!empty($row)):?>
	
		<?php include '..\profile_edit2.html'; ?>	
	<?php else:?>
		<?php include '..\profile_edit3.html'; ?>	
	<?php endif;?>


