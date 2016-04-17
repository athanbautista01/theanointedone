<?php $title="The Anointed One | Government Data Sets";?>
<?php include("include/header.php")?>
<section>
    <h1 class="text-center">"CANDIDATES PLATFORMS"</h1>
    <hr class="hrb">
    <br>
    <div class="col-lg-12">
        <h2 class="text-center">"List Of Planforms of Presidentiables and Vice Presidentiables"</h2>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>CANDIDATES</th>
                <th>ISSUE ID</th>
                <th>QOUTE/th>
                <th>LIST SOURCE</th>
                <th>LIST SUMMARY</th>
</thead>
                <tbody class="row">
                <tr>
                    <?php
                        $query = "SELECT list_candidate_id, list_issue_id, list_quote, list_source, list_summary FROM soi";
                        $result = $conn->query($query); 
                        if ($conn->error) {
                        die("Query failed: " . $conn->error);
                        } 
                        //If there are records fetched, iterate through the data set
                        if ($result->num_rows) {    
                        while ($row = mysqli_fetch_assoc($result)) {
                        if($row['list_candidate_id'] == '1'){
                            $row['list_candidate_id'] == 'Binay';
                        }
                        echo "<td>";
                        echo  $row['list_candidate_id'];
                        echo "</td>";
                        echo "<td>";
                        echo  $row['list_issue_id'];
                        echo "</td>";
                        echo "<td>";
                        echo  $row['list_quote'];
                        echo "</td>";
                        echo "<td>";
                        echo  $row['list_source'];
                        echo "</td>";
                        echo "<td>";
                        echo  $row['list_summary'];
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