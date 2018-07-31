<?php
/**
	Template name: contacts-page
 */
get_header();
?>

<main>
    	<div class="main">
			<div class="contact-list">
				<div class="ui-container contact-list__inner">
					<div class="contact-list__item contact-item">
						<div class="contact-item__icon contact-item__icon--photo1"
							<?php 
							//custom contacts_photo1
			                echo ' style="background-image: url( ' , get_field('contacts_photo1') , ' );" '; ?>
			                >
						</div>
						<div class="contact-item__title">
							<?php //custom contacts_name_1
		                	the_field('contacts_name_1'); ?>
	                	</div>
						<div class="contact-item__text">
							<?php //custom contacts_profession1
		                	the_field('contacts_profession1'); ?>
	                	</div>
						<div class="contact-item__social-icons">
							<?php 
							// hide of empty custom insta and facebook icon, with links for 1 profile
							if (get_field('contacts_instagram1')) 
							{
								echo '<a href="' . get_field('contacts_instagram1') . '" class="contact-item__social-icon contact-item__social-icon--instagram"></a>'; 
							}

							if (get_field('contacts_facebook1')) 
							{
								echo '<a href="' . get_field('contacts_facebook1') . '" class="contact-item__social-icon contact-item__social-icon--facebook"></a>'; 
							}
			                    ?>
						</div>
						<a 
							<?php // custom contacts_tel1 link + echo
							echo 'href="tel:+7' , get_field('contacts_tel1') , '"'; ?> 
							class="ui-link ui-link--reverse contact-item__number">+7
							<?php the_field("contacts_tel1"); ?>
						</a>
						<a
							<?php // custom contacts_email1 link + echo
							echo 'href="mailto:' , get_field('contacts_email1') , '"' ; ?> 
							class="ui-link ui-link--reverse contact-item__email"> 
							<?php the_field('contacts_email1'); ?>
						</a>
					</div>
			
					<div class="contact-list__item contact-item">
						<div class="contact-item__icon contact-item__icon--photo2"
							<?php //custom contacts_photo2
			                echo ' style="background-image: url( ' , get_field('contacts_photo2') , ' );" '; ?>
			                >
		                </div>
						<div class="contact-item__title">
							<?php //custom contacts_name_2
		                	the_field('contacts_name_2'); ?>		
		                </div>
						<div class="contact-item__text">
							<?php //custom contacts_profession2
		                	the_field('contacts_profession2'); ?>
	                	</div>
						<div class="contact-item__social-icons">
							<?php 
							// hide of empty custom insta and facebook icon, with links for 2 profile
							if (get_field('contacts_instagram2')) 
							{
								echo '<a href="' . get_field('contacts_instagram2') . '" class="contact-item__social-icon contact-item__social-icon--instagram"></a>'; 
							}

							if (get_field('contacts_facebook2')) 
							{
								echo '<a href="' . get_field('contacts_facebook2') . '" class="contact-item__social-icon contact-item__social-icon--facebook"></a>'; 
							}
			                    ?>
						</div>
						<a
							<?php // custom contacts_tel2 link + echo
							echo 'href="tel:+7' , get_field('contacts_tel2') , '"'; ?> 
							class="ui-link ui-link--reverse contact-item__number">+7
							<?php the_field("contacts_tel2"); ?>
						</a>
						<a
							<?php // custom contacts_email1 link + echo
							echo 'href="mailto:' , get_field('contacts_email2') , '"' ; ?> 
							class="ui-link ui-link--reverse contact-item__email"> 
							<?php the_field('contacts_email2'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
