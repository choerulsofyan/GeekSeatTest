<!DOCTYPE html>
<html>
	<head>
		<title>Witch Killer</title>
	</head>
	<body>
		<form method="POST" action="index.php" style="width:45%;">
			<fieldset>
				<legend>First Person</legend>
				<label for="first-age-of-death">Age of Death</label>
				<input type="text" id="first-age-of-death" name="first_age_of_death" value="<?php echo isset($_POST['first_age_of_death']) ? $_POST['first_age_of_death'] : '' ;?>">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="first-year-of-death">Year of Death</label>
				<input type="text" id="first-year-of-death" name="first_year_of_death" value="<?php echo isset($_POST['first_year_of_death']) ? $_POST['first_year_of_death'] : '' ;?>">
			</fieldset>
			<br />
			<fieldset>
				<legend>Second Person</legend>
				<label for="second-age-of-death">Age of Death</label>
				<input type="text" id="second-age-of-death"  name="second_age_of_death" value="<?php echo isset($_POST['second_age_of_death']) ? $_POST['second_age_of_death'] : '' ;?>">
				&nbsp;&nbsp;&nbsp;&nbsp;
				<label for="second-year-of-death">Year of Death</label>
				<input type="text" id="second-year-of-death" name="second_year_of_death" value="<?php echo isset($_POST['second_year_of_death']) ? $_POST['second_year_of_death'] : '' ;?>">
			</fieldset>
			<br />
			<input type="submit" name="submit">
		</form>
		<br />
	</body>
</html>

<?php

if (isset($_POST['first_age_of_death']) && $_POST['first_age_of_death'] == '') {
	$firstAgeOfDeath = $_POST['first_age_of_death'];
	echo "Please fill the first person age of death!";
	exit();
}

if (isset($_POST['first_year_of_death']) && $_POST['first_year_of_death'] == '') {
	$firstYearOfDeath = $_POST['first_year_of_death'];
	echo "Please fill the first person year of death!";
	exit();
}

if (isset($_POST['second_age_of_death']) && $_POST['second_age_of_death'] == '') {
	$secondAgeOfDeath = $_POST['second_age_of_death'];
	echo "Please fill the second person age of death!";
	exit();
}

if (isset($_POST['second_year_of_death']) && $_POST['second_year_of_death'] == '') {
	$secondYearOfDeath = $_POST['second_year_of_death'];
	echo "Please fill the second person year of death!";
	exit();
}

$firstAgeOfDeath = $_POST['first_age_of_death'];
$firstYearOfDeath = $_POST['first_year_of_death'];
$secondAgeOfDeath = $_POST['second_age_of_death'];
$secondYearOfDeath = $_POST['second_year_of_death'];

if ($firstAgeOfDeath != '' && $firstYearOfDeath != '' && $secondAgeOfDeath != '' && $secondYearOfDeath != '' ) {
	include 'BraveProgrammer.php';
	$knight = new BraveProgrammer($firstAgeOfDeath, $firstYearOfDeath, $secondAgeOfDeath, $secondYearOfDeath);
	$knight->countAverageKills();
	$knight->printAnswer();
}

?>