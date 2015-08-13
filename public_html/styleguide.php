<?php header("X-UA-Compatible: IE=edge"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6 oldie"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7 oldie"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8 oldie"><![endif]-->
<!--[if IE 9]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-js"><!--<![endif]-->

	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Big Juicy SASS</title>

		<link rel="stylesheet" href="/resources/vendor/normalize.css/normalize.css">
		<link rel="stylesheet" href="/resources/site/css/styles.css">

		<?php /* Font awesome */ ?>
		<?php /* <link rel="stylesheet" href="/resources/vendor/font-awesome/css/font-awesome.min.css"> */ ?>

		<?php /* html5shiv */ ?>
		<!--[if lt IE 9]>
			<script src="/resources/vendor/html5shiv/dist/html5shiv.min.js"></script>
			<script src="/resources/vendor/html5shiv/dist/html5shiv-printshiv.min.js"></script>
		<![endif]-->

	  	<?php /* Magnific Styles  */ ?>
	  	<?php /* <link rel="stylesheet" type="text/css" href="/resources/vendor/magnific-popup/dist/magnific-popup.css" /> */ ?>

	  	<?php /* Slick */ ?>
	  	<?php
			/*
			<link rel="stylesheet" type="text/css" href="/resources/vendor/slick-carousel/slick/slick.css">
			<link rel="stylesheet" type="text/css" href="/resources/vendor/slick-carousel/slick/slick-theme.css">
			*/
		?>

		<?php /* Favicons http://realfavicongenerator.net/
		  	use both these too
			<link rel="icon" href="/favicon.ico" type="image/x-icon" />
			<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		  	*/
		?>

		<?php // Open graph protocol
		  /*
			<meta property="og:title" content="">
			<meta property="og:description" content="">
			<meta property="og:image" content="">
			<meta property="og:type" content="website">
			<meta property="og:site_name" content="">
			<meta property="og:url" content="http://www.<?php echo $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']; ?>">
		  */
		?>
		<?php // Twitter Cards
			/*
				<meta name="twitter:card" content="summary">
				<meta name="twitter:url" content="http://www.<?php echo $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI']; ?>">
				<meta name="twitter:title" content="">
				<meta name="twitter:description" content="">
				<meta name="twitter:image" content="">
			*/
		?>
	</head>

  <body>

	<div class="fw">
		<div class="row">
			<main id="main" class="styleguide">
				<h1>Styleguide</h1>

		        <header>
		            <h1>Heading One</h1>
		        </header>
		        <h2>Heading Two</h2>
		        <h3>Heading Three</h3>
		        <h4>Heading Four</h4>
		        <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Tenetur reprehenderit harum mollitia magni magnam, <a href="">dolorum pariatur deleniti nesciunt</a> voluptatibus voluptas. Esse maiores, necessitatibus vel quibusdam consequuntur laborum, inventore vitae repudiandae repellendus animi natus beatae, ad quas aspernatur dolores consequatur nostrum.</p>

				<label class="style">Centred</label>
				<h2 class="centred">Centred header</h2>

		        <hr>

				<label class="style">Grid</label>
				<p>These are only coloured for the purpose of the styleguide, they will not be styled this way on any other page</p>

				<label class="style">2 columns</label>

				<div class="row">
					<div class="col-6">.col-6</div>
					<div class="col-6">.col-6</div>
				</div>

				<label class="style">3 columns</label>
				<div class="row">
					<div class="col-4">.col-4</div>
					<div class="col-4">.col-4</div>
					<div class="col-4">.col-4</div>
				</div>

				<label class="style">4 columns</label>
				<div class="row">
					<div class="col-3">.col-3</div>
					<div class="col-3">.col-3</div>
					<div class="col-3">.col-3</div>
					<div class="col-3">.col-3</div>
				</div>

				<label class="style">5 columns</label>
				<div class="row">
					<div class="col-25">.col-25</div>
					<div class="col-25">.col-25</div>
					<div class="col-25">.col-25</div>
					<div class="col-25">.col-25</div>
					<div class="col-25">.col-25</div>
				</div>

				<label class="style">6 columns</label>
				<div class="row">
					<div class="col-2">.col-2</div>
					<div class="col-2">.col-2</div>
					<div class="col-2">.col-2</div>
					<div class="col-2">.col-2</div>
					<div class="col-2">.col-2</div>
					<div class="col-2">.col-2</div>
				</div>

				<label class="style">12 columns</label>
				<div class="row">
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>
					<div class="col-1">.col-1</div>

				</div>

				<label class="style">larger columns</label>
				<div class="row">
					<div class="col-7">.col-7</div>
					<div class="col-5">.col-5</div>
				</div>
				<div class="row">
					<div class="col-8">.col-8</div>
					<div class="col-4">.col-4</div>
				</div>
				<div class="row">
					<div class="col-9">.col-9</div>
					<div class="col-3">.col-3</div>
				</div>
				<div class="row">
					<div class="col-10">.col-10</div>
					<div class="col-2">.col-2</div>
				</div>
				<div class="row">
					<div class="col-11">.col-11</div>
					<div class="col-1">.col-1</div>
				</div>
				<div class="row">
					<div class="col-12">.col-12</div>
				</div>


				<hr>

		        <label class="style">UL</label>
		        <ul>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		        </ul>

				<label class="style">oL</label>
		        <ol>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		            <li>Some list item</li>
		        </ol>

				<label class="style">Blockquote</label>
		        <blockquote>
		            <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam repellendus velit quas, architecto ut impedit tempora ipsum dignissimos veniam odio officiis nemo consequuntur fuga ea, commodi reiciendis, libero maiores dolorem!&rdquo;</p>
		            <footer>
		              <cite>Joe Bloggs</cite>
		            </footer>
		        </blockquote>

		        <hr>

				<label class="style">Select</label>
				<br>
				<br>

		          <div class="select">
		              <select>
		                <option value="select_option1">Select Option 1</option>
		                <option value="select_option2">Select Option 2</option>
		                <option value="select_option3">Select Option 3</option>
		              </select>
		          </div>

		        <hr>

				<label class="style">Buttons</label>

				<br>
				<br>

		        <a href="#" class="cta inline">Call to action</a>

				<br>
				<br>

		        <div class="clear"></div>

		        <hr>

				<label class="style">DIB Image List</label>
		        <ul class="dib-images">
					<li>
						<img src="https://unsplash.it/100/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/300/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/400/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/250/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/423/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/123/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/291/200" alt="">
					</li>
					<li>
						<img src="https://unsplash.it/700/200" alt="">
					</li>

		        </ul>
		        <hr>

				<label class="style">Table</label>

				<br><br>

		        <table>
		            <thead>
		            	<tr>
		            		<th>Typical Values</th>
		            		<th>Per 100g</th>
		            		<th>Per Bag (200g)</th>
		            		<th>% Based on GDA</th>
		            	</tr>
		            </thead>
		            <tbody>
		            	<tr>
		            		<th>Energy</th>
		            		<td>256 kj<br><strong>61 kcal</strong></td>
		            		<td>512 kj<br><strong>122 kcal</strong></td>
		            		<td><strong>3.8%</strong></td>
		            	</tr>
		            	<tr>
		            		<th>Carbs</th>
		            		<td>257 kj<br><strong>61 kcal</strong></td>
		            		<td>512 kj<br><strong>122 kcal</strong></td>
		            		<td><strong>3.8%</strong></td>
		            	</tr>
		            	<tr>
		            		<th>Fat</th>
		            		<td>258 kj<br><strong>61 kcal</strong></td>
		            		<td>512 kj<br><strong>122 kcal</strong></td>
		            		<td><strong>3.8%</strong></td>
		            	</tr>
		            	<tr>
		            		<th>Sugar</th>
		            		<td>259 kj<br><strong>61 kcal</strong></td>
		            		<td>512 kj<br><strong>122 kcal</strong></td>
		            		<td><strong>3.8%</strong></td>
		            	</tr>
		            	<tr>
		            		<th>Fibre</th>
		            		<td>260 kj<br><strong>61 kcal</strong></td>
		            		<td>512 kj<br><strong>122 kcal</strong></td>
		            		<td><strong>3.8%</strong></td>
		            	</tr>
		            </tbody>
		        </table>

				<br>
				<br>

				<label class="style">Thumb slider</label>

				<br>
				<br>

		        <div class="slick-slider">
					<div>
		              <img src="https://unsplash.it/200?image=200" alt="" class="thumb-img" />
		            </div>
					<div>
		              <img src="https://unsplash.it/200?image=34" alt="" class="thumb-img" />
		            </div>
					<div>
		              <img src="https://unsplash.it/200?image=19" alt="" class="thumb-img" />
		            </div>
					<div>
		              <img src="https://unsplash.it/200?image=10" alt="" class="thumb-img" />
		            </div>

		        </div>

		        <hr>

				<label class="style">Form</label>

				<br>
				<br>

				<form action="" class="form">
		            <div class="field">
		                <label for="">Text input</label>
		                <input type="text" value="value">
		            </div>

		            <div class="field">
		                <label for="">Placeholder example</label>
		                <input type="text" placeholder="Placeholder">
		            </div>

		            <div class="field">
		                <label for="">Number input</label>
		                <input type="number" value="1">
		            </div>

		            <div class="field">
		                <label for="">Email input</label>
		                <input type="email" placeholder="email@email.com">
		            </div>

		            <div class="field textarea">
		                <label for="">Textarea</label>
		                <textarea name="" id="" cols="30" rows="10"></textarea>
		            </div>

		            <button type="submit">Send Message</button>

		        </form>

				<br>
				<br>

				<label class="style">Map</label>

				<br><br>
				<div id="map"></div>

				<br><br>

			</main>
		</div>
	</div>

	<div class="styleguide">
		<label class="style">Banners</label>
		<br>
		<br>
		<div class="fw bnrs">
			<section class="bnr">
				<img src="https://unsplash.it/1920/800" alt="" class="bnr-image">
				<div class="text">
					<h2>Header 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam reprehenderit vero explicabo architecto non eveniet blanditiis, provident laboriosam! Obcaecati, eum?</p>
					<a class="cta" href="">Button</a>
				</div>
			</section>
			<section class="bnr">
				<img src="https://unsplash.it/1920/800" alt="" class="bnr-image">
				<div class="text">
					<h2>Header 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam reprehenderit vero explicabo architecto non eveniet blanditiis, provident laboriosam! Obcaecati, eum?</p>
					<a class="cta" href="">Button</a>
				</div>
			</section>
		</div>
	</div>

	<script src="/resources/vendor/modernizr/modernizr.js"></script>

	<!--[if lt IE 9]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <script>window.jQuery || document.write('<script src="/resources/vendor/jquery-legacy/dist/jquery.min.js"><\/script>')</script> <![endif]-->
	<!--[if gte IE 9]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> <script>window.jQuery || document.write('<script src="/resources/vendor/jquery-modern/dist/jquery.min.js"><\/script>')</script><!--<![endif]-->
	<?php // <script src="/resources/vendor/jquery-migrate/jquery-migrate-1.2.1.min.js"></script> ?>
	<script src="/resources/vendor/respond/dest/respond.min.js"></script>

	<?php //<!-- General scripts --> ?>
	<?php /*<script src="//maps.googleapis.com/maps/api/js?sensor=false"></script>*/ ?>
	<?php /*<script src="/resources/vendor/datejs/date.js"></script> */ ?>
	<?php /*<script src="/resources/vendor/waypoints/lib/jquery.waypoints.min.js"></script> */ ?>
	<?php // <script src="/resources/vendor/jquery-validate/dist/jquery.validate.min.js"></script> ?>
	<?php // <script src="/resources/vendor/slick-carousel/slick/slick.min.js"></script> ?>
	<?php // <script src="/resources/vendor/placeholders/placeholders.min.js"></script> ?>

	<?php // animation libraries ?>

	<?php /* Velocity
	  <script src="/resources/vendor/velocity/velocity.min.js"></script>
	  <script src="/resources/vendor/velocity/velocity.ui.min.js"></script>
	*/ ?>

	<?php /* GSAP
	  <script src="/resources/vendor/gsap/src/minified/jquery.gsap.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/plugins/CSSPlugin.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/easing/EasePack.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/TimelineLite.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/TimelineMax.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/TweenLite.min.js"></script>
	  <script src="/resources/vendor/gsap/src/minified/TweenMax.min.js"></script>
	*/ ?>

	<?php /* Lightboxes  */ ?>
	<?php /*<script src="/resources/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script> */ ?>

	<?php /* If you want to add any others to your project easy just duplicate the line below */ ?>
	<?php /*<script src="/resources/vendor/"></script> */ ?>
	<?php /*<script src="/resources/site/js/"></script> */ ?>

	<script src="/resources/site/js/global.min.js"></script>

</body>
</html>
