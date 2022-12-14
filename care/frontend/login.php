<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Form register inside narrow jumbotron - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
                        

<link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
  <div class="header">
    <ul class="nav nav-pills pull-right">
      <li ><a href="index.html">Home</a></li>
      <li class="active"><a href="login.php">Login</a></li>
      <li><a href="http://getbootstrap.com/examples/jumbotron-narrow/#">About</a></li>
    </ul>
    <h3 class="text-muted prj-name">Project name</h3>
  </div>

  <div class="jumbotron text-center" style="min-height:300px; width: 80%">
    <div class="col-md-4 col-md-offset-2">
        <form class="form-horizontal" role="form" method="POST">
            <div class="form-group text-center">
                <div class="col-sm-10 reg-icon">
                    <span class="fa fa-user fa-3x">Sign IN</span>
                </div>
            </div>
            <div class="form-group" >
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name or Email">
                </div>
              </div>
             
           
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="pass"  id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <button type="submit" name="login" class="btn btn-info">
                    <span class="glyphicon glyphicon-share-alt"></span>
                    Register
                  </button>
                </div>
              </div>
        </form>


        
<?php
if(isset($_POST["login"])){
  include "config.php";  
        $email = $_POST["name"];
        $password = $_POST["pass"];
        
         $query = "SELECT `ID`, `P-NAME`, `EMAIL`  FROM `patient`  WHERE 
        `Email`= '{$email}' AND `PASSWORD` = '{$password}'";
       

       $result =  mysqli_query($conn, $query);
     

       if(mysqli_num_rows($result)>0)
       {

           while($row = mysqli_fetch_assoc($result))
           {
         


               $id= $row["ID"];
               $email = $row["EMAIL"];
               $name = $row["P-NAME"];

               session_start();

               $_SESSION["email"] = $email;
               $_SESSION["id"] = $id;
               $_SESSION["name"] =$name;

          echo $_SESSION["email"];

               header("location:index.php");


           }
      
        }
        else{
          echo "error";
        }
      }



    ?>
    </div>
  </div>
</div>                                        

<style type="text/css">
    body {
    background: linear-gradient(to right, whitesmoke,rgba(72, 189, 197, 0.74), #48bdc5 );
    font-family: 'Poppins', sans-serif;
}

  .jumbotron label {
    font-size:12px;    
}

.reg-icon{
    color:#5bc0de;
    font-weight:bold;
    text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4) !important;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #5bc0de;
}

.prj-name{
    font-weight:bold;
    color:#5bc0de;
}
                                        
</style>

<script type="text/javascript">
                              
</script>
</body>
</html>