(function () {
      var juicerJsUrl = "https://www.juicer.io/embed.js";

  window.runJuicerAfterCallback = function(event, callbackCode) {
  }

  function setAttributesToJuicerElement(juicerFeed) {
    if (!juicerFeed.hasAttribute('data-feed-id')) {
      juicerFeed.setAttribute('data-feed-id', 'ucdagfood');
    }
    if (!juicerFeed.hasAttribute('data-origin')) {
      juicerFeed.setAttribute('data-origin', 'embed-code');
    }
    if (!juicerFeed.hasAttribute('data-per')) {
      juicerFeed.setAttribute('data-per', '15');
    }
    if (!juicerFeed.hasAttribute('data-pages')) {
      juicerFeed.setAttribute('data-pages', '1');
    }

  }
  var feedElements = document.querySelectorAll('.juicer-feed[data-feed-id="ucdagfood" i]')
  if (feedElements.length === 0) {
    var juicerScript = document.currentScript;
    var juicerFeed = document.createElement('div');
    juicerFeed.setAttribute('class', 'juicer-feed');
    setAttributesToJuicerElement(juicerFeed);
    juicerScript.parentNode.appendChild(juicerFeed);
  } else {
    feedElements.forEach(setAttributesToJuicerElement);
  }

  var head  = document.head;
  var script = document.createElement('script');
  script.src = juicerJsUrl;
  head.appendChild(script);
      var juicerCssUrl = "https://www.juicer.io/embed.css";
    var link  = document.createElement('link');
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = juicerCssUrl;
    link.media = 'all';
    head.appendChild(link);
})();
