<?php 
	ob_end_clean();
	ob_implicit_flush(1);

	echo 123;
	sleep(5);
	echo 456;
?>