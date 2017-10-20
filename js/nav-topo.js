jQuery(document).ready(function () {
    // Exibe ou oculta o botão
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 650) {
            jQuery('.link-topo').fadeIn(200);
        } else {
            jQuery('.link-topo').fadeOut(200);
        }
    });

    // Faz animação para subir
    jQuery('.link-topo').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 300);
    })
});

