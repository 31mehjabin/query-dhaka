
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
		<title>Restaurants</title>

		<style type="text/css">
			
			* {
				margin: 0;
				padding: 0;
			}
			body {
				font-family: "Comic Sans MS", cursive, sans-serif;
                                font-size:20px;
			}
			.background-wrap {
				position: fixed;
				z-index: -1000;
				width: 100%;
				height: 100%;
				overflow: hidden;
				top: 0;
				left: 0;
			}
			
			#video-bg-elem {
				position: absolute;
				top: 0;
				left: 0;
				min-height: 100%;
				min-width: 100%;
			}
			.content {
				position: absolute;
				width: 100%;
				min-height: 100%;
				z-index: 1000;
				background-color: rgba(0,0,0,0.7);
			}
			.content h1 {
				text-align: center;
				font-size: 65px;
				text-transform: uppercase;
				font-weight: 300;
				color: #fff;
				padding-top: 15%;
				margin-bottom: 10px;
			}
			.content p {
				text-align: center;
				font-size: 20px;
				letter-spacing: 3px;
				color: #aaa;
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



          table{
                    border-collapse: collapse;
                    width : 67%;
                    font-size: 14pt;

              }
               
              table,th,td{

                      border:1px solid rgb(25,51,153);

              }
              td{
                   width:120px;

              }
              th{
                       background : rgba(9, 16, 33,0.9);
                       color: white;

              }
               tr:nth-child(odd){
                       background : rgba(242, 242, 234,0.9);
                       color: black;
                       height:70px;
              }
              tr:nth-child(even){
                       background : rgba(214, 255, 221,0.9);
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

		
		
		

		<div class="background-wrap">
			<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted"> 
				<source src="FoodVid.mp4" type="video/mp4">
				Video not supported
			</video>          
		</div>

                 <secO>
                   <partZero style="text-align:center;">
                       <img src="query1.png"> <br>
                       <img src="query8.png"> <br>
                     
                   </partZero>
                        
   
                   <partOne style="float:left;">
                               <ul class="mainmenu">
                                   <li style="width:230px;"><a href="home.php">Profile</a></li>
                                   <li style="width:230px;"><a href="hospitalList.php">Hospitals</a></li>
                                   <li style="width:230px;"><a href="HotelList.php">Hotels</a></li>
                                   <li style="width:230px;"><a href="PoliceStationList.php">Police Stations</a></li>
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

                       

                 

                <partTwo>

                        <center>

                             <table style="text-align:center;">

                      <tr><th>Name</th><th>Address</th><th>Cuisine</th></tr>

                      <?php

                         $con=mysqli_connect("127.0.0.1","root","","testapp");

                         $query="Select * from restaurantlist";

                         $result= mysqli_query($con,$query);

                         while($row = mysqli_fetch_array($result)){
                 echo "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Cuisine"]."</td></tr>";
                         }

                        ?>

                   </table>

                    </center>

                  </partTwo>

                                 

                      

        </secO>


		<br>



		
		

	</body>
</html>