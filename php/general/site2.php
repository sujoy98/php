<!DOCTYPE html>
<html>
    <head>
        <title>User Input</title>
    </head>
    <body>
        <form action="site2.php" method="get">
            Name: <input type="text" name="Name">
            <br><br>
            Age: <input type="number" name="age">
            <input type="submit">
        </form>
        Entered name is <?php echo $_GET["Name"]?><br>
        Entered age is <?php echo $_GET["age"]?>
</body>
</html>
