/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued by
 * default in `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */


import AOS from 'aos';
import './slider';
import './lightbox';
import './menu';
import { Fancybox } from "@fancyapps/ui";

Fancybox.bind('[data-fancybox]', {
  closeButton: true
});

document.addEventListener('DOMContentLoaded', () => {
  const loader = document.getElementById('loader')

  setTimeout(() => {
    loader.classList.add('hide')
  }, 800)

  setTimeout(() => {

    if (typeof AOS !== 'undefined') {
      AOS.init()
    }
  }, 1000)
})
