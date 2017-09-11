<?php

if (!isset($_GET['page'])) {
	$start = 0;
} else {
	$start = ($_GET["page"] + 10);
	$start = ($page-1) * $per_page;
}

$limit = 120000;

$connect = getdb();

$search = mysqli_real_escape_string($connect, $_GET["boxsearch"]);

$search = strtoupper($search);

if($_GET["mode"] == "dbeditor"){

    $query = "
    SELECT * FROM products 
    WHERE title LIKE '" . $search . "%'
    LIMIT $start, $limit";

    $result = mysqli_query($connect, $query);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        for($i = $start; $i < $end && $row; $i++) {
            echo'<tr class="' . $class .'">
                <td><span id="' . $row['id'] . ' ident">' . $row['id'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' title">' . $row['title'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' price">' . $row['price'] . '</span></td>';

                ?>
                
                <td><button class="btn btn-default" onclick="
                        var x = $(this).closest('td').parent()[0].sectionRowIndex + 1;
                        var y = $('#modeselect').val();
                        $.ajax({
                            url: 'templates/erase.php?id=' + x + '&mode=' + y,
                            type: 'GET',
                            success: function(s){
                                console.log(s);
                                if(s == 'status'){
                                $(z).html(y);}
                                if(s == 'error') {
                                alert('Error Processing your Request!');}
                            },
                            error: function(e){
                                alert('Error Processing your Request!!');
                            }
                        });

                       ">
                <i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                </tr>

                <?php

            $row = mysqli_fetch_assoc($result);
        }
        //echo $output;

    } else {

        $output = '<th><h2>NO DATA FOUND</h2></th>';

        echo $output;
    }

} else {
    $query = "
    SELECT * FROM requirements
    LIMIT $start, $limit";

    $result = mysqli_query($connect, $query);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        for($i = $start; $i < $end && $row; $i++) {
            echo'<tr class="' . $class .'">
                <td><span id="' . $row['id'] . ' ident">' . $row['id'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' name">' . $row['name'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' email">' . $row['email'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' company">' . $row['company'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' phone">' . $row['phone'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' partnumber">' . $row['partnumber'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' manufacturer">' . $row['manufacturer'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' quantity">' . $row['quantity'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' targetprice">' . $row['targetprice'] . '</span></td>
                <td><span class= "xedit" id="' . $row['id'] . ' date_time">' . $row['date_time'] . '</span></td>';

                ?>
                
                <td><button class="btn btn-default" onclick="
                       var x = $(this).closest('td').parent()[0].sectionRowIndex + 1;
                       var y = $('#modeselect').val();
                        $.ajax({
                            url: 'templates/erase.php?id=' + x + '&mode=' + y,
                            type: 'GET',
                            success: function(s){
                                console.log(s);
                                if(s == 'status'){
                                $(z).html(y);}
                                if(s == 'error') {
                                alert('Error Processing your Request!');}
                            },
                            error: function(e){
                                alert('Error Processing your Request!!');
                            }
                        });

                       ">
                <i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                </tr>

                <?php


            $row = mysqli_fetch_assoc($result);
        }
        //echo $output;

    } else {

        $output = '<th><h2>NO DATA FOUND</h2></th>';

        echo $output;
    }
}

?>
