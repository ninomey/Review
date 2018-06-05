       <?php
    function bmi($weight,$height) {
        
        $debu= $weight / $height / $height

        if ($debu <= 12) {
            $result = "debu";
        }
        elseif (12 <= $debu  < 18) {
            $result = "hutu";
        }
        else {
            $result = "yase";
        }
        print $result;
    }
?>