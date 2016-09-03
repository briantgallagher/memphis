function generate_controls() {
	// generate a series of <li> to be the controls for the flickity utility and append them to the #carousel-controls <ul>

	var controls = [];

	// get control type
	$('.carousel-item').each(function() {
		controls.push(parse_carousel_type($(this).attr('class')));
	});

	// generate and append html elements
	var carousel_controls = document.getElementById('carousel-controls');
	for(i = 0; i < controls.length; i++) {
		var li = document.createElement('li');
		var span = document.createElement('span');
		var a = document.createElement('a');

		span.setAttribute('class', 'carousel-control carousel-control-' + controls[i]);
		a.appendChild(span);
		li.appendChild(a);

		carousel_controls.appendChild(li);
	};

	// add .is-selected Flickity class to first control
	$('#carousel-controls > li:first-child').addClass('is-selected');
}


function parse_carousel_type(class_string) {
	// receive class string from a .carousel-item and return the string of its frame type (or return default)

	var classes = class_string.split(" ");
	var type = 'default';

	for(i = 0; i < classes.length; i++) {
		if(classes[i].indexOf("carousel-item-") !== -1) {
			var type = classes[i].substring(classes[i].lastIndexOf('-') + 1, classes[i].length);
		}
	}

	return type;
}

function get_vivus_var() {
	// return ids of featured-item svgs as an array
	// replace hyphen with underscore for JS variable naming

	var vars = [];


	$('.featured-item').each(function() {
		var id = $(this).find('svg').attr('id');
		id = id.replace('-', '_');
		vars.push(id);
	});

	return vars;
}

$(document).ready(function(){

	// menu toggle
	$('#menu-link').click(function() {
		$('body').toggleClass('menu-active');
		$(this).blur();
		return false;
	});

	// click-outside support for open menu state
	$('body').on('click touchstart', function(e) {
		if($(this).hasClass('menu-active')) {
			if(!$(e.target).closest('nav').length) {
				$(this).removeClass('menu-active');
			}
		}
	});

	// enable Flickity if slides are present
	if($('.carousel').length !== 0) {

		// generate controls/bullets for carousel if controls area is present
		if($('#carousel-controls').length !== 0) {
			generate_controls();	
		}

		// initialize Flickity
		var $carousel = $('.carousel').flickity({
			prevNextButtons: true,
			pageDots: false,
			setGallerySize: false
		});

		var flkty = $carousel.data('flickity');

		var $cellButtonGroup = $('#carousel-controls');
		var $cellButtons = $cellButtonGroup.find('li');

		// update selected cellButtons
		$carousel.on( 'cellSelect', function() {
		  $cellButtons.filter('.is-selected')
		    .removeClass('is-selected');
		  $cellButtons.eq( flkty.selectedIndex )
		    .addClass('is-selected');
		});

		// select cell on button click
		$cellButtonGroup.on( 'click', 'li', function() {
		  var index = $(this).index();
		  $carousel.flickity('select', index );
		});
	}

	// setup Vivus animation
	if($('.featured-item').length !== 0) {
		var vivis_var = [];
		vivus_var = get_vivus_var();

		for(var i= 0; i < vivus_var.length; i++) {
			window[vivus_var[i]] = new Vivus(vivus_var[i].replace('_', '-'), {type: 'scenario', duration: 30, start: 'manual'});
		}
	}

	$('.featured-item').on('mouseenter', function() {
		// play Vivus animation on mouseenter

		var id = $(this).find('svg').attr('id').replace('-', '_');

		window[id].reset().play();
	});

	$('.featured-item').on('mouseleave', function() {
		// play Vivus animation in reverse

		var id = $(this).find('svg').attr('id').replace('-', '_');

		window[id].play(-1);
	});
});