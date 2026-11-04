<style>
				.gsc-search-button-v2{
					background-color: #1b365d !important;
					border-color: #1b365d !important;
				}
				.gsc-search-button-v2{
					background-color: #1b365d !important;
					border-color: #1b365d !important;
				}

				.custom-social-instagram{
					color: #1b365d;
					font-size: 1.5rem;
				}
				.custom-social-instagram:hover{
					background: linear-gradient(red,yellow);
					-webkit-background-clip: text;
					color: transparent;
				}				

				.custom-social-facebook{
					color: #1b365d;
					font-size: 1.5rem;
				}
				.custom-social-facebook:hover{
					background: linear-gradient(#11acff,#006ce5);
					-webkit-background-clip: text;
					color: transparent;
				}

				.custom-social-youtube{
					color: #1b365d;
					font-size: 1.5rem;
				}				
				.custom-social-youtube:hover{
					color: red;
				}

				.custom-social-twitter{
					color: #1b365d;
					font-size: 1.5rem;
				}				
				.custom-social-twitter:hover{
					color: #1DA1F2;
				}		
                
				.custom-social-tiktok{
					fill: #1b365d !important;
				}
				.custom-social-tiktok svg{
					fill: #1b365d !important;
				}								
				.custom-social-tiktok svg:hover{
					fill: #6B929B !important;
				}
		</style>
<!-- Footer Area section -->
<footer class="px-0 mx-0 row">
    <div class="col-12 offset-md-1 col-md-4 offset-lg-0 col-lg-3 footersection mb-2" >
        <div class="mt-3 ml-1 row">
            <h5 class="col-12 py-0 my-0" style="word-break: break-all; font-size: 16px;">INSTITUCIONAL</h5>
            <!--<a class="col-12 py-0 my-1 infoItem" href="{{ route('institucional.autoridades') }}">Autoridades</a>--><!--Ruta Vieja-->
            <!--<a class="col-12 py-0 my-1 infoItem" href="#">Autoridades</a>-->
            <a class="col-12 py-0 my-1 infoItem" href="{{ route('footer.autoridades') }}">Autoridades</a>
            <!--<a class="col-12 py-0 my-1 infoItem" href="{{ route('institucional.consejo') }}">Consejo Directivo</a>--><!--Ruta Vieja-->
            <a class="col-12 py-0 my-1 infoItem" href="{{ route('footer.consejo') }}">Consejo Directivo</a>
            <a class="col-12 py-0 my-1 infoItem" href="https://actosresolutivos.unlpam.edu.ar/" target="_blank">Actos resolutivos</a>
            <a class="col-12 py-0 my-1 infoItem" href="{{ route('footer.estatutos') }}">Estatuto y Normativas</a>
            <a class="col-12 py-0 my-1 infoItem" href="{{ route('footer.boletin') }}">Boletín de Prensa</a>
            <!--<a class="col-12 py-0 my-1 infoItem" href="{{ route('footer.reglamentos') }}">Reglamentos</a>-->
            <!--<a class="col-12 py-0 my-1 infoItem" href="https://www.unlpam.edu.ar/la-unlpam/protocolo-ante-situaciones-de-violencia" target="_blank">Protocolo Violencia de género</a>-->
            <a class="col-12 py-0 my-1 infoItem" href="https://www.unlpam.edu.ar/la-unlpam/uso-del-lenguaje-no-sexista" target="_blank">Guía Lenguaje no sexista</a>
            <a class="col-12 py-0 my-1 infoItem" href="https://www.unlpam.edu.ar/" target="_blank">UNLPam</a>
        </div>
    </div>

    <div class="col-12 col-md-7 offset-lg-0 col-lg-4 footersection">
        <div class="mt-3 ml-1 row">
            <div class="row col-12 enlacesFooter">
                <ul class="list-unstyled col-12">
                    <li class='mb-1'>
                        <b style="color:#26406C; font-size: 16px;"> 
                            SANTA ROSA
                        </b>
                    </li>
                    <li class="itemContacto"><span >
                        <i class="fa fa-phone footer-icon"></i></span> 
                        <a href="tel:+542954451611" style="color: #26406C">02954 - 451611</a>
                    </li>
                    <!--<li class="itemContacto"><span><i class="fa fa-envelope footer-icon"></i></span>
                        humanas@humanas.unlpam.edu.ar</li>-->
                    <li class="itemContacto">
                        <span><i class="fa fa-map-marker footer-icon"></i></span> 
                        <a href="https://goo.gl/maps/vpSVVKoAafvX6YFHA" target="_blank" style="color: #26406C">Cnel. Gil Nº 353, 2do. Piso</a>
                    </li>
                </ul>


                <ul class="list-unstyled col-12">
                    <li class='mb-1'><b style="color:#26406C; font-size: 16px;"> GENERAL PICO</b></li>
                    <li class="itemContacto">
                        <span><i class="fa fa-phone footer-icon"></i></span> 
                        <a href="tel:+542302422780" style="color: #26406C">02302 - 422780</a>
                    </li>
                    <!--<li class="itemContacto"><span><i class="fa fa-envelope footer-icon"></i></span>
                        humanas@humanas.unlpam.edu.ar</li>-->
                    <li class="itemContacto">
                        <span><i class="fa fa-map-marker footer-icon"></i></span> 
                        <a href="https://goo.gl/maps/3nVqWpr7MysTXQZL6" target="_blank" style="color: #26406C">Calle 7 esq. 110</a>
                    </li>                        
                    </li>
                </ul>

                <ul class="list-unstyled  col-12">
                    <li class="mb-2"><i class="infoItem fa fa-address-card" aria-hidden="true"></i> <a href="{{ route('footer.contacto') }}"><b class="infoItem font-size: 16px;">Contacto <!--<i class="fa fa-arrow-right footer-icon"></i>--> </b> </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="offset-1 col-10 offset-sm-2 col-sm-8 offset-md-3 col-md-6 offset-lg-1 col-lg-3 d-flex align-content-between flex-wrap my-5" style="height:inherit">
        <div></div>
        <img src="{{ asset('slim/images/footer/logo-footer-01.svg') }}" style="width:100%; height:auto" class="px-2"/>
        <div class="col-12 mt-2">
            <p class="mb-0 pb-0 text-center">¡Sumate a nuestra comunidad!</p>
            <div class="row px-1 py-2">
                <div class="col-1"></div>
                <a href="{{route('social.instagram')}}" target="_blank" title="Instagram" alt="Instagram" class="col-2 text-center">
                    <i class="fab fa-instagram custom-social-instagram"></i><!--<i class="fab fa-instagram custom-social-static"></i>-->
                </a>
                <a href="{{route('social.facebook')}}" target="_blank"  title="Facebook" alt="Facebook" class="col-2 text-center">
                    <i class="fab fa-facebook custom-social-facebook"></i><!--<i class="fab fa-facebook custom-social-static"></i>-->
                </a>
                <a href="{{route('social.youtube')}}" target="_blank"   title="Youtube" alt="Youtube" class="col-2 text-center">
                    <i class="fab fa-youtube custom-social-youtube"></i><!--<i class="fab fa-youtube custom-social-static"></i>-->
                </a>
                <a href="https://www.tiktok.com/@humanasunlpam" target="_blank"  title="Tik Tok" alt="Tik Tok" class="col-2 custom-social-tiktok">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.5rem">
                        <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                    </svg>
			    </a>
                <a href="https://www.linkedin.com/company/humanas-unlpam " target="_blank"  title="LinkedIn" alt="LinkedIn" class="col-2 custom-social-tiktok">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1.5rem">
                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                    </svg>
			    </a>
                <div class="col-1"></div>                
                <!--<a href="{{route('social.twitter')}}" target="_blank" title="Twitter" alt="Twitter" class="col-3">
                    <i class="fab fa-twitter custom-social-static"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 512 512" style="fill: #1b365d !important">
                </a>-->
            </div>
        </div>
    </div>
</footer><!-- ./ End Footer Area-->
