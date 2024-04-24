const toastTrigger = document.getElementById('liveToastBtn');
const toastLiveExample = document.getElementById('liveToast');

if (toastTrigger) {
  const toastBootstrap = new bootstrap.Toast(toastLiveExample); // Cambiado para crear una nueva instancia en lugar de obtenerla o crearla
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show();
    // Desactivar la notificación después de x segundos
    setTimeout(() => {
      toastBootstrap.hide();
    }, 3200); // 1000 milisegundos = 1 segundos
  });
}
