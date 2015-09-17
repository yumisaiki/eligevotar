<?php
$bg = $options['sf_bg_image_panel_1'];
$width_panel_1 = !empty($options['sf_width_panel_1']) ? $options['sf_width_panel_1'] : 250;
$width_panel_2 = !empty($options['sf_width_panel_2']) ? $options['sf_width_panel_2'] : 250;
$width_panel_3 = !empty($options['sf_width_panel_3']) ? $options['sf_width_panel_3'] : 250;
$width_panel_4 = !empty($options['sf_width_panel_4']) ? $options['sf_width_panel_4'] : 250;

$panel1_adjusted = $width_panel_1 - ($options['sf_side_stroke'] === 'show' ?  3 : 0);

$sum1 = $width_panel_1 + $width_panel_2;
$sum2 = $width_panel_1 + $width_panel_2 + $width_panel_3;
$sum2a = $width_panel_1 + $width_panel_2 + $width_panel_3 + $width_panel_4;
$sum3 = $width_panel_2 + $width_panel_3;
$sum4 = $width_panel_2 + $width_panel_3 + $width_panel_4;

$color_panel_1 = !empty($options['sf_color_panel_1']) ? $options['sf_color_panel_1'] : '#ffffff';
$color_panel_2 = !empty($options['sf_color_panel_2']) ? $options['sf_color_panel_2'] : '#ffffff';
$color_panel_3 = !empty($options['sf_color_panel_3']) ? $options['sf_color_panel_3'] : '#ffffff';
$color_panel_4 = !empty($options['sf_color_panel_4']) ? $options['sf_color_panel_4'] : '#ffffff';
$bg_color_panel_1 = !empty($options['sf_bg_color_panel_1']) ? $options['sf_bg_color_panel_1'] : '#202b2d';
$bg_color_panel_2 = !empty($options['sf_bg_color_panel_2']) ? $options['sf_bg_color_panel_2'] : '#b5b5b5';
$bg_color_panel_3 = !empty($options['sf_bg_color_panel_3']) ? $options['sf_bg_color_panel_3'] : '#36939e';
$bg_color_panel_4 = !empty($options['sf_bg_color_panel_4']) ? $options['sf_bg_color_panel_4'] : '#9e466b';

$font = $options['sf_font'];
$weight = $options['sf_font_weight'];
$opacityLevel = $options['sf_fade_content'] === 'light' ? 0.2 : ($options['sf_fade_content'] === 'dark' ? 0.4 : 0);


if ($font == 'inherit') {
	$font = 'inherit';
} else if ($font == 'sans') {
	$font = '"Open Sans"';
} else if ($font == 'sans') {
	$font = 'Helvetica';
} else if ($font == 'roboto') {
	$font = '"Roboto Slab"';
} else if ($font == 'lato') {
	$font = '"Lato"';
} else if ($font == 'ubuntu') {
	$font = '"Ubuntu"';
}

$transform = $options['sf_uppercase'] === 'yes' ? 'uppercase' : 'capitalize';
$searchbg = $options['sf_search_bg'] === 'light' ? 'rgba(255, 255, 255, 0.05)' : 'rgba(0, 0, 0, 0.3)';
?>
<style id="superfly-dynamic-styles">

	#sf-sidebar.sf-vertical-nav .sf-has-child-menu .sf-sm-indicator i:after {
		content: '\e610';
		-webkit-transition: all 0.3s cubic-bezier(0.215, 0.061, 0.355, 1);
		-moz-transition: all 0.3s cubic-bezier(0.215, 0.061, 0.355, 1);
		-o-transition: all 0.3s cubic-bezier(0.215, 0.061, 0.355, 1);
		transition: all 0.3s cubic-bezier(0.215, 0.061, 0.355, 1);
		-webkit-backface-visibility: hidden;
		display: inline-block;
	}

	.sf-vertical-nav .sf-submenu-visible > a .sf-sm-indicator i:after {
		-webkit-transform: rotate(180deg);
		-moz-transform: rotate(180deg);
		-ms-transform: rotate(180deg);
		-o-transform: rotate(180deg);
		transform: rotate(180deg);
	}

	#sf-mob-navbar .sf-navicon-button:after {
		/*width: 30px;*/
	}

	.sf-pos-right .sf-vertical-nav .sf-has-child-menu > a:before {
		display: none;
	}

	#sf-sidebar.sf-vertical-nav .sf-menu .sf-sm-indicator {
		background: rgba(255,255,255,0.085);
	}

	.sf-pos-right #sf-sidebar.sf-vertical-nav .sf-menu li a {
		padding-left: 10px !important;
	}

	.sf-pos-right #sf-sidebar.sf-vertical-nav .sf-sm-indicator {
		left: auto;
		right: 0;
	}

#sf-sidebar.sf-compact  .sf-va-middle {
	display: block;
	height: auto;
	margin-top: 0px;
}

#sf-sidebar.sf-compact .sf-nav,
.sf-mobile #sf-sidebar .sf-nav,
#sf-sidebar.sf-compact .sf-logo,
.sf-mobile #sf-sidebar .sf-logo,
#sf-sidebar.sf-compact-footer .sf-social,
.sf-mobile #sf-sidebar .sf-social {
	position: static;
	display: block;
}

#sf-sidebar.sf-compact .sf-logo {
	margin-top: 30px;
	margin-bottom: 30px;
}

.sf-mobile #sf-sidebar.sf-compact-header .sf-logo img {
	max-height: 75px;
}

#sf-sidebar.sf-compact .sf-nav {
	min-height: 0px;
	height: auto;
	max-height: none;
	margin-top: 0px;
}

#sf-sidebar.sf-compact-footer .sf-social {
	margin-top: 30px;
	margin-bottom: 30px;
	position: relative;
}

#sf-sidebar.sf-compact .sf-sidebar-bg {
	min-height: 150%;
}

#sf-sidebar.sf-compact  input[type=search] {
	font-size: 16px;
}
/*}*/

<?php if(isset($options['sf_bg_color_panel_1'])): ?>
#sf-sidebar .sf-sidebar-bg, #sf-sidebar .sf-social {
	background-color: <?php echo $options['sf_bg_color_panel_1']; ?> !important;
}
<?php endif; ?>

<?php if(isset($options['sf_transparent_panel']) && $options['sf_transparent_panel'] != 'none'): ?>
#sf-sidebar .sf-sidebar-bg  {
	background-color: <?php echo $options['sf_transparent_panel'] == 'dark' ? 'rgba(0,0,0,0.7)' : 'rgba(255,255,255, 0.7)'; ?> !important;
}

#sf-sidebar .sf-social {
	background-color: transparent !important;
}
<?php endif; ?>

#sf-sidebar, .sf-sidebar-bg, #sf-sidebar .sf-nav, #sf-sidebar .sf-logo, #sf-sidebar .sf-social {
	width: <?php echo $width_panel_1; ?>px;
}

<?php if(!empty($bg) && strpos($bg, 'none') === FALSE): ?>
.sf-sidebar-bg {
	background-image: url(<?php echo plugins_url('/img/bg/' . $bg . '.jpg', __FILE__) ; ?>);
}
<?php if(strpos($bg, 'blur') !== FALSE): ?>
.sf-sidebar-bg {
	background-repeat: no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	background-position: 0 0;
}
<?php endif; ?>
<?php if(intval($options['sf_font_size']) > 25): ?>
	#sf-sidebar .sf-menu li > a span {
		vertical-align: baseline;
	}
	<?php endif; ?>
#sf-sidebar .sf-social {
	background-color: transparent !important;
}
<?php endif; ?>

<?php if($options['sf_highlight'] == 'solid'): ?>
.sf-no-mobile #sf-sidebar .sf-menu-level-0 a:before,
.sf-no-mobile #sf-sidebar .sf-menu-level-0 .sf-active-item a:before {
	background-color: <?php echo $bg_color_panel_2; ?>;
}

#sf-sidebar .sf-view-level-1 .sf-menu a:before,
#sf-sidebar .sf-view-level-1 .sf-menu .sf-active-item a:before {
	background-color: <?php echo $bg_color_panel_3; ?>;
}

#sf-sidebar .sf-view-level-2 .sf-menu a:before,
#sf-sidebar .sf-view-level-2 .sf-menu .sf-active-item a:before {
	background-color: <?php echo $bg_color_panel_4; ?>;
}

#sf-sidebar .sf-view-level-3 .sf-menu a:before,
#sf-sidebar .sf-view-level-3 .sf-menu .sf-active-item a:before {
	background-color: <?php echo $bg_color_panel_1; ?>;
}
<?php endif; ?>


<?php if($options['sf_highlight'] == 'line'): ?>

.sf-no-mobile #sf-sidebar .sf-menu-level-0 li:hover:before,
.sf-no-mobile #sf-sidebar .sf-menu-level-0 li.sf-active-item:before {
	background-color: <?php echo $color_panel_1; ?>;
}

#sf-sidebar .sf-view-level-1 .sf-menu li:hover:before,
#sf-sidebar .sf-view-level-1 .sf-menu li.sf-active-item:before {
	background-color: <?php echo $color_panel_2; ?>;
}

#sf-sidebar .sf-view-level-2 .sf-menu li:hover:before,
#sf-sidebar .sf-view-level-2 .sf-menu li.sf-active-item:before {
	background-color: <?php echo $color_panel_3; ?>;
}

#sf-sidebar .sf-view-level-3 .sf-menu li:hover:before,
#sf-sidebar .sf-view-level-3 .sf-menu li.sf-active-item:before {
	background-color: <?php echo $color_panel_4; ?>;
}
<?php endif; ?>
<?php if ($options['sf_alignment'] != 'center'): ?>
#sf-sidebar .sf-menu li a, #sf-sidebar .widget-area,
.sf-search-form input {
	padding-<?php echo $options['sf_alignment']; ?>: 28px !important;
}

#sf-sidebar.sf-compact  .sf-social li {
	text-align: <?php echo $options['sf_alignment']; ?>;
}

#sf-sidebar.sf-compact  .sf-social:before {
	right: auto;
	left: auto;
<?php echo $options['sf_alignment']; ?>: 10%;
}

<?php endif; ?>

<?php if ($options['sf_side_stroke'] == 'hidden'): ?>
#sf-sidebar:after {
	display: none !important;
}
<?php endif; ?>

<?php if ($options['sf_search'] == 'hidden'): ?>
#sf-sidebar .search-form {
	display: none !important;
}
<?php endif; ?>

<?php if($options['sf_sidebar_style'] == 'push'): ?>
body.sf-body-pushed > * {
	-webkit-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-moz-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-ms-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-o-transform: translate(<?php echo $width_panel_1; ?>px,0);
	transform: translate(<?php echo $width_panel_1; ?>px,0);
	-webkit-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-o-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
}

body.sf-pos-right.sf-body-pushed > * {
	-webkit-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-moz-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-ms-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-o-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
}
<?php endif; ?>

<?php if($options['sf_sidebar_style'] == 'static'): ?>
.sf-no-mobile #sf-sidebar {
	-webkit-transform: translate(0,0);
	-moz-transform: translate(0,0);
	-ms-transform: translate(0,0);
	-o-transform: translate(0,0);
	transform: translate(0,0);
	-webkit-transform: translate3d(0,0,0);
	-moz-transform: translate3d(0,0,0);
	-ms-transform: translate3d(0,0,0);
	-o-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.sf-no-mobile body.sf-pos-left, .sf-no-mobile .sf-pos-left #wpadminbar {
	padding-left: <?php echo $panel1_adjusted; ?>px !important;
	box-sizing: border-box !important;
}

.sf-no-mobile #sf-sidebar{
	display:block !important
}

.sf-no-mobile body.sf-pos-right, .sf-no-mobile .sf-pos-right #wpadminbar {

	padding-right: <?php echo $panel1_adjusted; ?>px !important;
	box-sizing: border-box !important;
}

#sf-sidebar .sf-rollback {
	/*display: none !important;*/
}

body.sf-body-pushed > * {
	-webkit-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-moz-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-ms-transform: translate(<?php echo $width_panel_1; ?>px,0);
	-o-transform: translate(<?php echo $width_panel_1; ?>px,0);
	transform: translate(<?php echo $width_panel_1; ?>px,0);
	-webkit-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	-o-transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
	transform: translate3d(<?php echo $width_panel_1; ?>px,0,0);
}

body.sf-pos-right.sf-body-pushed > * {
	-webkit-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-moz-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-ms-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-o-transform: translate(-<?php echo $width_panel_1; ?>px,0);
	transform: translate(-<?php echo $width_panel_1; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
	transform: translate3d(-<?php echo $width_panel_1; ?>px,0,0);
}

<?php endif; ?>

#sf-sidebar,
.sf-sidebar-slide.sf-pos-right.sf-body-pushed #sf-mob-navbar {
	-webkit-transform: translate(-<?php echo $panel1_adjusted; ?>px,0);
	-moz-transform: translate(-<?php echo $panel1_adjusted; ?>px,0);
	-ms-transform: translate(-<?php echo $panel1_adjusted; ?>px,0);
	-o-transform: translate(-<?php echo $panel1_adjusted; ?>px,0);
	transform: translate(-<?php echo $panel1_adjusted; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $panel1_adjusted; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $panel1_adjusted; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $panel1_adjusted; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $panel1_adjusted; ?>px,0,0);
	transform: translate3d(-<?php echo $panel1_adjusted; ?>px,0,0);
}

.sf-pos-right #sf-sidebar, .sf-sidebar-slide.sf-body-pushed #sf-mob-navbar {
	-webkit-transform: translate(<?php echo $panel1_adjusted; ?>px,0);
	-moz-transform: translate(<?php echo $panel1_adjusted; ?>px,0);
	-ms-transform: translate(<?php echo $panel1_adjusted; ?>px,0);
	-o-transform: translate(<?php echo $panel1_adjusted; ?>px,0);
	transform: translate(<?php echo $panel1_adjusted; ?>px,0);
	-webkit-transform: translate3d(<?php echo $panel1_adjusted; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $panel1_adjusted; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $panel1_adjusted; ?>px,0,0);
	-o-transform: translate3d(<?php echo $panel1_adjusted; ?>px,0,0);
	transform: translate3d(<?php echo $panel1_adjusted; ?>px,0,0);
}

.sf-pos-left #sf-sidebar .sf-view-level-1 {
	left: <?php echo $width_panel_1; ?>px;
	width: <?php echo $width_panel_2; ?>px;
	-webkit-transform: translate(-<?php echo $width_panel_2; ?>px,0);
	-moz-transform: translate(-<?php echo $width_panel_2; ?>px,0);
	-ms-transform: translate(-<?php echo $width_panel_2; ?>px,0);
	-o-transform: translate(-<?php echo $width_panel_2; ?>px,0);
	transform: translate(-<?php echo $width_panel_2; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $width_panel_2; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $width_panel_2; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $width_panel_2; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $width_panel_2; ?>px,0,0);
	transform: translate3d(-<?php echo $width_panel_2; ?>px,0,0);
}

.sf-pos-right #sf-sidebar .sf-view-level-1 {
	left: auto;
	right: <?php echo $width_panel_1; ?>px;
	width: <?php echo $width_panel_2; ?>px;
	-webkit-transform: translate(<?php echo $width_panel_2; ?>px,0);
	-moz-transform: translate(<?php echo $width_panel_2; ?>px,0);
	-ms-transform: translate(<?php echo $width_panel_2; ?>px,0);
	-o-transform: translate(<?php echo $width_panel_2; ?>px,0);
	transform: translate(<?php echo $width_panel_2; ?>px,0);
	-webkit-transform: translate3d(<?php echo $width_panel_2; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $width_panel_2; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $width_panel_2; ?>px,0,0);
	-o-transform: translate3d(<?php echo $width_panel_2; ?>px,0,0);
	transform: translate3d(<?php echo $width_panel_2; ?>px,0,0);
}

.sf-pos-left #sf-sidebar .sf-view-level-2 {
	left: <?php echo $sum1; ?>px;
	width: <?php echo $width_panel_3; ?>px;
	-webkit-transform: translate(-<?php echo $sum2; ?>px,0);
	-moz-transform: translate(-<?php echo $sum2; ?>px,0);
	-ms-transform: translate(-<?php echo $sum2; ?>px,0);
	-o-transform: translate(-<?php echo $sum2; ?>px,0);
	transform: translate(-<?php echo $sum2; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	transform: translate3d(-<?php echo $sum2; ?>px,0,0);
}

.sf-pos-right #sf-sidebar .sf-view-level-2
{
	left: auto;
	right: <?php echo $sum1; ?>px;
	width: <?php echo $width_panel_3; ?>px;
	-webkit-transform: translate(<?php echo $sum2; ?>px,0);
	-moz-transform: translate(<?php echo $sum2; ?>px,0);
	-ms-transform: translate(<?php echo $sum2; ?>px,0);
	-o-transform: translate(<?php echo $sum2; ?>px,0);
	transform: translate(<?php echo $sum2; ?>px,0);
	-webkit-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-o-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	transform: translate3d(<?php echo $sum2; ?>px,0,0);
}

.sf-pos-left #sf-sidebar .sf-view-level-3 {
	left: <?php echo $sum2; ?>px;
	width: <?php echo $width_panel_4; ?>px;
	-webkit-transform: translate(-<?php echo $sum2; ?>px,0);
	-moz-transform: translate(-<?php echo $sum2; ?>px,0);
	-ms-transform: translate(-<?php echo $sum2; ?>px,0);
	-o-transform: translate(-<?php echo $sum2; ?>px,0);
	transform: translate(-<?php echo $sum2; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $sum2; ?>px,0,0);
	transform: translate3d(-<?php echo $sum2; ?>px,0,0);
}

.sf-pos-right #sf-sidebar .sf-view-level-3 {
	left: auto;
	right: <?php echo $sum2; ?>px;
	width: <?php echo $width_panel_4; ?>px;
	-webkit-transform: translate(<?php echo $sum2; ?>px,0);
	-moz-transform: translate(<?php echo $sum2; ?>px,0);
	-ms-transform: translate(<?php echo $sum2; ?>px,0);
	-o-transform: translate(<?php echo $sum2; ?>px,0);
	transform: translate(<?php echo $sum2; ?>px,0);
	-webkit-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	-o-transform: translate3d(<?php echo $sum2; ?>px,0,0);
	transform: translate3d(<?php echo $sum2; ?>px,0,0);
}

.sf-view-pushed-1 #sf-sidebar .sf-view-level-2 {
	-webkit-transform: translate(-<?php echo $width_panel_3; ?>px,0);
	-moz-transform: translate(-<?php echo $width_panel_3; ?>px,0);
	-ms-transform: translate(-<?php echo $width_panel_3; ?>px,0);
	-o-transform: translate(-<?php echo $width_panel_3; ?>px,0);
	transform: translate(-<?php echo $width_panel_3; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $width_panel_3; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $width_panel_3; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $width_panel_3; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $width_panel_3; ?>px,0,0);
	transform: translate3d(-<?php echo $width_panel_3; ?>px,0,0);
}

.sf-pos-right.sf-view-pushed-1 #sf-sidebar .sf-view-level-2 {
	-webkit-transform: translate(<?php echo $width_panel_3; ?>px,0);
	-moz-transform: translate(<?php echo $width_panel_3; ?>px,0);
	-ms-transform: translate(<?php echo $width_panel_3; ?>px,0);
	-o-transform: translate(<?php echo $width_panel_3; ?>px,0);
	transform: translate(<?php echo $width_panel_3; ?>px,0);
	-webkit-transform: translate3d(<?php echo $width_panel_3; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $width_panel_3; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $width_panel_3; ?>px,0,0);
	-o-transform: translate3d(<?php echo $width_panel_3; ?>px,0,0);
	transform: translate3d(<?php echo $width_panel_3; ?>px,0,0);
}

.sf-view-pushed-2 #sf-sidebar .sf-view-level-3 {
	-webkit-transform: translate(-<?php echo $width_panel_4; ?>px,0);
	-moz-transform: translate(-<?php echo $width_panel_4; ?>px,0);
	-ms-transform: translate(-<?php echo $width_panel_4; ?>px,0);
	-o-transform: translate(-<?php echo $width_panel_4; ?>px,0);
	transform: translate(-<?php echo $width_panel_4; ?>px,0);
	-webkit-transform: translate3d(-<?php echo $width_panel_4; ?>px,0,0);
	-moz-transform: translate3d(-<?php echo $width_panel_4; ?>px,0,0);
	-ms-transform: translate3d(-<?php echo $width_panel_4; ?>px,0,0);
	-o-transform: translate3d(-<?php echo $width_panel_4; ?>px,0,0);
	transform: translate3d(-<?php echo $width_panel_4; ?>px,0,0);
}

.sf-pos-right.sf-view-pushed-2 #sf-sidebar .sf-view-level-3 {
	-webkit-transform: translate(<?php echo $width_panel_4; ?>px,0);
	-moz-transform: translate(<?php echo $width_panel_4; ?>px,0);
	-ms-transform: translate(<?php echo $width_panel_4; ?>px,0);
	-o-transform: translate(<?php echo $width_panel_4; ?>px,0);
	transform: translate(<?php echo $width_panel_4; ?>px,0);
	-webkit-transform: translate3d(<?php echo $width_panel_4; ?>px,0,0);
	-moz-transform: translate3d(<?php echo $width_panel_4; ?>px,0,0);
	-ms-transform: translate3d(<?php echo $width_panel_4; ?>px,0,0);
	-o-transform: translate3d(<?php echo $width_panel_4; ?>px,0,0);
	transform: translate3d(<?php echo $width_panel_4; ?>px,0,0);
}

#sf-sidebar .sf-view-level-1, #sf-sidebar ul.sf-menu-level-1 {
	background: <?php echo $bg_color_panel_2; ?>;
}

<?php if($options['sf_sidebar_style'] == 'full'): ?>
#sf-sidebar {
	/*z-index: 1;*/
}

#sf-sidebar .sf-scroll-wrapper {
	-webkit-transform: translate(0,-100px);
	-moz-transform: translate(0,-100px);
	-ms-transform: translate(0,-100px);
	-o-transform: translate(0,-100px);
	transform: translate(0,-100px);
	-webkit-transform: translate3d(0,-100px,0);
	-moz-transform: translate3d(0,-100px,0);
	-ms-transform: translate3d(0,-100px,0);
	-o-transform: translate3d(0,-100px,0);
	transform: translate3d(0,-100px,0);
}
#sf-sidebar .sf-scroll-wrapper {
	-webkit-transform: translate(0,-100px);
	-moz-transform: translate(0,-100px);
	-ms-transform: translate(0,-100px);
	-o-transform: translate(0,-100px);
	transform: translate(0,-100px);
	-webkit-transform: translate3d(0,-100px,0);
	-moz-transform: translate3d(0,-100px,0);
	-ms-transform: translate3d(0,-100px,0);
	-o-transform: translate3d(0,-100px,0);
	transform: translate3d(0,-100px,0);
}

#sf-sidebar .sf-sidebar-bg, #sf-sidebar .sf-scroll-wrapper {
	opacity: 0 !important;
}
#sf-sidebar.sf-sidebar-exposed .sf-scroll-wrapper {
	opacity: 1 !important;
}

#sf-sidebar .sf-social {
	background-color: transparent !important;
}

.sf-menu li a{
	text-align: center !important;
}

#sf-sidebar .sf-nav {
	margin-top: 0px !important;
}

.sf-nav form, .sf-menu li img, .sf-menu li i, .sf-menu li br,.sf-social, .sf-logo, #sf-sidebar .sf-menu li:after  {
	display: none !important;
}

#sf-sidebar.sf-sidebar-exposed, .sf-sidebar-bg, #sf-sidebar .sf-nav,  #sf-sidebar .sf-logo, #sf-sidebar .sf-social {
	width: 100%;
}
#sf-sidebar .sf-rollback {
	z-index: 1000;
}

#sf-sidebar {
	width: 0px;
}

#sf-sidebar.sf-sidebar-exposed {
	width: 100%;
}

.sf-pos-left #sf-sidebar .sf-rollback {
	left: 0;
	right: auto;
}

.sf-pos-right #sf-sidebar .sf-rollback {
	left: auto;
	right: 0;
}

.sf-body-pushed #sf-overlay, body[class*="sf-view-pushed"] #sf-overlay {
	opacity: 0.9 !important;
}

#sf-sidebar .sf-menu li > a:before {
	-webkit-transition: none;
	-moz-transition: none;
	-o-transition: none;
	transition: none;
	background: <?php echo $color_panel_1?> !important;
}

#sf-sidebar .sf-menu li a {
	padding-left: 5px !important;
	padding-right: 5px !important;
}
#sf-sidebar .sf-menu li:hover a {
	color: #000000 !important;
}
<?php endif; ?>

<?php if($options['sf_highlight_active'] == 'yes'): ?>
#sf-sidebar li.sf-active-class > a span {
	background: <?php echo $bg_color_panel_2; ?>;
}
<?php endif; ?>

#sf-sidebar .sf-view-level-2, #sf-sidebar ul.sf-menu-level-2 {
	background: <?php echo $bg_color_panel_3; ?>;
}

#sf-sidebar .sf-view-level-3, #sf-sidebar ul.sf-menu-level-3 {
	background: <?php echo $bg_color_panel_4; ?>;
}

#sf-sidebar .sf-menu-level-0 li, #sf-sidebar .sf-menu-level-0 li a, .sf-title h3 {
	color: <?php echo $color_panel_1; ?>;
}

#sf-sidebar .sf-menu li a, #sf-sidebar .sf-search-form {
	padding: <?php echo $options['sf_padding']; ?>px 0;
	text-transform: <?php echo $transform; ?>;
}

#sf-sidebar .sf-search-form span {
	top: <?php echo intval($options['sf_padding']) + (intval($options['sf_font_size']) - 16) / 2 + 2; ?>px;
}

#sf-sidebar {
	font-family: <?php echo $font; ?>;
}

#sf-sidebar .sf-sm-indicator {
	line-height: <?php echo $options['sf_font_size'];?>px;
}

#sf-sidebar .sf-search-form input {
	font-size: <?php echo $options['sf_font_size']; ?>px;
}

#sf-sidebar .sf-menu li a {
	font-family: <?php echo $font; ?>;
	font-weight: <?php echo $weight; ?>;
	font-size: <?php echo $options['sf_font_size']; ?>px;
	text-align: <?php echo $options['sf_alignment']; ?>;
	/*-webkit-text-stroke: 1px rgba(0,0,0,0.1);*/
	/*-moz-text-stroke: 1px rgba(238, 238, 238, 0.9);*/
	/*-ms-text-stroke: 1px rgba(0,0,0,0.1);*/
	/*text-stroke: 1px rgba(0,0,0,0.1);*/
	-moz-font-smoothing: antialiased;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
}
<?php if($options['sf_alignment'] == 'center'): ?>
	.sf-has-child-menu > a {
		padding-right: 0 !important;
	}
<?php endif; ?>
#sf-sidebar .sf-rollback a {
	font-family: <?php echo $font; ?>;
}

#sf-sidebar .sf-menu-level-0 li > a i, .sf-title h2 {
	color: <?php echo $options['sf_scolor_panel_1']; ?>;
}#sf-sidebar .sf-menu-level-1 li > a i {
	 color: <?php echo $options['sf_scolor_panel_2']; ?>;
 }#sf-sidebar .sf-menu-level-2 li > a i {
	  color: <?php echo $options['sf_scolor_panel_3']; ?>;
  }#sf-sidebar .sf-menu-level-3 li > a i {
	   color: <?php echo $options['sf_scolor_panel_4']; ?>;
   }

#sf-sidebar .sf-view-level-1 li a,
#sf-sidebar .sf-menu-level-1 li a{
	color: <?php echo $color_panel_2; ?>;
	border-color: <?php echo $color_panel_2; ?>;
}

#sf-sidebar:after {
	background-color: <?php echo $bg_color_panel_1; ?>;
}

#sf-sidebar .sf-view-level-2 li a,
#sf-sidebar .sf-menu-level-2 li a{
	color: <?php echo $color_panel_3; ?>;
	border-color: <?php echo $color_panel_3; ?>;
}

#sf-sidebar .sf-view-level-3 li a,
#sf-sidebar .sf-menu-level-3 li a {
	color: <?php echo $color_panel_4; ?>;
	border-color: <?php echo $color_panel_4; ?>;
}

#sf-sidebar .sf-navicon-button {
	top: <?php echo $options['sf_label_top'] ?>;
}

.sf-mobile #sf-sidebar .sf-navicon-button {
	top: <?php echo $options['sf_label_top_mobile'] ?>;
}

.sf-body-pushed #sf-overlay, body[class*="sf-view-pushed"] #sf-overlay {
	opacity: <?php echo $opacityLevel; ?>;
}
<?php if($opacityLevel != 0): ?>
.sf-body-pushed #sf-overlay:hover, body[class*="sf-view-pushed"] #sf-overlay:hover {
	cursor: url("<?php echo plugins_url('/img/', __FILE__);?>close.png") 16 16,pointer;
}
<?php endif; ?>

<?php if($options['sf_label_text'] == 'yes'): ?>

.sf-navicon-button:after {
	display: block;
	content: "<?php _e( 'Menu', 'superfly-menu' ); ?>";
	line-height: 18px;
	font-size: 11px;
	font-weight: <?php echo $weight; ?>;
	text-align: center;
	text-decoration: none !important;
	position: absolute;
	left: 100%;
	top: 50%;
	margin: -10px 0 0 -16px;
	color: <?php echo $options['sf_label_text_color']; ?>;
}
#sf-sidebar .sf-label-square .sf-navicon-button:after ,
#sf-sidebar .sf-label-rsquare .sf-navicon-button:after ,
#sf-sidebar .sf-label-circle .sf-navicon-button:after,
#sf-sidebar .sf-label-metro .sf-navicon-button:after{
	margin: -10px 0 0 0;
	padding: 0 0 0 18px;
	font-size: 18px;
}
.sf-pos-right .sf-navicon-button:after {
	margin: -10px -16px 0 0;
	left: auto;
	right: 100%;
}
.sf-pos-right #sf-sidebar .sf-label-square .sf-navicon-button:after ,
.sf-pos-right #sf-sidebar .sf-label-rsquare .sf-navicon-button:after ,
.sf-pos-right #sf-sidebar .sf-label-circle .sf-navicon-button:after,
.sf-pos-right #sf-sidebar .sf-label-metro .sf-navicon-button:after{
	margin: -10px 0 0 0;
	padding: 0 18px 0 0;
}
<?php endif; ?>

<?php if($options['sf_separators'] == 'yes'): ?>

#sf-sidebar .sf-menu li:after {
	content: '';
	display: block;
	width: <?php echo $options['sf_separators_width'] ?>%;
	box-sizing: border-box;
	position: absolute;
	bottom: 0px;
	left: 0;
	right: 0;
	height: 1px;
	background: <?php echo $options['sf_separators_color']; ?>;
	margin: 0 auto;
}

#sf-sidebar .sf-menu li:last-child:after {
	display: none;
}

<?php endif; ?>

#sf-sidebar .sf-navicon,
#sf-sidebar .sf-navicon:after,
#sf-sidebar .sf-navicon:before,
#sf-sidebar .sf-label-metro .sf-navicon-button,
#sf-mob-navbar {
	background-color: <?php echo $options['sf_label_color']; ?>;
}

#sf-sidebar .sf-label-square .sf-navicon-button,
#sf-sidebar .sf-label-rsquare .sf-navicon-button,
#sf-sidebar .sf-label-circle .sf-navicon-button {
	color: <?php echo $options['sf_label_color']; ?>;
}


#sf-sidebar [class*="sf-icon-"] {
	color: <?php echo $options['sf_social_color']; ?>;
}

#sf-sidebar .sf-social li {
	border-color: <?php echo $options['sf_social_color']; ?>;
}

body #sf-sidebar .sf-social li:hover {
	background-color: <?php echo $options['sf_social_color']; ?>;
	color: <?php echo $bg_color_panel_1; ?>;
}

#sf-sidebar .sf-search-form {
	background-color: <?php echo $searchbg; ?>;
}

@font-face {
	font-family: 'sf-icomoon';
	src:url('<?php echo plugins_url('/img/', __FILE__);?>fonts/icomoon.eot?wehgh4');
	src: url('<?php echo plugins_url('/img/', __FILE__);?>fonts/icomoon.svg?wehgh4#icomoon') format('svg'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/icomoon.eot?#iefixwehgh4') format('embedded-opentype'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/icomoon.woff?wehgh4') format('woff'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/icomoon.ttf?wehgh4') format('truetype');
	font-weight: normal;
	font-style: normal;
}

<?php if(isset($options['sf_fa_on']) && $options['sf_fa_on'] === 'yes' ): ?>
@font-face {
	font-family: 'FontAwesome';
	src:url('<?php echo plugins_url('/img/', __FILE__);?>fonts/fontawesome-webfont.eot?wehgh4');
	src: url('<?php echo plugins_url('/img/', __FILE__);?>fonts/fontawesome-webfont.svg?wehgh4#icomoon') format('svg'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/fontawesome-webfont.eot?#iefixwehgh4') format('embedded-opentype'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/fontawesome-webfont.woff?wehgh4') format('woff'),
	url('<?php echo plugins_url('/img/', __FILE__);?>fonts/fontawesome-webfont.ttf?wehgh4') format('truetype');
	font-weight: normal;
	font-style: normal;
}

#sf-sidebar span[class*='fa-']:before{
	font-family: 'FontAwesome';
	line-height: normal;
	position: absolute;
	top: 0 !important;
	bottom: 0;
	left: -<?php echo $options['sf_font_size'] + 8; ?>px;
}

#sf-sidebar span[class*='fa-'] {
	display: inline-block;
	position: relative;
	margin-left: <?php echo $options['sf_font_size'] + 8; ?>px;
}

.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{content:"\f00b"}.fa-check:before{content:"\f00c"}.fa-remove:before,.fa-close:before,.fa-times:before{content:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-genderless:before,.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}
<?php endif; ?>
	#sf-sidebar li:hover span[class*='fa-'] {
		opacity: 1 !important;
	}
<?php if( $options['sf_mob_nav'] === 'yes' ): ?>
	@media screen and (max-width: <?php echo $options['sf_threshold_point'];?>px) {
		#sf-mob-navbar  {
			display: none;
			height: 62px;
			width: 100%;
			-webkit-backface-visibility: hidden;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 100000000;
			text-align: center;
			-webkit-transition: all 0.4s cubic-bezier(0.215, 0.061, 0.355, 1);
			-moz-transition:all 0.4s cubic-bezier(0.215, 0.061, 0.355, 1);
			-ms-transition: all 0.4s cubic-bezier(0.215, 0.061, 0.355, 1);
			-o-transition: all 0.4s cubic-bezier(0.215, 0.061, 0.355, 1);
			transition: all 0.4s cubic-bezier(0.215, 0.061, 0.355, 1);
			-webkit-transition-delay: .05s;
			transition-delay: .05s;
		}

		#sf-sidebar .sf-rollback {
			display: none !important;
		}

		.superfly-on #sf-mob-navbar  {
			display: block;
		}

		.sf-mob-nav .sf-rollback {
			display: none !important;
		}

		.sf-mob-nav {
			margin-top: 62px !important;
		}

		#sf-mob-navbar a {
			display: inline-block;
			min-width: 100px;
		}

		#sf-mob-navbar img {
			height: 50px;
			display: inline-block;
			margin-top: 6px;
		}

		#sf-mob-navbar .sf-navicon-button {
			position: absolute;
			left: 0;
			top:0;
			padding: 30px 24px;
		}

		.sf-pos-right #sf-mob-navbar .sf-navicon-button {
			right: 0;
			left: auto;
		}
		.sf-navicon-button:after {
			font-size: 18px !important;
		}
	}
	<?php endif; ?>
<?php if(isset($options['sf_css'])): ?>
<?php echo $options['sf_css']; ?>
<?php endif; ?>
</style>


<?php if($options['sf_transition'] == 'yes'): ?>
	<style>
		body {
			display: none;
		}</style>
	<div id="sf-body-prepend-hack"></div>
	<script>jQuery('body').fadeIn();</script>
<?php endif; ?>