<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>The Buzzband || Gigs</title>
    </head>
    <body style="background-color: black; color: white">
        <img src="images/Buzztitle.jpg"/>
        <br/>
        <span style="color: white">
        The golden rules for updating gigs.....<br/>
        1. The Website will display these gigs in the order that there written below <br/>
        so be aware when inserting a new gig make sure its chronologically correct. <br/>
        2. Dont forget the format of the layout INCLUDE COMMAS between entries e.g.<br/>
        DATE,PUB NAME,LOCATION,INFO <br/>
        Notice commas between entries but not at the end or beginning.<br/>
        also if you start a new gig START A NEW LINE (one gig per line)<br/>
        3. Everything you write in this box is reflected on the server including any spurious characters spaces etc.<br/>
        4. If you do make a mistake and it all goes wrong don't panic but let lee know as soon as poss and he will correct it.<br/>
        <br/>
        Treat this just like you treated the text file before and it will be fine.<br/>
        
        </span>
        <?php
        
        if(isset($_REQUEST['done']))
        {
            $code = $_REQUEST['done'];
            if($code == 1)
            {
                echo '<br/> <span style="color: green"> >>>>>>>>>>CHANGES SAVED<<<<<<<< </span>';
            }else
            {
                echo '<br/> <span style="color: red">!!!!!!PASSWORD MISSING OR INCORRECT!!!!!!!!</span>';
            }
        }
              $gigFile = "upload/gigs.txt";
              $fileOpener = fopen($gigFile,'r');
              $results;
              
              while(!feof($fileOpener)) 
              {
                  $line = fgets($fileOpener);
                  $results .= $line;
              }
              fclose($fileOpener);
              echo '<form name="gigs_form" method="POST" action="process.php">';
              echo '<textarea name="txt_gig" rows="18" cols="80">'.$results.'</textarea>';
              echo '<br/>';
              echo 'Password:';
              echo '<input name="password" type="password"/>&ensp;&ensp;&ensp;&ensp;';
              echo '<input type="submit" value="Submit Changes"/>';
              echo '</form>';
          ?>
        
</html>
