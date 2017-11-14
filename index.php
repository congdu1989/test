<?php
$time=microtime();
for($i=0;$i<1000;$i++){
	echo $i.":".(microtime()-$time)."</br>";
}