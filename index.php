<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="http://platform.linkedin.com/in.js">
        api_key:   75zlkm9e3jkzmu
        onload: OnLinkedInFrameworkLoad
        authorize: true
    </script>

    <script type="text/javascript">

        function onLinkedInLoad() {
            IN.UI.Authorize().place();
            IN.Event.on(IN, "auth", function () {
                onLogin();
            });
            IN.Event.on(IN, "logout", function () {
                onLogout();
            });
        }

        function onLogin() {
            IN.API.Profile("me")
                .fields(["id", "firstName", "lastName", "maidenName", "formattedName", "headline", "location", "industry", "summary", "specialties", "positions", "picture-urls::(original)", "public-profile-url"])
                .result(displayResult);
        }
        function displayResult(profiles) {
            member = profiles.values[0];
            console.log(member.id);
            console.log(member.email);
            console.log(member.firstName);
            console.log(member.maidenName);
            console.log(member.lastName);
            console.log(member.formattedName);
            console.log(member.headline);
            console.log(member.industry);
            console.log(member.summary);
            console.log(member.publicProfileUrl);
            console.log(member.location.name);
            console.log(member.pictureUrls.values[0]);
            console.log(member.positions.values[0].title);
            console.log(member.positions.values[0].company.name);
            console.log(member.positions.values[0].company.industry);
            console.log(member.positions.values[0].isCurrent);
            console.log(member.publicProfileUrl);


        }
    </script>
</head>

<body>

<div id="continue-header" class="blue lighten-2">

</div>

<div id="continue-wrapper" class="container">
    <div class="row">
        <div class="col l6 m10 s12 offset-l3 offset-m1">
            <h4 class="completion-text" style="font-size: 45px">Sign up now!</h4>
            <div class="card" style="padding:0 20px">
                <div class="row">
                    <div class="col s12">
                        <div class="row" id="form-wrapper">
                            <p class="blue-text text-lighten-2">Better Compensation, Fun Environment & Exiting Opportunities.</p>
                            <div class="input-field">
                                <input id="fullname" type="text" class="validate">
                                <label for="fullname">Full Name</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input-field">
                                <input value="" id="fullname" type="text" class="validate">
                                <label for="fullname">Mobile Number</label>
                            </div>
<!--                            <div class="input-field ">-->
<!--                                <select>-->
<!--                                    <option value="" disabled selected>Select Location</option>-->
<!--                                    <option value="Hanston Building, Ortigas Center">Hanston Building, Ortigas Center-->
<!--                                    </option>-->
<!--                                    <option value="Silver City, Pasig City">Silver City, Pasig City</option>-->
<!--                                    <option value="SM City BF Parañaque ">SM City BF Parañaque</option>-->
<!--                                    <option value="SM Lanang Premier, Davao">SM Lanang Premier, Davao</option>-->
<!--                                </select>-->
<!--                                <label>Location Preference</label>-->
<!--                            </div>-->
                            <div class="input-field">
                                <p>
                                    <input type="checkbox" id="test5"/>
                                    <label for="test5"> I agree with the <a href="#">Terms and Condition</a> of this site</label>
                                </p>
                            </div>

                            <br>
                            <button type="submit" class="waves-effect waves-light btn orange lighten-2 col s12 social-button btn-large"> Apply Now !
                            </button>
                            <br>
                            <br>
                            <h2><span>Or Sign up with</span></h2>
                            <button class="waves-effect waves-light btn col s12 social-button linked-in-btn"
                                    onclick="onLinkedInLoad()">  Linked In
                            </button>

                            <button class="waves-effect waves-light btn col s12 social-button facebook-btn"
                                    id="useFacebook">
                                Facebook
                            </button>

                            <button class="waves-effect waves-light btn col s12 social-button google-plus-btn">

                                Google +
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>