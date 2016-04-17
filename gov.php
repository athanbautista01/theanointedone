<?php $title="The Anointed One | Government Data Sets";?>
<?php include("include/header.php")?>
<section>
    <h1 class="text-center">"GOVERNMENT DATA SETS"</h1>
    <hr class="hrb">
    <br>
    <div class="col-lg-6">
        <h2 class="text-center">"List Of Registered Voters Year 2016"</h2>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>REGION</th>
                <th>reg<br>voters<br>2010</th>
                <th>voters<br>who<br>voted 2010</th>
                <th>perc<br>voters turn<br>out 2010</th>
                <th>reg<br>voters<br>2013</th>
                <th>voters<br>who voted<br>2013</th>
                <th>perc<br>voters turn<br>out 2013</th>
                </thead>
                <tbody class="row">
                <tr>

                    <?php
                           $query = "SELECT region, total_number_registered_voters_2010, total_number_voters_who_actually_voted_2010,percentage_voters_turn_out_2010,total_number_registered_voters_2013,total_number_voters_who_actually_voted_2013,percentage_voters_turn_out_2013 FROM comelec_reg_voters_1992_2013";
                                       $result = $conn->query($query); 
                                              if ($conn->error) {
                                                die("Query failed: " . $conn->error);
                                              } 
                                              //If there are records fetched, iterate through the data set
                                              if ($result->num_rows) {    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<td>";
                                                    echo  $row['region'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['total_number_registered_voters_2010'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  $row['total_number_voters_who_actually_voted_2010'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['percentage_voters_turn_out_2010'];
                                                     echo "</td>";
                                                     echo "<td>";
                                                    echo  $row['total_number_registered_voters_2013'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  $row['total_number_voters_who_actually_voted_2013'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['percentage_voters_turn_out_2013'];
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
                <th>POSITIONS</th>
                <th>name<br>of<br>candidates</th>
                <th>grand<br>total</th>
                <th>based on<br>overs absentee<br>voting<br>canvass</th>
                <th>based on<br>loc absentee<br>voting<br>canvass</th>
                <th>based on<br>prov dist city<br>cert of<br>canvass</th>
                </thead>
                <tbody class="row">
                <tr>

                    <?php
                           $query = "SELECT position, name_of_candidates, grand_total, based_on_overs_absentee_voting_canvass, based_on_loc_absentee_voting_canvass, based_on_prov_dist_city_cert_of_canvass FROM presidential_and_vice_presidential_results_2010";
                                       $result = $conn->query($query); 
                                              if ($conn->error) {
                                                die("Query failed: " . $conn->error);
                                              } 
                                              //If there are records fetched, iterate through the data set
                                              if ($result->num_rows) {    
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<td>";
                                                    echo  $row['position'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  $row['name_of_candidates'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['based_on_prov_dist_city_cert_of_canvass'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['based_on_overs_absentee_voting_canvass'];
                                                     echo "</td>";
                                                      echo "<td>";
                                                    echo  $row['based_on_loc_absentee_voting_canvass'];
                                                     echo "</td>";
                                                    echo "<td>";
                                                    echo  $row['based_on_prov_dist_city_cert_of_canvass'];
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