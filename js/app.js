if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/sw.js')
    .then(reg => console.log('Service Worker Registrado exitosamente')) // eslint-disable-line no-console
    .catch(err => console.log('Service Worker a fallado', err)); // eslint-disable-line no-console
}