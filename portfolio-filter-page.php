<?php
/**
	Template name: portfolio-filter-page
 */
get_header();

function happ_font_reduction($t_string,$size,$font)
		{

		    $words  = explode(' ', ($t_string));
		    $longestWordLength = 0;
		    $longestWord = '';
		        foreach ($words as $word){  
		            if ($longestWordLength < mb_strlen($word)) {
		                $longestWordLength = mb_strlen($word);
		                $longestWord = $word;
		                }
		        }
		    $tempest = mb_strlen($longestWord);

		    if ($tempest >= $size ){
		    return ('style="' . 'font-size: ' . "$font" . 'px;" ');
		    }
		}

	$long = get_field('name_filter_long');
	$font = get_field('name_filter_font');
	?>

<main>
<div class="main">
	<div class="catalog x-catalog">
	    <div class="ui-container catalog__inner">
	        <div class="catalog__filter catalog-filter">
	            <div class="catalog-filter__title">Наши проекты</div>
	            <div class="ui-custom-button ui-custom-button--transparent ui-custom-button--transparent-active catalog-filter__button x-filter-button-all" data-text="все"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button x-filter-button" data-text="архитектура"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button x-filter-button" data-text="дизайн"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button x-filter-button" data-text="декор"></div>
	            <div class="ui-custom-button ui-custom-button--transparent catalog-filter__button x-filter-button" data-text="ландшафт"></div>
	        </div>
	       <ul class="catalog__list catalog-list x-catalog-list">
<!-- ___________________________________________________________page output cycle,
	according to the principle of output from index blocks 1-4 -->

				 <?php // project_type counter (copy page.php 49)
				  // 54 (thumbnail, medium, large, full or custom size)
                 $id_filter = get_field('filter_income');
                 foreach ($id_filter as $id ) {
                 	$image = get_field('projeсt_mini' , $id );
                    echo '
                    	<div class="catalog-list__item catalog-item x-catalog-item" style="background-image: url('.
	                        //custom projeсt1_mini_thumbnail
		                	$image['sizes']['medium'] . ');" onclick="location.href= \' ' .
	                        //custom projeсt1_link
	                            get_page_link($id) . ' \' "
                                data-type="';

		                                // project_type counter  for js filter
		                                $ptv = get_field('project_type', $id);
		                                 foreach ($ptv as $type_happ ) {
		                                echo $type_happ . ' ';
		                                }

                                echo '"> ' .
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
					                        <div ' . (happ_font_reduction( (get_the_title($id)),$long,$font)) . 'class="catalog-item__title">' .
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
	            		</div>' ; }
	            		?>
<!-- ___________________________________________________________END
 -->

	       </ul>
	    </div>
	</div>

</div>
</main>
<?php
get_footer();
