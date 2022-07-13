<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Welcome <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"];?></h1>
    <br>
    Your submitted email is  <?php echo $_POST["email"];?> 
    Your submitted age is <?php echo $_POST["age"];?>
    
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>