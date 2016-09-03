<?php $title = 'Portfolio'; ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php'); ?>

			<div id="center">
				<section class="stripe">
					<div class="intro">
						<div class="intro-graphic">
							<img src="/images/hero.svg" alt="Computer, Tablet and Mobile Phone" />
						</div>

						<div class="intro-text">
							<h2>Web Developer, Designer</h2>

							<p>I am a versatile web developer and designer with over a decade of experience building excellent web experiences for clients ranging from large corporations to small businesses.</p>

							<p>My specialty is front-end development, working with <b>HTML</b>, <b>CSS (SASS)</b> and <b>JavaScript</b> (plus the <b>jQuery</b> framework).  I also have experience architecting applications in the <b>PHP</b> language, including popular packages such as the CodeIgniter framework and WordPress.</p>

							<p>I attended <b>Rochester Institute of Technology</b> where I received a Bachelor of Science degree in Information Technology with New Media Option and a minor in Communication. In addition to my current position, I have also had the pleasure of working at <b>Cruview</b>, <b>Hydra Head Records</b>, <b>Mercedes-Benz USA</b> and <b>Dalina, Inc</b>.</p>
						</div>
					</div>					
				</section>

				<section class="lower">

					<div class="featured">
						<h3>Selected Work</h3>

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
							<a href="/work/geico-com-responsive">
								<img src="/images/featured/geico-responsive.jpg" alt="Screenshot of GEICO Responsive Layout" />
								<figcaption>
									<span>GEICO.com Responsive</span>
								</figcaption>
								
								<div class="animation">
									<?php if(file_exists($d . '/images/featured/responsive.svg')) { echo file_get_contents($d . '/images/featured/responsive.svg'); } ?>
								</div>
							</a>
						</figure>

						<figure class="featured-item">
							<a href="/work/geico-homepage-2011">
								<img src="/images/featured/geico-homepage-2011.jpg" alt="Screenshot of GEICO Homepage 2011" />
								<figcaption>
									<span>GEICO Homepage 2011</span>
								</figcaption>
								
								<div class="animation">
									<?php if(file_exists($d . '/images/featured/homepage-2011.svg')) { echo file_get_contents($d . '/images/featured/homepage-2011.svg'); } ?>
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