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

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>肥満度チェック</title>
    </head>
    <body>
        <form action="uranai.php" method="POST">
            <label>体重: <input type="text" name="weight"></label>
            <label>身長: <input type="text" name="height"></label>
            <input type="submit" value="送信">
        </form>
        
 
        
        <p>あなたの肥満度は<?php print "test"; ?>です。</p>
        <p><?php print bmi($_POST['weight'],$_POST['height']); ?>さん</p>
    </body>
</html>