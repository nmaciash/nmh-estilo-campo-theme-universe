<?php
/*
*  Template Name: Página Opciones Menús
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
					<h1 class="title">DESCUBRE NUESTROS MENÚS</h1>
				</div>
			</div>

			<div class="row content__menus">
				<class class="col-12">
					<!-- <p>Sumérgete en la auténtica experiencia culinaria de <strong>Estilo Campo</strong>: donde la cocina casera se eleva a una escala excepcional sin comprometer la frescura artesanal de nuestros productos. Cada detalle, desde el principio hasta el final, refleja la esencia única de <strong>Estilo Campo</strong>.</p>
					<p>Nuestra pasión por la calidad comienza con la cuidadosa selección y maduración de los mejores cortes de carne. ¿Cómo lo logramos? Con nuestra dedicación en cada elección.</p>
					<p>Imagina degustar la auténtica Carne de Novillo Argentino proveniente de ganadería extensiva. En <strong>Estilo Campo</strong>, nos enorgullece la meticulosa selección que hacemos para mantener estándares de calidad insuperables. No nos conformamos con compras en volumen, pues consideramos nuestra tarea como una verdadera pasión.</p>
					<p>Además, nuestras Carnes con su proceso de maduración artesanal, son un testimonio de nuestro control minucioso en cada corte. Evitamos la intermediación de terceros, asegurando la integridad del producto de principio a fin.</p>
					<p>Déjate llevar por la autenticidad de nuestros sabores, la dedicación a la calidad y la pasión por la tradición. Únete a nosotros en <strong>Estilo Campo</strong> y descubre una experiencia gastronómica que se nutre de la autenticidad y la excelencia.</p> -->
				</class>
			</div>
			
			<!-- <div class="row links__menus">

				<div class="col-12 d-lg-none">

					<div class="buttons__menu">
						
						<a href="https://estilocampo.net/tabla-de-precios-carta/" class="btn btn-primary" role="button"><h3>CARTA ESTILO CAMPO</h3></a>
						
						<div class="row">
						
							<div class="col-6 col__flag__img d-flex justify-content-end">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/carta_es.pdf" target="_blank" class="btn btn__flag" role="button">
								<a href="https://estilocampo.net/tabla-de-precios-carta/" target="_blank" class="btn btn__flag" role="button">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/es.png" alt="" class="img__flag">
								</a>                        
							</div>
							<div class="col-6 col__flag__img d-flex justify-content-start">
								<a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/carta_en.pdf" target="_blank" class="btn btn__flag" role="button">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uk.png" alt="" class="img__flag">
								</a>   
							</div>
						</div>
						
					</div>

				</div>

			</div> -->

            <!-- VARIABLES ACF PARA LOS ARCHIVOS PDF -->
            <?php
                $url_menu_dia_es = get_field('menu_dia_es');
                $url_menu_dia_en = get_field('menu_dia_en');
                $url_platos_dia_es_en = get_field('plato_dia_es_en');
            ?>
			            
            
            <div class="row links__menu">
			
				<div class="col-md-6">
					
					<div class="buttons__menu">
							<h3>MENÚ DEL DÍA</h3>

						<div class="row">
							<div class="col-6 col__flag__img d-flex justify-content-end">
								<!-- <a href="" target="_blank" class="btn btn__flag" role="button"> -->
                                <?php
                                    if ($url_menu_dia_es):
                                ?>    
								<a href="<?php echo esc_url($url_menu_dia_es); ?>" target="_blank" class="btn btn__flag" role="button">	
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/es.png" alt="" class="img__flag">
								</a>   
                                <?php endif; ?>                     
							</div>
							<div class="col-6 col__flag__img d-flex justify-content-start">
                                <?php
                                    if ($url_menu_dia_en):
                                ?> 
								<a href="<?php echo esc_url($url_menu_dia_en); ?>" target="_blank" class="btn btn__flag" role="button">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uk.png" alt="" class="img__flag">
								</a>   
                                <?php endif; ?>
							</div>
						</div>
						
					</div>
				</div>

				<div class="col-md-6">
					
					<div class="buttons__menu">
							<h3>PLATOS DEL DÍA</h3>

						<div class="row">
							<div class="col-6 col__flag__img d-flex justify-content-end">
								<!-- <a href="" target="_blank" class="btn btn__flag" role="button"> -->


                                <?php
                                    if ($url_platos_dia_es_en):
                                ?>   
								<a href="<?php echo esc_url($url_platos_dia_es_en); ?>" target="_blank" class="btn btn__flag" role="button">	
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/es.png" alt="" class="img__flag">
								</a>                        
							</div>
							<div class="col-6 col__flag__img d-flex justify-content-start">
								<a href="<?php echo esc_url($url_platos_dia_es_en); ?>" target="_blank" class="btn btn__flag" role="button">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uk.png" alt="" class="img__flag">
								</a>   
							</div>
                                <?php endif; ?>
						</div>
						
					</div>
				</div>
				

			</div>

		</div>
    </section>





<!-- 
	<div class="col-md-6">

<div class="buttons__menu">
	<h3>MENÚ ESTILO CAMPO</h3>
	<div class="row">
		<div class="col-6 col__flag__img d-flex justify-content-end">
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/menu_dia_es.pdf" target="_blank" class="btn btn__flag" role="button">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/es.png" alt="" class="img__flag">
			</a>                        
		</div>
		<div class="col-6 col__flag__img d-flex justify-content-start">
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/pdf/menu_dia_en.pdf" target="_blank" class="btn btn__flag" role="button">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/uk.png" alt="" class="img__flag">
			</a>   
		</div>
	</div>
	
</div>

</div>
 -->























</main>


<?php get_footer();?>