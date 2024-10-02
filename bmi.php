
<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</head>
<body>
<br>
	<form action="bmi.php" method="post">
  
    
    <div class="mb-3">
    	<div class="d-flex justify-content-center">
    		<h1>BMI</h1>
    	</div>
      <label for="disabledTextInput" class="form-label">weight</label>
      <input type="number" id="disabledTextInput" class="form-control" name="weight" placeholder="(kg)" required>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">height</label>
      <input type="number" name="height" class = "form-control" name="height" placeholder="(cm)"  required>
        
      
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" required>
        <label class="form-check-label" for="disabledFieldsetCheck">
          I'm not robot
        </label>
      </div>
    </div>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>

    <br><br>
<div class="d-flex justify-content-center">
    <?php 
	if (isset($_POST['weight']) && isset($_POST['height'])) {
		$weight	   = $_POST['weight'];
		$height    = $_POST['height'];

		 $height	= 	$height/100;
		 $bmi       =   $weight/($height * $height);
		 $bmi       =   round($bmi,2);

		 echo "You bmi is"   . $bmi . " <br>";

		 if ($bmi < 18.5) {
		 	echo "underweight";
		 }elseif ($bmi > 18.5 && $bmi < 26) {
		 	echo "normal";
		 	
		 }elseif ($bmi > 26 && $bmi < 32){
		 	echo "overfat";
		 }else{
		 	echo "hehe";
		 }
	}

 ?>
  </div>
</form>

</body>
</html>