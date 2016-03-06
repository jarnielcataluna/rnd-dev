<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div id="continue-header" style="background: #00BDDD">

</div>

<div id="continue-wrapper" class="container">
    <div class="row">
        <div class="col l6 m10 s12 offset-l3 offset-m1">
            <h4 class="completion-text" style="font-size: 45px">Sign up now!</h4>

            <div class="card" style="padding:0 20px">
                <div class="row">
                    <div class="col s12">
                        <form id="step-1-form" method="POST" action="exec-submit.php">
                            <div class="row" id="form-wrapper">


                                <div class="input-field">
                                    <input id="fullname" type="text" name="fullname" class="validate">
                                    <label for="fullname">Full Name</label>
                                </div>
                                <div class="input-field">
                                    <input id="email" type="email" name="email" class="validate">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="input-field">
                                    <input value="" id="mobile" name="mobile" type="text" class="validate">
                                    <label for="mobile">Mobile Number</label>
                                </div>

                                <div class="input-field">
                                    <p>
                                        <input type="checkbox" id="agree-check"/>
                                        <label for="agree-check"> I agree with the <a href="#">Terms and Condition</a> of this
                                            site</label>
                                    </p>
                                </div>

                                <br>
                                <button id="step1-submit" type="submit" disabled
                                        class="waves-effect waves-light btn orange lighten-2 col s12 social-button btn-large">
                                    Apply Now !
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.firebase.com/js/client/2.4.1/firebase.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<script>
    var myFirebaseRef = new Firebase("https://propelrr-dashboard.firebaseio.com/");
    var ibexRef = myFirebaseRef.child("ibex");
    var newLeads = ibexRef.push();

    $('#agree-check').change(function () {
        if($(this).is(":checked")){
            $('#step1-submit').prop('disabled', false);
        }else{
            $('#step1-submit').prop('disabled', true);
        }
    });


    $('#step-1-form').on('submit', function () {
        $("body").css("cursor", "progress");

        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            page = that.attr('page'),
            data = {};

        that.find('[name]').each(function (index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();
            data[name] = value;
        });

        $.ajax({
            url: url,
            type: type,
            data: data,

            success: function (response) {
                if(response > 0){
                    newLeads.set({
                        id: response,
                        name: $('#fullname').val(),
                        email: $('#email').val(),
                        mobile: $('#mobile').val(),
                        date: Firebase.ServerValue.TIMESTAMP
                    });
                    $('#fullname').val("");
                    $('#email').val("");
                    $('#mobile').val("");
                    $("body").css("cursor", "");
                }else if(response == -1){
                    alert('nope');
                    $("body").css("cursor", "");
                }else{
                    alert('yahoo');
                    $("body").css("cursor", "");
                }
            }
        });

        return false;
    });
</script>
</body>
</html>