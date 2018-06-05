<?php
    function bmi($weight,$height) {
        if(!$weight && !$height)
            return;
  
            $debu= $weight / $height /$height;


        if ($debu < 15) {
            $result = "がりがり";
        }
        elseif (15 <= $debu && $debu < 19.5) {
            $result = "痩せ";
        }
        elseif (19.5 <= $debu && $debu < 25) {
            $result = "普通";
        }
        else {
            $result = "デブ";
        }
        

        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>タイトル</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body class="col-lg-offset-2 col-lg-8">
        <h1>あなたの肥満度をチェックしましょう！</h1>
        
        
        <form action="test2.php" method="POST" class="form-inline">
            <div class="form-group">
                <label >体重</label>
                <input type="text" class="form-control" name="weight" placeholder="0.0kg">
            </div>
            
            <div class="form-group">
                <label >身長</label>
                <input type="text" class="form-control" name="height" placeholder="0.0m">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="送信">
            </div>
            
        </form>
        
        
        <div>
        <span class="label label-default">NEW!</span>
        <h3>あなたは<?php print bmi($_POST['weight'],$_POST['height']); ?>です。</h3>
        </div>
        
    </body>
</html>