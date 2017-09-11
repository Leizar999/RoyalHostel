<?php
//Fetch zone
include("templates/connect.php");

if(isset($_GET['searchbox'])){
    $search = mysqli_real_escape_string($con, $_GET["searchbox"]);
} else {
    $search = "";
}

if(isset($_GET['start'], $_GET['limit'])){
    $start = $_GET['start'];
    $limit = $_GET['limit'] * 100;
}

echo "start is: " . $start . " limit is: " . $limit;

$search = strtoupper($search);

$query = "SELECT id,title,price FROM products
WHERE title LIKE '" . $search . "%'
LIMIT $start, $limit";

$i = 0;

$result = mysqli_query($con, $query);

$count = 0;

if(mysqli_num_rows($result) > 0) {

    while($result && $count < 100) {

        $fetch = mysqli_fetch_array($result);

        if($i % 2 == 0) $class = 'even'; else $class = 'odd';

            if($fetch['id'] != ""){
                echo'<tr class="' . $class .'">
                    <td><span id="' . $fetch['id'] . ' ident">' . $fetch['id'] . '</span></td>
                    <td><span class= "xedit" id="' . $fetch['id'] . ' title">' . $fetch['title'] . '</span></td>
                    <td><span class= "xedit" id="' . $fetch['id'] . ' price">' . $fetch['price'] . '</span></td>
                </tr>';
            }
        
        $count ++;
    }

} else {

    $output = '
        <tr>
           <th><h2>NO DATA FOUND</h2></th>
        </tr>';

    echo $output;
}

$start = $limit;

mysqli_close($con);
?>