<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum Analisis Statistik - Site</title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le icon  -->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="/fast_forum/themes/blackboot/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/fast_forum/themes/blackboot/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/fast_forum/themes/blackboot/css/style.css" />
<!-- Le fav and touch icons -->
</head>


<div class="container">
<div class="row">
		<div class="span3" >
			<div class="well well-primary box" style=" background-color:lightblue">
				<img src="/fast_forum/img/box-1-white.png" alt="" />
				<h3>Table Generator </h3>
				<p>
					 Table generator is a system can be used to facilitate database of strategical indicator easily and quickly. 
				</p>
				<a href="/fast/index.php/forum/forum/topic/id/13">Read more</a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-success box" style=" background-color:lightgreen">
				<img src="/fast_forum/img/box-2-white.png" alt="" />
				<h3>Analysis</h3>
				<p>
					 Analysis is an statistical application which can be used to analyze data. This application provides statistical tools 
				</p>
				<a href="/fast/index.php/forum/forum/topic/id/15">Read more</a>
			</div>
		</div>
		<div class="span3">
			<div class="well well-warning box" style=" background-color:yellow">
				<img src="/fast_forum/img/box-3-white.png" alt="" />
				<h3>Internet Forum</h3>
				<p>
					 Dokumentasi yang baik adalah awal dari proses yang baik. 
				</p>
				<a href="/fast/index.php/forum/forum/topic/id/14">Read more</a>
			</div>
		</div>
</div>
</div>
<script>
(function(){
// Append a close trigger for each block
$('.box-tile .content').append('<span class="close">x</span>');
// Show window
function showContent(elem){
hideContent();
elem.find('.content').addClass('expanded');
elem.addClass('cover');
}
// Reset all
function hideContent(){
$('.box-tile  .content').removeClass('expanded');
$('.box-tile  li').removeClass('cover');
}
// When a li is clicked, show its content window and position it above all
$('.box-tile  li').click(function() {
showContent($(this));
});
// When tabbing, show its content window using ENTER key
$('.box-tile  li').keypress(function(e) {
if (e.keyCode == 13) {
showContent($(this));
}
});
// When right upper close element is clicked  - reset all
$('.box-tile  .close').click(function(e) {
e.stopPropagation();
hideContent();
});
// Also, when ESC key is pressed - reset all
$(document).keyup(function(e) {
if (e.keyCode == 27) {
hideContent();
}
});
})();
</script>