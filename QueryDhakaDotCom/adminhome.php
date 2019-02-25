<?php
session_start();
if(!isset($_SESSION['adminname'])){
    header('location:adminindex.php');
}

$admin = $_SESSION['adminname'];

 include_once('dbcon.php');


?>

<html>
<head>
<title>Admin Profile</title>
    <style>

                          html{
                           background:url('backThree.jpg') no-repeat center fixed;
                           -webkit-background-size:cover;
                           -moz-background-size:cover;
                           -o-background-size:cover;
                            background-size:cover;


                        }

                   html, body {
                           font-family: "Comic Sans MS", cursive, sans-serif;
                           font-size:17px;
                        }

/* define a fixed width for the entire menu */
.navigation {
  width: 300px;
  
}

/* reset our lists to remove bullet points and padding */
.mainmenu, .submenu {
  list-style: none;
  padding: 0;
  margin: 0;
}

/* make ALL links (main and submenu) have padding and background color */
.mainmenu a {
  display: block;
  background-color: papayawhip;
  text-decoration: none;
  padding: 10px;
  color: #000;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #C5C5C5;
}


/* when hovering over a .mainmenu item,
  display the submenu inside it.
  we're changing the submenu's max-height from 0 to 200px;
*/

.mainmenu li:hover .submenu {
  display: block;
  max-height: 200px;
}

/*
  we now overwrite the background-color for .submenu links only.
  CSS reads down the page, so code at the bottom will overwrite the code at the top.
*/

.submenu a {
  background-color: #999;
}

/* hover behaviour for links inside .submenu */
.submenu a:hover {
  background-color: #666;
}

/* this is the initial state of all submenus.
  we set it to max-height: 0, and hide the overflowed content.
*/
.submenu {
  overflow: hidden;
  max-height: 0;
  -webkit-transition: all 0.5s ease-out;
}

  partTwo{

      float:right;
      background-color:#E7E4F4;
      margin: 20px;
      padding: 10px;
      font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
      font-size:20px;

  }

           


           partOne{

                     height:40%;
                     width:15%;

              }

    

 



  


.nav{

      width:420px;
      padding-left:450px;
}
 
.nav ul {
  list-style: none;
  background-color: #737CA1;
  text-align: center;
  padding: 0;
  margin: 0;
  
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  
  border: 5px solid #ccc;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 

 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
 
  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}

          



    </style>
</head>
<body>

      <div>
                      
                              <img src="query1.png">
                      
                       <br>
                       <br>
                       <br>
                       <br>
             </div>

           
                     

                <secO>
    
                        <partOne style="float:left;">
                               <ul class="mainmenu">
                                   <li style="width:300px;"><a href="#adminpanel">Admin Panel</a></li>
                                   <li style="width:300px;"><a href="#policestation">Police Station</a></li>
                                   <li style="width:300px;"><a href="#hospital">Hospital</a></li>
                                   <li style="width:300px;"><a href="#hotel">Hotel</a></li>
                                   <li style="width:300px;"><a href="#restaurant">Restaurant</a></li>
                                   <li style="width:300px;"><a href="#School">School</a></li>
                                   <li style="width:300px;"><a href="#College">College</a></li>
                                   <li style="width:300px;"><a href="#University">University</a></li>
                                   <li style="width:300px;"><a href="messageAdmin.php">Message</a></li>
                                   <li style="width:300px;"><a href="contactUser.php">Reply</a></li>
                                   <li style="width:300px;"><a href="adminlogout.php">Log Out</a></li>
                               </ul>
                       </partOne>

                      
                    
                    

                       

                  <partTwo style="float:right;">

                               
                               <?php

                         $con=mysqli_connect("127.0.0.1","root","","testapp");

                         $query="Select * from adminlist where adminname='$admin'";

                         $result= mysqli_query($con,$query);

                         while($row = mysqli_fetch_array($result)){
                          
                         echo "Admin ID:  ".$row["id"]."</br><br>";
                         echo "Admin name: ".$row["adminname"]."</br><br>";
                         echo "Email:    ".$row["email"]."</br></br>";
                         }

                       

                         

                        ?>
                    </partTwo>

                

                    <div class="nav" id="adminpanel">

                          <h1> Admin Panel: </h1>
                          <ul>
                                  <li style="width:131px;"><a href="adminList.php">Admin List</a></li>
                                  <li style="width:129px;"><a href="adminregister.php">Register</a></li>
                                  <li style="width:130px;"><a href="deleteAdmin.php">Delete</a></li>
                          </ul>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="nav" id="policestation">
                          <h1> Police stations: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminPoliceStationList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deletePoliceStation.php">Delete</a></li>
                          </ul>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="nav" id="hotel">
                          <h1> Hotels: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminHotelList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteHotel.php">Delete</a></li>
                          </ul>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="nav" id="restaurant">
                          <h1> Restaurants: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminRestaurantList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteRestaurant.php">Delete</a></li>
                          </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="nav" id="hospital">
                          <h1> Hospital: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminhospitalList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteHospital.php">Delete</a></li>
                          </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>



                    <div class="nav" id="School">
                          <h1> School: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminschoolList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteSchool.php">Delete</a></li>
                          </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>


                    <div class="nav" id="College">
                          <h1> College: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="admincollegeList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteCollege.php">Delete</a></li>
                          </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                     <div class="nav" id="University">
                          <h1> University: </h1>
                          <ul>
                                  <li style="width:95px;"><a href="adminuniversityList.php">List</a></li>
                                  <li style="width:95px;"><a href="#">Register</a></li>
                                  <li style="width:95px;"><a href="#">Update</a></li>
                                  <li style="width:95px;"><a href="deleteUniversity.php">Delete</a></li>
                          </ul>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>



          

        </secO>


   
</body>
</html>