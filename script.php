<?php
    $str = $_POST['txt'];
    $class = "one";
    $colorOne = $_POST['colorOne'];
    $colorTwo = $_POST['colorTwo'];

    echo'<article><p class="'.$class.'">';
    for ($i=0;$i<strlen($str);$i++){
        if ($str[$i]==" "){
            if ($class=="one"){
                $class = "zero";
            }elseif ($class=="zero"){
                $class = "one";
            }
            echo'</p><p class="'.$class.'">&nbsp';

        }else{
            echo$str[$i];
        }
    }
?>
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</article><a href="index.php"><input type="button" class="ok" value="Retour"></a>
<style>
    @font-face {
        font-family: dyslexic;
        src: url(./fonts/OpenDyslexic-Regular.otf);
    }
    p{
        display: inline-block;
        font-family: dyslexic;
        font-size: 16pt;
    }
    .ok{
        margin-top: 100px;
        width: 100%;
        height:30%;
    }
    .one{
        color:<?php echo $colorOne?>;
    }
    .zero{
        color:<?php echo $colorTwo?>;
    }
</style>
