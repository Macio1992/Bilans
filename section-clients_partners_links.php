<div id="newPictures">
		
            <?php $lang = pll_current_language();?>
            
            <?php if ($lang === 'pl'){?>
                <div class="newPicture">
                    <?php query_posts('category_name=klienciPL');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

            	<div class="newPicture">
                    <?php query_posts('category_name=partnerzyPL');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

            	<div class="newPicture">
                    <?php query_posts('category_name=linkiPL');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

               <div class="newPicture">
                    <?php query_posts('category_name=kontaktPL');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                        <?php $thumb = get_post_custom_values('post-item');?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <img class="post-item" src="<?php  echo $thumb[0];?>">
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>
			<?php }?>

            <?php if ($lang === 'en'){?>
                <div class="newPicture">
                    <?php query_posts('category_name=klienciEn');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=partnerzyEn');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=linkiEn');?>
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=kontaktEn');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                        <?php $thumb = get_post_custom_values('post-item');?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <img class="post-item" src="<?php  echo $thumb[0];?>">
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>
            <?php }?>
             <?php if ($lang === 'zh'){?>
                <div class="newPicture">
                    <?php query_posts('category_name=klienciZh');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=partnerzyZh');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=linkiZh');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <?php the_content();?>
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>

                <div class="newPicture">
                    <?php query_posts('category_name=kontaktZh');?>           
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $newId = get_the_ID(); ?>
                        <?php $thumb = get_post_custom_values('post-item');?>
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                        
                            <div class="view effect">
                                <img class="post-item" src="<?php  echo $thumb[0];?>">
                                <div class="mask"></div>
                                <div class="content">
                                    <div class="info">
                                    <h2>
                                        <a class="subpageA post-link2" href="<?php the_permalink(); ?>" onclick="location.href='#single-post-container2'">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    
                </div>
                
            <?php }?>
        
            <div class="container">
                <div class="span12">
                    <div id="single-post-container2"></div>
            </div>
            </div>

            <script>
                       $(document).ready(function(){
                     
                            $.ajaxSetup({cache:false});
                            $(".post-link2").click(function(){
                                var post_link = $(this).attr("href");
                     
                                $("#single-post-container2").load(post_link);
                            return false;
                            });
                     
                        });
                    </script>
</div>