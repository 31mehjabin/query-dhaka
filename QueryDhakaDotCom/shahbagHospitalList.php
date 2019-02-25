
<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
    
}

 $user = $_SESSION['username'];

 include_once('dbcon.php');

 $sql1 = "select message from tbl_users where username='$user' ";
 $result1 = mysqli_query($conn, $sql1);
 $count1 = mysqli_num_rows($result1);


  
?>




<!DOCTYPE html>

<html>


<head>

   <title> Hospitals </title>

<style>

                     html{
                           background:url('query10.jpg') no-repeat center fixed;
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
  background-color: #FAF59E;
  text-decoration: none;
  padding: 10px;
  color: #000;
}

/* add hover behaviour */
.mainmenu a:hover {
    background-color: #fcf7f8;
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

            table{
                    border-collapse: collapse;
                    width : 60%;
                    font-size: 14pt;

              }
               
              table,th,td{

                      border:1px solid rgb(25,51,153);

              }
              th{
                       background : rgba(9, 16, 33,0.8);
                       color: white;

              }
               tr:nth-child(odd){
                       background : rgba(242, 242, 234,0.8);
                       color: black;
                       height:70px;
              }
              tr:nth-child(even){
                       background : rgba(214, 255, 221,0.8);
                       color: black;
                       height:70px;
              }
             

              partZero{

                     height:20%;
                     width:100%;

              }

             partOne{

                     height:40%;
                     width:15%;

              }

            partThree{

                     height:40%;
                     width:15%;

              }

      img {
    display: block;
    margin: auto;
    
}



</style>

</head>




<body>

        <secO>
                   <partZero style="text-align:center;">
                       <img src="query1.png">
                       <img src="query6.png">
                     
                   </partZero>
                        
   
                   <partOne style="float:left;">
                               <ul class="mainmenu">
                                   <li style="width:230px;"><a href="home.php">Profile</a></li>
                                   <li style="width:230px;"><a href="PoliceStationList.php">Police Stations</a></li>
                                   <li style="width:230px;"><a href="HotelList.php">Hotels</a></li>
                                   <li style="width:230px;"><a href="RestaurantList.php">Restaurants</a></li>
                                   <li style="width:230px;"><a href="schoolList.php">Educational Institute</a>
                                          <ul class="submenu">
                                                  <li style="width:230px;"><a href="schoolList.php">School</a></li>
                                                  <li style="width:230px;"><a href="collegeList.php">College</a></li>
                                                  <li style="width:230px;"><a href="universityList.php">University</a></li>
                                          </ul>
                                   </li>
                                   <li style="width:230px;"><a href="message.php">Inbox</a></li>
                                   <li style="width:230px;"><a href="contactAdmin.php">Contact us</a></li>
                                   <li style="width:230px;"><a href="logout.php">Log Out</a></li>
                               </ul>
                    </partOne>

                       

                  <partThree style="float:right;">

                               
                               <ul class="mainmenu">
                                   
                                  
                                   <li style="width:200px;"><a href="">Show by area?</a>
                                          <ul class="submenu">
                                                  <li style="width:200px;"><a href="shahbagHospitalList.php">Shahbag</a></li>
                                                  <li style="width:200px;"><a href="ramnaHospitalList.php">Ramna</a></li>
                                                  <li style="width:200px;"><a href="dhanmondiHospitalList.php">Dhanmondi</a></li>
                                                  <li style="width:200px;"><a href="sherebanglanagarHospitalList.php">Sher-E-Bangla Nagor</a></li>
                                          </ul>
                                   </li>
                                  
                               </ul>
                    </partThree>

                <partTwo>

                        <center>

                             <table style="text-align:center;">

                      <tr><th>Name</th><th>Address</th></tr>

                      <?php

                         $con=mysqli_connect("127.0.0.1","root","","testapp");

                         $query="Select * from hospital where area='Shahbag'";

                         $result= mysqli_query($con,$query);

                         while($row = mysqli_fetch_array($result)){
                          
                         echo "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td></tr>";
                         }

                        ?>

                   </table>

                    </center>

                  </partTwo>

                                 

                      

        </secO>

</body>

</html>