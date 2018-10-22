var seeComment;
var comments;

export default function home() {
    comments()
    nextArticle()
}

function comments (){
    seeComment = $('.l-article-comments-show')
    comments = $('.l-article-comments')
    seeComment.on('click', function(){
        if (seeComment.hasClass('is-opened'))
            commentsOpened()
        else 
            commentsClosed()
    })
}

function commentsClosed(){
    seeComment.addClass('is-opened')
    comments.removeClass('is-closed')
    seeComment.text('Cacher commentaires')
}

function commentsOpened(){
    seeComment.removeClass('is-opened')
    comments.addClass('is-closed')
    seeComment.text('Voir commentaires')
}

function nextArticle(){
    
    // console.log(showNextArticle.offset())
    // console.log($(window).offset())
    $(window).on('scroll', function (){
        let showNextArticle = $(".show-next-article");
        if (showNextArticle == undefined)
            return
        let windowPosition = $(window).scrollTop() + $(window).height()
        let nextArticlePosition = showNextArticle.offset().top;
        if (nextArticlePosition <= windowPosition)
            fetchNextArticle(showNextArticle.prop("href"))
    })
}

function fetchNextArticle(nextArticleUrl){
    $.get({
        url: nextArticleUrl,
        beforeSend: addLoader,
        complete: removeLoader,
        error: noNextArticle,
        success: fetchNextArticleSuccess
    })
}

function addLoader(){
    console.log("loading")
    $(".show-next-article").detach()
}

function removeLoader(){
    console.log("loading done")
}

function noNextArticle(error){
    console.log(error)
}

function fetchNextArticleSuccess(data){
    $("body").append(data)
}