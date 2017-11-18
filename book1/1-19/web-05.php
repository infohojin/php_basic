<html>
	<body>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 
 			이름: <input type="text" name="username">
 			<input type="submit">
		</form>

		<?php
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
    			// input 필드의 데이터를 가지고 옵니다.
    			$name = $_POST['username'];
    			if (empty($name)) {
    				echo "이름이 입력되지 않았습니다";
    			} else {
       				echo $name;
    			}
			}
		?>

	</body>
</html>