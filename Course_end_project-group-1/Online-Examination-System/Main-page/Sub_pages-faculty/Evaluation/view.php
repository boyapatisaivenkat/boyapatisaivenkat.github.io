<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="QP-html.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM files ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($files = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<iframe src="uploads/<?=$files["file_url"]?>"> </iframe>
             </div>
          		
    <?php } }?>
</body>
</html>