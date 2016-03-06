<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="login-body">

<div class="middle-div">
    <div class="row">
        <div class="col l4 m10 s12 offset-l4 offset-m1">


            <form method="POST">
                <div class="card" >
                    <div class="login-header">
                        <center>
                            <img class="responsive-img" src="img/login-logo.png" style="">
                        </center>
                    </div>
                    <div class="row" class="login-padding">
                        <div class="col s12">
                            <div class="row" id="form-wrapper">
                                <div class="input-field">
                                    <input id="fullname" type="text" class="validate">
                                    <label for="fullname">Username</label>
                                </div>
                                <div class="input-field">
                                    <input id="fullname" type="password" class="validate">
                                    <label for="fullname">Password</label>
                                </div>

                                <br>
                                <button type="submit" class="waves-effect waves-light btn orange lighten-2 col s12 social-button btn-large"> Login
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="login-copy">© Propelrr, 2016. All rights reserved.</p>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>