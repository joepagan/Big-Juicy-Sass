<?php header("X-UA-Compatible: IE=edge"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6 oldie"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7 oldie"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8 oldie"><![endif]-->
<!--[if IE 9]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" class="no-js"><!--<![endif]-->

	<?php include('includes/head.php'); ?>

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
						<img src="http://lorempixel.com/100/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/300/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/400/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/250/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/432/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/123/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/291/200/animals/" alt="">
					</li>
					<li>
						<img src="http://lorempixel.com/723/200/animals/" alt="">
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

		        <div class="thumb-slider">
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/1/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/2" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/1/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/2" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/1/" alt="" class="thumb-img" />
		            </div>
		            <div>
		              <img src="http://lorempixel.com/200/200/animals/2" alt="" class="thumb-img" />
		            </div>

		        </div>

		        <hr>

				<label class="style">Form</label>

				<br>
				<br>

		        <form action="" class="green form">
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
				<img src="http://lorempixel.com/1920/800/" alt="" class="bnr-image">
				<div class="text">
					<h2>Header 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam reprehenderit vero explicabo architecto non eveniet blanditiis, provident laboriosam! Obcaecati, eum?</p>
					<a class="cta" href="">Button</a>
				</div>
			</section>
			<section class="bnr">
				<img src="http://lorempixel.com/1920/800/" alt="" class="bnr-image">
				<div class="text">
					<h2>Header 2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam reprehenderit vero explicabo architecto non eveniet blanditiis, provident laboriosam! Obcaecati, eum?</p>
					<a class="cta" href="">Button</a>
				</div>
			</section>
		</div>
	</div>

    <?php include('includes/footer_scripts.php'); ?>

  </body>
</html>
