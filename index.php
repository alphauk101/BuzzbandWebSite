<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>The Buzzband || Function Band</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Sintony:400,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="The Buzzband are a 70's 80's 90's and 00's Rock and pop function band. We offer a great live experience and promise a fun night. Book Us now for your event, we can also prvide a disco as part of our package." />
        <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-35632134-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
        
        <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js" type="text/javascript"></script>
        
  <script type="text/javascript">
      
      $( document ).ready( function()
      {
        //we need to hide one div remove contents... load contents then show div again
         $("a").click(function(event)
         {
             //THE CLASS folder HAS TO BE APPENDED TO ANY LINK WE WANT TO FUNCTION AS A FOLDER
             if($(this).attr("class") == "folder")
                 {
                    event.preventDefault();
                    if(event.preventDefault) event.preventDefault();
                    showLoader(true);
                    var url = this.name;
                    $("#contWrapper").hide("fold",false,2000,function()
                        {

                            $('#contWrapper').empty();
                            $('#contWrapper').load(url,function()
                                {
                                    $('#contWrapper').show( "fold", 2000, function()
                                        {
                                            showLoader(false);
                                        });
                                }
                            )
                        }
                    ); 
                     
                 }
         });

         function showLoader(state)
         {
             if(state)
                {
                    $('#spinner').show("scale");
                }else
                {
                    $('#spinner').hide("scale");
                }
         }
        
      });
      
      </script>
  
  
        
        <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
    </head>
    <body class="gradient">
        <div id="wrapper">
            <div id="topper">
                <img src="images/topper.jpg" alt="topper"/>
            </div>
            <div id="navBar">
                <ul>
                    <li>
                        <a href="index.php" class="folder" name="content_Index.php">Home</a>
                    </li>
                    <li>
                        <a href="gigs.php" class="folder" name="content_Gigs.php">Gigs</a>
                    </li>
                    <li>
                        <a href="contact.php" class="folder" name="content_Contact.php">Contact &amp; Fees</a>
                    </li>
                    <li>
                        <a href="about.php" class="folder" name="content_About.php">About Us</a>
                    </li>
                </ul>
            </div>
            <div id="loaderDiv">
                    <!--this is the div that sits over top of everything-->
                    <div id="contWrapper">
                        <div id="imgCont">
                            <img src="images/Buzztitle.jpg" alt="Title"/>
                        </div>
                        <div id="info1" class="Small">
                            <p>
                            The Buzzband are a East Midlands based professional function band.
                            We are fully insured and equipped for the ultimate function band experience.
                            </p>

                            <p>
                                We can also provide a DJ as part of our live entertainment experience package, so if your
                                looking for a full entertainment package for your function look no further!
                            </p>
                            <p>
                                If you are interested in booking The Buzzband for your function check out our <a href="contact.php">CONTACT PAGE</a> for details fees and contact details.  
                            </p>
                            <br/>
                            <br/>
                            <div id="demoInfo">
                                <a href="aboutus.php"  class="folder" name="content_About.php"><img style="width: 100%;" src="images/demo.jpg" alt="Demo"/></a>
                        </div>
                            <br/>
                            <div style="text-align: center">Check out our demo, recorded live at <a href="http://www.electric-bearproductions.co.uk/">Electric Bear Studios</a></div>
                        </div>
                         
                        <div id="indexGig">
                            <br/>
                            <span class="bigFont"><b>Where The Buzzband are playing next...</b></span>
                            <?php
                                $gigFile = "upload/gigs.txt";
                                $fileOpener = fopen($gigFile,'r');
                                $count = 1;
                                echo "<table>";
                                while( $count <= 6 ) 
                                {
                                    $line = fgets($fileOpener);
                                    $word_array = explode(",", $line);

                                        echo "<tr>" ;
                                        echo "<td><small>$word_array[0]</small> </td>";
                                        echo "<td><small>$word_array[1] </small></td>";
                                        echo "<td><small>$word_array[2] </small></td>";
                                        echo "</tr>";

                                        $count ++;
                                }
                                echo "</table>";
                                fclose($fileOpener);
                            ?>
                            
                            <br/>
                            <div id="twitCont">
                            <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
              <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 2,
          interval: 30000,
          width: 370,
          height: 120,
          theme: {
            shell: {
              background: '#333333',
              color: '#ffffff'
            },
            tweets: {
              background: '#000000',
              color: '#ffffff',
              links: '#eb0707'
            }
          },
          features: {
            scrollbar: false,
            loop: false,
            live: false,
            behavior: 'all'
          }
        }).render().setUser('The_Buzz_band').start();
        </script>
                            <p>
                            Check out what The Buzzband are saying on Twitter
                            </p>
                        </div>
                        </div>
                        <br/><br/>
                        
                        <br/>
                        <!--this is the next level below gigs and info-->
                        <div id="fbtwit">
                            <a href="https://www.facebook.com/pages/The-Buzzband/420258748008201"><img src="images/facebook.jpg" alt="facebook"/></a>
                            <div id="innerTwit">&ensp;&ensp;Check out The Buzzband on Twitter and Facebook&ensp;&ensp;</div>
                            <a href="https://twitter.com/The_Buzz_band"><img  src="images/twitter.jpg" alt="Twitter"/></a>
                        </div>
                       
                    </div>
                    <div id="spinner">
                        <img src="images/loader.gif"/>
                    </div>
            </div>
        </div>
        
    </body>
</html>
