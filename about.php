<html>

<head>
    <title>About Us | VaxOn</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="rightGradient"></div>
    <div class="main">
        <h1>About Us</h1>
        <table style="width:100%;">
            <tr>
                <td id="textAbout">
                    <p class="aboutUs" style="border-right: 3px solid #E34040;">This website was created by Nate Glass & Asadour Boghossian for the 2021 Innovation challenge. Nate & Asadour have previously collaborated on a website called “Chem Calc”, a site used to solve and show work for chemistry equations. Jahware was formed when Nate & Asadour decided to create an application that utilized its own file type, which they created and called “.jah”. There are currently 2 applications by Jahware that utilize the “.jah” file type.</p>
                </td>
                <td style="padding: 20px; margin-top: 2%;" id="imageAbout">
                    <img style="width: 70%;" class='centerImage aboutImage' src="jahLogger.png" />
                    <p style="text-align: center; font-size: small;"><i>JahLogger, used for logging driving hours</i></p>
                </td>
            </tr>
        </table>
        <p class="aboutUs">The process of making this website is long and hard. We started off in Paint designing key features and the UI. After deciding the name, Nate created a logo in Blender while Asadour utilized basic styling to fit the image we had imagined. It took a lot of trial and error and we eventually came to many conclusions on the areas we wanted to include. We did not use any frameworks or libraries, like bootstrap or jQuery in the creation of this site, and only stook with using HTML, CSS, and PHP, as a backend. We kept the loading file size in mind and stayed below 1 MB, and as of writing this about page we are at 150Kb.</p>
        <p class="aboutUs">The appointment system consists of a php script that grabs the information submitted through our highly customized form that is then sorted into a file. This data is later taken and sorted into a table being one of the key functions of our website.</p>
        <table style="width:100%;">
            <tr>
                <td style="padding: 20px; margin-top: 2%;" id="imageAbout">
                    <img style="width: 70%;" class='centerImage aboutImage' src="neofetch.png" />
                    <p style="text-align: center; font-size: small;"><i>Neofetch of the Ubuntu Server</i></p>
                </td>
                <td id="textAbout">
                    <p class="aboutUs" style="border-left: 3px solid #E34040;">Asadour also decided to host this website to his Ubuntu server that he keeps in his garage. He downloaded Apache server and installed SQL and PHP. He used SSH to connect from his main PC to his server and all worked eventually. At first we ran into a few problems, like port forwarding and changing the default file loaded, but through missing semicolons and pain all was fixed.</p>
                </td>
            </tr>
        </table>

    </div>
    <div class="leftGradient"></div>
</body>

</html>