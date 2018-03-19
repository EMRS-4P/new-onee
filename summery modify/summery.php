<?php

require_once('../connection/connect.php');



if(!empty($_POST['patient_id'])){

  
$patient_details ="select * from patient_registration" ;
$query ="select * from patient_registration";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Registration_Number"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

}














if ($patient_details){
?>

<!doctype html>

<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Regional Poison Information System</title>
<meta name="description" content="">
<meta name="author" content="Group4p">

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css" />
<!-- Font Awesome -->
<link href="../font/css/font-awesome.min.css" rel="stylesheet">

<style>
.column {
    float: left;
    width: 50%;
    padding: 10px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
} 

</style>
</head>

<body>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> Details about Curricular Vital</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

   

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
         <table style="width:100%">
     
     <tr>
      <th>Registration Number </th>
      <td><?php echo (int)$patient_details['Registration_Number']; ?></td>
      </tr>
      
      <tr>
      <th>Name: </th>
      <td><?php echo $patient_details['FirstName']." ".$patient_details['LastName']; ?></td>
      </tr>
      
      <tr>
      <th>Medical History: </th>
      <td><?php echo $patient_details['medical_history']; ?></td>
      </tr>
      
      <tr>
      <th>Nic number: </th>
      <td><?php echo $patient_details['patient_NIC']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian name: </th>
      <td><?php echo $patient_details['guardian_name']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian phone number: </th>
      <td><?php echo $patient_details['guardian_phonenumber']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian address: </th>
      <td><?php echo $patient_details['guardian_address']; ?></td>
      </tr>
      
      <tr>
      <th>Date of birth: </th>
      <td><?php echo $patient_details['Date_Of_Birth']; ?></td>
      </tr>
      
      <tr>
      <th>Gender: </th>
      <td><?php echo $patient_details['Gender']; ?></td>
      </tr>
      
      <tr>
      <th>Mobile No.: </th>
      <td><?php echo $patient_details['mobile_number']; ?></td>
      </tr>
      
      <tr>
      <th>Land Line No.: </th>
      <td><?php echo $patient_details['land_number']; ?></td>
      </tr>
      
      <tr>
      <th>Address: </th>
      <td><?php echo $patient_details['address']; ?></td>
      </tr>
      </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> Details about bee_stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from details_about_bee_stings" ;
$query ="select * from details_about_bee_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM details_about_bee_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>Place Of Stings
      <th>Nic number: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>


<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      
    </div>
<?php
    $patient_details ="select * from details_about_black_widow_spider" ;
$query ="select * from details_about_black_widow_spider";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_black_widow_spider WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>Details about black_widow_spider</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
       

          <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number Of Stings: </th>
      <td><?php echo $patient_details['Number_Of_Stings']; ?></td>
      </tr>
      
      <tr>Place Of Stings
      <th>Nic number: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
<?php
    $patient_details ="select * from details_about_hornet_stings" ;
$query ="select * from details_about_hornet_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_hornet_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>Details_about_hornet_stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
         <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>
      <th>Place Of Stings: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>


<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
<?php
    $patient_details ="select * from details_about_wasp_stings" ;
$query ="select * from details_about_wasp_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_wasp_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> Details_about_wasp_stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panel">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
        <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>
      <th>Place Of Stings: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>












<script src="../js/modernizr-latest.js"></script> 
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="../js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="../js/jquery.nav.js" type="text/javascript"></script> 
<script src="../js/jquery.fittext.js"></script> 
<script src="../js/waypoints.js"></script> 
<script src="../js/custom.js" type="text/javascript"></script> 
<script src="../js/owl-carousel/owl.carousel.js"></script>

</body>
</html>                 
<?php
}
?>


</body>
</html>