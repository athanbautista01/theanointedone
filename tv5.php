<?php $title="The Anointed One | TV5 Data Sets";?>
<?php include("include/header.php")?>
<section>
    <h1 class="text-center">"TV5 DATA SETS"</h1>
    <hr class="hrb">
    <br>
    <div class="col-lg-6">
        <h2 class="text-center">"List Of Registered Voters Year 2016"</h2>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>CATEGORY</th>
                <th>SUB-CATEGORY</th>
                <th>TOTAL NO. OF REGISTERED VOTERS</th>
                </thead>
                <tbody class="row">
                <tr>

                    <?php
                           $query = "SELECT CATEGORY, SUB_CATEGORY, TOTAL_NO_OF_REGISTERED_VOTERS FROM voters_national";
                                       $result = $conn->query($query); 
                                              if ($conn->error) {
                                                die("Query failed: " . $conn->error);
                                              } 
                                              //If there are records fetched, iterate through the data set
                                              if ($result->num_rows) {    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<td>";
                                                    echo  $row['CATEGORY'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  $row['SUB_CATEGORY'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['TOTAL_NO_OF_REGISTERED_VOTERS'];
                                                     echo "</td>";
                                 echo "<tr></tr>";
                            }
                        }
                    ?>

                </tr>
                                        </tbody>
            </table>
        </div>
    </div>

    <div class="col-lg-6">
        <h2 class="text-center">"List Of Campaign Donations Recieved By Candidates Year 2010/2013 "</h2>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>CANDIDATES</th>
                <th>TOTAL DONATION IN PESO</th>
                <th>YEAR</th>
                </thead>
                <tbody class="row">
                <tr>

                    <?php
                           $query = "SELECT CANDIDATES, TOTAL_DONATION_IN_PESO, YEAR FROM total_campaign_donations_received";
                                       $result = $conn->query($query); 
                                              if ($conn->error) {
                                                die("Query failed: " . $conn->error);
                                              } 
                                              //If there are records fetched, iterate through the data set
                                              if ($result->num_rows) {    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<td>";
                                                    echo  $row['CANDIDATES'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  "P " . $row['TOTAL_DONATION_IN_PESO'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['YEAR'];
                                                     echo "</td>";
                                 echo "<tr></tr>";
                            }
                        }
                    ?>

                </tr>
                                        </tbody>
            </table>
        </div>
    </div>
</section>
        </div>
<?php include("include/footer.html")?>