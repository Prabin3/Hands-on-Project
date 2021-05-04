<?php

function do_html_header($title) {
  // print an HTML header
?>
<!doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <style>
      body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }
      hr { color: #3333cc;}
      a { color: #000 }
      div.formblock
         { background: #ccc; width: 300px; padding: 6px; border: 1px solid #000;}
    </style>
  </head>
  <body>
  <div>
    <!-- <img src="bookmark.gif" alt="PHPbookmark logo" height="55" width="57" style="float: left; padding-right: 6px;" /> -->
      <h1>Assignment</h1>
  </div>
  <hr />
<?php
  if($title) {
    do_html_heading($title);
  }
}

function do_html_footer() {
  // print an HTML footer
?>
  </body>
  </html>
<?php
}

function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading;?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <br><a href="<?php echo $url;?>"><?php echo $name;?></a><br>
<?php
}





function display_registration_form() {
?>
 <form method="post" action="register_new.php">

 <div class="formblock">
    <h2>Register Now</h2>

    <p><label for="email">Email Address:</label><br/>
    <input type="email" name="email" id="email" 
      size="30" maxlength="100" required /></p>

    <p><label for="username">Preferred Username <br>(max 16 chars):</label><br/>
    <input type="text" name="username" id="username" 
      size="16" maxlength="16" required /></p>

    <p><label for="passwd">Password <br>(between 6 and 16 chars):</label><br/>
    <input type="password" name="passwd" id="passwd" 
      size="16" maxlength="16" required /></p>

    <p><label for="passwd2">Confirm Password:</label><br/>
    <input type="password" name="passwd2" id="passwd2" 
      size="16" maxlength="16" required /></p>


    <button type="submit">Register</button>

   </div>

  </form>
<?php

}

?>
  </table>
<?php


?>
