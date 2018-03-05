<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
<form action="script.php" method="post">
    <textarea name="txt"></textarea>
    <input type="color" name="colorOne" class="mid" value="#0000ff"><input type="color" name="colorTwo" class="mid" value="#ff0000">
    <input type="submit" class="ok" value="Ok">
</form>

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
    .one{
        color:blue;
    }
    .zero{
        color:red;
    }
    textarea{
        width: 100%;
        height:84%;
    }
    .ok{
        position: absolute;
        bottom: 0;
        width: 100%;
        height:30%;
    }
    .mid{
        height:5%;
        width:50%;
        border: none;
    }
</style>