
<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>


<?php


include "config.php";

$query = "SELECT * FROM `contact`";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{


?>




            <!-- Table Start -->
            
                    <br>
                   
                    <div class="col-sm-12 ">
                        <div class="container ">
                            <h6 class="mb-4">Conatcts</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th> 
                                        <th scope="col">Phone</th>
                                       
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>


                                <?php while($row = mysqli_fetch_assoc($result)) 
                        
                                    {
                                ?>
                     
                                    <tr>
                                    <td class='id'><?php echo $row["ID"];  ?></td>
                                    <td><?php echo $row["name"];  ?></td>
                                    <td><?php echo $row["email"];  ?></td>
                                    <td><?php echo $row["message"]; ?></td>
                                    <td><?php echo $row["phone"]; ?></td>
                                    <!-- <td class='edit'><a href='update-user.php?id=<?php echo $row["ID"]; ?>'><i class='fa fa-edit'></i></a></td> -->
                                    <td class='delete'><a href='delete-user.php?id=<?php echo $row["ID"]; ?>'><i class='fa fa-trash'></i></a></td>
                                    </tr>
                                    <?php } ?>
                                     </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                  
                </div>
           
            <!-- Table End -->

    <?php include "footer.php" ?>