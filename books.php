<?php

include 'global/navbar.php';
?>

    <div class="container mt-5">
        <form action="search.php" method="POST">
            <div class="row">
        <div class="col-md-8">
            <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary" name="submit" value="">Search</button>
        </div>
    </div>
    </form>

        <h1 class="display-1 p-5" style="font-weight: 800;">Books</h1>
        <div class="row">
            <?php
            include 'connection.php';
                $sql = "SELECT * FROM Books";
            $result = mysqli_query($con, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                
                    ?>
            
            

            <div class="col-md-4 mb-2">
                <div class="card text-left">
                    <img class="card-img-top" src="img/<?php echo $row['Photo']?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row["Name"] ?></h4>
                        <p class="card-text"><?php echo $row['Details']?></p>
                     <a href="books/<?php echo $row['File'];?>" class="btn btn-primary" download>Download</a>
                    </div>
                </div>
            </div>
                  <?php }}  ?>
        </div>
    </div>
    <!-- footer -->
<?php
include 'global/footer.php';

?>