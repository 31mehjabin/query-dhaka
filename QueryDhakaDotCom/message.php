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


                  $varAr=1;
                  $mssg="";
                  $msgCon="";

                  while($row = mysqli_fetch_array($result1)){
                          
                         $msgCon= $row["message"];
                         echo $msgCon;

                         
                         }

                 

  
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inbox</title>

		<style type="text/css">
			
			* {
				margin: 0;
				padding: 0;
			}
                        html{
                           background:url('query9.jpg') no-repeat center fixed;
                           -webkit-background-size:cover;
                           -moz-background-size:cover;
                           -o-background-size:cover;
                            background-size:cover;


                        }
			body {
				font-family: "Comic Sans MS", cursive, sans-serif;
                                font-size:20px;
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
                     margin: 20px;

              }

    

  img {
    display: block;
    margin: auto;
    
}

  .arrow_box {
	position: relative;
	background: #62d571;
	border: 2px solid #eed5f5;
        font-family:"Comic Sans MS", cursive, sans-serif;
}
.arrow_box:after, .arrow_box:before {
	right: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
}

.arrow_box:after {
	border-color: rgba(98, 213, 113, 0);
	border-right-color: #62d571;
	border-width: 50px;
	margin-top: -50px;
}
.arrow_box:before {
	border-color: rgba(238, 213, 245, 0);
	border-right-color: #eed5f5;
	border-width: 53px;
	margin-top: -53px;
}

   

                         
			
		</style>
		
		
	</head>
	<body>

		
		
		

		


		<div class="content">    

                       
                      
                              <img src="query1.png">
                      
                       <br>


                <secO>
    
                        <partOne style="float:left;">
                               <ul class="mainmenu">
                                   <li style="width:250px;"><a href="home.php">Profile</a></li>
                                   <li style="width:250px;"><a href="hospitalList.php">Hospitals</a></li>
                                   <li style="width:250px;"><a href="PoliceStationList.php">Police Stations</a></li>
                                   <li style="width:250px;"><a href="HotelList.php">Hotels</a></li>
                                   <li style="width:250px;"><a href="RestaurantList.php">Restaurants</a></li>
                                   <li style="width:250px;"><a href="schoolList.php">Educational Institute</a>
                                          <ul class="submenu">
                                                 <li style="width:250px;"><a href="schoolList.php">School</a></li>
                                                  <li style="width:250px;"><a href="collegeList.php">College</a></li>
                                                  <li style="width:250px;"><a href="universityList.php">University</a></li>
                                          </ul>
                                   </li>
                                   <li style="width:250px;"><a href="contactAdmin.php">Contact us</a></li>
                                   <li style="width:250px;"><a href="logout.php">Log Out</a></li>
                               </ul>
                       </partOne>
                    

                       

                  

          

        </secO>     
			 

                       
		</div>

            <div style="width:50%;margin-left:35%;color:white;">
                     <h3>Message From Admin:</h3>
            </div>

             

 
            <div class="arrow_box" style="width:50%;min-height: 100px;;margin-left:35%;margin-top:60px;">
                 

               <?php 


                     echo $msgCon;

                ?>

          


            </div>
		
		

	</body>
</html>