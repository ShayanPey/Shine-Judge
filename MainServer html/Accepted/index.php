<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shine Judge</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="/css/mainV9.css">
    <!-- <script src="/css/main.js"></script> -->
    <link rel="shortcut icon" href="/pictures/logo_favicon.png">

</head>
<script>
function goBack() {
    window.history.back();
}
</script>
<body>
    <div class="header">
        <h1>Shine Judge</h1>
    </div>
    <div class="container">
        <div class="blank"></div>
        <div class="MediumLogo">
            <a>
            <img src="/pictures/logo_main.png" onclick="goBack()">
            </a>
        </div>

        <div class="submitpart">
            <form action="tofile.php" method="post">

        <div class="box">
            <div class="box header">
                <h2 style="font-size: 26px;"><b>
</b></h2>
            </div>
            <div class="box main">
                <p class="content">
	<div class="heading">Your Accepted codes:</div>               
	<center>
		Username:<br><input type="text" name="username"><br>
		Password:<br><input type="password" name="passtmp"><br>
	</center>

            <form action="tofile.php" method="post">
                <input class="submitbutton" type="submit">
            </form>

            </p>
            </div>
        </div>
        </div>



            </form>
        </div>

        <div class="blank"></div>
    </div>



</body></html>
