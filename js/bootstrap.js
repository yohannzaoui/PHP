/* script.js - charge le bundle JS de Bootstrap via CDN */
(function(){
  if (window.bootstrap) return; // déjà chargé

  var s = document.createElement('script');
  s.src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js';
  s.crossOrigin = 'anonymous';
  s.defer = true;
  document.head.appendChild(s);
})();
