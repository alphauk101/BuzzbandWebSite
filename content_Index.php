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
                                <a href="https://soundcloud.com/lee-williams-12/sets/the-buzzband-ep-covers-demo"  class="folder" name="content_About.php"><img style="width: 100%;" src="images/demo.jpg" alt="Demo"/></a>
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
                     <img src="images/bandpicold.jpg" alt="Old Buzzers" width="370"/>
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
