const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index.html",
  "/assets/vendor/css/core.css",
  "/assets/vendor/css/theme-default.css",
  "/assets/css/demo.css",
  "/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css",
  "/assets/vendor/css/pages/page-auth.css",
  "assets/vendor/js/helpers.js",
  "assets/js/config.js",
  "assets/js/main.js",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
