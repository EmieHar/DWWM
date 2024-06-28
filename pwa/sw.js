self.addEventListener('install', (evt) => {
     console.log('[Service Worker] Installation');
    evt.waitUntil(
      caches.open("cache01").then((cache) => {
        console.log('[Service Worker] Mise en cache globale: app shell et contenu');
        return cache.addAll([
            '/',
            '/index.html',
            '/main.js',
            '/js.png'
        ]);
      })
    );
});

self.addEventListener('activate', evt =>{
    console.log("sw: evenement activé") 
})

self.addEventListener('fetch', evt => {
    console.log("evenement fetch", evt.request.url)    
/*------------------------------------------------------ 
 Stratégie cache first and then network
--------------------------------------------------------*/
evt.respondWith( 
        caches.match(evt.request).then(res => { 
        if (res) {
            console.log("RES:",res);
            return res  
        }

        return fetch(evt.request).then(newResponse => {
                caches.open('cache01').then( cache => cache.put(evt.request,newResponse ) ) 
                return newResponse.clone();
        })
    })
)
/*------------------------------------------------------ */


/*-------------------------------------------------------
 Stategie network first puis cache callback 
-------------------------------------------------------
evt.respondWith(
        fetch(evt.request).then( res => { 
            caches.open("cache01").then(cache => cache.put(evt.request,res))
            return res.clone();
        }).catch( err => {
            return caches.match(evt.request); 
        })
)
-------------------------------------------------------- */

}) // fin eventListener de fetch 


// self.registration.showNotification('from sw.js -> notification bipbip', {
//     body: 'body notification du service worker'
// })


// self.addEventListener('push',evt => {
//     console.log('data poussée par push emulateur:',evt.data.text());
//     evt.waitUntil(self.registration.showNotification('alerte',{ body: evt.data.text() } ));
// })

self.registration.showNotification('Notif depuis le sw.js', {
    body: 'je suis une notification du service worker - question',
    actions: [
        { action: 'accept', title: 'accepter steuplé' },
        { action: 'refuse', title: 'refuser que cest' }
    ]
});

self.addEventListener('notificationclick', evt => {
    if (evt.action === 'accept') {
        console.log('vous avez accepté');
    } else if (evt.action === 'refuse') {
        console.log('vous avez refusé')
    } else {
        console.log('vous avez cliqué sur la notification (pas sur un des boutons)')
    }
    evt.notification.close();
})


self.addEventListener('push', event => {
   
    console.log(event.data)
    self.registration.showNotification(data.title ,{
      body: 'Yay push works!',
    });
  });