<?php $title = 'Panorama Viewer'; ?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_header.php'); ?>

			<div id="center">
				<section class="stripe">
					<div class="carousel">
						<figure class="carousel-item carousel-item-desktop is-selected">
							<img src="/images/frames/desktop-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/panorama-viewer-desktop-1.jpg" class="screenshot" alt="Screenshot of Panorama viewer on desktop" />
							<img src="/images/frames/desktop.svg" class="frame" alt="" />				
						</figure>

						<figure class="carousel-item carousel-item-desktop">
							<img src="/images/frames/desktop-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/panorama-viewer-desktop-2.jpg" class="screenshot" alt="Screenshot of Panorama viewer on desktop" />
							<img src="/images/frames/desktop.svg" class="frame" alt="" />				
						</figure>

						<figure class="carousel-item carousel-item-phone">
							<img src="/images/frames/phone-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/panorama-viewer-phone-1.jpg" class="screenshot" alt="Screenshot of Panorama viewer on mobile phone" />
							<img src="/images/frames/phone.svg" class="frame" alt="" />
						</figure>

						<figure class="carousel-item carousel-item-phone">
							<img src="/images/frames/phone-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/panorama-viewer-phone-2.jpg" class="screenshot" alt="Screenshot of Panorama viewer on mobile phone" />
							<img src="/images/frames/phone.svg" class="frame" alt="" />
						</figure>
						
 						<figure class="carousel-item carousel-item-tablet">
							<img src="/images/frames/tablet-mask.svg" class="mask" alt="" />
							<img src="/images/screenshots/panorama-viewer-tablet.jpg" class="screenshot" alt="Screenshot of Panorama viewer on tablet" />
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
							<h2>Panorama Viewer</h2>
						</div>

						<div class="content-description">
							<p>This gallery display was developed as a personal project with the goal of producing an engaging interface for users to browse and explore panoramic photos. When images are expanded, the visitor is able to drag horizontally to pan across the full scene and explore its details.</p>

							<p>The layout is informed by both Apple's iOS Photo app and Google's Image Search results page. Columns shift to adjust for available screen real estate and the screen centers on the full-size view when opened.</p>

							<p>Built using <b>HTML</b>, <b>JavaScript</b> and <b>CSS (SASS)</b>, the site also uses the <b>Adaptive Images</b> PHP library to generate smaller versions of the thumbnails on the fly. To keep the page's initial download size reasonable, only a subset of images are downloaded with the remainder being lazy loaded as necessary.</p>
						</div>

						<div class="content-visit">
							<a href="http://panorama.galacti.co" class="button button-shine">
								<span>Visit</span>
							</a>
						</div>
					</section>
				</section>
			</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/_footer.php'); ?>