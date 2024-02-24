const frm = document.querySelector('#formulario');

document.addEventListener('DOMContentLoaded', function(){
   
    //VALIDACION DE CAMPOS
    frm.addEventListener('submit', function(e){
        e.preventDefault();
        if (frm.fecha_llegada.value == '' || frm.fecha_salida.value == '' || frm.habitacion.value == '') {
            sweetalert('TODOS LOS CAMPOS SON OBLIGATORIOS', 'warning');
        } else {
            this.submit();
        }
    })
    
})

