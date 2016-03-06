$(document).ready(function() {

    $('select').material_select();

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '501745020012175',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    $('#useFacebook').click(function(e) {
        e.preventDefault();
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                useFacebook();
            } else {
                FB.login(function(){
                    useFacebook();
                }, {scope: 'publish_actions, email, public_profile, user_birthday, user_location, user_likes, user_education_history'});
            }
        });
    });

    function useFacebook() {
        FB.api('/me', {fields: 'id,first_name,last_name,birthday,gender,about,email,education,bio,devices,hometown,location,likes,work,public_key'}, function(fbResponse) {

            console.log(fbResponse);

            var _fname = fbResponse.first_name;
            var _lname = fbResponse.last_name;
            var _birthday = fbResponse.birthday;
            var _email = fbResponse.email;
            var _gender = fbResponse.gender;
            var _fbUid = fbResponse.id;
            var _location = fbResponse.location.name;

            $('#name').val(_fname+' '+_lname);
            $('#email').val(_email);
            $('#bday').val(_birthday);
            $('#gender').val(_gender);
            $('#location').val(_location);
            $('#fb_uid').val(_fbUid);

        });

        FB.api('/me/picture?type=large', function(fbResponse) {
            $('#prof_pic').val(fbResponse.data.url);
        });
    }


});
