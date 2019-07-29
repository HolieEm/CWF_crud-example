<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD example</title>

  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css">
  <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css">

</head>
<body>

  <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


  <div class="container">
    <div class="col-4 col-mx-auto">
      <h2 class="text-primary">Simple CRUD with PHP & MySQL</h2>

    	<form method="post" action="script/controller.php" >
    		<div class="form-group">
    			<label class="form-label">LastName</label>
    			<input class="form-input" type="text" name="last_name" value="">
    		</div>
    		<div class="form-group">
    			<label class="form-label">FirstName</label>
    			<input class="form-input" type="text" name="first_name" value="">
    		</div>
    		<div class="form-group">
    			<button class="btn btn-primary" type="submit" name="create"  value="create">Save</button>
    		</div>
    	</form>

    </div>
  </div>

</body>
</html>
