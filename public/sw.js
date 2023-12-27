self.importScripts('/assets/js/plugins/localforage.min.js');

var asset_cache = 'asset_cache';
var precachedAssets = [
    // '/',

    '/assets/website/assets/css/plugins/animate.css',
    '/assets/website/assets/css/plugins/bootstrap.min.css',
    '/assets/website/assets/css/plugins/fontawesome.min.css',
    '/assets/website/assets/css/plugins/odometer-theme-default.css',
    '/assets/website/assets/css/plugins/select2.min.css',
    '/assets/website/assets/css/style.css',

    '/assets/website/assets/fonts/fa-brands-400.ttf',
    '/assets/website/assets/fonts/fa-brands-400.woff2',
    '/assets/website/assets/fonts/fa-regular-400.ttf',
    '/assets/website/assets/fonts/fa-regular-400.woff2',
    '/assets/website/assets/fonts/fa-solid-900.ttf',
    '/assets/website/assets/fonts/fa-solid-900.woff2',
    '/assets/website/assets/fonts/fa-v4compatibility.ttf',
    '/assets/website/assets/fonts/fa-v4compatibility.woff2',

    '/assets/website/assets/img/about_img_1.png',
    '/assets/website/assets/img/about_shape_1.svg',
    '/assets/website/assets/img/about_shape_2.svg',
    '/assets/website/assets/img/about_shape_3.svg',
    '/assets/website/assets/img/bg/blog_bg_1.png',
    '/assets/website/assets/img/bg/blog_bg_2.png',
    '/assets/website/assets/img/bg/brands_bg_1.svg',
    '/assets/website/assets/img/bg/ed_and_skill_bg.png',
    '/assets/website/assets/img/bg/footer_bg.svg',
    '/assets/website/assets/img/bg/funfact_bg.svg',
    '/assets/website/assets/img/bg/funfact_bg_1.svg',
    '/assets/website/assets/img/bg/hero_bg.svg',
    '/assets/website/assets/img/bg/hero_bg_2.svg',
    '/assets/website/assets/img/bg/hero_bg_3.svg',
    '/assets/website/assets/img/bg/hero_bg_4.svg',
    '/assets/website/assets/img/bg/hero_bg_5.svg',
    '/assets/website/assets/img/bg/iconbox_bg_3.svg',
    '/assets/website/assets/img/bg/portfolio_bg.png',
    '/assets/website/assets/img/bg/protfolio_bg2.png',
    '/assets/website/assets/img/bg/service_bg.png',
    '/assets/website/assets/img/bg/testimonial_bg.svg',
    '/assets/website/assets/img/blog/a1.png',
    '/assets/website/assets/img/blog/a2.png',
    '/assets/website/assets/img/blog/a3.png',
    '/assets/website/assets/img/blog/blog_1.jpg',
    '/assets/website/assets/img/blog/blog_2.jpg',
    '/assets/website/assets/img/blog/blog_3.jpg',
    '/assets/website/assets/img/blog/blog_4.jpg',
    '/assets/website/assets/img/blog/blog_d1.jpg',
    '/assets/website/assets/img/blog/blog_d2.jpg',
    '/assets/website/assets/img/blog/blog_d3.jpg',
    '/assets/website/assets/img/client/c1.svg',
    '/assets/website/assets/img/client/c2.svg',
    '/assets/website/assets/img/client/c3.svg',
    '/assets/website/assets/img/client/c4.svg',
    '/assets/website/assets/img/client/c5.svg',
    '/assets/website/assets/img/client/c6.svg',
    '/assets/website/assets/img/favicon - Copy.png',
    '/assets/website/assets/img/favicon.ico',
    '/assets/website/assets/img/footer_shape.svg',
    '/assets/website/assets/img/gallery/gallery_1.jpg',
    '/assets/website/assets/img/gallery/gallery_10.jpeg',
    '/assets/website/assets/img/gallery/gallery_11.jpeg',
    '/assets/website/assets/img/gallery/gallery_12.jpeg',
    '/assets/website/assets/img/gallery/gallery_2.jpg',
    '/assets/website/assets/img/gallery/gallery_3.jpg',
    '/assets/website/assets/img/gallery/gallery_4.jpg',
    '/assets/website/assets/img/gallery/gallery_5.jpeg',
    '/assets/website/assets/img/gallery/gallery_6.jpeg',
    '/assets/website/assets/img/gallery/gallery_7.jpeg',
    '/assets/website/assets/img/gallery/gallery_8.jpeg',
    '/assets/website/assets/img/gallery/gallery_9.jpeg',
    '/assets/website/assets/img/hero/hero_1.png',
    '/assets/website/assets/img/hero/hero_about_1.jpg',
    '/assets/website/assets/img/hero/hero_about_2.jpg',
    '/assets/website/assets/img/hero_img - Copy.png',
    '/assets/website/assets/img/hero_img.png',
    '/assets/website/assets/img/icon/Quote.svg',
    '/assets/website/assets/img/icon/about_icon_1.svg',
    '/assets/website/assets/img/icon/about_icon_2.svg',
    '/assets/website/assets/img/icon/about_icon_3.svg',
    '/assets/website/assets/img/icon/search_icon.svg',
    '/assets/website/assets/img/logo - Copy.svg',
    '/assets/website/assets/img/logo.png',
    '/assets/website/assets/img/logo2.svg',
    '/assets/website/assets/img/not_found_1.svg',
    '/assets/website/assets/img/portfolio/p1.jpg',
    '/assets/website/assets/img/portfolio/p10.jpg',
    '/assets/website/assets/img/portfolio/p11.jpg',
    '/assets/website/assets/img/portfolio/p2.jpg',
    '/assets/website/assets/img/portfolio/p3.jpg',
    '/assets/website/assets/img/portfolio/p4.jpg',
    '/assets/website/assets/img/portfolio/p5.jpg',
    '/assets/website/assets/img/portfolio/p6.jpg',
    '/assets/website/assets/img/portfolio/p7.jpg',
    '/assets/website/assets/img/portfolio/p8.jpg',
    '/assets/website/assets/img/portfolio/p9.jpg',
    '/assets/website/assets/img/portfolio/pd.jpg',
    '/assets/website/assets/img/portfolio/pd2.jpg',
    '/assets/website/assets/img/portfolio/pp9.jpg',
    '/assets/website/assets/img/service_shape_1.svg',
    '/assets/website/assets/img/skills_shape_1.svg',
    '/assets/website/assets/img/testmonial/a1.jpg',
    '/assets/website/assets/img/testmonial/a10.jpg',
    '/assets/website/assets/img/testmonial/a11.jpg',
    '/assets/website/assets/img/testmonial/a2.jpg',
    '/assets/website/assets/img/testmonial/a3.jpg',
    '/assets/website/assets/img/testmonial/a4.jpg',
    '/assets/website/assets/img/testmonial/a5.jpg',
    '/assets/website/assets/img/testmonial/a6.jpg',
    '/assets/website/assets/img/testmonial/a7.jpg',
    '/assets/website/assets/img/testmonial/a8.jpg',
    '/assets/website/assets/img/testmonial/a9.jpg',
    '/assets/website/assets/img/testmonial/av.jpg',
    '/assets/website/assets/img/testmonial_shape_1.svg',

    '/assets/website/assets/js/main.js',
    '/assets/website/assets/js/plugins/gsap.min.js',
    '/assets/website/assets/js/plugins/isotope.pkg.min.js',
    '/assets/website/assets/js/plugins/jquery-3.6.0.min.js',
    '/assets/website/assets/js/plugins/odometer.min.js',
    '/assets/website/assets/js/plugins/wow.min.js',

    '/assets/js/plugins/axios.js',
    '/assets/js/plugins/localforage.min.js',
    '/assets/js/plugins/sweetalert.js',
    '/assets/js/plugins/turbolinks.min.js',
    '/assets/js/frontend.js',
    '/logo.png',
    '/favicon.ico',
    '/manifest.json',
    '/main.js',
    '/sw.js',
];


/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function (e) {
    e.waitUntil(
        caches.open(asset_cache).then(async function (cache) {
            return cache.addAll(precachedAssets);
        })
    );
    self.skipWaiting();
});


self.addEventListener('fetch', function (e) {
    const url = new URL(e.request.url);
    const isPrecachedRequest = precachedAssets.includes(url.pathname);
    const destination = e.request.destination;

    if (isPrecachedRequest) {
        return get_pre_cached(e);
    }

    switch (destination) {
        case "image":
            return response_and_store_cache(e, "image_cache");
        case "font":
            return response_and_store_cache(e, "font_cache");
        default:
            if (url.pathname == '/todos') {
                return response_and_store_cache(e, "api_cache", "stale_while_revalidate");
            }
            return response_and_store_cache(e, "extra_cache");
    }
});

function get_pre_cached(e) {
    e.respondWith(caches.open(asset_cache)
        .then((cache) => {
            return cache.match(e.request.url);
        })
    );
}

const response_and_store_cache = (e, cache_name, strategy) => {
    e.respondWith(caches.open(cache_name)
        .then((cache) => cache.match(e.request)
            .then((cachedResponse) => {

                function PreFetchedResponse(e) {
                    return fetch(e.request)
                        .then((fetchedResponse) => {
                            // if in same url then cache
                            let url = new URL(e.request.url);
                            if (url.origin === location.origin && e.request.method === "GET") {
                                cache.put(e.request, fetchedResponse.clone());
                            }
                            return fetchedResponse;
                        });
                }

                if (strategy === "stale_while_revalidate") {
                    var pre_response = PreFetchedResponse(e);
                    return cachedResponse || pre_response;
                }

                if (cachedResponse) {
                    PreFetchedResponse(e);
                    return cachedResponse;
                }

                return PreFetchedResponse(e);
            }))
    );
    return
}

async function post_data() {
    var data = await localforage.getItem("submit_application");

    let res = await fetch('/api/tests', {
        method: "POST",
        headers: {
            "content-type": "application/json",
        },
        body: JSON.stringify(data),
    })

    let resdata = await res.json();
    console.log(resdata);
}

self.addEventListener('sync', event => {

    let BACKGROUND_sync = "test_demo_sync"
    if (event.tag === BACKGROUND_sync) {
        event.waitUntil((async () => {
            await post_data();

            await localforage.removeItem("submit_application");

            // Let the user know, if they granted permissions before.
            self.registration.showNotification(`Your data is submitted`, {
                icon: '/logo.png',
                body: 'You can access the list of movies in the app',
                actions: [
                    {
                        action: 'view-results',
                        title: 'Open app'
                    }
                ]
            });
        })());
    }
});


// Respond to a server push with a user notification.
self.addEventListener('push', function (event) {
    if (Notification.permission === "granted") {
        const notificationText = event.data.text();
        const showNotification = self.registration.showNotification('Sample PWA', {
            body: notificationText,
            icon: '/logo.png'
        });
        // Make sure the toast notification is displayed.
        event.waitUntil(showNotification);
    }
});

// Respond to the user selecting the toast notification.
self.addEventListener('notificationclick', function (event) {
    console.log('On notification click: ', event.notification.tag);
    event.notification.close();

    // Display the current notification if it is already open, and then put focus on it.
    event.waitUntil(clients.matchAll({
        type: 'window'
    }).then(function (clientList) {
        for (var i = 0; i < clientList.length; i++) {
            var client = clientList[i];
            if (client.url == 'http://127.0.0.1:8000/' && 'focus' in client)
                return client.focus();
        }
        if (clients.openWindow)
            return clients.openWindow('/');
    }));
});

async function getDemoData() {
    let res = await fetch("/api/demodata");
    let data = await res.json();
    console.log(data);
    let saved_data = await localforage.getItem('periodic_demo_data');
    if (!saved_data) {
        saved_data = [];
    } else {
        saved_data = JSON.parse(saved_data);
    }
    saved_data.push(data);
    await localforage.setItem("periodic_demo_data", JSON.stringify(saved_data));

    const cache = await caches.open('periodic_demo_data');
    await cache.put('/api/demodata', new Response(JSON.stringify(data)));
}

self.addEventListener('periodicsync', event => {
    console.log(event.tag);
    if (event.tag === 'get-daily-news') {
        event.waitUntil(getDemoData());
    }
});
