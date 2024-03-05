const frm = document.querySelector('#formulario');
document.addEventListener('DOMContentLoaded', function() {
     frm.addEventListener('submit', function(e) {
       e.preventDefault(); 
       if(frm.nombre.value == '' || frm.apellido.value == ''
       || frm.usuario.value == '' || frm.correo.value == ''
       || frm.clave.value == '' || frm.confirmar.value == ''){
        sweetalert('TODOS LOS CAMPOS SON OBLIGATORIOS', 'warning');

       }else{

       }

    }) 
});
    