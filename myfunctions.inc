<?php
	function html_header($pageTitle)
		{
			echo "<html><title> $pageTitle </title></head>";
			echo "<body>";
		}

	function html_h1($text)
		{
			echo "<h1> $text </h1>";
		}

	function html_footer()
		{
			echo "</body>";
			echo "</html>";
		}

	function calculatetax($salary, $rate)
		{
			if ($salary > 12500 and $salary < 50000) {
				$rate = 20;
				$tax = ($salary *($rate/100));
				return $tax;
			}
			if ($salary > 50001 and $salary < 150000) {
				$rate = 40;
				$tax = ($salary *($rate/100));
				return $tax;
			}
			if($salary > 150000) {
				$rate = 45;
				$tax = ($salary *($rate/100));
				return $tax;
			}
			else {
				$tax = 0;
				return $tax;
			}

		}

?>
