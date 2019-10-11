<html>
	<head>
		<title>Quiz Results</title>
	</head>
	<body>
		<?php $total = 0; ?>
		<p> Question 1: What color is the sky? <br>
			You answered: <?php echo $_POST["Q1"]; ?> <br>
			Correct Answer: Blue
			<?php 
				if ($_POST["Q1"] == "Blue") {
					$total ++;
				}
			?>
		</p>

		<p> Question 2: When will pigs fly? <br>
			You answered: <?php echo $_POST["Q2"]; ?> <br>
			Correct Answer: Probably never
			<?php 
				if ($_POST["Q2"] == "Probably never") {
					$total ++;
				}
			?>
		</p>

		<p> Question 3: Is water wet? <br>
			You answered: <?php echo $_POST["Q3"]; ?> <br>
			Correct Answer: Yes
			<?php 
				if ($_POST["Q3"] == "Yes") {
					$total++;
				}
			?>
		</p>

		<p> Question 4: What tastes good and rhymes with 'blicken'?<br>
			You answered: <?php echo $_POST["Q4"]; ?> <br>
			Correct Answer: Chicken
			<?php 
				if ($_POST["Q4"] == "Chicken") {
					$total++;
				}
			?>
		</p>

		<p> Question 5: Was this a good quiz?<br>
			You answered: <?php echo $_POST["Q5"]; ?> <br>
			Correct Answer: Absolutely not
			<?php 
				if ($_POST["Q5"] == "Absolutely not") {
					$total++;
				}
			?>
		</p>

		<p> Your score: <?php echo $total .  "/5 " . "<br>" . $total * 20 . "%"; ?>
	</body>
</html>
