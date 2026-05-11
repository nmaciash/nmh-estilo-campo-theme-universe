<?php
/*
*  Template Name: Company Card
*/ 


get_header();
?>


<?php if ( have_posts() ) : the_post(); ?>



<?php
    $custom = get_post_custom(); // Cargo en una variable todas las custom post values. Luego con la key, las puedo llamar
?>


        </section>


        <section class="individual_contact__hebe__body">

            <div class="nm-container">

                    <div class="row content-contact company__card__body">

                            <div class="col-lg-6">                                       
                                        
                                        <div class="img-container card__img logo__horizontal__card">
                                            <?php the_post_thumbnail(); ?>
                                        </div>                                        

                            </div>






                            <div class="col-lg-6">

                                    <div class="company">
                                        <p class="company__name"><?php echo $custom['Empresa'][0]; ?></p>
                                    </div>                                    

                                    <div class="subtitle plus__padding">
                                        <h3><?php echo $custom['NombreApellidosContacto'][0]; ?></h3>
                                    </div>
                                    
                                    <div class="div__divider">
                                        <hr id="divider01">
                                    </div>

                                    <div class="row contact-data">
                                        <div class="col-12">
                                            <p class="text-center"><?php echo $custom['Cargo'][0]; ?></p>
                                        </div>
                                    </div>

                                    <div class="row contact-data">
                                        <div class="col-12">
                                            <p class="text-center card__quote"><?php echo $custom['Quote'][0]; ?></p>
                                        </div>
                                    </div>

                                    <div class="row contact-data">
                                        <div class="col-12 text-center">
                                            <a href="mailto:<?php echo $custom['Mail'][0]; ?>" target="_blank" class="btn btn-primary btn-lg">Email</a>
                                        </div>
                                    </div>


                                    <!-- Parte Redes Sociales -->
                                    <div class="col-md-12 buttons">
                                        <a href="<?php echo $custom['Facebook'][0]; ?>" target ="_blank"><img src="https://hebeexperience.com/wp-content/uploads/2022/09/face.white_.png"></a>
                                        <a href="<?php echo $custom['Instagram'][0]; ?>" target ="_blank"><img src="https://hebeexperience.com/wp-content/uploads/2022/09/insta-white.png"></a>       
                                        <a href="https://wa.me/<?php echo $custom['Phone'][0]; ?>" target ="_blank"><img src="https://hebeexperience.com/wp-content/uploads/2022/11/whatsapp-white.png"></a>                                                       
                                    </div>
                
                
                                
            </div>















                                            





                                </div>

                    </div>

            </div>


        </section>


<?php endif; ?>


