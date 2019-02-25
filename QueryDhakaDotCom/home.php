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

<html>
<head>
<title>User Profile</title>
    <style>
            html{
                           background:url('backTwo.jpg') no-repeat center fixed;
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

    

  img {
    display: block;
    margin: auto;
    
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
                                   <li style="width:300px;"><a href="hospitalList.php">Hospitals</a></li>
                                   <li style="width:300px;"><a href="PoliceStationList.php">Police Stations</a></li>
                                   <li style="width:300px;"><a href="HotelList.php">Hotels</a></li>
                                   <li style="width:300px;"><a href="RestaurantList.php">Restaurants</a></li>
                                   <li style="width:300px;"><a href="schoolList.php">Educational Institute</a>
                                          <ul class="submenu">
                                                  <li style="width:300px;"><a href="schoolList.php">School</a></li>
                                                  <li style="width:300px;"><a href="collegeList.php">College</a></li>
                                                  <li style="width:300px;"><a href="universityList.php">University</a></li>
                                          </ul>
                                   </li>
                                   <li style="width:300px;"><a href="message.php">Inbox</a></li>
                                   <li style="width:300px;"><a href="contactAdmin.php">Contact us</a></li>
                                   <li style="width:300px;"><a href="logout.php">Log Out</a></li>
                               </ul>
                       </partOne>
                    

                       

                  <partTwo style="float:right;">

                               
                               <?php

                         $con=mysqli_connect("127.0.0.1","root","","testapp");

                         $query="Select * from tbl_users where username='$user'";

                         $result= mysqli_query($con,$query);

                         while($row = mysqli_fetch_array($result)){
                          
                         echo "User ID:  ".$row["id"]."</br><br>";
                         echo "Username: ".$row["username"]."</br><br>";
                         echo "Email:    ".$row["email"]."</br></br>";
                         }

                       

                         

                        ?>
                    </partTwo>

          

        </secO>


      
</body>
</html>