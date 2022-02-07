<?php
    $number = "";
    $result = "";

    if(isset($_POST[''])){

    }
?>


<html>
<head>
    <title>Calculator</title>
    <link rel= "stylesheet" type="text/css" href="style.css"
</head>

<body>

<div class = "Container">
    <div class = "Calculator">
        <form method = "POST">

        <input type = "text" name="num1" id="textBox" placeholder="" value = "<?php echo $number ?>">
    </div>
        <br>

        <div class = "ButtonSet" value = "">
            <input type="submit" value ="7" class = "buttons"> 
            <input type="submit" value ="8" class = "buttons">
            <input type="submit" value ="9" class = "buttons">
            <input type="submit" value ="/" class = "buttons">
            <br><br>

            <input type="submit" value ="4" class = "buttons">
            <input type="submit" value ="5" class = "buttons">
            <input type="submit" value ="6" class = "buttons">
            <input type="submit" value ="*" class = "buttons">
            <br><br>

            <input type="submit" value ="1" class = "buttons">
            <input type="submit" value ="2" class = "buttons">
            <input type="submit" value ="3" class = "buttons">
            <input type="submit" value ="-" class = "buttons">
            <br><br>

            <input type="submit" value ="C" class = "buttons">
            <input type="submit" value ="0" class = "buttons">
            <input type="submit" value ="=" class = "buttons">
            <input type="submit" value ="+" class = "buttons">
            <br><br>
        </div>
</div>
</form>

</body>
</html>

