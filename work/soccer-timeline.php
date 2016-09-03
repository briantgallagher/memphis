<?php $title = 'MLS Timeline'; ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php'); ?>

			<div id="center">
				<section class="stripe">
					<div class="carousel">
						<figure class="carousel-item carousel-item-desktop is-selected">
							<img src="/images/frames/desktop-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/timeline-desktop-1.jpg" class="screenshot" alt="Screenshot of Soccer Timeline on desktop" />
							<img src="/images/frames/desktop.svg" class="frame" alt="" />				
						</figure>

						<figure class="carousel-item carousel-item-desktop">
							<img src="/images/frames/desktop-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/timeline-desktop-2.jpg" class="screenshot" alt="Screenshot of Soccer Timeline on desktop" />
							<img src="/images/frames/desktop.svg" class="frame" alt="" />				
						</figure>

						<figure class="carousel-item carousel-item-phone">
							<img src="/images/frames/phone-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/timeline-phone-1.jpg" class="screenshot" alt="Screenshot of Soccer Timeline on mobile phone" />
							<img src="/images/frames/phone.svg" class="frame" alt="" />
						</figure>

						<figure class="carousel-item carousel-item-phone">
							<img src="/images/frames/phone-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/timeline-phone-2.jpg" class="screenshot" alt="Screenshot of Soccer Timeline on mobile phone" />
							<img src="/images/frames/phone.svg" class="frame" alt="" />
						</figure>
						
 						<figure class="carousel-item carousel-item-tablet">
							<img src="/images/frames/tablet-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/timeline-tablet.jpg" class="screenshot" alt="Screenshot of Soccer Timeline on tablet" />
							<img src="/images/frames/tablet.svg" class="frame" alt="" />
						</figure>
					</div>
				</section>

				<section class="lower">
					<section class="controls">
						<ul id="carousel-controls">
						</ul>
					</section>

					<section class="content">
						<div class="content-heading">
							<h2>MLS Timeline</h2>
						</div>

						<div class="content-description">
							<p>Built as a personal project, this interactive infographic allows a visitor to browse through the history of Major League Soccer's table, seeing both how individual teams fared in the standings and how the league itself grew over time.</p>

							<p>When viewed on large screens, a visitor is able to isolate a single club's path through the years, seeing both changes in standings position and visual identity.<p>

							<p>The site is constructed primarily with <b>CSS (SASS)</b>, <b>HTML</b> and <b>JavaScript</b>. The majority of graphics are in the <b>SVG</b> format, allowing a single file to be used at all resolutions while weighing in with minimal filesize.</p>
						</div>

						<div class="content-visit">
							<a href="http://timeline.galacti.co" class="button button-shine">
								<span>Visit</span>
							</a>
						</div>
					</section>
				</section>
			</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_footer.php'); ?>