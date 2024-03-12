function cerrarSesion() {
  console.log("cerrarSesion");
  Swal.fire({
    title: "¿Seguro de cerrar la sesión?",
    text: "Deberá volver a iniciar sesión para continuar",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, cerrar sesión",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = base_url + 'dashboard/logout';
    }
  });
}
