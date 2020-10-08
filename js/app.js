document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems);
});

$(document).ready(function() {
  //Check email availability
  $('#email').on('change', function() {
    $('#result-email').html('<span>Verificando</span>').fadeOut(1000);

    var email = $(this).val();
    var dataString = 'email=' + email;

    var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
    var valid = emailRegex.test(email);
    if (!valid) {
      $('#result-email').fadeIn(1000).html("<span class='red-text'>Ingresa un correo valido</span>");
    } else
      $.ajax({
        type: "POST",
        url: "../config/check_email_availablity.php",
        data: dataString,
        success: function(data) {
          if (data == 0) {
            $('#result-email').fadeIn(1000).html("<span class='red-text'>Ya existe una cuenta con este correo</span>");
            $("#email").addClass("invalid");
            $("#register").attr("disabled", true);
          } else {
            $('#result-email').fadeIn(1000).html("<span class='green-text'>Correo disponilbe</span>");
            $("#email").removeClass("invalid");
            $("#register").removeAttr("disabled");
          }
        }
      });
  });

  //login
  $('#l_email').on('change', function() {
    $('#l_result-email').html('<span>Verificando</span>').fadeOut(1000);

    var email = $(this).val();
    var dataString = 'email=' + email;

    var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
    var valid = emailRegex.test(email);
    if (!valid) {
      $('#l_result-email').fadeIn(1000).html("<span class='red-text'>Ingresa un correo valido</span>");
    } else
      $.ajax({
        type: "POST",
        url: "../config/check_email_availablity.php",
        data: dataString,
        success: function(data) {
          if (data == 0) {
            $("#l_email").removeClass("invalid");
            $("#login").removeAttr("disabled");

          } else {
            $('#l_result-email').fadeIn(1000).html("<span class='red-text'>No existe esta cuenta</span>");
            $("#l_email").addClass("invalid");
            $("#login").attr("disabled", true);
          }
        }
      });
  });
});
