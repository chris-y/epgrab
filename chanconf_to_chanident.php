<?php
	$handle = fopen('/home/pi/.tzap/channels.conf', "r");
	if($handle)
	{
		while (($data = fgetcsv($handle, 3000, ':')) !== FALSE) {
			print $data[12] . " " . str_replace(' ', '_', $data[0]) . "\n";
		}
		
	fclose($handle);
	}

?>
