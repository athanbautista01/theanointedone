<?php
     $title="The Anointed One"; 
    include("include/header.php");
?>
<section>
    <h1 class="text-center">"HELPING PEOPLE TO CHOOSE THE NEXT LEADER"</h1>
    <img class="img-responsive img-thumbnail" src="images/home.jpg">
    <br>
    <hr class="hra">
    <div class="col-lg-12">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img class="img-responsive img-thumbnail" src="images/PRES/BINAY.png"></center>
                <div class="caption text-center">
                    <h5>Jejomar Binay</h5>
                    <p></p>
                    <p><button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
MORE
                        </button>
                        <div class="collapse" id="collapseExample">
                            <div class="well">
...
                            </div>
                        </div></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img class="img-responsive img-thumbnail" src="images/PRES/SANTIAGO.png"></center>
                <div class="caption text-center">
                    <h5>Miriam Santiago</h5>
                    <p></p>
                    <p><button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
MORE
                        </button>
                        <div class="collapse" id="collapseExample1">
                            <div class="well">
...
                            </div>
                        </div></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img class="img-responsive img-thumbnail" src="images/PRES/DUTERTE.png"></center>
                <div class="caption text-center">
                    <h5>Rodrigo Duterte</h5>
                    <p></p>
                    <p><button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
MORE
                        </button>
                        <div class="collapse" id="collapseExample2">
                            <div class="well">
...
                            </div>
                        </div></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img class="img-responsive img-thumbnail" src="images/PRES/POE.png"></center>
                <div class="caption text-center">
                    <h5>Grace Poe</h5>
                    <p></p>
                    <p><button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
MORE
                        </button>
                        <div class="collapse" id="collapseExample3">
                            <div class="well">
...
                            </div>
                        </div></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="thumbnail">
                <img class="img-responsive img-thumbnail" src="images/PRES/ROXAS.png"></center>
                <div class="caption text-center">
                    <h5>Mar Roxas</h5>
                    <p></p>
                    <p><button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
MORE
                        </button>
                        <div class="collapse" id="collapseExample4">
                            <div class="well">
...
                            </div>
                        </div></p>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>

    <div class="col-lg-12">
        <div class="col-lg-12">
            <h3 class="text-center">What are the things you Look for a Presidential and Vice Presidential Candidate?</h3>
            <hr class="hrb">
            <form action="include/processpost.php" method="post">
                <div class="form-group col-lg-4 col-lg-offset-4">
                    <input type="text" class="form-control text-center" name="voter" id="voter" required placeholder="Write Your Name">
                </div>
                <div class="form-group col-lg-6 col-lg-offset-3">
                    <textarea class="form-control text-center" rows="2" type="text" name="pananaw" id="pananaw" required placeholder="Write here the things you Look for in a Presidential Candidate"></textarea>
                </div>
                <div class="form-group text-center col-lg-12">
                    <input type="submit" name="submitAdd" value="POST" class="btn btn-default" />
                    <a class="btn btn-default" href="index.php">Cancel</a>
                </div>
            </form>
        </div>
        <?php
            $query = "SELECT Name, Feedback FROM post_feedbacks";
            $result = $conn->query($query); 
            if ($conn->error) {
            die("Query failed: " . $conn->error);
            } 
            //If there are records fetched, iterate through the data set
            if ($result->num_rows) {    
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        
        <div class="col-lg-4 text-center">
            <h3><?php echo $row['Feedback'];?></h3>
            <p>-<?php echo $row['Name'];?></p>
        </div>
        <?php            }}?>
    </div>
</section>
</div>
<?php include("include/footer.html")?>