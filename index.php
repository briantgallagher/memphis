<?php $title = 'Portfolio'; ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php'); ?>

			<div id="center">
				<section class="stripe">
					<div class="intro">
						<div class="intro-graphic">
							<img src="/images/hero.svg" alt="Computer, Tablet and Mobile Phone" />
						</div>

						<div class="intro-text">
							<h2>Senior Software Engineer, Web Designer</h2>

							<p>I am a versatile creative professional with two decades of experience building high-performing, responsive websites for clients ranging from major corporations to small businesses and startups.</p>

							<p>My specialties include full-stack development, front-end coding working with <b>HTML</b>, <b>CSS</b>, <b>Sass</b> and <b>JavaScript</b>, user interface design and site performance optimization. I also have experience architecting applications in <b>PHP</b>, including popular content management systems such as WordPress and Webflow.</p>

							<p>I attended <b>Rochester Institute of Technology</b> where I received a Bachelor of Science degree in Information Technology with New Media Option and a minor in Communication. Over the years, I have had the pleasure of working with a variety of organizations including <b>Censo</b>, <b>GEICO</b>, <b>Cruview</b>, <b>Hydra Head Records</b> and <b>Mercedes-Benz USA</b>.</p>
						</div>
					</div>					
				</section>

				<section class="lower">

					<div class="featured">
						<h3>Selected Work</h3>

						<figure class="featured-item">
							<a href="/work/geico-com-product">
								<img src="/images/featured/geico-product.jpg" alt="Screenshot of GEICO Product Page" />
								<figcaption>
									<span>GEICO.com Product Page</span>
								</figcaption>
								
								<div class="animation">
									<?php if(file_exists($d . '/images/featured/responsive.svg')) { echo file_get_contents($d . '/images/featured/responsive.svg'); } ?>
								</div>
							</a>
						</figure>

						<figure class="featured-item">
							<a href="/work/amoskeag-flag">
								<img src="/images/featured/amoskeag-flag.jpg" alt="Amoskeag Flag flying" />
								<figcaption>
									<span>Amoskeag Flag</span>
								</figcaption>
								
								<div class="animation">
									<?php if(file_exists($d . '/images/featured/amoskeag-flag.svg')) { echo file_get_contents($d . '/images/featured/amoskeag-flag.svg'); } ?>
								</div>
							</a>
						</figure>

						<figure class="featured-item">
							<a href="/work/panorama-viewer">
								<img src="/images/featured/panorama-viewer.jpg" alt="Screenshot of Panorama Viewer" />
								<figcaption>
									<span>Panorama Viewer</span>
								</figcaption>

								<div class="animation">
									<?php if(file_exists($d . '/images/featured/panorama.svg')) { echo file_get_contents($d . '/images/featured/panorama.svg'); } ?>
								</div>
							</a>
						</figure>						

						<figure class="featured-item">
							<a href="/work/soccer-timeline">
								<img src="/images/featured/mls-timeline.jpg" alt="Screenshot of MLS Timeline" />
								<figcaption>
									<span>MLS Timeline</span>
								</figcaption>

								<div class="animation">
									<?php if(file_exists($d . '/images/featured/soccer-ball.svg')) { echo file_get_contents($d . '/images/featured/soccer-ball.svg'); } ?>
								</div>
							</a>
						</figure>						

						<figure class="featured-item">
							<a href="/work/geico-careers">
								<img src="/images/featured/geico-careers.jpg" alt="Screenshot of GEICO Careers" />
								<figcaption>
									<span>GEICO Careers</span>
								</figcaption>

								<div class="animation">
									<?php if(file_exists($d . '/images/featured/careers.svg')) { echo file_get_contents($d . '/images/featured/careers.svg'); } ?>
								</div>
							</a>
						</figure>

						<figure class="featured-item">
							<a href="/work/geico-tabbed-homepage">
								<img src="/images/featured/geico-tabbed-homepage.jpg" alt="Screenshot of GEICO Tabbed Homepage" />
								<figcaption>
									<span>GEICO Tabbed Homepage</span>
								</figcaption>
								
								<div class="animation">
									<?php if(file_exists($d . '/images/featured/geico-homepage.svg')) { echo file_get_contents($d . '/images/featured/geico-homepage.svg'); } ?>
								</div>
							</a>
						</figure>

						<figure class="featured-item">
							<a href="/work/geico-portfolio">
								<img src="/images/featured/geico-portfolio.jpg" alt="Screenshot of GEICO Portfolio" />
								<figcaption>
									<span>GEICO Portfolio</span>
								</figcaption>

								<div class="animation">
									<?php if(file_exists($d . '/images/featured/portfolio.svg')) { echo file_get_contents($d . '/images/featured/portfolio.svg'); } ?>
								</div>
							</a>
						</figure>
					</div>
				</section>
			</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_footer.php'); ?>