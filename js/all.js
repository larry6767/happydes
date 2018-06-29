$(document).ready(function () {
    // for burger-menu
    $('.x-burger-menu').on('click', function() {
        $(this).toggleClass('header-bottom__burger-menu--active');
        $('.x-menu', $(this)).toggleClass('header-bottom__menu--active');
    });

    // for instagram
    var token = '281996503.6885368.8a3f2b0d96be4e82a6807bf3eb5aaccd', // я уже давал ссылку чуть выше
        userId = 281996503, // ID пользователя, можно выкопать в исходном HTML, можно использовать спец. сервисы либо просто смотрите следующий пример :)
        count = 4; // ну это понятно - сколько фоток хотим вывести

    $.ajax({
        url: 'https://api.instagram.com/v1/users/' + userId + '/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: {access_token: token, count: count}, // передаем параметры, которые мы указывали выше
        success: function(result){
            for( x in result.data ){
                $('.x-instagram-list').append('<li class="instagram-list__item x-instagram-item" style="background-image: url('+result.data[x].images.low_resolution.url+')" data-url="'+result.data[x].link+'"></li>'); // result.data[x].images.low_resolution.url - это URL картинки среднего разрешения, 306х306
                // result.data[x].images.thumbnail.url - URL картинки 150х150
                // result.data[x].images.standard_resolution.url - URL картинки 612х612
                // result.data[x].link - URL страницы данного поста в Инстаграм
            }

            $('.x-instagram-item').on('click', function() {
                window.open($(this).data('url'));
                return false;
            });
        },
        error: function(result){
            console.log(result); // пишем в консоль об ошибках
        }
    });
});
