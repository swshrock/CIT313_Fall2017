<?php include('views/elements/header.php');?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php
		if((!isset($message) || $message == null) && isset($_SESSION['message'])) {
		  $message = $_SESSION['message'];
		  unset($_SESSION['message']);
		}
		?>

		<h1>Welcome To My Final Site.</h1>
	<h3>Guys And Things They Love To Steal.</h3>
	<div id="image">
<img src="cage.jpg" height="220" width="279"/>
<img src="steal.jpeg" height="240" width="277"/>
<img src="cage2.jpeg" height="220" width="279"/>

<p>Ever since he was a boy, Gates has been obsessed with finding the legendary Knights Templar Treasure,
	the greatest fortune known to man. As Gates tries to find and decipher ancient riddles that will lead him to it,
	 he's dogged by a ruthless enemy who wants the riches for himself. Now in a race against time,
	 Gates must steal one of America's most sacred and guarded documents – the Declaration of Independence – or let it,
	 and a key clue to the mystery, fall into dangerous hands.
</p>
<h3> Continue to scroll down to get your local weather</h3>


</div>
</div>
<div class="container" id="wx">
<div class="page-header">
<h1>Weather</h1>
</div>
<form method="post" class="zip-submit" <?php /* action="<?php echo BASE_URL; ?>ajax/get_weather/" */ ?>>
<label for="zip">Enter Your Zip Code</label>
<input type="text" name="zip" id="zip" required="zip" />
<br />
<button type="submit" class="btn">Load Results</button>
</form>
</div>
	</div>
</div>
<?php include('views/elements/footer.php');?>
