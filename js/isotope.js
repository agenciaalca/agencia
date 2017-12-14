//jQuery(document).ready(function($){$("#posts").isotope({itemSelector:'.item',layoutMode:'fitRows',});$('ul.filter li').click(function(){$("ul.filter li").removeClass("active");$(this).addClass("active");var selector=$(this).attr('data-filter');$("#posts").isotope({filter:selector,animationOptions:{duration:750,easing:'linear',queue:false,}});return false;});});


/*
 * Filtro para os projetos
*/
setTimeout(function(){ 
    $("#posts").isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows',
    });

    $('ul.filter li').click(function () {
        /* mostra o elemento ativo*/
        $("ul.filter li").removeClass("active");
        $(this).addClass("active");

        /* elabora o filtro com base no atributo do data-filter*/
        var selector = $(this).attr('data-filter');
        $("#posts").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });
    
}, 2000);