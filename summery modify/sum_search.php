<?PHP
  session_start();
  require_once('../connection/connect.php');
 /* 
  $UserName = $_SESSION["username"];
  $password = $_SESSION["password"];
  $query ="select * from doctor_registration where Username='$UserName' and Password ='$password'";
  
  $result =mysqli_query($connection,$query);
  
  $doctor_details = mysqli_fetch_assoc($result); 
 */

   $query1 ="select * from patient_registration";
  
  $result1 =mysqli_query($connection,$query1);
  
  $patient_details = mysqli_fetch_assoc($result1);
 
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}
#mainNav li{

   list-style-type: none;
    float: right;

}

#btn1{


 margin-top: -30px;
 width: 70px ;
  height: 30px;
}
#input{
   margin-top: 25px;
   width: 220px ;
 height: 30px;
 
}
#btn2{
  height: 30px ; 
  width: 50px;
margin-top: 24px;
margin-left:20px
}

#mainNav #home{
  float: right;
}
#headernav{
  background-color: blue;
}


</style>
</head>
<body>



<header id ="headernav" class="header" style="background-color: blue;">

  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">   
   
      </div>
     
      <div id="main-nav" class="collapse navbar-collapse ">
      
        <ul class="nav navbar-nav" id="mainNav">
      <li id ="home" ><a href="../doctor/doctor_hp.php" class="scroll-link">Home</a></li>
        <li>

        <button id="btn2" onclick="myFunction()" >Print</button>
                    <script>
                    function myFunction() {
                        window.print();
                    }
                    </script>
        </li>
      <li>
        
        <form class="example" action="" method="POST" style="margin:auto;max-width:300px">
          <input id = "input" type="number" placeholder="Enter Patient ID" name="patient_id" >
          <button id="btn1" type="submit"  name="id_search" value="Search" >summary</button>
        </form>
      </li>
          <!--connect with loging page -->
        </ul>
      </div>
   
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>




          <section id="patients">
           
          
          <?php

 
               if(!empty($_POST['patient_id']))
               {

                  echo $patient_details['FirstName'].' '.$patient_details['LastName'];
                    require_once('summery.php');
                
                }


          ?>
           
          </section>


  

</section>
 



</body>
</html>


