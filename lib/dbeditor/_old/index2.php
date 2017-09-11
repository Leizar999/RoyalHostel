<?php
include("templates/connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <title>MLC DB EDITOR 0.1</title>   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">    
		<header>MLC DB EDITOR 0.1</header>
                <div id="fetch-results" class="row">
                    <div class="form-group">
                        <form action="index.php" method="GET">
                            <input class="form-control col-md-3" name="searchbox" type="text" placeholder="SEARCH SOMETHING">
                            <input type="submit" hidden>
                        </form>
                    </div>
                    <table id="results" class= "table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php include $_SERVER["DOCUMENT_ROOT"] . "/dbeditor/templates/fetch.php" ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <?php include $_SERVER["DOCUMENT_ROOT"] . "/dbeditor/templates/pagination.php" ?>
                    <?php

                        $start = 0;
                        $limit = 100;

                        if($page > 1) {
                          echo "<a href='?boxsearch=" . $search . "&page=" . ($page - 1) . "&start=" . ($start *= 10) . "&limit=" . ($limit) . "'>
                          <button class='btn-danger'>BACK</button></a></a>";
                        }

                        if($page < $total_pages) {
                          echo "<a href='?boxsearch=" . $search . "&page=" . ($page + 1) . "&start=" . ($start *= 10) . "&limit=" . ($limit * 1) . "'>
                          <button class='btn-success'>NEXT</button></a>";
                        }

                        $start = $limit;

                     ?>
                </div>

            <?php include $_SERVER["DOCUMENT_ROOT"] . "/dbeditor/templates/scripts.php" ?>
            <script src="js/functions.js"></script>
    </div>
</body>
</html>