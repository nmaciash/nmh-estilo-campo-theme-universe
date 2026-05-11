<?php
/*
*  Template Name: Página Tabla de Precios
*/ 


get_header();
?>


<main id="menus-page" class="menus__page">

    <div id="page-loader"><span class="preloader-interior"></span></div>

    <section  aria-label="Muestra con enlaces a documentos pdf de todos los precios de menús y cartas disponibles en el restaurante" class="menu__book section section-one">

				

		<div class="nm-container w-img"></div>

		<div class="container__menu__body">
			<div class="row header__menus">
				<div class="col-12 col__header__menus">
					<h1 class="title">NUESTRA CARTA</h1>
				</div>
			</div>

			

		</div>
    </section>



    <!-- PÁGINA 1 -->

    <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_1 = get_field('pagina_1'); 
                                        $group_page_1_1 = $menu_page_1['grupo_1'];
                                            $plate_1_1_1 = $group_page_1_1['plato_1'];
                                            $plate_1_1_2 = $group_page_1_1['plato_2'];
                                            $plate_1_1_3 = $group_page_1_1['plato_3'];

                                        $group_page_1_2 = $menu_page_1['grupo_2'];
                                            $plate_1_2_1 = $group_page_1_2['plato_1'];
                                            $plate_1_2_2 = $group_page_1_2['plato_2'];
                                            $plate_1_2_3 = $group_page_1_2['plato_3'];
                                            $plate_1_2_4 = $group_page_1_2['plato_4'];
                                            $plate_1_2_5 = $group_page_1_2['plato_5'];
                                            $plate_1_2_6 = $group_page_1_2['plato_6'];
                                            $plate_1_2_7 = $group_page_1_2['plato_7'];
                                            $plate_1_2_8 = $group_page_1_2['plato_8'];
                                            $plate_1_2_9 = $group_page_1_2['plato_9'];
                                            $plate_1_2_10 = $group_page_1_2['plato_10'];
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_1_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 1">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_1_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-100 ingredients-plato-carta">
                                                <p><?php echo $plate_1_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 2">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_1_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 3">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_1_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_1_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 4">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 5">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 6">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_3['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 7">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_4['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 8">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_5['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 9">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_6['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 10">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_7['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 11">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_8['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 12">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_9['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 13">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_1_2_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_1_2_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_1_2_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_1_2_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_1_2_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_1_2_10['nombre_plato']; ?> <span><br/><?php echo $plate_1_2_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_1_2_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_1_2_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>





                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- PÁGINA 2 -->

    <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_2 = get_field('pagina_2'); 
                                        $group_page_2_1 = $menu_page_2['grupo_1'];
                                            $plate_2_1_1 = $group_page_2_1['plato_1'];
                                            $plate_2_1_2 = $group_page_2_1['plato_2'];
                                            $plate_2_1_3 = $group_page_2_1['plato_3'];
                                            $plate_2_1_4 = $group_page_2_1['plato_4'];

                                        $group_page_2_2 = $menu_page_2['grupo_2'];
                                            $plate_2_2_1 = $group_page_2_2['plato_1'];
                                            $plate_2_2_2 = $group_page_2_2['plato_2'];                                           

                                        $group_page_2_3 = $menu_page_2['grupo_3'];
                                            $plate_2_3_1 = $group_page_2_3['plato_1'];
                                            $plate_2_3_2 = $group_page_2_3['plato_2'];
                                            $plate_2_3_3 = $group_page_2_3['plato_3'];
                                            $plate_2_3_4 = $group_page_2_3['plato_4'];
                                            $plate_2_3_5 = $group_page_2_3['plato_5'];                                           
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_2_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 14">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_2_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 15">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_2_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 16">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_2_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 17">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_2_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_1_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_2_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 18">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_2_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 19">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_2_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_2_3['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 20">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_3_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_3_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_3_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_3_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_3_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_3_1['nombre_plato']; ?> <span><br/><?php echo $plate_2_3_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_3_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_3_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 21">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_3_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_3_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_3_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_3_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_3_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_3_2['nombre_plato']; ?> <span><br/><?php echo $plate_2_3_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_3_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_3_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 22">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_3_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_3_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_3_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_3_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_3_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_3_3['nombre_plato']; ?> <span><br/><?php echo $plate_2_3_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_3_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_3_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 23">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_3_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_3_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_3_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_3_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_3_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_3_4['nombre_plato']; ?> <span><br/><?php echo $plate_2_3_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_3_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_3_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>   
                                        
                                        <div class="row plato-carta 24">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_2_3_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_2_3_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_2_3_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_2_3_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_2_3_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_2_3_5['nombre_plato']; ?> <span><br/><?php echo $plate_2_3_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_2_3_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_2_3_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>    

                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>


                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    <!-- PÁGINA 3 -->

    <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_3 = get_field('pagina_3'); 
                                        $group_page_3_1 = $menu_page_3['grupo_1'];
                                            $plate_3_1_1 = $group_page_3_1['plato_1'];
                                            $plate_3_1_2 = $group_page_3_1['plato_2'];
                                            $plate_3_1_3 = $group_page_3_1['plato_3'];
                                            $plate_3_1_4 = $group_page_3_1['plato_4'];
                                            $plate_3_1_5 = $group_page_3_1['plato_5'];

                                        $group_page_3_2 = $menu_page_3['grupo_2'];
                                            $plate_3_2_1 = $group_page_3_2['plato_1'];
                                            $plate_3_2_2 = $group_page_3_2['plato_2'];     
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_3_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta custom_part_page__3">
                                        <div class="row plato-carta 25">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-6 col-md-6 title-plato-carta">
                                                <h4><?php echo $plate_3_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_3_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <!-- <p class="gramage"><?php echo $plate_3_1_1['gramaje_a_plato']; ?> gr.</p> -->
                                                <!-- <span class="ec__brand"><?php echo $plate_3_1_1['precio_a_plato']; ?> €</span> -->
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_1['gramaje_b_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_1['precio_b_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 26">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-6 col-md-6 title-plato-carta">
                                                <h4><?php echo $plate_3_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_3_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <!-- <p class="gramage"><?php echo $plate_3_1_2['gramaje_a_plato']; ?> gr.</p> -->
                                                <!-- <span class="ec__brand"><?php echo $plate_3_1_2['precio_a_plato']; ?> €</span> -->
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_2['gramaje_b_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_2['precio_b_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 27">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-6 col-md-6 title-plato-carta">
                                                <h4><?php echo $plate_3_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_3_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_3['gramaje_a_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_3['precio_a_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_3['gramaje_b_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_3['precio_b_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 28">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-6 col-md-6 title-plato-carta">
                                                <h4><?php echo $plate_3_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_3_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_4['gramaje_a_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_4['precio_a_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_4['gramaje_b_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_4['precio_b_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 29">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_1_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_1_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_1_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_1_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_1_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-6 col-md-6 title-plato-carta">
                                                <h4><?php echo $plate_3_1_5['nombre_plato']; ?> <span><br/><?php echo $plate_3_1_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_5['gramaje_a_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_5['precio_a_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 precio-plato-carta">
                                                <p class="gramage"><?php echo $plate_3_1_5['gramaje_b_plato']; ?> gr.</p>
                                                <span class="ec__brand"><?php echo $plate_3_1_5['precio_b_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_1_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_3_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 30">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_3_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_3_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_3_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 31">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_3_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_3_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_3_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_3_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_3_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_3_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_3_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_3_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_3_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>


                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- PÁGINA 4 -->

    <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                             <!-- Obtención valores de variables -->
                             <?php
                                    $menu_page_4 = get_field('pagina_4'); 
                                        $group_page_4_1 = $menu_page_4['grupo_1'];
                                            $plate_4_1_1 = $group_page_4_1['plato_1'];
                                            $plate_4_1_2 = $group_page_4_1['plato_2'];
                                            $plate_4_1_3 = $group_page_4_1['plato_3'];
                                            $plate_4_1_4 = $group_page_4_1['plato_4'];
                                            $plate_4_1_5 = $group_page_4_1['plato_5'];
                                            $plate_4_1_6 = $group_page_4_1['plato_6'];
                                            $plate_4_1_7 = $group_page_4_1['plato_7'];
                                            $plate_4_1_8 = $group_page_4_1['plato_8'];
                                            $plate_4_1_9 = $group_page_4_1['plato_9'];
                                            $plate_4_1_10 = $group_page_4_1['plato_10'];
                                            $plate_4_1_11 = $group_page_4_1['plato_11'];
                                            $plate_4_1_12 = $group_page_4_1['plato_12'];

                                        $group_page_4_2 = $menu_page_4['grupo_2'];
                                            $plate_4_2_1 = $group_page_4_2['plato_1'];
                                            $plate_4_2_2 = $group_page_4_2['plato_2'];
                                            $plate_4_2_3 = $group_page_4_2['plato_3'];
                                            $plate_4_2_4 = $group_page_4_2['plato_4'];
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_4_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 32">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 33">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 34">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 35">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 36">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_5['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 37">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_6['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 38">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_7['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 39">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_8['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 40">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_9['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 41">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_10['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 42">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_11['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_11['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_11['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_11['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_11['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_11['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_11['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_11['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_11['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 43">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_1_12['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_1_12['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_1_12['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_1_12['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_1_12['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_1_12['nombre_plato']; ?> <span><br/><?php echo $plate_4_1_12['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_1_12['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_1_12['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                    </div>

                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_4_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 44">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_4_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 45">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_4_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 46">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_2_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_2_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_2_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_2_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_2_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_2_3['nombre_plato']; ?> <span><br/><?php echo $plate_4_2_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_2_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_2_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 47">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_4_2_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_4_2_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_4_2_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_4_2_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_4_2_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_4_2_4['nombre_plato']; ?> <span><br/><?php echo $plate_4_2_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_4_2_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_4_2_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                    
                                    </div>    

                                    <div class="wrap-title-section">
                                        <h2>ALÉRGENOS</h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row seven-cols">
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Gluten.png" alt="">
                                                <p>GLUTEN</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Crustaceos.png" alt="">
                                                <p>CRUSTÁCEOS</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Egg.png" alt="">
                                                <p>HUEVOS</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Fish.png" alt="">
                                                <p>PESCADO</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Cacahuete.png" alt="">
                                                <p>CACAHUETES</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Soja.png" alt="">
                                                <p>SOJA</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Lacteos.png" alt="">
                                                <p>LECHE</p>
                                            </div>
                                           
                                        </div>

                                        <div class="row seven-cols">
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/FrutosCascara.png" alt="">
                                                <p>FRUTOS DE CÁSCARA</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Apio.png" alt="">
                                                <p>APIO</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Mostaza.png" alt="">
                                                <p>MOSTAZA</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/GranosSesamo.png" alt="">
                                                <p>SÉSAMO</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Moluscos.png" alt="">
                                                <p>MOLUSCOS</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/Altramuces.png" alt="">
                                                <p>ALTRAMUCES</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/allergerns-icons/DioxidoAzufreSulfitos.png" alt="">
                                                <p>DIÓXIDO DE AZUFRE Y SULFITOS</p>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                
                                    
                                </section>
                                
                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                            
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>

                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

     <!-- PÁGINA 5 -->

     <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_5 = get_field('pagina_5'); 
                                        $group_page_5_1 = $menu_page_5['grupo_1'];
                                            $subgroup_page_5_1 = $group_page_5_1['nombre_subgrupo'];
                                            $plate_5_1_1 = $group_page_5_1['plato_1'];
                                            $plate_5_1_2 = $group_page_5_1['plato_2'];
                                            $plate_5_1_3 = $group_page_5_1['plato_3'];
                                            $plate_5_1_4 = $group_page_5_1['plato_4'];
                                            $plate_5_1_5 = $group_page_5_1['plato_5'];
                                            $plate_5_1_6 = $group_page_5_1['plato_6'];
                                            $plate_5_1_7 = $group_page_5_1['plato_7'];

                                        $group_page_5_2 = $menu_page_5['grupo_2'];
                                            $subgroup_page_5_2 = $group_page_5_2['nombre_subgrupo'];
                                            $plate_5_2_1 = $group_page_5_2['plato_1'];
                                            $plate_5_2_2 = $group_page_5_2['plato_2'];
                                            $plate_5_2_3 = $group_page_5_2['plato_3'];
                                            $plate_5_2_4 = $group_page_5_2['plato_4'];
                                            $plate_5_2_5 = $group_page_5_2['plato_5'];
                                            $plate_5_2_6 = $group_page_5_2['plato_6'];
                                            $plate_5_2_7 = $group_page_5_2['plato_7'];
                                            $plate_5_2_8 = $group_page_5_2['plato_8'];
                                            $plate_5_2_9 = $group_page_5_2['plato_9'];
                                            $plate_5_2_10 = $group_page_5_2['plato_10'];
                                            $plate_5_2_11 = $group_page_5_2['plato_11'];
                                            $plate_5_2_12 = $group_page_5_2['plato_12'];
                                            $plate_5_2_13 = $group_page_5_2['plato_13'];
                                            $plate_5_2_14 = $group_page_5_2['plato_14'];
                                            $plate_5_2_15 = $group_page_5_2['plato_15'];
                                            $plate_5_2_16 = $group_page_5_2['plato_16'];
                                            $plate_5_2_17 = $group_page_5_2['plato_17'];
                                            $plate_5_2_18 = $group_page_5_2['plato_18'];
                                            $plate_5_2_19 = $group_page_5_2['plato_19'];
                                            $plate_5_2_20 = $group_page_5_2['plato_20'];
                                            $plate_5_2_21 = $group_page_5_2['plato_21'];
                                            $plate_5_2_22 = $group_page_5_2['plato_22'];
                                            $plate_5_2_23 = $group_page_5_2['plato_23'];
                                            $plate_5_2_24 = $group_page_5_2['plato_24'];
                                            $plate_5_2_25 = $group_page_5_2['plato_25'];
                                            $plate_5_2_26 = $group_page_5_2['plato_26'];
                                            $plate_5_2_27 = $group_page_5_2['plato_27'];
                                            $plate_5_2_28 = $group_page_5_2['plato_28'];
                                            $plate_5_2_29 = $group_page_5_2['plato_29'];
                                            $plate_5_2_30 = $group_page_5_2['plato_30'];
                                            $plate_5_2_31 = $group_page_5_2['plato_31'];
                                            $plate_5_2_32 = $group_page_5_2['plato_32'];
                                            $plate_5_2_33 = $group_page_5_2['plato_33'];
                                            $plate_5_2_34 = $group_page_5_2['plato_34'];
                                            $plate_5_2_35 = $group_page_5_2['plato_35'];
                                            $plate_5_2_36 = $group_page_5_2['plato_36'];
                                            $plate_5_2_37 = $group_page_5_2['plato_37'];
                                            $plate_5_2_38 = $group_page_5_2['plato_38'];
                                            $plate_5_2_39 = $group_page_5_2['plato_39'];
                                            $plate_5_2_40 = $group_page_5_2['plato_40'];
                                            $plate_5_2_41 = $group_page_5_2['plato_41'];
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_5_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_5_1 ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 48">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 49">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 50">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 51">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 52">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_5['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 53">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_6['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 54">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_1_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_1_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_1_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_1_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_1_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_1_7['nombre_plato']; ?> <span><br/><?php echo $plate_5_1_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_1_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_1_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section d-none">
                                        <h2 class="title__overlay"><?php echo $group_page_5_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_5_2 ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 55">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 56">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 57">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_3['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 58">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_4['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 59">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_5['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 60">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_6['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 61">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_7['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 62">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_8['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 63">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_9['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 64">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_10['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 65">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_11['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_11['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_11['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_11['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_11['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_11['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_11['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_11['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_11['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 66">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_12['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_12['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_12['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_12['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_12['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_12['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_12['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_12['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_12['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 67">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_13['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_13['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_13['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_13['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_13['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_13['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_13['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_13['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_13['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 68">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_14['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_14['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_14['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_14['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_14['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_14['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_14['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_14['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_14['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 69">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_15['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_15['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_15['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_15['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_15['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_15['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_15['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_15['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_15['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 70">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_16['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_16['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_16['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_16['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_16['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_16['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_16['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_16['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_16['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 71">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_17['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_17['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_17['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_17['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_17['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_17['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_17['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_17['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_17['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 72">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_18['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_18['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_18['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_18['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_18['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_18['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_18['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_18['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_18['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 73">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_19['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_19['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_19['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_19['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_19['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_19['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_19['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_19['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_19['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 74">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_20['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_20['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_20['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_20['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_20['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_20['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_20['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_20['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_20['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 75">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_21['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_21['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_21['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_21['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_21['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_21['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_21['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_21['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_21['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 76">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_22['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_22['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_22['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_22['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_22['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_22['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_22['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_22['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_22['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 77">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_23['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_23['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_23['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_23['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_23['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_23['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_23['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_23['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_23['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 78">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_24['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_24['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_24['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_24['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_24['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_24['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_24['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_24['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_24['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 79">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_25['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_25['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_25['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_25['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_25['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_25['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_25['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_25['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_25['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 80">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_26['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_26['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_26['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_26['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_26['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_26['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_26['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_26['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_26['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 81">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_27['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_27['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_27['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_27['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_27['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_27['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_27['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_27['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_27['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 82">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_28['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_28['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_28['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_28['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_28['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_28['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_28['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_28['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_28['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 83">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_29['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_29['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_29['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_29['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_29['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_29['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_29['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_29['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_29['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 84">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_30['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_30['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_30['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_30['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_30['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_30['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_30['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_30['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_30['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 85">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_31['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_31['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_31['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_31['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_31['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_31['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_31['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_31['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_31['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 86">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_32['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_32['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_32['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_32['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_32['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_32['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_32['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_32['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_32['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 87">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_33['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_33['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_33['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_33['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_33['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_33['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_33['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_33['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_33['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 88">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_34['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_34['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_34['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_34['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_34['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_34['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_34['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_34['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_34['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 89">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_35['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_35['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_35['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_35['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_35['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_35['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_35['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_35['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_35['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 90">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_36['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_36['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_36['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_36['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_36['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_36['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_36['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_36['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_36['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 91">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_37['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_37['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_37['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_37['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_37['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_37['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_37['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_37['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_37['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 92">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_38['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_38['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_38['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_38['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_38['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_38['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_38['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_38['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_38['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 93">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_39['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_39['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_39['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_39['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_39['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_39['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_39['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_39['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_39['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 94">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_40['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_40['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_40['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_40['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_40['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_40['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_40['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_40['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_40['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 95">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_5_2_41['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_5_2_41['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_5_2_41['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_5_2_41['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_5_2_41['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_5_2_41['nombre_plato']; ?> <span><br/><?php echo $plate_5_2_41['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_5_2_41['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_5_2_41['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>





                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- PÁGINA 6 -->

    <div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_6 = get_field('pagina_6'); 
                                        $group_page_6_1 = $menu_page_6['grupo_1'];
                                            $subgroup_page_6_1 = $group_page_6_1['nombre_subgrupo'];
                                            $plate_6_1_1 = $group_page_6_1['plato_1'];
                                            $plate_6_1_2 = $group_page_6_1['plato_2'];
                                            $plate_6_1_3 = $group_page_6_1['plato_3'];
                                            $plate_6_1_4 = $group_page_6_1['plato_4'];
                                            $plate_6_1_5 = $group_page_6_1['plato_5'];
                                            $plate_6_1_6 = $group_page_6_1['plato_6'];
                                            $plate_6_1_7 = $group_page_6_1['plato_7'];
                                            $plate_6_1_8 = $group_page_6_1['plato_8'];
                                            $plate_6_1_9 = $group_page_6_1['plato_9'];
                                            $plate_6_1_10 = $group_page_6_1['plato_10'];
                                            $plate_6_1_11 = $group_page_6_1['plato_11'];

                                        $group_page_6_2 = $menu_page_6['grupo_2'];
                                            $subgroup_page_6_2_1 = $group_page_6_2['nombre_subgrupo_1'];
                                            $subgroup_page_6_2_2 = $group_page_6_2['nombre_subgrupo_2'];
                                            $subgroup_page_6_2_3 = $group_page_6_2['nombre_subgrupo_3'];
                                            $subgroup_page_6_2_4 = $group_page_6_2['nombre_subgrupo_4'];
                                            $plate_6_2_1 = $group_page_6_2['plato_1'];
                                            $plate_6_2_2 = $group_page_6_2['plato_2'];
                                            $plate_6_2_3 = $group_page_6_2['plato_3'];
                                            $plate_6_2_4 = $group_page_6_2['plato_4'];
                                            $plate_6_2_5 = $group_page_6_2['plato_5'];
                                            $plate_6_2_6 = $group_page_6_2['plato_6'];
                                            $plate_6_2_7 = $group_page_6_2['plato_7'];
                                            $plate_6_2_8 = $group_page_6_2['plato_8'];
                                            $plate_6_2_9 = $group_page_6_2['plato_9'];
                                            $plate_6_2_10 = $group_page_6_2['plato_10'];
                                            $plate_6_2_11 = $group_page_6_2['plato_11'];
                                            $plate_6_2_12 = $group_page_6_2['plato_12'];
                                            $plate_6_2_13 = $group_page_6_2['plato_13'];
                                            $plate_6_2_14 = $group_page_6_2['plato_14'];
                                            $plate_6_2_15 = $group_page_6_2['plato_15'];
                                            $plate_6_2_16 = $group_page_6_2['plato_16'];
                                            $plate_6_2_17 = $group_page_6_2['plato_17'];
                                            $plate_6_2_18 = $group_page_6_2['plato_18'];
                                            $plate_6_2_19 = $group_page_6_2['plato_19'];
                                            $plate_6_2_20 = $group_page_6_2['plato_20'];
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_6_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_6_1 ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 96">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 97">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 98">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 99">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>                                    

                                        <div class="row plato-carta 100">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <!-- <img class="ico-1" src="<?php echo $plate_6_1_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_5['icono_alergenos_5']; ?>" alt=""> -->
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_5['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 101">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_6['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 102">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_7['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 103">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_8['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 104">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_9['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 105">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_10['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 106">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_1_11['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_1_11['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_1_11['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_1_11['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_1_11['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_1_11['nombre_plato']; ?> <span><br/><?php echo $plate_6_1_11['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_1_11['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_1_11['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section d-none">
                                        <h2 class="title__overlay"><?php echo $group_page_6_2['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_6_2_1 ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 107">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 108">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 109">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_3['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 110">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_4['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_6_2_2 ?></h2>
                                    </div>

                                        <div class="row plato-carta 111">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_5['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 112">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_6['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 113">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_7['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 114">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_8['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 115">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_9['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 116">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_10['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 117">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_11['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_11['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_11['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_11['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_11['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_11['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_11['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_11['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_11['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 118">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_12['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_12['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_12['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_12['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_12['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_12['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_12['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_12['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_12['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 119">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_13['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_13['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_13['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_13['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_13['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_13['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_13['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_13['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_13['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 120">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_14['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_14['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_14['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_14['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_14['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_14['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_14['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_14['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_14['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 121">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_15['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_15['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_15['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_15['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_15['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_15['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_15['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_15['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_15['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_6_2_3 ?></h2>
                                    </div>

                                        <div class="row plato-carta 122">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_16['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_16['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_16['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_16['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_16['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_16['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_16['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_16['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_16['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 123">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_17['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_17['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_17['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_17['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_17['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_17['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_17['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_17['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_17['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>


                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_6_2_4 ?></h2>
                                    </div>

                                        <div class="row plato-carta 124">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_18['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_18['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_18['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_18['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_18['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_18['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_18['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_18['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_18['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 125">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_19['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_19['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_19['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_19['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_19['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_19['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_19['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_19['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_19['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 126">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_6_2_20['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_6_2_20['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_6_2_20['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_6_2_20['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_6_2_20['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_6_2_20['nombre_plato']; ?> <span><br/><?php echo $plate_6_2_20['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_6_2_20['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_6_2_20['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        
                                    </div>                                
                                                               
                                    
                                </section>

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>





                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- PÁGINA 6 -->

<div class="body dark-background" style="linear-gradient(to right, rgba(58, 61, 62, 1) 0%, rgba(58, 61, 62, 1) 100%);">
        <div class="outer-border">
            <div class="mid-border">
                <div class="inner-border">
                <img class="corner-decoration corner-left-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-right-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="corner-decoration corner-left-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/corner-decoration.png"></img>
                <img class="vertical-decoration top" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-decoration/centered-decoration.png"></img>
                <img class="vertical-decoration bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_horseshoe.png"></img>

                    <!-- Page Content -->
                    <div class="container-page">
                        <div class="row social-row">
                            <a href="#" target="_blank" class="d-none" style=""></a>

                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center body__table__prices">

                                <!-- Obtención valores de variables -->
                                <?php
                                    $menu_page_7 = get_field('pagina_7'); 
                                        $group_page_7_1 = $menu_page_7['grupo_1'];
                                            $subgroup_page_7_1_1 = $group_page_7_1['nombre_subgrupo_1'];                                            
                                            $plate_7_1_1 = $group_page_7_1['plato_1'];
                                            $plate_7_1_2 = $group_page_7_1['plato_2'];
                                            $plate_7_1_3 = $group_page_7_1['plato_3'];
                                            $plate_7_1_4 = $group_page_7_1['plato_4'];
                                            $plate_7_1_5 = $group_page_7_1['plato_5'];
                                            $plate_7_1_6 = $group_page_7_1['plato_6'];
                                            $subgroup_page_7_1_2 = $group_page_7_1['nombre_subgrupo_2'];
                                            $plate_7_1_7 = $group_page_7_1['plato_7'];
                                            $plate_7_1_8 = $group_page_7_1['plato_8'];
                                            $plate_7_1_9 = $group_page_7_1['plato_9'];
                                            $plate_7_1_10 = $group_page_7_1['plato_10'];
                                            $plate_7_1_11 = $group_page_7_1['plato_11'];
                                            $subgroup_page_7_1_3 = $group_page_7_1['nombre_subgrupo_3'];
                                            $plate_7_1_12 = $group_page_7_1['plato_12'];
                                            $plate_7_1_13 = $group_page_7_1['plato_13'];
                                            $plate_7_1_14 = $group_page_7_1['plato_14'];
                                            $plate_7_1_15 = $group_page_7_1['plato_15'];
                                            $subgroup_page_7_1_4 = $group_page_7_1['nombre_subgrupo_4'];
                                            $plate_7_1_16 = $group_page_7_1['plato_16'];
                                            $plate_7_1_17 = $group_page_7_1['plato_17'];

                                        $group_page_7_2 = $menu_page_7['grupo_2'];                                            
                                            $plate_7_2_1 = $group_page_7_2['plato_1'];
                                            $plate_7_2_2 = $group_page_7_2['plato_2'];
                                            $plate_7_2_3 = $group_page_7_2['plato_3'];
                                            $plate_7_2_4 = $group_page_7_2['plato_4'];
                                            $plate_7_2_5 = $group_page_7_2['plato_5'];
                                           
                                        $group_page_7_3 = $menu_page_7['grupo_3'];
                                            $plate_7_3_1 = $group_page_7_3['plato_1'];
                                            $plate_7_3_2 = $group_page_7_3['plato_2'];
                                            $plate_7_3_3 = $group_page_7_3['plato_3'];
                                            $plate_7_3_4 = $group_page_7_3['plato_4'];
                                            $plate_7_3_5 = $group_page_7_3['plato_5'];
                                            $plate_7_3_6 = $group_page_7_3['plato_6'];
                                ?>

                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_7_1['nombre_grupo']; ?></h2>
                                    </div>
                                    <div class="wrap-title-section">
                                        <h3 class="subtitle__overlay"><?php echo $subgroup_page_7_1_1 ?></h2>
                                    </div>
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 127">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_1['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 128">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_2['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 129">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_3['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 130">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_4['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>                                    

                                        <div class="row plato-carta 131">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_5['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 132">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_6['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="wrap-title-section">
                                            <h3 class="subtitle__overlay"><?php echo $subgroup_page_7_1_2 ?></h2>
                                        </div>

                                        <div class="row plato-carta 133">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_7['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_7['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_7['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_7['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_7['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_7['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_7['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_7['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_7['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 134">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_8['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_8['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_8['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_8['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_8['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_8['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_8['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_8['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_8['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 135">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_9['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_9['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_9['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_9['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_9['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_9['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_9['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_9['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_9['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 136">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_10['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_10['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_10['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_10['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_10['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_10['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_10['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_10['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_10['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 137">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_11['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_11['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_11['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_11['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_11['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_11['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_11['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_11['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_11['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="wrap-title-section">
                                            <h3 class="subtitle__overlay"><?php echo $subgroup_page_7_1_3 ?></h2>
                                        </div>

                                        <div class="row plato-carta 138">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_12['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_12['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_12['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_12['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_12['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_12['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_12['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_12['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_12['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 139">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_13['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_13['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_13['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_13['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_13['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_13['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_13['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_13['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_13['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 140">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_14['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_14['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_14['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_14['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_14['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_14['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_14['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_14['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_14['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 141">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_15['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_15['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_15['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_15['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_15['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_15['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_15['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_15['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_15['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="wrap-title-section">
                                            <h3 class="subtitle__overlay"><?php echo $subgroup_page_7_1_4 ?></h2>
                                        </div>

                                        <div class="row plato-carta 142">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_16['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_16['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_16['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_16['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_16['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_16['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_16['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_16['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_16['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 143">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_1_17['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_1_17['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_1_17['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_1_17['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_1_17['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_1_17['nombre_plato']; ?> <span><br/><?php echo $plate_7_1_17['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_1_17['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_1_17['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>                                
                                                               
                                    
                                </section>


                                <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_7_2['nombre_grupo']; ?></h2>
                                    </div>

                                    
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 144">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_2_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_2_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_2_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_2_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_2_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_2_1['nombre_plato']; ?> <span><br/><?php echo $plate_7_2_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_2_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_2_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 145">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_2_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_2_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_2_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_2_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_2_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_2_2['nombre_plato']; ?> <span><br/><?php echo $plate_7_2_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_2_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_2_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 146">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_2_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_2_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_2_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_2_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_2_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_2_3['nombre_plato']; ?> <span><br/><?php echo $plate_7_2_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_2_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_2_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 147">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_2_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_2_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_2_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_2_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_2_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_2_4['nombre_plato']; ?> <span><br/><?php echo $plate_7_2_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_2_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_2_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                    

                                        <div class="row plato-carta 148">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_2_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_2_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_2_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_2_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_2_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_2_5['nombre_plato']; ?> <span><br/><?php echo $plate_7_2_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_2_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_2_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        

                                        
                                    </div>       
                                    
                                    
                                    <section class="wrap">
                                    <div class="wrap-title-section">
                                        <h2 class="title__overlay"><?php echo $group_page_7_3['nombre_grupo']; ?></h2>
                                    </div>

                                    
                                    <div class="wrap column-2 carta">
                                        <div class="row plato-carta 149">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_1['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_1['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_1['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_1['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_1['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_1['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_1['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_1['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_1['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 150">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_2['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_2['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_2['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_2['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_2['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_2['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_2['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_2['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_2['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 151">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_3['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_3['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_3['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_3['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_3['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_3['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_3['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_3['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_3['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 152">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_4['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_4['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_4['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_4['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_4['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_4['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_4['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_4['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_4['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                    

                                        <div class="row plato-carta 153">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_5['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_5['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_5['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_5['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_5['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_5['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_5['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_5['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_5['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        <div class="row plato-carta 154">
                                            <div class="col-2 col-md-2 img-ico-allergen">
                                                <img class="ico-1" src="<?php echo $plate_7_3_6['icono_alergenos_1']; ?>" alt="">
                                                <img class="ico-2" src="<?php echo $plate_7_3_6['icono_alergenos_2']; ?>" alt="">
                                                <img class="ico-3" src="<?php echo $plate_7_3_6['icono_alergenos_3']; ?>" alt="">
                                                <img class="ico-4" src="<?php echo $plate_7_3_6['icono_alergenos_4']; ?>" alt="">
                                                <img class="ico-5" src="<?php echo $plate_7_3_6['icono_alergenos_5']; ?>" alt="">
                                            </div>
                                            <div class="col-7 col-md-7 title-plato-carta">
                                                <h4><?php echo $plate_7_3_6['nombre_plato']; ?> <span><br/><?php echo $plate_7_3_6['comentario_plato']; ?></span></h4>                                                
                                            </div>
                                            <div class="col-3 precio-plato-carta">
                                                <span class="ec__brand"><?php echo $plate_7_3_6['precio_plato']; ?> €</span>
                                            </div>
                                            <div class="col-2 phantom-column-movile">
                                                
                                            </div>
                                            <div class="col-10 col-md-10 ingredients-plato-carta">
                                                <p><?php echo $plate_7_3_6['ingredientes_plato']; ?></p>
                                            </div>
                                            
                                        </div>

                                        

                                        
                                    </div>            
                                                               
                                    
                                </section>

                                <div class="row table__prices__footer__page">

                                    <div class="col-6 buttons">
                                        
                                        <a href="https://www.tripadvisor.es/Restaurant_Review-g315915-d1081174-Reviews-Restaurante_Estilo_Campo-Fuengirola_Costa_del_Sol_Province_of_Malaga_Andalucia.html" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/tripadvisor_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                        <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/face_brown.png" alt="Logo Facebook" width="30" height="29"></a>
                                        <a href="https://www.instagram.com/estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/12/instagram_brown.png" alt="Logo Instagram" width="30" height="29"></a>
                                               
                                    </div>

                                    <div class="col-6 footer__right__info">
                                        <span class="name skintone-text vat__info">IVA 10% INCLUIDO</span>
                                    </div>





                                </div>                              
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










   


</main>


<?php get_footer();?>