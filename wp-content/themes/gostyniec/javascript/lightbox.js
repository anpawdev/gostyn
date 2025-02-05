
document.addEventListener('DOMContentLoaded', function () {
    const lightboxOverlay = document.createElement('div')
    lightboxOverlay.className = 'lightbox-overlay'
    const lightboxImage = document.createElement('img')
    lightboxOverlay.appendChild(lightboxImage)
    document.body.appendChild(lightboxOverlay)

    const lightboxLinks = document.querySelectorAll('article a')
    lightboxLinks.forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault() 
            const imageSrc = link.getAttribute('href') 
            lightboxImage.src = imageSrc 
            lightboxOverlay.classList.add('active')
        })
    })

    lightboxOverlay.addEventListener('click', event => {
        if (event.target === lightboxOverlay) {
            lightboxOverlay.classList.remove('active')
        }
    })
})