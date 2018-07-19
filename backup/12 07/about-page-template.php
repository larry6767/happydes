<?php
/**
	Template name: about-page
 */
get_header();
?>

<div id="primary" class="content-area">
 	<main id="main" class="site-main">
 		 <div class="main">
	<div class="resume-first-screen x-resume-first-screen">
		<div class="ui-container resume-first-screen__inner">
	
			<div class="resume-first-screen__block contact-item x-contact-item">
				<div class="contact-item__icon contact-item__icon--photo1" 
					<?php 
					//custom about photo
	                echo 'style="background-image: url(' , get_field("about_photo") , ')"'; 
					//че тут за бред с закрытием
	                ?> 
	                ?>
				</div>

			 	<div class="contact-item__title">
					<?php // custom print title(name)
	                echo esc_html( get_the_title() ); ?> 
            	</div>

				<div class="contact-item__text">
					<?php //custom print about profession
	                echo get_field("about_profession"); ?>	
                </div>

				<div class="contact-item__social-icons">
					<a class="contact-item__social-icon contact-item__social-icon--instagram"></a>
		            <a class="contact-item__social-icon contact-item__social-icon--facebook"></a>
				</div>

				<a 
					<?php // custom tel number link + echo
					echo 'href="tel:+7' , get_field("about_tel") , '"'; ?> class="ui-link ui-link--reverse contact-item__number">+7<?php 
	                echo get_field("about_tel"); ?>
                </a>

				<a 
					<?php // custom email link + echo
					echo 'href="mailto:' , get_field("about_email") , '"' ; ?> class="ui-link ui-link--reverse contact-item__email"> 
					<?php echo get_field("about_email"); ?>
						
				</a>
			</div>
			
			<div class="resume-first-screen__block">
	            <div class="resume-text-block resume-text-block--fade x-text">
	                <div class="resume-text-block__text1">
	                <?php // custom text 1 block
                	echo get_field("about_text1"); ?>
	                </div>

	                <div class="resume-text-block__text2">
	                <?php // custom text 1 block
                	echo get_field("about_text2"); ?>
	                </div>
	
	                <div class="resume-text-block__text3 text3-block">
						<?php 
					
							$rows = get_field('about_text3');
							if($rows)
							{
								foreach($rows as $row)
								{
									echo '<div class="text3-block__item">' . '<div class="text3-block__year">' . $row['about_text3_year'] .  ' г.</div>' . '<div class="text3-block__text">' . $row['about_text3_text'] . '</div> </div>';
								}
							} ?>


	                   <!--  <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2006 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Посещение ведущей фабрики керамическом плитки REX, соприкосновение с искусством и культурой Италии во Флоренции, Галерея Уффици.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2007 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Посещение в Москве ГМИИ им.А.С.Пушкина выставки выдающегося архитектора и дизайнера Нормана Фостера.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2008 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Посещение ведущей фабрики керамическом плитки FAP, проживание и знакомство с культурой района Кьянти, фамильных усадеб в Тоскании, в Болоньи посещение дома-музея, где родился Леонардо да Винчи-великий итальянский живописец, скульптор и архитектор, яркий представитель эпохи Возрождения.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2012 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Сертификат участника курса лекций в рамках Краснодарской Недели Дизайна 2012. Лекторы: Карим Рашид, Фабио Новембре, Матали Крассе, Хосе Асебильо, Джузеппе Кангалози.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2016 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Сертификаты участника ELLE DECORATION DESIGN DAYS и факультатива WESTLAB. Прошла интенсивные курсы повышения квалификации для декораторов и дизайнеров «Теория и практика современного интерьера» и «Upgrade для профессионалов». Лекторы: Алексей Дорожкин, Анна Муравина, Майк Шилов, Диана Балашова, Виктор Дембовский.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2017 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Сертификат участника факультатива WESTLAB «Мировые выставки дизайна как лаборатория трендов. Кёлн-2017» Лектор: Виктор Бембовский.
	                        </div>
	                    </div>
	                    <div class="text3-block__item">
	                        <div class="text3-block__year">
	                            2017 г.
	                        </div>
	                        <div class="text3-block__text">
	                            Участие в Пятой Интерьерной премии журнала Home&Family в номинациях Квартиры и Частные дома.
	                        </div>
	                    </div> -->
	                </div>
	            </div>
	            <div class="ui-button ui-button--gradient resume-text-block__button resume-text-block__button--more x-more-less" data-text="Читать дальше"></div>
			</div>
		</div>
	</div>
	
    <div class="resume-certificates">
        <div class="ui-container resume-certificates__inner">
            <div class="resume-certificates__title">Дипломы и сертификаты</div>


			<?php 

				$images = get_field('about_diploms');

				if( $images ): ?>
	 			<ul class="resume-certificates__list certificates-list x-resume-slider">
				        <?php foreach( $images as $image ): ?>
				            <li class="certificates-list__item">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <!-- <p><?php echo $image['caption']; ?></p> -->
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>


<!-- 
            <ul class="resume-certificates__list certificates-list x-resume-slider">
                <li class="certificates-list__item">1</li>
                <li class="certificates-list__item">2</li>
                <li class="certificates-list__item">3</li>
                <li class="certificates-list__item">4</li>
                <li class="certificates-list__item">5</li>
                <li class="certificates-list__item">6</li>
                <li class="certificates-list__item">7</li>
            </ul> -->
        </div>
    </div>
    
    <div class="resume-publications">
        <div class="ui-container resume-publications__inner">
            <div class="resume-publications__title">Публикации</div>
            <ul class="resume-publications__list publications-list x-resume-slider">
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
                <li class="publications-list__item"></li>
            </ul>
        </div>
    </div>
    
</div>
 
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
