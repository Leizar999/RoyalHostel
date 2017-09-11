<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/head.php" ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <title>MLC DB EDITOR 0.2</title>   
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="col-md-12" id="results-table">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-3">
                    <h3 class="panel-title">MLC DB EDITOR 0.2</h3>
                  </div>

                  <div class="col col-xs-7 text-right">
                    <!--<button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>-->
                    <form action="" method="GET">

                        <div class="col-xs-9">
                            <input class="form-control text-center" name="boxsearch" type="text" placeholder="SEARCH SOMETHING">
                        </div>
                      <input type="submit" hidden>

                        <div class="col-xs-3 form-group">
                            <select id="modeselect" name="mode" class="form-control text-center">
                                <option value="">SELECT VALUE</option>
                                <option value="dbeditor">DB EDITOR</option>
                                <option value="requirements">REQUIREMENTS</option>
                            </select>
                        </div>

                    </form>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table id="resultTable" class="table table-striped table-bordered table-list">
                    <thead>

                    <?php if($_GET["mode"] == "dbeditor"): ?>

                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>PRICE</th>
                        <th>ERASE</th>
                    </tr>

                    <?php else: ?>

                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>COMPANY</th>
                        <th>PHONE</th>
                        <th>PART NUMBER</th>
                        <th>MANUFACTURER</th>
                        <th>QUANTITY</th>
                        <th>TARGET PRICE</th>
                        <th>DATE TIME</th>
                        <th>ERASE</th>
                    </tr>

                    <?php endif; ?>

                    </thead>
                	   <tbody>
                            <?php include "templates/fetch.php" ?>
                            <?php include "templates/paginate.php" ?>
                	   </tbody>
                    </table>
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4"><?php echo $page . " of " . $tpages . " Pages" ?>
                  <?php
                    if($page > 1) {
                      echo "<a href='?boxsearch=" . $search . "&page=" . ($page - 1) . "'>
                      <button class='btn-danger'>BACK</button></a></a>";
                    }

                    if($page < $total_pages) {
                      echo "<a href='?boxsearch=" . $search . "&page=" . ($page + 1) . "'>
                      <button class='btn-success'>NEXT</button></a>";
                    } 
                  ?>
                  </div>
                </div>
              </div>
            </div>
	         </div>
          </div>
        </div>
        
    <?php include "templates/scripts.php" ?>
    <script src="js/functions.js"></script>
    <script src="js/functions2.js"></script>
</body>

</html>
