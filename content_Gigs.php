<div style="text-align: center">
    <br/>
    <span>The Buzzband up and coming gigs....</span>
    <br/>
    <br/>
<table border="0" style="width: 95%; text-align: center; font-size: larger;">
          <tbody>
            <tr>
              <td><strong>When..</strong><br />
              </td>
              <td><strong>Where..</strong><br />
              </td>
              <td><strong>Location..</strong><br />
              </td>
              <td><strong>Info..</strong><br />
              </td>
            </tr>
          
          <?php
              $gigFile = "upload/gigs.txt";
              $fileOpener = fopen($gigFile,'r');
              while(!feof($fileOpener)) 
              {
                  $line = fgets($fileOpener);
                  $word_array = explode(",", $line);
                      echo "<tr>" ;

                      $test1 = $word_array[1];
                      $test1 = trim($test1);
                      $test1 = strtolower($test1);
                      $result = strpos($test1, 'available');
                      $result1 = strpos($test1, 'band');
                      $result2 = strpos($test1, 'bookings');
                      
                      if($result === false && $result1 === false && $result2 === false)
                      {
						echo "<td>$word_array[0] </td>";
                        echo "<td>$word_array[1]</td>";
                        echo "<td>$word_array[2] </td>";
						echo "<td>$word_array[3] </td>";
                      }else{
			echo '<td class="redText"><strong>'.$word_array[0].'</strong></td>';
                        echo '<td class="redText"><strong>'.$word_array[1].'</strong></td>';
                        echo '<td class="redText"><strong>'.$word_array[2].'</strong></td>';
			echo '<td class="redText"><strong>'.$word_array[3].'</strong></td>';
                      }
                      
                      echo "</tr>";
              }
              fclose($fileOpener);
          ?>

          </tbody>
        </table>
        <small>PF = Private Function</small><br />
</div>