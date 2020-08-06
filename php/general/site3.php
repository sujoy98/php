<!DOCTYPE htrml>
<html>
    <head>
        <title>
            SUM
        </title>
    </head>
    <body>
        <h4>SUM:</h4>
        <form action="site3.php" method="get">
            <input type="number" name="num1">
            <br/>
            <input type="number" name="num2">
            <input type="submit">
        </form>
        Answer is <?php echo $_GET["num1"]+$_GET["num2"];?>
</body>
</html>
