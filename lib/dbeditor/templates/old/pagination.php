<?php 
    $per_page = 10; // number of results to show per page
    $total_results = mysqli_num_rows($result);
    $total_pages = ceil($total_results / $per_page);//total pages we going to have
    $page = 0;

    if (!isset($_GET['page'])) {
        $start = 0;
    } else {
        $start = ($_GET["page"] + 10);
        $start = ($page-1) * $per_page;
    }

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
?>