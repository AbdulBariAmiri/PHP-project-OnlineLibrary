<?php

include 'global/navbar.php';
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="banner text-white">
                    <h1 class="display-1">Biggest Library</h1>
                    <h2 class="display-3">Are you searching a book?</h1>
                        <p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero perferendis ratione aut dolorem, enim corrupti nam provident quibusdam, officiis, dolorum optio ducimus architecto sequi natus. Illo omnis neque temporibus dolorem?</p>
                    </div>
                
            </div>
            <div class="col-md-4 text-white">
                <img src="img/logo.PNG" width="100%" alt="">
            </div>
        </div>
    </div>

</header>
  <!-- start about us -->
  <div class="container" id="about">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h1 class="display-1">About Us</h1>
            <p class="mt-3">my name is Abdul Bari Amiri I am in second class if IS department database section this my 
            fist project in Iternet and Web Technology using CSS, HTML and BOOTSTRAP under view Prof: MOMAND I hope that
        this you will like my first work and i will try my best next time thank you. <br>this is the worlds biggest online library where you can find and download any types of books you want, the books we offer are of
                any type such as: historical , Mytery, Horror, Science Fiction, Romance novel, Fantacy, Fantasy, philosophy and ........
            </p></p>
        </div>
    </div>
</div>
<!-- end about us -->
<!--start our books -->
<div class="container mt-5">
        <h1 class="display-1 text-center p-5">Books</h1>
        <div class="row">
            <?php
            
            include 'connection.php';
            $sql = "SELECT * FROM Books order by ID DESC limit 6";
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
<!--end our books -->
<!-- start contact Us -->
<div class="container con mt-5" id="contact">
    <h1 class="display-1 text-center">Contact Us</h1>
    <div class="row">
        <div class="col-sm-12">
            <form action="action_page.php">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your name..">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lastname" placeholder="Your last name..">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" class="form-control" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                  <option value="usa">Afghanistan</option>
                  <option value="usa">Pakistan</option>

                </select>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <textarea id="subject" class="form-control" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">

            </form>
        </div>
    </div>
</div>
<!-- end contact Us -->

<?php

include 'global/footer.php';

?>
















