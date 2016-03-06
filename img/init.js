$(document).ready(function(){
    
    $('.modal-trigger').leanModal();

      $('select').material_select();
      $('.datepicker2').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100,
        min: new Date(1920,12,1),
        max: new Date(2002,12,31)
      });


      $('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin

    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 500,
        
      });









    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });


    $('form.ajax').on('submit', function(){
      $("body").css("cursor", "progress");

      var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      page = that.attr('page'),
      data = {};

      that.find('[name]').each(function(index, value){
        var that = $(this),
        name = that.attr('name'),
        value = that.val();
        data[name] = value;
      });

      console.log(data);

      $.ajax({
        url: url,
        type: type,
        data: data,

        success: function(response){
          $("body").css("cursor", "");
          if(response != 1){

              Materialize.toast(response, 4000, 'rounded') // 'rounded' is the class I'm applying to the toast



          } else {
            Materialize.toast('Success', 3000, 'rounded') // 'rounded' is the class I'm applying to the toast
          	location.assign(page);
          }
          
        }

      });

      that.find('[type=password]').each(function(index, value){
        $(this).val("");
      });
      return false;
    });    

      $('form.create-survey-form').on('submit', function(){
      $("body").css("cursor", "progress");

      var that = $(this),
      url = that.attr('action'),
      type = that.attr('method'),
      page = that.attr('page'),
      data = {};

      that.find('[name]').each(function(index, value){
        var that = $(this),
        name = that.attr('name'),
        value = that.val();
        data[name] = value;
      });

      $.ajax({
        url: url,
        type: type,
        data: data,

        success: function(response){
          $("body").css("cursor", "");
          if(response == 'Title is required'){
              Materialize.toast(response, 3000, 'rounded'); // 'rounded' is the class I'm applying to the toast
          } else if(response == 'please pick a sampling method'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size value cannot be greater than population'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size and population are required'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size and population must be numeric'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size and population must be numeric'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size and population must be a whole number'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'sample size and population must be a positive number'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'maximum population is 1500'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'respondent name is required'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'invalid email format'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'you exceeded the max number of sample please update the number of sample and try again'){
              Materialize.toast(response, 3000, 'rounded');
          } else if(response == 'input is lower than the number of respondents please delete some respondents and try again'){
              Materialize.toast(response, 3000, 'rounded');
          }else if(response == 'email already exist'){
              Materialize.toast(response, 3000, 'rounded');
          } else {
            Materialize.toast('Success', 3000, 'rounded') // 'rounded' is the class I'm applying to the toast
            location.assign(page + "?id=" + response);
          }
        }
      });
  
      return false;
    });

 $("form.upload-ajax").submit(function(){
      $("body").css("cursor", "progress");
      $('#upload-btn').attr('disabled');

      var formData = new FormData($(this)[0]);
      var that = $(this),
          url = that.attr('action'),
          page = that.attr('page');

      $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        async: false,

        success: function (response) {
          $("body").css("cursor", "");
              
              if(response == 'success'){
                Materialize.toast(response, 3000, 'rounded');
                location.reload();
              }else{
                Materialize.toast(response, 3000, 'rounded'); // 'rounded' is the class I'm applying to the toast
                $('#upload-modal').closeModal();
              }
        },

        cache: false,
        contentType: false,
        processData: false
      });

      return false;
    });

      $("#population").keyup(function() {
        var sample = $('#sample_size').val();
        var population = this.value;
        var percent = (sample / population) * 100;
        $('#percentage').val(percent.toPrecision(4) + '%')
      });

      $("#sample_size").keyup(function() {
        var sample = this.value;
        var population = $('#population').val();
        var percent = (sample / population) * 100;
        $('#percentage').val(percent.toPrecision(3) + '%')
      });

 });