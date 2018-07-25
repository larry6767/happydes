jQuery(document).ready(function($) {
        $("#contact").submit(function() {
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php bloginfo('template_url'); ?>/mail.php",      // здесь указываем путь ко второму файлу
                data: str,
                success: function(msg) {
                    if(msg == 'OK') {
                        result = '<div class="ok">Сообщение отправлено</div>';   // текст, если сообщение отправлено
                        $("#fields").show();
                    }
                    else {result = msg;}
                    $('#note').html(result);
                     $('.input', '#contact')       // очищаем поля после того, как сообщение отправилось
     .not(':button, :submit, :reset, :hidden')
     .val('')            
                }
            });
            return false;
        });
    });
