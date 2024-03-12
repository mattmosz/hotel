const frm = document.querySelector("#formulario-admin");
document.addEventListener("DOMContentLoaded", function () {
    frm.addEventListener("submit", function (e) {
        e.preventDefault();
        const usuario = document.querySelector("#usuario").value;
        const clave = document.querySelector("#clave").value;
        if (usuario == "" || clave == "") {
            sweetalert("TODOS LOS CAMPOS SON OBLIGATORIOS", "warning");
        } else {
            const http = new XMLHttpRequest();
            const url = base_url + "admin/verify";
            http.open("POST", url, true);
            http.send(new FormData(frm));
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    sweetalert(res.msg, res.tipo);
                    if (res.tipo == "success") {
                        frm.reset();
                        //Redirigir
                        window.location = base_url + 'perfil';
                        console.log(window.location.href)
                    }
                }
            }
        }
    });
});
        