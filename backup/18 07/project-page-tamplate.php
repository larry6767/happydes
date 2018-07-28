<?php
/**
	Template name: project-page-tamplate
 */
get_header();
?>

<div id="primary" class="content-area">
 	<main id="main" class="site-main">
    	            <div class="main">
    <div class="project-slider">
        <?php
        //custom project slider

                $images = get_field('projeсt_slider');
        if( $images ): ?>
        <div class="ui-container project-slider__inner x-slider">
                        <?php foreach( $images as $image ): ?>
                            <div>
                                <img src="<?php echo $image['sizes']['medium']; ?>"
                                style="display: block; margin-left: auto; margin-right: auto"
                                alt="<?php echo $image['alt']; ?>" />
                            </div>
                        <?php endforeach; ?>
        </div>
        <?php endif;?>
    </div>

    <div class="project-info x-project-info">
        <div class="ui-container project-info__inner">
            <div class="project-info__common-info project-common-info">
                <div class="project-common-info__headline">
                    <?php //custom type project
                    $ptv = get_field("project_type");
                    echo $ptv[0] . ' ' . $ptv[1] . ' ' . $ptv[2] . ' ' . $ptv[3]; ?>
                </div>
                <div class="project-common-info__project-name">
                    <?php //custom title-name of project
                    echo esc_html( get_the_title() ); ?>
                </div>
                <div class="project-common-info__title">Автор</div>
                    <div class="project-common-info__text">
                    <?php //custom author project
                    echo get_field("project_author"); ?>
                </div>
                <div class="project-common-info__title">Площадь</div>
                <div class="project-common-info__text">
                    <?php //custom area project
                    echo get_field("project_area"); ?> М.КВ.
                </div>
                <div class="project-common-info__title">Год</div>
                <div class="project-common-info__text">20
                    <?php //custom year project
                    echo get_field("projeсt_year"); ?>
                </div>
            </div>
            <div class="project-info__description project-description">
                <div class="project-description__headline">Описание</div>
                <div class="project-description__text project-description__text--fade x-text">
                    <?php //custom description text project
                    echo get_field("project_text"); ?>
                </div>
                <div class="ui-custom-button ui-custom-button--gradient project-description__button project-description__button--more x-more-less" data-text="Читать дальше"></div>
            </div>
        </div>
    </div>

</div>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
