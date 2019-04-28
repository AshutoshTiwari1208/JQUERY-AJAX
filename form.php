<?php
$conn=mysqli_connect('localhost','root','','deltaio');


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--METADATA ABOVE-->
	<title>Login</title>
	<!--Google Fonts-->
   <link href="https://fonts.googleapis.com/css?family=Acme|Pacifico|Shadows+Into+Light|Ultra" rel="stylesheet">	<!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>

 	<div class=" text-center" style="margin-left: 20%;margin-right: 20%;">
	<h1 >Fill out the form bro !</h1>

	<form>
		Name : <input type="text" class="form-control"><br>
		Password : <input type="text" class="form-control"><br>
		Degree : 
		<select class="form-control" onchange="myfunc(this.value)">
			<option>Choose here</option>
			<?php
				$q="select * from department";
				$result=mysqli_query($conn,$q);
				while($rows=mysqli_fetch_array($result)){
			?>
				<option value="<?php echo $rows['deptid'];?>"><?php echo $rows['deptname'];?>
					
				</option>
				<?php
				    }
				?>
	    </select>

				<br>
				Class: <select class="form-control" id="dataget">
					<option>Choose here</option>
					<br>
					<button class="btn btn-primary">Click here</button>
				</select>


</form>
</div>



<script type="text/javascript">
	function myfunc(datavalue){
		$.ajax({
			url:'load.php',
			type:'POST',
			data:{datapost:datavalue},

			success : function(result){
				$('#dataget').html(result);

			}


		});

	}
</script>







<!-- jQuery for JAVASCRIPT Bootstrap CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Javscript Bootstrap CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Compiled Plugins Bootstrap CDN-->
</body>
</html>