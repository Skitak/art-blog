export default function navigation (){
    $(".l-nav .btn-menu").on('click', function(){
        let menu = $('.l-nav')
        if (menu.hasClass('is-closed'))
            menu.removeClass('is-closed')
        else
            menu.addClass('is-closed')
        
    })
}