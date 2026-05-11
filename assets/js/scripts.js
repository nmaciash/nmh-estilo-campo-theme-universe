$ = jQuery.noConflict();

$(document).ready(function() {



    // PRELOADER

    setTimeout(fade, 300);   // Después de 0.3 segundos (un segundo = 1000), se llama a la función fade que hace que el spinner se desvanezca.
    
    function fade() {
        $("#page-loader").fadeOut('500');
     }

    // $(window).load(function(){            // Esta opción en móvil no funciona bien. Se carga la página, pero no desaparece el spinner
    //     $('#page-loader').fadeOut(500);
    // });




    // HEADER



    // Cambiar color de fondo de la cabecera en función de si está o no en la posición inicial 
    
    // Primero recupero los valores iniciales de los elementos

     var $initial_height = $('.logo').height(); 
     var $initial_height_scrolled = $initial_height - (parseInt($initial_height) * 0.10);

        if ($(window).width() >= 960 && $('.nm-nav').length) {

            // alert(initial_height);

                $(window).on("scroll touchmove", function() {


                    if ($(document).scrollTop() != $(".nm-nav").position().top) {
                        $('.nm-nav').addClass('page-scrolled');
                        $('.nav-list').addClass('nav-list-page-scrolled');
                        $('.logo').addClass('height-logo-scrolled');

                        // alert(initial_height_scrolled);

                    } else {
                        $('.nm-nav').removeClass('page-scrolled');
                        $('.nav-list').removeClass('nav-list-page-scrolled');
                        $('.logo').removeClass('height-logo-scrolled');
                    };
                    
                });

        }



    // Prevent default main submenú links

    $('.head-submenu a').first().click(function(event) {  // Debo añadir .first para que sólo prevenga el evento click de la etiqueta principal. En caso de que no exista .first lo aplica a todos los elementos del submenú, con lo que los enlaces no actúan.
        event.preventDefault();
    });



    // Menú Hamburguesa

    var hamburgerBtn = document.querySelector(".hamburger-btn");
    if (hamburgerBtn) hamburgerBtn.addEventListener('click', animateBars);

    var line1__bars = document.querySelector('.line1__bars-menu');
    var line2__bars = document.querySelector('.line2__bars-menu');
    var line3__bars = document.querySelector('.line3__bars-menu');
    

    function animateBars() {
        line1__bars.classList.toggle('activeline1__bars-menu');
        line2__bars.classList.toggle('activeline2__bars-menu');
        line3__bars.classList.toggle('activeline3__bars-menu');
    }

    

    // Cambiar color de las lineas del menú hamburguesa si el fondo de la página es blanco

    if ($("body").hasClass("page-template-t_page_plain")) {
        $(".hamburger-btn").addClass("ch__color");
        $("footer").addClass("ch__color");
    }
    else {
        $(".hamburger-btn").removeClass("ch__color");
        $("footer").removeClass("ch__color");
    }
    
    

    // Menú Navegación


    // Tratamiento de las etiquetas para el intercambio entre idiomas

    // Añado una clase al primer elemento para trabajar los márgenes de forma diferente
    $('.nav-list li.trp-language-switcher-container:first').addClass('first__language__item');




    // Video Control - Transcriptions

//     const subtitles = document.getElementById("subtitles");

//     for (let i = 0; i < video.textTracks.length; i++) {
//         video.textTracks[i].mode = "hidden";
//       }


//       let subtitlesMenu;
// if (video.textTracks) {
//   const df = document.createDocumentFragment();
//   const subtitlesMenu = df.appendChild(document.createElement("ul"));
//   subtitlesMenu.className = "subtitles-menu";
//   subtitlesMenu.appendChild(createMenuItem("subtitles-off", "", "Off"));
//   for (let i = 0; i < video.textTracks.length; i++) {
//     subtitlesMenu.appendChild(
//       createMenuItem(
//         `subtitles-${video.textTracks[i].language}`,
//         video.textTracks[i].language,
//         video.textTracks[i].label,
//       ),
//     );
//   }
//   videoContainer.appendChild(subtitlesMenu);
// }



// const subtitleMenuButtons = [];
// function createMenuItem(id, lang, label) {
//   const listItem = document.createElement("li");
//   const button = listItem.appendChild(document.createElement("button"));
//   button.setAttribute("id", id);
//   button.className = "subtitles-button";
//   if (lang.length > 0) button.setAttribute("lang", lang);
//   button.value = label;
//   button.setAttribute("data-state", "inactive");
//   button.appendChild(document.createTextNode(label));
//   button.addEventListener("click", (e) => {
//     // Set all buttons to inactive
//     subtitleMenuButtons.forEach((button) => {
//       button.setAttribute("data-state", "inactive");
//     });

//     // Find the language to activate
//     const lang = button.getAttribute("lang");
//     for (let i = 0; i < video.textTracks.length; i++) {
//       // For the 'subtitles-off' button, the first condition will never match so all will subtitles be turned off
//       if (video.textTracks[i].language === lang) {
//         video.textTracks[i].mode = "showing";
//         button.setAttribute("data-state", "active");
//       } else {
//         video.textTracks[i].mode = "hidden";
//       }
//     }
//     subtitlesMenu.style.display = "none";
//   });
//   subtitleMenuButtons.push(button);
//   return listItem;
// }


// subtitles.addEventListener("click", (e) => {
//     if (subtitlesMenu) {
//       subtitlesMenu.style.display =
//         subtitlesMenu.style.display === "block" ? "none" : "block";
//     }
//   });




    // SEND CUSTOMER CONTENT FORM TO WEB CLIENT WHATSAPP

    // const evento = document.getElementById('send');
    // const enviarFormulario =() => {
    //     let nombre = document.getElementById('your_name').value;
    //     let apellido = document.getElementById('your_surname').value;
    //     let mensaje = document.getElementById('your_message').value;
    //     let numero = "+34677665404";

    // var win = window.open(`https://wa.me/${numero}?text=Hola%20mi%20nombre%20es%20${nombre}%20${apellido}, Asunto:%20${mensaje}`, '_blank');

    //     evento.addEventListener('click', enviarFormulario)
        
    // }



    // document.addEventListener("DOMContentLoaded", function() {
                    

    //         console.log('aquí está la funcion');
                    
    //         function sendwhatsapp(){
    //             var phonenumber = "+34677665404";
                
    //             var name = document.querySelector('.name').value;
    //             var surname = document.querySelector('.surname').value;
    //             var message = document.querySelector('.message').value;

    //             var url = "https://wa.me/" + phonenumber + "?text="
    //             +"*Name :* " +name+"%0a"
    //             +"*Surname :* " +surname+"%0a"
    //             +"*Message :* " +message+"%0a%0a"
    //             +"This is an example";

    //             window.open(url, '_blank').focus();
    //         }
                
    //     var sendButton = document.getElementById("send-whatsapp");
    //     sendButton.addEventListener("click", function() {
    //         sendwhatsapp();
    //     });
    // });


    
    // // DatePicker

    // $(function() {     
    //     $('#book__day').datepicker({
    //         dateFormat : 'dd MM yy',
    //         changeMonth: true,
    //         changeYear: true,
    //         yearRange: "-100:+0",
    //         showOn: "both",
    //         buttonImage: $ruta__images + "nm-cal-i-m-turq.png",
    //         buttonImageOnly: true                
    //     });            
    // });


   

    // RESERVATIONS PLUGIN

     // Detectar el idioma actual desde el atributo lang del HTML
     var lang = window.location.pathname.split('/')[1]; // Extrae 'en' o 'es' de la URL
    
     // Definir los textos en diferentes idiomas
     var texto1 = {
        // Invierno
        //  'es': "<label class='emphasis-io menu__timetable'>Las reservas tienen una tolerancia de 15 minutos. Si no puedes asistir o vas a llegar tarde, por favor avísanos al +34 648 05 79 53.<br/><br/>HORARIOS DE SERVICIO<br/><br/>Carta de almuerzo/mediodía: <br/>Disponible sábado y domingo de 14:00 a 16:00.<br/><br/>Cena a la carta: Disponible de 16:00 a 23:00.</label>",
        //  'en': "<label class='emphasis-io menu__timetable'>Bookings have a tolerance of 15 minutes. If you are unable to attend or will be late, please let us know on +34 648 05 79 53.<br/><br/>SERVICE TIMES<br/><br/>Lunch/noon menu: <br/>Available Saturday and Sunday from 14:00 to 16:00.<br/><br/>A la carte dining: Available from 16:00 to 23:00.</label>"

        // Verano
         'es': "<label class='emphasis-io menu__timetable'>Las reservas tienen una tolerancia de 15 minutos. Si no puedes asistir o vas a llegar tarde, por favor avísanos al +34 648 05 79 53.",
         'en': "<label class='emphasis-io menu__timetable'>Bookings have a tolerance of 15 minutes. If you are unable to attend or will be late, please let us know on +34 648 05 79 53."

     };

     var texto2 = {
         'es': "<label class='emphasis-io'>Para reservas de más de 15 personas, contactar al +34 648 05 79 53</label>",
         'en': "<label class='emphasis-io'>For bookings of more than 15 people, contact +34 648 05 79 53</label>"
     }

     var texto3 = {
        'es': "<p class='emphasis-io'>INTRODUZCA SU CÓDIGO PROMOCIONAL.</p>",
        'en': "<p class='emphasis-io'>ENTER YOUR PROMOTIONAL CODE.</p>"
    }

    var texto4 = {
        'es': "<p class='emphasis-io'>CÓDIGO para añadir a su reserva.</p>",
        'en': "<p class='emphasis-io'>CODE to add to your booking.</p>"
    }
     
     // Determinar el texto a insertar según el idioma detectado
     var textToInsert1 = texto1[lang] || texto1['es']; // Por defecto en inglés si no se detecta el idioma
     var textToInsert2 = texto2[lang] || texto2['es'];
     var textToInsert3 = texto3[lang] || texto3['es'];
     var textToInsert4 = texto4[lang] || texto4['es'];


    $('#rtb-time_root').addClass('ec__notWeekend');
    $(".reservation legend").after(textToInsert1);
    $(".rtb-select.party label").after(textToInsert2);
    $('.add-message a').html(textToInsert3);    
    $('.rtb-textarea.message label').html(textToInsert4);
    


    $('body').on('click', function(){
       
        
        
    });

    $("#rtb-date").change(function(){

        var date = new Date($('#rtb-date').val());
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        var dayOfTheWeek = date.getDay();
        // var ans = (dayOfTheWeek === 5 || dayOfTheWeek === 6 || dayOfTheWeek === 0); /* viernes, sábado y domingo */
        var ans = (dayOfTheWeek === 6 || dayOfTheWeek === 0); /* sábado y domingo */
        
        if (ans) {
            // alert([day, month, year].join('/'));            
            $('#rtb-time_root').removeClass('ec__notWeekend');
            $('#rtb-time_root').addClass('ec__weekend');
        } else {
            $('#rtb-time_root').removeClass('ec__weekend');
            $('#rtb-time_root').addClass('ec__notWeekend');
        }

    });

    // --- MARKETING: COOKIES (sin tocar el formulario del plugin) ---
    if ($('.rtb-booking-form-form').length && !$('body').hasClass('page-template-page-templates-page-landing-promo')) {
        document.cookie = 'booking_source=Web Principal; path=/; SameSite=Lax';
    }

    if ($('body').hasClass('page-template-page-templates-page-landing-promo')) {
        document.cookie = 'booking_source=Landing Promo; path=/; SameSite=Lax';

        $('#lp-how-hear').on('change', function() {
            document.cookie = 'how_hear=' + encodeURIComponent($(this).val()) + '; path=/; SameSite=Lax';
            $(this).closest('.lp__how-hear-wrap').removeClass('lp__how-hear--error');
        });

        // Bloquear submit del plugin si el select no está rellenado
        $(document).on('submit', '.rtb-booking-form-form', function(e) {
            if ($('#lp-how-hear').val() === '') {
                e.preventDefault();
                e.stopImmediatePropagation();
                var $wrap = $('.lp__how-hear-wrap');
                $wrap.addClass('lp__how-hear--error');
                $('html, body').animate({ scrollTop: $wrap.offset().top - 20 }, 400);
            }
        });
    }



    // Find if and allergen icon has no img src and hide element in case

    for(var x = 1; x < 200; x++) {       

        for(var i = 1; i < 6; i++) {    
             
            elementIco = $('.plato-carta.' + x + ' .img-ico-allergen .ico-' + i);

            var src_ico = elementIco.attr('src');
            if( src_ico === "") {
                $('.plato-carta.' + x + ' .img-ico-allergen .ico-' + i).addClass('hide');
            }
        } 

    }


    // Erase currency symbol

    //$(".precio-plato-carta .ec__brand:contains('€')").text(" ");


    $('.precio-plato-carta .ec__brand').each(function() {
        // get element text
        var text = $(this).text();
        // modify text
        text = text.replace('€', ' ');
        // update element text
        $(this).text(text); 
    });




    // --------------------
    //         BLOG
    // ----------------------













    // Copyright footer

    var date = new Date();
    var year = date.getFullYear();
    
    $('footer .current__year').html( year );


});