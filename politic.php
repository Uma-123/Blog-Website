<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM politic_news where id= ".$_GET['url']."";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <div class="row container mx-auto pt-5 pb-5">';
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '
        <div class="col-lg-12 col-md-12 col-12 py-2">
            <div class="card" style="background-color:coral;">
                <div class="card-body">
                    <img src="'.$row["image"].'" width="100%">
                    <h5 class="card-title sdev">'.$row["head"].'</h5>
                    <p class="card-text">'.$row["context"].'</p>
                    <a href="political.php?url='.$row["id"].'" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>';
    }
    echo '</div>';
}
?>