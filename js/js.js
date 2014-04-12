function showPage(url)
{
    var pageContent = $('#mainContainer').find('#page-' + url);        
    if(pageContent.length > 0) {
//        console.log('page show ' + url);
        $('.page').hide();
        pageContent.show();
    }
    else {
//        console.log('page does not exist ' + url);
        $.ajax({
            url: 'getPageContent/' + url
        }).done(function(pageContent) {
            $('#mainContainer').append(pageContent);
            showPage(url);
        });
    }
}

function goToPage(url)
{
    showPage(url);
    
    if(window.history.pushState) {	
        document.title = url;
        window.history.pushState({title : url}, url, url);
    }
    else {
        window.location.href = url;
    }
}

$(document).ready(function() {
    
    $(window).on('popstate', function(event) {
        var splittedUrl = document.location.toString().split('/');
        console.log('history moove to ' + splittedUrl);
        
        if(splittedUrl[(splittedUrl.length - 1)] !== '')
            showPage(splittedUrl[(splittedUrl.length - 1)]);
    });
    
    $('.ajaxMenu').click(function() {
        var splittedUrl = document.location.toString().split('/');
        if(splittedUrl[(splittedUrl.length - 1)] !== $(this).attr('href'))
            goToPage($(this).attr('href'));
        
        return false;
    });
    
    
    
    
    
});