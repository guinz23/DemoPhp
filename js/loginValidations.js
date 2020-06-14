$(function() {
    with (document.Login) {
        onsubmit = function (e) {
            e.preventDefault();
            ok = true;
    
            if (ok && email.value == "") {
                ok = false;
                alert("debe ingresar un Correo");
                email.focus();
            }
            if (ok && password.value == "") {
                ok = false;
                alert("debe ingresar una contraseña");
                password.focus();
            }
            if (ok) {
                submit();
            }
        }
    }
  });

