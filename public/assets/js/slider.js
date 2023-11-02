var swiper = new Swiper('.swiper-container', {
    loop: true, // Untuk membuat slider kembali ke slide pertama setelah slide terakhir
    autoplay: {
        delay: 5000, // Atur waktu pengguliran otomatis dalam milidetik (di sini diatur 5 detik)
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});