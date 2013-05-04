<?php
    $gigFile = "upload/gigs.txt";
    
    $gigs =  $_POST['txt_gig'];

    if($_POST['password'] == "bu22band")
    {
        $fileOpener = fopen($gigFile,'w')or die("oops problem updating gigs!! tell Lee QUICK!.");
        fwrite($fileOpener, $gigs);
        fclose($fileOpener);
        header('Location: gigs.php?done=1');
    }else
    {
        header('Location: gigs.php?done=0');
    }
    
    
?>
