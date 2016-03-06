<?php
    include('connect.php');
?>

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
        <div class="col l10 m10 s12 offset-l1 offset-m1">


            <form method="POST">
                <div class="card" style="padding: 20px">
                    <table class="" id="leads-table" style="max-height: 300px;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody id="leads-info" >
                        <?php
                            global $dbh;
                            $query = "SELECT * FROM `leads_agent` ORDER BY `id` DESC";
                            $sth = $dbh->prepare($query);
                            $sth->execute();
                            while($data = $sth->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr><td>" . $data['name'] . "</td><td>" . $data['contact'] . "</td><td> " . $data['email'] . "</td></tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <p class="login-copy">© Propelrr, 2016. All rights reserved.</p>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
<script>
    var myFirebaseRef = new Firebase("https://propelrr-dashboard.firebaseio.com/");
    var ibexRef = myFirebaseRef.child("ibex");

    var date = Firebase.ServerValue.TIMESTAMP;
    ibexRef.orderByChild("date").startAt(Date.now()).on('child_added', function (snapshot) {
        var data = snapshot.val();
        console.log(snapshot.val());
        var name = data.name;
        var email = data.email;
        var mobile = data.mobile;
        var id = data.id;
        console.log(name);
        $('#leads-info').prepend('<tr id="' + id + '"><td id="name">' + name + '</td><td id="email">' + email +  '</td><td id="mobile">' + mobile + '</td></tr>');
        var $toastContent = $('<span>New Application from <strong>'+ name + '</strong>. <a href=#>View Lead</a></span>');
        Materialize.toast($toastContent , 4000);
    });

    ibexRef.on('child_changed', function(snapshot) {
        var data = snapshot.val();
        console.log(snapshot.val());
        var name = data.name;
        var email = data.email;
        var mobile = data.mobile;
        var id = data.id;
        $('#' + id).find('#name').html(name);
        $('#' + id).find('#email').html(email);
        $('#' + id).find('#mobile').html(mobile);

    });

    ibexRef.on('child_removed', function(oldChildSnapshot) {
        // code to handle child removal.
    });




</script>
</body>
</html>