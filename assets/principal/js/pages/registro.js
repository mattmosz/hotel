const frm = document.querySelector("#formulario");
const terminos = document.querySelector("#chb2");
document.addEventListener("DOMContentLoaded", function () {
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    // if(
    //  frm.nombre.value == ''  ||
    //  frm.apellido.value == ''||
    //  frm.usuario.value == '' ||
    //   frm.correo.value == ''  ||
    //   frm.clave.value == ''   ||
    //   frm.confirmar.value == ''
    //   ) {
    //   aleraSW('TODOS LOS CAMPOS SON OBLIGATORIOS', 'warning');
    // }else if (!terminos.ariaChecked){
    //   aleraSW('ACEPTAR LOS TERMINOS Y CONDICIONES', 'warning');
    //  }else{
    const http = new XMLHttpRequest();
    const url = base_url + "resgistro/crear";
    http.open("POST", url, true);
    http.send(new FormData(frm));
    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);        
        const res = JSON.parse(this.responseText);
        aleraSW(res.msg, res.tipo);
      }
     };
    //}

  });
});
