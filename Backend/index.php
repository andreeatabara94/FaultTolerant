<html>
	<?php
		$file_name = "";
	    $file_size = "";
	    $file_tmp = "";
	    $file_type = "";
	    if(isset($_FILES['uploadFile'])){

	    	$file_name = $_FILES['uploadFile']['name'];
		    $file_size = $_FILES['uploadFile']['size'];
		    $file_tmp = $_FILES['uploadFile']['tmp_name'];
		    $file_type = $_FILES['uploadFile']['type'];
	      //$errors= array();
	      
	      //if(empty($errors)==true) {
	        move_uploaded_file($file_tmp,$file_name);
	    	echo "Success";
	      /*}else{
	         print_r($errors);
	      }*/
	    }
	?>
	<head>
		<title>CS347</title>
	</head>
	<body>
	      
	    <form action="" method="POST" enctype="multipart/form-data">
	        <input type="file" name="uploadFile">
	        <input type="submit" value="Upload">
	    </form>

	    <ul>
            <li>Sent file: <?php echo $file_name;  ?>
            <li>File size: <?php echo $file_size;  ?>
        	<li>File type: <?php echo $file_type; ?>
        </ul>
	      
	</body>
</html>