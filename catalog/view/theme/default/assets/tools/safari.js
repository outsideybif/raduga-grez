import { getMediaWidth, media } from '~/assets/tools/media.js';
import { throttle } from '~/assets/tools/throttle.js';

const vh = window.innerHeight;
document.documentElement.style.setProperty('--fullvh', `${vh}px`);
document.addEventListener('DOMContentLoaded', () => {

  const mediaWidth = getMediaWidth();

  if (mediaWidth > media.tablet) {

    $(window).on('resize', throttle(() => {
      const vh = window.innerHeight;
      document.documentElement.style.setProperty('--fullvh', `${vh}px`);
    }, 50));

  }
});