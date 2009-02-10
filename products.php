<?php require "includes/header.php" ?>
<div id="intro">
	<ul id="nav-links">
		<li><a href="">Mobile &amp; SMS</a></li>
		<li class="active"><a href="">Ruggedized Computing</a></li>
		<li><a href="">Social Networking</a></li>
		<li><a href="">Wiki</a></li>
	</ul>

	<div id="statement">
		<h1>Defining New Directions in Development</h1>
		<p class="p1">
			Combining low-tech hardware with sophisticated open-source software,
			we explore novel ways to both empower young people and improve UNICEF's
			operations. We collaborate with others to make this happen.
		</p>
	</div>
	
	<ul id="product-links">
		<li class="mobile">
			<h3>Mobile &amp; SMS</h3>
			<p><strong>RapidSMS</strong>: Collecting data, coordinating logistics, enhancing communication, (with mobile phones).</p>
		</li>
		<li class="bee">
			<h3>Ruggedized Computing</h3>
			<p><strong>The Bee</strong>: Data and communication anywhere, providing connectivity.<br /><br /></p>
		</li>
		<li class="social">
			<h3>Social Networking</h3>
			<p><strong>YouthNet</strong>: forming connections, working together, creating opportunities.</p>
		</li>
		<li class="wiki">
			<h3>Wiki</h3>
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
	
		<h2>Blog</h2>
		<p>In purus. Mauris suscipit ipsum adipiscing ligula. Duis eu odio eu urna vehicula fringilla. Pellentesque ut eros. Sed sit amet eros. Nulla commodo leo eget elit. Mauris fermentum. Suspendisse sit amet ligula id orci accumsan faucibus. Vestibulum facilisis ante. Vivamus volutpat semper turpis. In suscipit mattis arcu. </p>
		<p>Phasellus nisl libero, pulvinar sed, laoreet sed, semper eu, mauris. Sed pulvinar consectetur lorem. Quisque tincidunt, arcu a egestas pulvinar, sem urna tempus leo, et ornare quam nibh nec pede. Suspendisse hendrerit consectetur est. Nulla metus. Aliquam et diam in sem sagittis gravida. Aliquam a turpis eget mi scelerisque tincidunt. Donec facilisis. Donec ut odio vel felis auctor placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec augue. </p>
		<p>Morbi lacus. Suspendisse vel orci. Maecenas pede. Phasellus varius erat at risus. Sed arcu. Mauris arcu. Curabitur suscipit sollicitudin eros. Donec interdum ligula. Curabitur varius. Donec congue. Vivamus justo pede, tristique id, varius ut, mollis eget, mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed nunc. Praesent cursus, mi at bibendum tincidunt, tortor justo semper sapien, eu sollicitudin tortor quam at eros. Nulla a erat ut nulla pulvinar eleifend. Integer id metus. Sed nunc. Vestibulum nunc ante, semper at, cursus sed, tincidunt eget, lacus. Donec tortor urna, blandit nec, placerat id, rutrum id, augue. Mauris nibh orci, tempor quis, tincidunt a, vulputate eget, lorem.</p>
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
		
		<?php print file_get_contents("/tmp/feeds/nyt"); ?>
	</div>
</div>
<?php require "includes/footer.php" ?>
