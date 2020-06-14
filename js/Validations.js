$(function() {
    with (document.registroUser) {
        onsubmit = function (e) {
            e.preventDefault();
            ok = true;
    
            if (ok && name.value == "") {
                ok = false;
                alert("debe ingresar un Nombre");
                name.focus();
            }
            if (ok && lastname.value == "") {
                ok = false;
                alert("Debe Ingresar un Apellido");
                lastname.focus();
            }
            if (ok && email.value == "") {
                ok = false;
                alert("Debe Ingresar un Correo");
                email.focus();
            }
            if (ok && password.value == "") {
                ok = false;
                alert("Debe Ingresar una Contraseña");
                password.focus();
            }
            if (ok && phone.value == "") {
                ok = false;
                alert("Debe Ingresar un Numero de Telefono");
                phone.focus();
            }
            if (ok) {
                submit();
            }
        }
    }
  });
