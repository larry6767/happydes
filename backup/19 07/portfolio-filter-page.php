<?php
/**
	Template name: portfolio-filter-page
 */
get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
<div class="main">
	<div class="catalog">
	    <div class="ui-container catalog__inner">
	        <div class="catalog__filter catalog-filter">
	            <div class="catalog-filter__title">Наши проекты</div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button" data-text="все"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button" data-text="архитектура"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button" data-text="дизайн"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button" data-text="декор"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button" data-text="ландшафт"></div>
	        </div>
	       <ul class="catalog__list catalog-list">
<!-- ___________________________________________________________page output cycle, according to the principle of output from index blocks 1-4 -->

				 <?php // project_type counter (copy page.php 49)
                 $id_filter = get_field('filter_income');
                 foreach ($id_filter as $id ) {
                    echo '
                    	<div class="catalog-list__item catalog-item" style="background-image: url( ' .
	                        //custom projeсt1_mini_thumbnail
		                        get_field('projeсt_mini' , $id) . ');" onclick="location.href= \' ' .
	                        //custom projeсt1_link
	                            get_page_link($id) . ' \' "> ' .
		                	'<div class="catalog-item__inner">
	                 				<div class="catalog-item__cell">
			                     			<div class="catalog-item__text"> ';

											        // project_type counter (copy page.php 49)
											        $ptv = get_field('project_type', $id);
								                     foreach ($ptv as $type_happ ) {
								                    echo $type_happ . ' ';
								                    }

		            echo        		   '</div>

				                    		<div class="catalog-item__text">20' .
		                        				(get_field('projeсt_year', $id)) .
			                   			   '</div>
			                    	</div>

			                    	<div class="catalog-item__cell catalog-item__cell--direction-column">
					                        <div class="catalog-item__title">' .
					                        	(get_the_title($id)) .
					                        '</div>
					                        <div class="catalog-item__subtitle">' .
					                        	(get_field('project_author', $id)) .
					                        '</div>
			                    	</div>

			                    	<div class="catalog-item__cell">
				                        <div class="catalog-item__text">Смотреть »
				                        </div>
		                    		</div>
		                	</div>
	            		</div>' ; } ?>



	       </ul>
	    </div>
	</div>

</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
