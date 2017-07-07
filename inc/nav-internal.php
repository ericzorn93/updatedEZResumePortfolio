<div class="button_container" id="toggle">
	<span class="top"></span>
	<span class="middle"></span>
	<span class="bottom"></span>
</div>

<div class="overlay" id="overlay">
	<nav class="overlay-menu">
		<ul>
			<li><a href="index.php" target="_blank" class="funnyclass">Home</a></li>
			<li><a href="#footer" class="funnyclass">Contact Me</a></li>
		</ul>
	</nav>
</div>

<script>
	$('#toggle').click(function() {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
	});
</script>

