<?php
/**
	Template name: index-front-page
 */
get_header();
?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
            jQuery(document).ready(function($) {
                $("#contact").submit(function() {
                    var str = $(this).serialize();
                    $('#submitinput').attr('disabled', true).css('filter', 'grayscale(100%)');
                    $.ajax({
                        type: "POST",
                        url: "<?php echo THEME_DIR;?>/contact_form_mail.php",      // здесь указываем путь ко второму файлу
                        data: str,
                        success: function(msg) {
                            $('#submitinput').attr('disabled', false).css('filter', 'none');
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
    </script>

<main>
    <div class="main">
    <div class="first-screen">
        <div class="ui-container first-screen__inner">
            <div class="first-screen__mobile-block">
                <div class="first-screen__mobile-title"><?php // header right text custom
                    the_field('header_text_right','option'); ?>.</div>
                <div class="first-screen__mobile-title"><?php // header left text custom
                    the_field('header_text_left',"option"); ?>.</div>
            </div>
        <div class="first-screen__column">
                <div class="first-screen__item first-screen-item first-screen-item--author"
                     style="background-image: url(
                        <?php //custom home_photo1
                        the_field('home_photo1'); ?> );">
                    <div class="first-screen-item__inner" onclick="location.href=
                            '<?php //custom home_photo1_link
                            the_field('home_photo1_link'); ?>' ">
                        <div class="first-screen-item__cell"></div>
                        <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                            <div class="first-screen-item__subtitle first-screen-item__subtitle--author">
                                <?php //custom home_photo1_name
                                the_field('home_photo1_name') ?>
                            </div>
                        </div>
                        <div class="first-screen-item__cell">
                            <div class="first-screen-item__text">Смотреть »</div>
                        </div>
                    </div>
                </div>
<!-- _________________________________________________________________________________add custom project connect 1 START -->
                    <?php //get project1 id
                    $home_project1_id = (get_field('home_project_1')); ?>

            <div class="x-front-page-slider">
            <?php
                    //custom project slider
                    $images = get_field('projeсt_slider_home', $home_project1_id );

                         foreach( $images as $image ): ?>
                            <div class="first-screen__item first-screen-item first-screen-item--short x-front-page-slider-item"
                            style="background-image: url( <?php echo $image['sizes']['large']; ?> );"
                            onclick="location.href=
                            '<?php //custom projeсt1_link
                            echo get_page_link($home_project1_id); ?> ' ">

<!-- ___________________________________clonen nonchanged code start  -->
                            <div class="first-screen-item__inner">

                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">
                                         <?php // project_type counter (copy page.php 49)
                                         $ptv = get_field('project_type', $home_project1_id);
                                         foreach ($ptv as $type_happ ) {
                                            echo $type_happ . ' ';
                                            } ?>
                                    </div>
                                    <div class="first-screen-item__text">
                                         20<?php the_field('projeсt_year', $home_project1_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                                    <div class="first-screen-item__title">
                                        <?php echo get_the_title($home_project1_id);?>
                                    </div>
                                    <div class="first-screen-item__subtitle">
                                        <?php the_field('project_author', $home_project1_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">Смотреть »</div>
                                </div>
                            </div>
<!-- ___________________________________clonen nonchanged code end  -->
                        </div>
                         <?php endforeach; ?>
            </div>

        </div>
        <div class="first-screen__column">
<!-- _________________________________________________________________________________add custom project connect 2-->
                                <?php //get project2 id
                    $home_project2_id = (get_field('home_project_2')); ?>

            <div class="x-front-page-slider">
            <?php
                    //custom project slider
                    $images = get_field('projeсt_slider_home', $home_project2_id );

                         foreach( $images as $image ): ?>
                            <div class="first-screen__item first-screen-item x-front-page-slider-item"
                            style="background-image: url( <?php echo $image['sizes']['large']; ?> );"
                            onclick="location.href=
                            '<?php //custom projeсt1_link
                            echo get_page_link($home_project2_id); ?> ' ">

<!-- ___________________________________clonen nonchanged code start  -->
                            <div class="first-screen-item__inner">

                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">
                                         <?php // project_type counter (copy page.php 49)
                                         $ptv = get_field('project_type', $home_project2_id);
                                         foreach ($ptv as $type_happ ) {
                                            echo $type_happ . ' ';
                                            } ?>
                                    </div>
                                    <div class="first-screen-item__text">
                                         20<?php the_field('projeсt_year', $home_project2_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                                    <div class="first-screen-item__title">
                                        <?php echo get_the_title($home_project2_id);?>
                                    </div>
                                    <div class="first-screen-item__subtitle">
                                        <?php the_field('project_author', $home_project2_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">Смотреть »</div>
                                </div>
                            </div>
<!-- ___________________________________clonen nonchanged code end  -->
                        </div>
                         <?php endforeach; ?>
 </div>
<!-- _________________________________________________________________________________add custom project connect 3-->
                           <?php //get project3 id
                    $home_project3_id = (get_field('home_project_3')); ?>

            <div class="x-front-page-slider">
            <?php
                    //custom project slider
                    $images = get_field('projeсt_slider_home', $home_project3_id );

                         foreach( $images as $image ): ?>
                            <div class="first-screen__item first-screen-item x-front-page-slider-item"
                            style="background-image: url( <?php echo $image['sizes']['large']; ?> );"
                            onclick="location.href=
                            '<?php //custom projeсt1_link
                            echo get_page_link($home_project3_id); ?> ' ">

<!-- ___________________________________clonen nonchanged code start  -->
                            <div class="first-screen-item__inner">

                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">
                                         <?php // project_type counter (copy page.php 49)
                                         $ptv = get_field('project_type', $home_project3_id);
                                         foreach ($ptv as $type_happ ) {
                                            echo $type_happ . ' ';
                                            } ?>
                                    </div>
                                    <div class="first-screen-item__text">
                                         20<?php the_field('projeсt_year', $home_project3_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                                    <div class="first-screen-item__title">
                                        <?php echo get_the_title($home_project3_id);?>
                                    </div>
                                    <div class="first-screen-item__subtitle">
                                        <?php the_field('project_author', $home_project3_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">Смотреть »</div>
                                </div>
                            </div>
<!-- ___________________________________clonen nonchanged code end  -->
                        </div>
                         <?php endforeach; ?>
                    </div>
        </div>

<!-- _________________________________________________________________________________add custom project connect 4-->
        <div class="first-screen__column">

                      <?php //get project4 id
                    $home_project4_id = (get_field('home_project_4')); ?>

            <div class="x-front-page-slider">
            <?php
                    //custom project slider
                    $images = get_field('projeсt_slider_home', $home_project4_id );

                         foreach( $images as $image ): ?>
                            <div class="first-screen__item first-screen-item first-screen-item--short x-front-page-slider-item"
                            style="background-image: url( <?php echo $image['sizes']['large']; ?> );"
                            onclick="location.href=
                            '<?php //custom projeсt1_link
                            echo get_page_link($home_project4_id); ?> ' ">

<!-- ___________________________________clonen nonchanged code start  -->
                            <div class="first-screen-item__inner">

                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">
                                         <?php // project_type counter (copy page.php 49)
                                         $ptv = get_field('project_type', $home_project4_id);
                                         foreach ($ptv as $type_happ ) {
                                            echo $type_happ . ' ';
                                            } ?>
                                    </div>
                                    <div class="first-screen-item__text">
                                         20<?php the_field('projeсt_year', $home_project4_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                                    <div class="first-screen-item__title">
                                        <?php echo get_the_title($home_project4_id);?>
                                    </div>
                                    <div class="first-screen-item__subtitle">
                                        <?php the_field('project_author', $home_project4_id);?>
                                    </div>
                                </div>
                                <div class="first-screen-item__cell">
                                    <div class="first-screen-item__text">Смотреть »</div>
                                </div>
                            </div>
<!-- ___________________________________clonen nonchanged code end  -->
                        </div>
                         <?php endforeach; ?>
            </div>
<!-- _________________________________________________________________________________add custom project connect END-->
                <div class="first-screen__item first-screen-item first-screen-item--author"
                        <?php //custom home_photo2
                        echo ' style="background-image: url( ' , get_field('home_photo2') , ' );" '; ?>
                        >
                    <div class="first-screen-item__inner" onclick="location.href=
                            '<?php //custom home_photo2_link
                            the_field('home_photo2_link'); ?>' ">
                        <div class="first-screen-item__cell"></div>
                        <div class="first-screen-item__cell first-screen-item__cell--direction-column">
                            <div class="first-screen-item__subtitle first-screen-item__subtitle--author">
                                <?php //custom home_photo2_name
                                the_field('home_photo2_name');?>
                            </div>
                        </div>
                        <div class="first-screen-item__cell">
                            <div class="first-screen-item__text">Смотреть »</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

	<div class="features">
		<div class="ui-container features__inner">
			<div class="features__title">сферы нашей деятельности</div>

			<div class="features__list features-list">
				<div class="features-list__item features-item">
					<div class="features-item__icon features-item__icon--architecture"></div>
					<div class="features-item__title">архитектура</div>
					<div class="features-item__text">проектирование жилых и общественных зданий</div>
				</div>

				<div class="features-list__item features-item">
					<div class="features-item__icon features-item__icon--design"></div>
					<div class="features-item__title">дизайн</div>
					<div class="features-item__text">разработка дизайна жилых и общественных помещений</div>
				</div>

				<div class="features-list__item features-item">
					<div class="features-item__icon features-item__icon--decor"></div>
					<div class="features-item__title">декорирование</div>
					<div class="features-item__text">подбор отделочных материалов, мебели и предметов интерьера</div>
				</div>

				<div class="features-list__item features-item">
					<div class="features-item__icon features-item__icon--landscape"></div>
					<div class="features-item__title">ландшафт</div>
					<div class="features-item__text">организация пространства, малые формы</div>
				</div>
			</div>
			<div class="ui-custom-button ui-custom-button--transparent features__button" data-text="смотреть проекты"
                onclick="location.href=
                '<?php //custom home_photo2_name
                the_field('home_filter_link'); ?>' ">
            </div>
		</div>
	</div>

    <div class="about">
        <div class="ui-container about__inner">
            <div class="about__title">Почему выбирают нас?</div>
            <div class="about__blocks">
                <div class="about__block about-block">
                    <div class="about-block__photo"></div>
                </div>
                <div class="about__block about-block">
                    <div class="about-block__text">
                        <span class="about-block__logo">Happy<span class="about-block__logo-bold">des</span></span> – это профессионалы, дипломированные специалисты в области архитектуры и дизайна интерьеровс опытом работы более 15 лет.
                    </div>

                    <div class="about-block__reason">Максимально индивидуальный подход</div>
                    <div class="about-block__reason">Идеальные планировочные решения </div>
                    <div class="about-block__reason">Знание современных тенденций дизайна</div>
                    <div class="about-block__reason">Качественная 3D визуализация</div>
                    <div class="about-block__reason">Разработка рабочих чертежей</div>
                    <div class="about-block__reason">Авторский надзор</div>
                    <div class="about-block__reason">Реализация проектов “под ключ”</div>
                </div>
            </div>
        </div>
    </div>

	<div class="features">
		<div class="ui-container features__inner">
			<div class="features__list features-list">
				<div class="features-list__item features-item features-item--features">
					<div class="features-item__icon features-item__icon--comfort"></div>
					<div class="features-item__title">комфорт</div>
					<div class="features-item__text features-item__text--features">грамотная организация планировки вашего пространства</div>
				</div>

				<div class="features-list__item features-item features-item--features">
					<div class="features-item__icon  features-item__icon--relevance"></div>
					<div class="features-item__title">актуальность</div>
					<div class="features-item__text features-item__text--features">гармония между <br>функией и эстетикой дизайна</div>
				</div>

				<div class="features-list__item features-item features-item--features">
					<div class="features-item__icon features-item__icon--rent"></div>
					<div class="features-item__title">рентабельность</div>
					<div class="features-item__text features-item__text--features">продажа или сдача объекта станет более выгодной и легкой</div>
				</div>

				<div class="features-list__item features-item features-item--features">
					<div class="features-item__icon features-item__icon--saving"></div>
					<div class="features-item__title">воплощение</div>
					<div class="features-item__text features-item__text--features">реализация проекта профессиональной строительной бригадой</div>
				</div>
			</div>
		</div>
	</div>
	<div class="instagram-block">
	    <div class="ui-container instagram-block__inner">
	        <div class="instagram-block__title">Мы в инстаграме</div>
	        <ul class="instagram-block__list instagram-list x-instagram-list">
	            <li class="instagram-list__item" style="background-image: url()"></li>
	        </ul>
	    </div>
	</div>

	<div class="contact-form-block">

		<div class="ui-container contact-form-block__inner">
			<div class="contact-form-block__tittle">
				Хотите заказать проект или сотрудничать с happydes?
			</div>

			<div class="contact-form-block__subtittle">
				Оставьте заявку на обратный звонок
			</div>

			 <form id="contact" class="contact-form-block__form contact-form" action="<?php echo THEME_DIR;?>/contact_form_mail.php" method="post">


                <div class="contact-form__name-wrapper">
                    <input name="name" class="input ui-input contact-form__name" type="text" placeholder="Ваше имя" required>
                </div>

                <div class="contact-form__number-wrapper">
                    <input name="tel" class="input ui-input contact-form__number" type="tel" placeholder="+7 (___) ___-__-__" required>
                </div>

                <button id="submitinput" type="submit" class="submit ui-custom-button ui-custom-button--gradient contact-form__button" data-text="Оставить заявку"></button>

            </form>
              <div id="note" class="note" >
            </div>
		</div>
	</div>

</div>
</main>


<?php
get_footer();
