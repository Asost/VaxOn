<html>

<head>
    <title>View Data</title>
    <link rel="stylesheet" href="data.css">
</head>

<body>

    <?php
    echo "<h1>Data</h1>";
    $directory = "./information/";
    $dir = new DirectoryIterator($directory);
    echo "<table class=\"table\">";
    echo "<tr class=\"td\">";
    echo "<td class=\"td\">Patient #</td>";
    echo "<td class=\"td\">First Name</td>";
    echo "<td class=\"td\">Last Name</td>";
    echo "<td class=\"td\">Birthday</td>";
    echo "<td class=\"td\">Gender</td>";
    echo "<td class=\"td\">First Dose?</td>";
    echo "<td class=\"td\">Job Position</td>";
    echo "<td class=\"td\">Email</td>";
    echo "<td class=\"td\">Phone Number</td>";
    echo "</tr>";
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            // var_dump($fileinfo->getFilename());
            // echo file_get_contents($directory . $fileinfo);
            $contents = file($directory . $fileinfo);
            echo "<tr class=\"tr\">";
            foreach ($contents as $line) {
                echo "<td class=\"td\">";
                echo $line . "<br/>";
                echo "</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>

</html>