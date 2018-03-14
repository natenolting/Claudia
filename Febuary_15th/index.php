<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <!--  Your title should be all on one line.  -->
    <title>Claudia</title>

</head>
<Body>
<!-- Side navigation -->
    <div class="sidenav"><?php
        // New line here for formatting only
        echo PHP_EOL;
        // For building a dynamic navigation like below you can loop
        // through a list of items and echo out the result.
        // It would also be better to extract this navigation builder
        // to another file so it can be used on all your pages.
        $NavigationItems = ['hobbies', 'claudia', 'food', 'workout'];
        // Use array map to "map" the $navigationItems array to $navigationList
        $navigationList = array_map(function ($item) {
            // Return a link to the navigation item php file and uppercase
            // the first character of the navigation item for display
            return '        <a href="' . $item . '.php">' . ucfirst($item) . '</a>';
        },
            $NavigationItems);
        // then you can return the $navigationList as
        // a string by imploding the above array with the new line character
        echo implode(PHP_EOL, $navigationList) . PHP_EOL;
    ?>
        <!-- Now we won't need the below hard coded links -->
        <!--    <a href="hobbies.php">Hobbies</a>-->
        <!--    <a href="claudia.php">claudia</a>-->
        <!--    <a href="food.php">food</a>-->
        <!--    <a href="workout.php">workout</a>-->
    </div>
</body>
</html>
