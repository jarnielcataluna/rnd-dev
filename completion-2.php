<?php
if (!isset($_POST)) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="continue-header" class="red ">

</div>


<div id="continue-wrapper" class="container">
    <div class="row">
        <div class="col l8 m8 s12 offset-l2 offset-m4">
            <h4 class="completion-text">Thank you for your interest in IBEX Global! </h4>

            <div class="card" id="" style="padding:10px 40px">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input value="" id="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input value="" id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input value="" id="mobile" type="text" class="validate">
                        <label for="mobile">Mobile No.</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <select>
                            <option value="" disabled selected>Select Location</option>
                            <option value="Hanston Building, Ortigas Center">Hanston Building, Ortigas Center
                            </option>
                            <option value="Silver City, Pasig City">Silver City, Pasig City</option>
                            <option value="SM City BF Parañaque ">SM City BF Parañaque</option>
                            <option value="SM Lanang Premier, Davao">SM Lanang Premier, Davao</option>
                        </select>
                        <label>Location Preference</label>
                    </div>
                </div>
            </div>



            <div class="card" id="" style="padding:10px 40px">


            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>