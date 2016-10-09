var email_valido = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$';
var nombre_valido = '^[a-zA-Z]{2,30}$';
var telefono_valido = '^[0-9]{4,}$';
var comentario_valido = '^[a-zA-Z0-9$%&!-_.¿?=#@]+$';
$(document).ready(function() {
    $('#inputEmail').change(function() {
      if ($("#inputEmail").val().match(email_valido)) {
        $('#form-group-email').attr('class','form-group has-success has-feedback');
        $('#email_status').attr('class','glyphicon glyphicon-ok form-control-feedback');
      } else {
        $('#form-group-email').attr('class','form-group has-error has-feedback');
        $('#email_status').attr('class','glyphicon glyphicon-remove form-control-feedback');
      }
    })
    $('#inputNombre').change(function() {
      if ($("#inputNombre").val().match(nombre_valido)) {
        $('#form-group-nombre').attr('class','form-group has-success has-feedback');
        $('#nombre_status').attr('class','glyphicon glyphicon-ok form-control-feedback');
      } else {
        $('#form-group-nombre').attr('class','form-group has-error has-feedback');
        $('#nombre_status').attr('class','glyphicon glyphicon-remove form-control-feedback');
      }
    })
    $('#inputTelefono').change(function() {
      if ($("#inputTelefono").val().match(telefono_valido)) {
        $('#form-group-telefono').attr('class','form-group has-success has-feedback');
        $('#telefono_status').attr('class','glyphicon glyphicon-ok form-control-feedback');
      } else {
        $('#form-group-telefono').attr('class','form-group has-error has-feedback');
        $('#telefono_status').attr('class','glyphicon glyphicon-remove form-control-feedback');
      }
    })
    $('#inputComentario').change(function() {
      if ($("#inputComentario").val().match(comentario_valido)) {
        $('#form-group-comentario').attr('class','form-group has-success has-feedback');
        $('#comentario_status').attr('class','glyphicon glyphicon-ok form-control-feedback');
      } else {
        $('#form-group-comentario').attr('class','form-group has-error has-feedback');
        $('#comentario_status').attr('class','glyphicon glyphicon-remove form-control-feedback');
      }
    })
    $('#enviar').on('click',function() {
      if ($('#inputEmail').val() == '' || $('#inputNombre').val() == '' || $('#inputTelefono').val() == '' || $('#inputComentario').val() == '') {
        alert('Por favor completa todos los datos');
      };
    })
})