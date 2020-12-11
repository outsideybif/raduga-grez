// import 'intersection-observer';
import 'intersection-observer-polyfill';


import '@webcomponents/custom-elements';

customElements.polyfillWrapFlushCallback(function(flush) {
  if (document.readyState === 'complete') {
    // If the document is already complete, flush synchronously.
    flush();
  } else {
    // Otherwise, wait until it is complete.
    document.addEventListener('readystatechange', function() {
      if (document.readyState === 'complete') {
        flush();
      }
    });
  }
});