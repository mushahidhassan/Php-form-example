<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--Bootstrap linking -->
	</head>
	<body>
		<div class = "container container-fluid" style="width:100% height:400px">
			<form action="next_page.php" method="post">
				<h3> Please Enter Details Here:</h3>
				First Name: <input class="form-control" type="text" placeholder="First Name" name="f_name"/>
				<br/>
				Last Name: <input class="form-control" type="text" placeholder="Last Name" name="l_name" />
				<br/>
				<input  class="btn btn-default"  type="submit" name="submit"/>
			</form>
		</div>
		
	</body>
</html>
