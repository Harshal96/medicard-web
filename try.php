<?php

//require('library.php');

$start_time = '8:00 AM';
$end_time = '10:00 PM';
$minutes_breakage = '15';

$day = getvar('day');
if(strlen($day)<1) $day = date('m/d/Y');
else { $day = date('m/d/Y', strtotime($day)); }

$inc   = $minutes_breakage * 60;
$start = (strtotime($start_time)); // 6  AM
$end   = (strtotime($end_time)); // 10 PM

echo "<h3>Day: $day</h3>";

echo <<< HTML
<style>
/* TEST */
.id_33__08_00_AM {
	background-color: green;
}
</style>
HTML;

echo '<table border=1 cellspacing=0><tr><td>Time</td>';
	
foreach (getrows("SELECT * FROM users WHERE type='Agent' AND active='Yes'") AS $row) {
	echo "<td>{$row['full_name']}</td>";
	$usercols .= "<td class='id_{$row['user_id']}__[TIMESTART]'></td>";
}

echo '</tr>';

for( $i = $start; $i <= $end; $i += $inc ) {
    #$range = date( 'g:i', $i ) . ' - ' . date( 'g:i A', $i + $inc );
	$show = date( 'g:i A', $i );
	$csstime = date('h_i_A', $i);
	$myusercols = str_replace('[TIMESTART]', $csstime, $usercols);
	echo "<tr><td>$show</td>$myusercols</tr>";
}
echo '</table>';


?>