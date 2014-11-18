

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="index.php">
				<img src="assets/images/ONeillHealthcareLogo.png" class="logo" alt="O'Neill Healthcare Logo" />
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">

				<li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="index.php">Home</a></li>

				

				<li class="dropdown abpg <?php echo ($page == "about" ? "active" : "")?>">

					<a href="about.php" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>

					<ul class="dropdown-menu">
						<li class="<?php echo ($page =="about" ? "active" : "")?>"><a href="about.php">About</a></li>

						<li class="<?php echo ($page =="lifestyle" ? "active" : "")?>"><a href="lifestyle.php">Lifestyle</a></li>
					</ul>
				</li>

				<li class="dropdown srvpg <?php echo ($page == "srv" ? "active" : "")?>">
					<a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="<?php echo ($page =="nursing" ? "active" : "")?>"><a href="services/skilled-nursing.php">Skilled Nursing</a></li>

						<li class="<?php echo ($page =="assistedliving" ? "active" : "")?>"><a href="services/assisted-living.php">Assisted Living</a></li>

						<li class="<?php echo ($page =="independentliving" ? "active" : "")?>"><a href="services/independent-living.php">Independent Living</a></li>

						<li class="<?php echo ($page =="rehab" ? "active" : "")?>"><a href="services/rehab-and-therapy.php">Rehabilitative Therapies</a></li>

						<li class="<?php echo ($page =="memory" ? "active" : "")?>"><a href="services/memory-support.php">Memory Support</a></li>

						<li class="<?php echo ($page =="hospice" ? "active" : "")?>"><a href="services/hospice.php">Hospice Care</a></li>

						<li class="<?php echo ($page =="dialysis" ? "active" : "")?>"><a href="services/dialysis.php">Dialysis</a></li>
					</ul>
				</li>


				<li class="dropdown locpg <?php echo ($page == "loc" ? "active" : "")?>">
					<a href="locations.php" class="dropdown-toggle" data-toggle="dropdown">Locations <b class="caret"></b></a>
					<ul class="dropdown-menu">

						<li class="<?php echo ($page =="bb" ? "active" : "")?>"><a href="bayvillage.php">Bay Village</a></li>

						<li class="<?php echo ($page =="fp" ? "active" : "")?>"><a href="fairview.php">Fairview Park</a></li>

						<li class="<?php echo ($page =="lake" ? "active" : "")?>"><a href="lakewood.php">Lakewood</a></li>

						<li class="<?php echo ($page =="wp" ? "active" : "")?>"><a href="northolmsted.php">North Olmsted </a></li>

						<li class="<?php echo ($page =="cr" ? "active" : "")?>"><a href="northridgeville.php">North Ridgeville</a></li>

					</ul>
				</li>
				<li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="contact.php">Contact</a></li>

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
	if ($(window).width() > 780) {
		$('.abpg').click(function(){
		  		window.location = 'about.php';
		});
		$('.srvpg').click(function(){
		  		window.location = 'services.php';
		});
		$('.locpg').click(function(){
		  		window.location = 'locations.php';
		});
	}
</script>