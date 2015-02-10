<!-- Contact Section -->
<div id="contact" class="page">
    <div class="container">
        <!-- Title Page -->
        <div class="row">
            <?php $lang = pll_current_language();?>
            <?php if ($lang === 'pl'){?>
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Skontaktuj się z Nami</h2>
                    <h3 class="title-description">Skorzystaj z formularza kontaktowego, a doradca skontaktuje się w celu przedstawienia oferty.</h3>
                </div>
            </div>
            <?php }?>
            <?php if ($lang === 'en'){?>
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Contact us</h2>
                    <h3 class="title-description">
                        Use this contact form and our adviser will contact you to present an offer.
                    </h3>
                </div>
            </div>
            <?php }?>
            <?php if ($lang === 'zh'){?>
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">请联系我们，通过我们</h2>
                    <h3 class="title-description">
                        使用联系表格，以及顾问将在为目前的报价与您联系。
                    </h3>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- End Title Page -->
        
        <!-- Contact Form -->
        <div class="row">
        	<?php if ($lang === 'pl'){?>
            <div class="span5">
                <form id="contact-form" class="contact-form" action="" method="post">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="Tytuł" value="" name="dane" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="Adres e-mail" value="" name="mail" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="Twoja wiadomość" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p class="contact-submit">
                        <input type="submit" class="submit" name="submit" value="Wyślij"/>
                    </p>
                    <p class="contact-submit">
                        <input type="button" class="submit2" name="clear" value="Czyść"/>
                    </p>
                    <script type="text/javascript">
                    $('input.submit2').click(
                        function(){
                            $('#contact-form p input:text, #contact-form p textarea').val('');
                        });
                    </script>
                </form>
                <?php include "contact-form.php";?>
            </div>
            
            <div class="span3">
                <?php query_posts('category_name=kontaktPL');?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="contact-details">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; ?>

                </div>
            </div>
            <div class="span4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2446.5917871707325!2d21.0270729!3d52.17811499999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471932c5e3acb967%3A0xfbac1b2f0d23a2a2!2sRolna+195%2C+Warszawa!5e0!3m2!1spl!2spl!4v1418134011351" width="500px" height="400px" frameborder="0" style="border:0"></iframe>
            </div>
            <?php }?>
            <?php if ($lang === 'en'){?>
            <div class="span5">
                <form id="contact-form" class="contact-form" action="" method="post">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="Title" value="" name="dane" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="E-mail" value="" name="mail" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="Your message" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p style = "float: left;" class="contact-submit">
                        <input type="submit" class="submit" name="submit" value="Send"/>
                        
                    </p>
                    <p style = "float: right;"class="contact-submit">
                        <input type="button" class="submit" name="clear" value="Clear"/>
                    </p>
                    <script type="text/javascript">
                    $('input.submit').click(
                        function(){
                            $('#contact-form p input:text, #contact-form p textarea').val('');
                        });
                    </script>
                </form>
                <?php include "contact-form.php";?>
            </div>
            
            <div class="span3">
                <?php query_posts('category_name=kontaktEn');?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="contact-details">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; ?>

                </div>
            </div>
             <div class="span4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2446.5917871707325!2d21.0270729!3d52.17811499999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471932c5e3acb967%3A0xfbac1b2f0d23a2a2!2sRolna+195%2C+Warszawa!5e0!3m2!1spl!2spl!4v1418134011351" width="500px" height="400px" frameborder="0" style="border:0"></iframe>
            </div>
            <?php }?>
            <?php if ($lang === 'zh'){?>
            <div class="span5">
                <form id="contact-form" class="contact-form" action="" method="post">
                    <p class="contact-name">
                        <input id="contact_name" type="text" placeholder="标题" value="" name="dane" />
                    </p>
                    <p class="contact-email">
                        <input id="contact_email" type="text" placeholder="E-mail" value="" name="mail" />
                    </p>
                    <p class="contact-message">
                        <textarea id="contact_message" placeholder="内容" name="message" rows="15" cols="40"></textarea>
                    </p>
                    <p style = "float: left;" class="contact-submit">
                        <input type="submit" class="submit" name="submit" value="提交"/>
                        
                    </p>
                    <p style = "float: right;"class="contact-submit">
                        <input type="button" class="submit" name="clear" value="清空"/>
                    </p>
                    <script type="text/javascript">
                    $('input.submit').click(
                        function(){
                            $('#contact-form p input:text, #contact-form p textarea').val('');
                        });
                    </script>
                </form>
                <?php include "contact-form.php";?>
            </div>
            
            <div class="span3">
                <?php query_posts('category_name=kontaktEn');?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="contact-details">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                </div>
            </div>
             <div class="span4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2446.5917871707325!2d21.0270729!3d52.17811499999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471932c5e3acb967%3A0xfbac1b2f0d23a2a2!2sRolna+195%2C+Warszawa!5e0!3m2!1spl!2spl!4v1418134011351" width="500px" height="400px" frameborder="0" style="border:0"></iframe>
            </div>
            <?php }?>
        </div>
        <!-- End Contact Form -->
    </div>
</div>
<!-- End Contact Section -->