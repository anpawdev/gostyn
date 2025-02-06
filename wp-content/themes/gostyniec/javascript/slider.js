import Splide from '@splidejs/splide';

const logoSlider = document.querySelector('#splide-logo')
const gallerySlider = document.querySelector('#splide-gallery')

if (logoSlider !== null) {
  const splideLogo = new Splide(logoSlider, {
    pagination: false,
    perPage: 5,
    perMove: 1,
    gap: '45px',
    arrows: true,
    classes: {
      arrows: 'splide__arrows custom-arrows',
      arrow: 'splide__arrow custom-arrow',
      prev: 'splide__arrow--prev arrow-prev',
      next: 'splide__arrow--next arrow-next',
    },
    breakpoints: {
      1024: {
        gap: '1.5rem',
        perPage: 3,
      },
      992: {
        gap: '1.5rem',
        perPage: 2,
      },
      640: {
        gap: '1.5rem',
        perPage: 1,
        autoplay: true,
        speed: 400,
      },
    }
  })

  splideLogo.mount()
}

if (gallerySlider !== null) {
  const splideGallery = new Splide(gallerySlider, {
    pagination: false,
    perPage: 4,
    perMove: 1,
    gap: '11px',
    arrows: true,
    classes: {
      arrows: 'splide__arrows custom-arrows',
      arrow: 'splide__arrow custom-arrow',
      prev: 'splide__arrow--prev arrow-prev',
      next: 'splide__arrow--next arrow-next',
    },
    breakpoints: {
      1280: {
        perPage: 3,
      },
      992: {
        perPage: 2,
      },
      640: {
        perPage: 1,
      },
    }
  })

  splideGallery.mount()
}

document.addEventListener('DOMContentLoaded', () => {
  const gallerySliders = document.querySelectorAll('.gallery-slider');

  gallerySliders.forEach(gallerySlider => {
    const slides = gallerySlider.querySelectorAll('.splide__slide');

    if (slides.length > 1) {
      const splideInstance = new Splide(gallerySlider, {
        pagination: false,
        type: 'fade',
        rewind: true, 
        perPage: 1,
        perMove: 1,
        arrows: false,
        speed: 300,
        autoplay: true
      });

      splideInstance.mount();
    } else {
      gallerySlider.style.visibility = 'visible';
    }
  });
});

