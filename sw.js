//asignar un nombre y versión al cache
const CACHE_NAME = 'karen-fernanda-1.0.0',
  urlsToCache = [
    './',
    'index.php',
    'css/animate.min.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'css/font-awesome.min.css',
    'js/bootstrap.bundle.min.js',
    'css/docs.css',
    'css/style.css',
    'manifest.json',
    'js/app.js',
    'js/sw.js'
   ]
   

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          //recuperar del cache
          return res
        }
        //recuperar de la petición a la url
        return fetch(e.request)
      })
  )
})

//Escuhar push
self.addEventListener('push', e => {

    const data = JSON.parse(e.data.text())

    console.log(data);

    const title = data.title;
    const options = {
        body: data.body,
        icon: data.icon,
        image: data.image,
        badge: data.badge,
        vibrate: [100, 50, 100],
        data: {
            url: data.url
        },
        actions: [
            {action: 'Si', title: 'Si', icon: 'https://i.imgur.com/4X8mHt3.png'},   
            {action: 'No', title: 'No', icon: 'https://i.imgur.com/4X8mHt3.png'}
        ]
        
    };

    e.waitUntil( self.registration.showNotification(title, options) );
});
