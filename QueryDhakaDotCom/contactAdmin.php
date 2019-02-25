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

 include('contactAdmin_process.php');
  
?>




<html>

  <title>

                 Contact Admin

  </title>

<head>
<link rel="stylesheet" href="contactAdmin.css" type="text/css">

<style>

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

partOne{

                     height:40%;
                     width:15%;

              }

</style>


</head>

<body>
                  <p>
                      
                      <br>
                    <marquee behavior="scroll" direction="left" onmouseover="stop()" onmouseout="start()">

                     <font face="comic sans" color="white" size="5px">QueryDhakaDotCom</font>

                   </marquee>
                  </p>

                      <partOne style="float:left;font-size: 18px;">

                               <br>
                               <br>
                               <ul class="mainmenu">
                                   <li style="width:230px;"><a href="home.php">Profile</a></li>
                                   <li style="width:230px;"><a href="hospitalList.php">Hospitals</a></li>
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
                                   <li style="width:230px;"><a href="logout.php">Log Out</a></li>
                               </ul>
                       </partOne>


<div class="container">  

  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    <h3>Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>

     <fieldset>
      <input placeholder="Enter User ID" type="text" name="id" value="<?= $id ?>" tabindex="3">
      <span class="error"><?= $id_error ?></span>
    </fieldset>

    <fieldset>
      <input placeholder="Enter Username" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>

    <fieldset>
      <input placeholder="Enter Email" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
   
    
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>

</body>

</html>