<?php
$totalItems = 210;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

if ($pageCount > 1) {
	for ($i = 1; $i <= $pageCount; $i++) {
		echo '<a href="?HomePage.php=' . $i . '">' . $i . '</a> ';
	}
}