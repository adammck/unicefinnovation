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
			<p><strong>RapidSMS</strong>: Collecting data, coordinating logistics, enhancing communication.</p>
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
			<p class="more">For more information on UNICEF, please go to <a href="http://www.unicef.org">unicef.org</a></p>
		</div>
		
		<h2>News &amp; Press</h2>
		<div class="feed">
			<li>
				<h3>
					<a href="http://mobileactive.org/usaids-development-2-0-challenge-mobile-innovation-and-winner">USAID's Development 2.0 Challenge on Mobile Innovation: And the Winner is UNICEF/Columbia University</a>
					<span class="source">Mobile Active</span>
					<span class="date">Jan 08, 2009</span>
				</h3>
			</li>
			<li>
				<h3>
					<a href="http://www.irinnews.org/Report.aspx?ReportId=82346">MALAWI: SMS to fight malnutrition</a>
					<span class="source">IRIN</span>
					<span class="date">Feb 11, 2009</span>
				</h3>
			</li>
			<li>
				<h3>
					<a href="http://www.hindustantimes.com/StoryPage/StoryPage.aspx?sectionName=&id=e2118648-eb6a-4a82-a0e4-9b81b2fe91b8&&Headline=UNICEF+wins+award+for+helping+malnourished+children">UNICEF wins top US award for helping malnourished children</a>
					<span class="source">Hindustan Times</span>
					<span class="date">Jan 10, 2009</span>
				</h3>
			</li>
		</div>
		
		<?php print file_get_contents("/tmp/feeds/nyt"); ?>
	</div>
</div>
<div id="sidebar">
	<div class="nest">
		<h2>Upcoming Events</h2>
		<p>Come see us present at:</p>
		<ul class="events">
			<li>
				<a href="http://web4dev.org"><img src="/images/buttons/web4dev.png" width="143" /></a>
				<h4><a href="http://web4dev.org">Web4Dev</a></h4>
				<p class="date">February 11-13, 2009</p>
				<p class="where">New York, NY</p>
			</li>
			<li>
				<a href="http://sxsw.com"><img src="/images/buttons/sxsw.png" width="143" /></a>
				<h4><a href="http://sxsw.com">SXSW</a></h4>
				<p class="date">March 13-17, 2009</p>
				<p class="where">Austin, TX</p>
			</li>
			<li>
				<a href="http://www.chi2009.org"><img src="/images/buttons/chi09.png" width="143" /></a>
				<h4><a href="http://www.chi2009.org">Chi 2009</a></h4>
				<p class="date">April 4-9, 2009</p>
				<p class="where">Boston, MA</p>
			</li>
		</ul>
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
