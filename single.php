<div class="page-alternate2">
	<div class="container">	
		<div class="row">

			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="single-photoarticle" class="span12">
							<?php
							$category = get_the_category(); 
							$newCat = $category[0]->cat_name;
							?>
							<?php if($newCat === 'kontaktPL' || $newCat === 'kontaktEn' || $newCat === 'kontaktZh'){?>
								<?php the_content();?>
							<?php }else{?>
								<?php $thumb = get_post_custom_values('post-item');?>
								<?php $thumb2 = get_post_custom_values('post-url');?>
								<?php $i = 0; while($i < sizeof($thumb)){?>
								<div class="picturesC">
									<a class="post-url" href="<?php  echo $thumb2[$i];?>" target="_blank">
										<img class="post-item" src="<?php  echo $thumb[$i];?>">
									</a>
								</div>
								<?php $i++;?>
								<?php }?>
							<?php }?>
					</div>
				<?php endwhile;?>
	            <?php else : ?>
	            	<p>Brak postów do wyświetlenia</p>
	            <?php endif;?>
	        
		</div>
	</div>
</div>