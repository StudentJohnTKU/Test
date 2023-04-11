<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8">
                <title>加法結果</title>
        </head>
        <body>
                <header>
                <a href="adding.html">返回</a>
                </header>
                <?php
                $A=$_GET['numA'];
                $B=$_GET['numB'];
                $SUM= $A+$B;
                echo "數值A:",$A,"<br>" ;
                echo "數值B:",$B,"<br>" ;
                echo "總和:",$SUM,"<br>" ;
                ?>
        </body>
</html>