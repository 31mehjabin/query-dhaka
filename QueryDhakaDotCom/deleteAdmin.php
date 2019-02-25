<?php

session_start();
if(!isset($_SESSION['adminname'])){
    header('location:adminindex.php');
}

$admin = $_SESSION['adminname'];

 include_once('dbcon.php');


 include('deleteAdmin_process.php');
  
?>




<html>

  <title>

                 Delete Admin

  </title>

<head>
<link rel="stylesheet" href="deleteAdmin.css" type="text/css">

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
                                   <li style="width:80px;padding:10px;"><a href="adminhome.php">Back</a></li>
                               </ul>
                       </partOne>


<div class="container">  

  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

    <h3>Delete Entry</h3>
    <h4>Please make sure there is always atleast one Admin</h4>

     <fieldset>
      From: Admin Panel
    </fieldset>

    <fieldset>
      <input placeholder="Enter Admin ID" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>

    
   
    
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>

</body>

</html>