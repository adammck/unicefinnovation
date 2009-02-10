<?php $tab="home"; require "includes/header.php" ?>
<div id="intro">
	<div id="statement">
		<h1>Defining New Directions in Development</h1>
		<p>
			Combining low-tech hardware with sophisticated open-source software,
			we explore novel ways to both empower young people and improve UNICEF's
			operations. We collaborate with others to make this happen.
		</p>
	</div>
	<ul id="product-links">
		<li class="mobile">
			<h3><a href="/mobile-and-sms.php">Mobile &amp; SMS</a></h3>
			<p><strong>RapidSMS</strong>: Collecting data, coordinating logistics, enhancing communication, (with mobile phones).</p>
		</li>
		<li class="bee">
			<h3><a href="/rugged-computing.php">Rugged Computing</a></h3>
			<p><strong>The Bee</strong>: Data and communication anywhere, providing connectivity.<br /><br /></p>
		</li>
		<li class="social">
			<h3><a href="/social-networking.php">Social Networking</a></h3>
			<p><strong>YouthNet</strong>: forming connections, working together, creating opportunities.</p>
		</li>
		<li class="wiki">
			<h3><a href="/wiki.php">Wiki</a></h3>
			<p><strong>Uniwiki</strong>: Simplifying collaboration, sharing information, designed for children.</p>
		</li>
		<span class="float-hack"></span>
	</ul>
</div>
<div id="content" class="with-sidebar">
	<div class="nest">
		<div class="popout">
			<h2 class="first">About UNICEF</h2>
			<p>UNICEF is on the ground in over 150 countries and territories to help children survive and thrive, from early childhood through adolescence.  The world's largest provider of vaccines for developing countries, UNICEF supports child health and nutrition, good water and sanitation, quality basic education for all boys and girls, and the protection of children from violence, exploitation, and AIDS. UNICEF is funded entirely by the voluntary contributions of individuals, businesses, foundations and governments.</p>
			<p class="more">For more information on UNICEF, please go to <a href="http://unicef.org">unicef.org</a></p>
		</div>
		
		<h2>News &amp; Press</h2>
		<p>Fusce condimentum <a href="">pellentesque pede</a>. Pellentesque lacinia velit ac leo. Proin dignissim, urna id ornare faucibus, mauris turpis placerat lorem, at malesuada tortor erat vel quam. Morbi vitae dolor. Vivamus et lacus ut est euismod dictum. Aenean suscipit tortor pellentesque augue. Ut dui. Donec facilisis congue neque. Sed leo. Morbi ultricies molestie justo. Nam ligula lectus, gravida sed, lacinia vitae, sagittis at, urna. Quisque tempor, augue at convallis commodo, dolor leo lacinia neque, sed euismod lorem arcu sed dolor. </p>
	
		<?php print file_get_contents("/tmp/feeds/nyt"); ?>
	</div>
</div>
<div id="sidebar">
	<div class="nest">
		<h2>Upcoming Events</h2>
		<p>Morbi lacus. Suspendisse vel orci. Maecenas pede. Phasellus varius erat at risus.</p>
		<p>Sed arcu. Mauris arcu. Curabitur suscipit sollicitudin eros. Donec interdum ligula.</p>
		<h2>Partners</h2>
		<ul class="partners">
			<li><a href="">Partner Link</a></li>
			<li><a href="">Partner Link</a></li>
			<li><a href="">Partner Link</a></li>
			<li><a href="">Partner Link</a></li>
			<span class="float-hack"></span>
		</ul>
	</div>
</div>
<?php require "includes/footer.php" ?>
