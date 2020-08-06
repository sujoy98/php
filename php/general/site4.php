<!DOCTYPE html>
    <html>
        <head>
            <title>MadLibs</title>
        </head>
            <body>
                <form action="site4.php" method="get">
                    Name:<input type="text" name="name"><br>
                    Color:<input type="text" name="color"><br>
                    Plural Noun:<input type="text" name="pluralnoun"><br>
                    <input type="submit">
                </form>
                <?php
                    $name       = $_GET["name"];
                    $color      = $_GET["color"];
                    $pluralnoun = $_GET["pluralnoun"];
                    echo "Roses are $color<br>";
                    echo "$pluralnoun are blue<br>";
                    echo "I know $name<br>";
                ?>
            </body>
    </html>
