<!DOCTYPE html>
<html lang = "en-US">
<head>
	<meta charset = "UTF-8">
<title>EZMaze Solutions</title>
<link rel = "stylesheet" type="text/css" href="main.css"/>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
<div id='banner'>
<div id='placeholder'>
		<div id='header'>
		<div id='logo'>
			<img src="Images/logo.svg">
		</div>
		<div id='menu'>
			<div id="menu_buttons">
				<ul>
				<li><a href='Contact.html'>Contact</a></li>
				<li><a href='Portfolio.html'>Portfolio</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href='index.html'>Main</a></li>

			</div>		
		</div>		
	</div>

	<!--<div id='left'>
	<p>left</p>
	</div>/-->

	<div id='article'>
	


		<?php
	$imagesTotal = 8;     // SET TOTAL IMAGES IN GALLERY

	// set description to each image
	$description[1] = 'This is a description for picture number 1 inside this slider and you can use <strong>HTML Tags</strong> inside too.';
	$description[2] = 'This is a description for picture number 2 inside this slider and you can use <em>HTML Tags</em> inside too.';
	$description[3] = 'This is a description for picture number 3 inside this slider and you can use <u>HTML Tags</u> inside too.';
	$description[4] = 'This is a description for picture number 4 inside this slider and you can use <a href="#">HTML Tags</a> inside too.';
	$description[5] = 'This is a description for picture number 5 inside this slider and you can use <u>HTML Tags</u> inside too.';
	$description[6] = 'This is a description for picture number 6 inside this slider and you can use <u>HTML Tags</u> inside too.';
	$description[7] = 'This is a description for picture number 7 inside this slider and you can use <u>HTML Tags</u> inside too.';
	$description[8] = 'This is a description for picture number 8 inside this slider and you can use <u>HTML Tags</u> inside too.';
?>

<div class="galleryContainer">
	<h1>jQuery Image Slider with Thumbnails, Bullets and Slideshow</h1>
	<p>Created by HTML-TUTS.com. You can view the full tutorial <a href="http://html-tuts.com/?p=8898" rel="nofollow" target="_blank">here</a></p>

	<div class="galleryThumbnailsContainer">
		<div class="galleryThumbnails">
			<?php
				for ($t = 1; $t <= $imagesTotal; $t++) {
					echo '<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '"><img src="images/thumbs/image' . $t . '.jpg" width="auto" height="100" alt="" /></a>';
				}
			?>
		</div>
	</div>

	<div class="galleryPreviewContainer">
		<div class="galleryPreviewImage">
			<?php
				for ($i = 1; $i <= $imagesTotal; $i++) {
					echo '<img class="previewImage' . $i . '" src="images/image' . $i . '.jpg" width="900" height="auto" alt="" />';
				}
			?>
		</div>

		<div class="galleryPreviewArrows">
			<a href="#" class="previousSlideArrow">&lt;</a>
			<a href="#" class="nextSlideArrow">&gt;</a>
		</div>
	</div>

	<div class="galleryNavigationBullets">
		<?php
			for ($b = 1; $b <= $imagesTotal; $b++) {
				echo '<a href="javascript: changeimage(' . $b . ')" class="galleryBullet' . $b . '"><span>Bullet</span></a> ';
			}
		?>
	</div>

	<div class="galleryDescription">
		<?php
			for ($x = 1; $x <= $imagesTotal; $x++) {
				echo '<div class="description' . $x . '">' . $description[$x] . '</div>';
			}
		?>
	</div>
</div>

<script type="text/javascript">
// init variables
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;
var thumbsTotalWidth = 0;

$('a.galleryBullet' + currentImage).addClass("active");
$('a.thumbnailsimage' + currentImage).addClass("active");
$('div.description' + currentImage).addClass("visible");


// SET WIDTH for THUMBNAILS CONTAINER
$(window).load(function() {
	$('.galleryThumbnails a img').each(function() {
		thumbsTotalWidth += $(this).width() + 10 + 8;
	});
	$('.galleryThumbnails').width(thumbsTotalWidth);
});


// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	$('img.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('img.previewImage' + imageNumber).show();

	$('.galleryNavigationBullets a').removeClass("active");
	$('.galleryThumbnails a').removeClass("active");
	$('.galleryDescription > div').removeClass("visible");

	$('a.galleryBullet' + imageNumber).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.description' + currentImage).addClass("visible");
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	$('img.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('img.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");
}

var slideTimer = setInterval(function() {autoChangeSlides(); }, 3000);
</script>








	</div>
</body>
</html>