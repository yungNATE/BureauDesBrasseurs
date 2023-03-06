window.onload = function() {
    var body = document.querySelector('body');

    if(body.classList.contains("page-id-16")){ // Si page trombinoscope
        const swiper = new Swiper('.swiper', {
            speed: 400,
            spaceBetween: 100,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
      

}