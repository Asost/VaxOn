<?php
$dir = "information/";
$success = False;
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['bday']) && isset($_POST['gndr']) && isset($_POST['dose']) && isset($_POST['email'])) {
    $fi = new FilesystemIterator(__DIR__ . "/" . $dir, FilesystemIterator::SKIP_DOTS);
    $txt = $dir . iterator_count($fi)  . " - " . $_POST['fname'] . ", " . $_POST['lname'] . ".txt";
    $fh = fopen($txt, 'w+');
    $output = "Patient " . iterator_count($fi) . "\n"
    . $_POST['fname'] . "\n"
    . $_POST['lname'] . "\n"
    . $_POST['bday'] . "\n"
    . $_POST['gndr'] . "\n"
    . $_POST['dose'] . "\n"
    . $_POST['posrole'] . "\n"
    . $_POST['email'] . "\n"
    . $_POST['pnum']
    ;

    $success = True;
    file_put_contents($txt, $output, FILE_APPEND); 
    fwrite($fh, $output);
    fclose($fh);
}

?>

<html>

<head>
    <title>Appointment | VaxOn</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="rightGradient"></div>
    <div class="main">
        <?php
            if($success){
                echo "<h1>Success! Your appointment has been recorded.</h1>";
                exit();
            }
            else{
                echo "<h1>Failure! Your appointment could not be recorded. Try again and fill all the fields.</h1>";
            }
        ?>
    </div>
    <div class="leftGradient"></div>
</body>

</html>