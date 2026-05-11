<?php
/*
*  Template Name: Página Contacto
*/ 


get_header();
?>


<?php if ( have_posts() ) : the_post(); ?>




        <section class="contact__estilocampo__hero">



            <div class="nm-container w-img">




                            <div class="row hide">
                                <div class="col-md-12">
                                    <h1>Contáctanos</h1>
                                </div>
                            </div>





            </div>




        </section>


        <section class="contact__estilocampo__body">

            <div class="nm-container">

                    <div class="row content-contact">

                            <div class="col-lg-6">

                                        <div class="subtitle">
                                            <h3>DATOS DE CONTACTO</h3>
                                        </div>
                                        
                                        <div class="img-container">
                                            <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_9.jpg" alt="...">
                                        </div>

                                        <div class="row contact-data first__row">
                                            <div class="col-2 col-md-2 col-icon">
                                                <i class="material-symbols-outlined">call</i>
                                            

                                            </div>

                                            <div class="col-10 col-md-8">

                                                <p>+34 648 05 79 53</p>
                                                <!-- <p>+34 698 54 87 54</p> -->
                                                
                                            </div>


                                        </div>

                                        <div class="row contact-data other__row hide">
                                            <div class="col-2 col-md-2 col-icon">
                                                <i class="material-symbols-outlined">mail</i>
                                            </div>

                                            <div class="col-10 col-md-8">

                                                <p>estilocampofuengirola@gmail.com</p>
                                                
                                            </div>
                                            

                                        </div>

                                        <div class="row contact-data other__row">
                                            <div class="col-2 col-md-2 col-icon">
                                                <i class="material-symbols-outlined">location_on</i>
                                            </div>

                                            <div class="col-10 col-md-8">

                                                <p>Restaurante Estilo Campo</p>
                                                <p>c/. Moncayo, 7</p>
                                                <p>29640 Fuengirola - Málaga</p>
                                                
                                            </div>
                                            

                                        </div>

                                        <div class="row other__row">  
                                            <div class="map-container mt-5">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12822.686122384202!2d-4.6221991!3d36.5379181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd72e26b0c879401%3A0x72b8a5c29f0b84de!2sRestaurante%20Estilo%20Campo%20%2F%20Asador%20Argentino%20%2F%20Steakhouse!5e0!3m2!1ses!2ses!4v1693151456028!5m2!1ses!2ses" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                            </div>






                                <div class="col-lg-6">

                                        <div class="subtitle plus__padding">
                                            <h3>SI QUIERES REALIZAR UNA RESERVA</h3>
                                            <div class="col-12 wrap__reservations__final">
                                                <a href="https://estilocampo.net/reservations/" class="btn-reserva">
                                                    RESERVA AQUÍ
                                                </a>
                                            </div>
                                        </div>

                                        <div class="subtitle plus__padding">
                                            <h3>¿TIENES ALGUNA CONSULTA? <br/>Escríbenos y te ayudamos</h3>
                                        </div>


                                            <?php echo do_shortcode("[nmh-contact-forms]");   ?>

                                    <!-- <form>
                                     <input type="text" class="name form-control">
                                     <input type="text" class="surname form-control">   
                                     <textarea class="message form-control"></textarea>
                                     <button type="button" id="send-whatsapp" class="btn btn-send btn-enviar-datos">Send W</button>
                                    </form> -->




                                </div>

                    </div>

            </div>


        </section>


<?php endif; ?>



<?php
get_footer(); 
?>