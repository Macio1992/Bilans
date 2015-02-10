<div id="newPictures">
			<?php 
			$i = 1;
			$atr = array('parent' => 0, 'sort_order' => 'asc', 'sort_column' => 'menu_order');
			$pages = get_pages($atr); 
			foreach ($pages as $page) {?>
			<?php $newId = $page->ID;?>
				<div class="newPicture">
					<?php $title = $page->post_title;?>
					<?php $content = $page->post_content;?>
					<h2><?php echo $title;?></h2>
					<div class="view effect">
						<?php echo $content;?>
						<div class="mask"></div>
						<div class="content">
							<?php $content = $page->post_content;?>
							<div class="info">
								<?php
					                $mypages = get_pages('child_of='.$newId.'&sort_column=menu_order&sort_order=asc&parent='.$newId);
					                foreach( $mypages as $mypage ) {   
					                	$subpageId = $mypage->ID;
					                    $content = $mypage->post_content;
					                    
					                $content = apply_filters( 'the_content', $content );
					            ?>
					            <a class="subpageA post-link2" href="<?php echo get_page_link($subpageId); ?>" onclick="location.href='#single-post-container'">
					            	<?php echo $mypage->post_title; ?>
					            </a>
					            <?php } ?>
							</div>
						</div>
					</div>
				</div>
				<?php $i++;?>
			<?php } ?>
					
					<div class="container">
						<div class="span12">
                        <div id="single-post-container"></div>
                        </div>
                    </div>
                    

                    <script>
                       $(document).ready(function(){
                     
                            $.ajaxSetup({cache:false});
                            $(".post-link").click(function(){
                                var post_link = $(this).attr("href");
                     
                                $("#single-post-container2").load(post_link);
                            return false;
                            });
                     
                        });
                    </script>
	
</div>