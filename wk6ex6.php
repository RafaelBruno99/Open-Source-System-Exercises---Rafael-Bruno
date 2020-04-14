<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo ("I pay £" . calculatetax(12000, 0) . " tax");
	html_footer();
?>
