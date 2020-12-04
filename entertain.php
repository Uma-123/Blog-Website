<style>
    .sdev {
        wef
    }
</style>
<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM entertain_news";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '
    <div class="row container mx-auto pt-5 pb-5 card-deck">';
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '
        <div class=" col-md-4 col-lg-4 col-12 py-2">
            <div class="card" style="background-color:coral;">
                <div class="card-body">
                    <img src="'.$row["image"].'" width="100%">
                    <h5 class="card-title sdev">'.$row["head"].'</h5>
                    <p class="card-text">'.$row["description"].'</p>
                    <a href="entertainment.php?url='.$row["id"].'" class="btn btn-primary stretched-link">Click for more</a>
                </div>
            </div>
        </div>';
    }
    echo '</div>';
}
// ending point

include 'inc/footer.php';
?>

