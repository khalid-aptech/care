<?php include "sidebar.php" ?>
<?php include "header.php" ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-6">
            <div class="bg-secondary rounded d-flex align-items-center  p-4">
                <i class="fa fa-chart-line fa-7x text-primary"></i>


                <?php


                include "config.php";

                $query = "SELECT Count(DID) as total FROM `doctor` where `role` = 'doctor' ";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                ?>
                        <div class="ms-5">
                            <h1 style="font-size: 30px ; margin-left:40px ">DOCTORS</h1>
                            <br>
                            <h1 style="color:red; font-size:50px ; text-align:center"><?php echo $row['total'] ?></h1>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-secondary rounded d-flex align-items-center  p-4">
                <i class="fa fa-chart-line fa-4x text-primary"></i>
                <?php


                include "config.php";

                $query = "SELECT Count(ID) as total_patient FROM `patient` ";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                ?>
                        <div class="ms-5">
                            <h1 style="font-size: 30px ; margin-left:20px ">PATIENTS</h1>
                            <br>
                            <h1 style="color:red; font-size:50px ; text-align:center"><?php echo $row['total_patient'] ?></h1>
                        </div>
                <?php }
                } ?>
            </div>
        </div>

    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-6 col-xl-6">
            <div class="bg-secondary text-center rounded p-3">
                <?php


                include "config.php";

                $query = "SELECT Count(ID) as total_appointment FROM `appointment` ";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                ?>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <i class="fa fa-chart-line fa-5x text-primary"></i>
                            <h1 style="font-size: 30px ; margin-left:20px ">APPOINTMENTS</h1>
                            <br>

                            <h1 style="color:red; font-size:50px ; text-align:center"><?php echo $row['total_appointment'] ?></h1>

                        </div>
                <?php }
                } ?>

            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-secondary text-center rounded p-3">

                <?php


                include "config.php";

                $query = "SELECT Count(ID) as total_user FROM `user`";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                ?>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <i class="fa fa-chart-line fa-5x text-primary"></i>
                            <h1 style="font-size: 30px ; margin-left:60px">USERS</h1>
                            <br>
                            <h1 style="color:red; font-size:50px"><?php echo $row['total_user'] ?></h1>

                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
</div>






<!-- Sales Chart End -->


<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Appointments</h6>
            <a href="">Show All</a>
        </div>
        
<?php


include "config.php";

$query = "SELECT * FROM `appointment` ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{


?>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Date</th>
                        <th scope="col">ID</th>
                        <th scope="col">Patient</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php while($row = mysqli_fetch_assoc($result)) 
                        
                        {
                    ?>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td><?php echo $row["DATE"];  ?></td>
                        <td><?php echo $row["ID"];  ?></td>
                        <td><?php echo $row["NAME"];  ?></td>
                        <td><?php echo $row["SPECIALIZATION"];  ?></td>
                        <td>ACTIVE</td>
                        <td><a class="btn btn-sm btn-primary" href="patient.php">Detail</a></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } ?>
    </div>
</div>
<!-- Recent Sales End -->


<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">

            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h6 class="mb-0">Messages</h6>
                    <a href="">Show All</a>
                </div>
                <?php


                include "config.php";

                $query = "SELECT * FROM `contact`";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                ?>
                        <div class="d-flex align-items-center border-bottom py-3">
                           
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0"><?php echo $row["name"];  ?></h6>
                                   
                                </div>
                                <span><?php echo $row["message"]; ?></span>
                            </div>
                        </div>
                        <?php }
                } ?>
            </div>
    
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calender</h6>
                    <a href="">Show All</a>
                </div>
                <div id="calender"></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-secondary rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">To Do List</h6>
                    <a href="">Show All</a>
                </div>
                <div class="d-flex mb-2">
                    <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                    <button type="button" class="btn btn-primary ms-2">Add</button>
                </div>
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>Short task goes here...</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>Short task goes here...</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox" checked>
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span><del>Short task goes here...</del></span>
                            <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom py-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>Short task goes here...</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center pt-2">
                    <input class="form-check-input m-0" type="checkbox">
                    <div class="w-100 ms-3">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span>Short task goes here...</span>
                            <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Widgets End -->


<?php include "footer.php" ?>

</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>