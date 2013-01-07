<html>
	<head>
		<title><?php echo "Pham Khac Tuy"; ?></title>
	</head>
	<body>
		<?php
			foreach ($query as $key) {
				# code...
				echo $key->id;
				echo "<br/>";
			}
		?>

	</body>
</html>