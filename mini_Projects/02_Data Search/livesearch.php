<?php 
// echo 'congratulations'; 

include ("config.php"); 
    if(isset($_POST['input']))
    {
        $input = $_POST['input']; 
        $query = "SELECT * FROM searchperson WHERE name LIKE '{$input}%'";

        $result = mysqli_query($con, $query); 

        if(mysqli_num_rows($result) > 0)
        {
            ?> 
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Sl </th>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Age </th>
                            <th> Country</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                             while($row = mysqli_fetch_assoc($result))
                             {
                                $id         = $row['id']; 
                                $name       = $row['name']; 
                                $age        = $row['age']; 
                                $country    = $row['countrry'];
                                ?>  
                                
                                <tr>
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $age; ?></td>
                                    <td><?php echo $country; ?></td>
                                </tr>
                                

                            }  
                        ?>
                    </tbody>
                </table>
            <?php 
        } ?>
        <?php 
        else {
            echo  "<h6 class='text-danger text-center mt-3'> NOT FOUNDS </h6>";
        }
    }
    ?>
?> 