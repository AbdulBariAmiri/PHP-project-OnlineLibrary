<?php

include 'global/navbar.php';
?>

    <div class="container mt-5">

        <h1 class="display-1 p-5" style="font-weight: 800;">Books</h1>
        <div class="row">
            <?php
            
            include 'connection.php';
            $search = $_POST['name'];
            $sql = "SELECT * FROM books WHERE Name LIKE '%$search%' ";
            $result = mysqli_query($con,$sql);
            if(isset($_POST['submit'])){
            while($row = mysqli_fetch_assoc($result)){?>
        
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


         <?php   }
        }else{
            echo mysqli_error(die());
        }
            ?>
            </div>
    <!-- footer -->
<?php
include 'global/footer.php';

?>