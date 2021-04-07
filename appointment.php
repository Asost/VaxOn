<html>

<head>
    <title>Request Appointment | VaxOn</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="rightGradient"></div>
    <div class="main">
        <table style="width: 100%">
            <tr>
                <td id="applicationInputs">
                    <h1>Request Appointment</h1>
                    <form action="saveInfo.php" method="post">
                        <p>What is your first name?</p>
                        <input class="input" type="text" placeholder="Input First Name" id="fname" name="fname" /><br />

                        <p>What is your last name?</p>
                        <input class="input" type="text" placeholder="Input Last Name" id="lname" name="lname" /><br />

                        <p>What is your birthday?</p>
                        <input class="input" type="date" placeholder="Enter Date of Birth" id="bday" name="bday" /><br />

                        <p>What is your gender?</p>
                        <input class="radio" type="radio" value="male" id="male" name="gndr"> Male</input> <br />
                        <input class="radio" type="radio" value="female" id="female" name="gndr"> Female</input> <br />
                        <input class="radio" type="radio" value="other" id="other" name="gndr"> Other</input> <br />

                        <p>Is this your first dose?</p>
                        <input type="radio" value="yes" id="yes" name="dose" />
                        <label for="yes">Yes</label><br>
                        <input type="radio" value="no" id="no" name="dose" />
                        <label for="no">No</label><br>

                        <p>What is your Job's Position/Role?</p>
                        <input class="input" type="text" placeholder="Input Position / Role" id="posrole" name="posrole" /><br />

                        <p>What is your email address?</p>
                        <input class="input" type="email" placeholder="Input Email Address" id="email" name="email" /><br />

                        <p>What is your phone nummber?</p>
                        <input class="input" type="tel" placeholder="Enter Phone Number" id="pnum" name="pnum" /><br />

                        <input type="submit" class="button" name="submit" value="Save Data" />
                    </form>
                </td>
                <td>
                    <iframe class="embed" src="https://public.domo.com/cards/axpDJ" width="70%" height="500" marginheight="0" marginwidth="0" frameborder="0"></iframe>
                </td>
            </tr>
        </table>

    </div>
    <div class="leftGradient"></div>
</body>

</html>