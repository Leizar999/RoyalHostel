<?php
//fetch.php

//$time = microtime(true);

include $_SERVER["DOCUMENT_ROOT"] . "/templates/db_config.php";
include "templates/paginate.php";

$per_page = 19; // number of results to show per page
$total_results = mysqli_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

if (isset($_GET['page'])) {
    $show_page = $_GET['page']; //current page

    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}

// display pagination
$page = intval($_GET['page']);
$tpages = $total_pages;

if ($page <= 0) {
    $page = 1;
}

echo $output;

mysqli_close($connect);

//echo microtime(true) - $time;

?>