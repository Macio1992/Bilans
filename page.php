    <?php $postid = get_the_ID(); ?>
    <div style="padding: 50px 0;" id="single-post post-<?php the_ID(); ?>">

    <div style="padding-bottom: 10px;" class="accordion" id="accordionArea">

            <?php if(have_posts()) : while(have_posts()) : the_post()?>
                <h2><?php the_title();?></h2>
                <p>
                    <?php the_content();?>
                </p>
            <?php endwhile?>
            <?php endif?>

            <?php $i=0; ?>
            <?php
                $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
                foreach( $mypages as $page ) {      
                    $content = $page->post_content;
                    if ( ! $content )
                        continue;
                $content = apply_filters( 'the_content', $content );
            ?>
            <?php $i++; ?>
                <div class="accordion-group">
                    <div class="accordion-heading accordionize">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#Area<?php echo $i; ?>">
                            <?php echo $page->post_title; ?>
                            <span class="font-icon-arrow-simple-down"></span>
                        </a>
                    </div>
                    <div id="Area<?php echo $i; ?>" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="entry"><?php echo $content; ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>