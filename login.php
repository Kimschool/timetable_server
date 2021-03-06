<!DOCTYPE html>
<html>

<head>
  <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAYT8AIcJ9AG/CfQCpwn0A08J9AN3CfQDEwn0AbWE/AAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwn0ATMJ9ANPCfQD/wn0A/8J9AP/CfQD/wn0A/8J9AP/CfQD8wn0AawAAAAAAAAAAAAAAAAAAAAAAAAAAwn0AgcJ9APrCfQD/wn0A/8J9AP/CfQD/wn0A/8J9AP/CfQD/wn0A/8J9AP/CfQCqAAAAAAAAAAAAAAAAwn0ARsJ9APnCfQD/wnwA/9anU//dtnD/3bZw/922cP/dtnD/2a5g/8J8AP/CfQD/wn0A/8J9AHEAAAAAYT4AAsSBB/XFgwv/xYMM/86VMP////////////369v/79u3////////////QnD7/wn0A/8J9AP/CfQD9YT8AC8iKGk3Iihr/yIoa/8iKGv/RnkH////////////t2LP/58uZ////////////0qBF/8J9AP/CfQD/wn0A/8J9AHjIihqbyIoa/8iKGv/Iihr/0Z5B////////////2a1f/9KfQ////////////9KgRf/CfQD/wn0A/8J9AP/CfQDPyIoawciKGv/Iihr/yIoa/9GcPv////////////ft3f/z5cz////////////Sn0T/wn0A/8J9AP/CfQD/wn0A5siKGsjIihr/yIoa/8iKGv/IiRn/4sKG//369P/kxIz/48OK//37+P/ozp//x4cT/8J9Af/CfQD/wn0A/8J9AN7IihqkyIoa/8iKGv/Iihr/yIoa/8yTLP/16tX/yIsb/8iJGP/y4sb/0Js8/8iKGv/IiBb/wn0A/8J9AP/CfQC0yIoaRMiKGv/Iihr/yIoa/8iKGv/KjiL/+vXr/8iKGv/HiBb/+fHj/82ULv/Iihr/yIoa/8SBCP/CfQD/wn0AdgAAAADIihrwyIoa/8iKGv/Iihr/yIoa/+TFjf/58uX/9uvX/+vVrP/Iihn/yIoa/8iKGv/IiRf/wn0A22E/ACoAAAAAyIoaNciKGv/Iihr/yIoa/8iKGv/Iihr/zpYy/8+YNv/Iihn/yIoa/8iKGv/Iihr/yIoa/MSCClwAAAAAAAAAAAAAAADIihpmyIoa/8iKGv/Iihr/yIoa/8iKGv/Iihr/yIoa/8iKGv/Iihr/yIoa+8iKGoUAAAAAAAAAAAAAAAAAAAAAAAAAAMiKGjPIihrwyIoa/8iKGv/Iihr/yIoa/8iKGv/Iihr/yIoa0MiKGk4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZEUNAciKGkPIihqjyIoayMiKGsLIihqdyIoaUWRFDQMAAAAAAAAAAAAAAAAAAAAA/D8AAPAPAADAAwAAwAMAAIABAACAAQAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAOADAADwDwAA/D8AAA==" rel="icon" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kimschool | Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gamja+Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>
    <div class="container"><small class="form-text text-muted flash animated">KIMSCHOOL FOR MANAGE</small><i class="typcn typcn-star-outline d-flex justify-content-center justify-content-xl-center bounce animated" style="font-size: 77px;margin-top: 48px;color: rgb(38,129,220);"></i>
        <form action="login_check.php" method="post">
          <small class="form-text text-muted" style="margin-top: 26px;">ID</small>
          <input class="shadow form-control" name="id" type="text" autofocus="" required="" style="margin-top: 0px;"><small class="form-text text-muted" style="margin-top: 26px;">Password</small>
          <input class="shadow form-control" name="pwd" type="password" style="margin-top: 0px;">
          <br />
          <p style="font-family: 'Gamja Flower', cursive;">
            <?php
            session_start();
            if(isset($_SESSION['msg'])) {
              echo $_SESSION['msg'];
            }
            ?>
          </p>

          <button class="btn btn-primary btn-block" type="submit" style="margin-top: 15px;">Login</button><br><br><br>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
