<?php

use Illuminate\Support\Facades\Route;

//SOCIAL
Route::group(['prefix' => 'social'], function () {
    Route::get('/instagram', function(){
        return Redirect::to('https://www.instagram.com/humanasUNLPam/');
    })->name('social.instagram');

    Route::get('/twitter', function(){
        return Redirect::to('https://twitter.com/humanasUNLPam');
    })->name('social.twitter');

    Route::get('/facebook', function(){
        return Redirect::to('https://www.facebook.com/cienciashumanasUNLPam/');
    })->name('social.facebook');

    Route::get('/youtube', function(){
        return Redirect::to('https://www.youtube.com/channel/UCS-Fu3MOs8FIbDNtcsSKPRA');
    })->name('social.youtube');
    
    Route::get('/GuaraniSR', function(){
        return Redirect::to('http://g3w.fchst.unlpam.edu.ar/g3w/');
    })->name('social.guaraniSR');

    Route::get('/GuaraniGP', function(){
        return Redirect::to('http://170.210.121.202/guarani/g3w/');
    })->name('social.guaraniGP');

    Route::get('/GuaraniLL', function(){
        return Redirect::to('https://g3.unlpam.edu.ar/g3w3/');
    })->name('social.guaraniLL');

    Route::get('/Campus', function(){
        return Redirect::to('https://campus.humanas.unlpam.edu.ar/');
    })->name('social.campus');
});

//CAROUSEL
Route::group(['prefix' => 'carousel'], function () {
    // Nodocentes->Nuestras/os nodocentes
    Route::get('/historia', function(){
        return view('app.contenido_estatico.carousel.historia');
    })->name('carousel.historia');
    // Nodocentes->Convenio Colectivo de Trabajo
    Route::get('/posgrado', function(){
        return view('app.contenido_estatico.carousel.posgrado');
    })->name('carousel.posgrado');
});


//NO DOCENTES
Route::group(['prefix' => 'nodocentes'], function () {
    // Nodocentes->Nuestras/os nodocentes
    Route::get('/nuestros-nodocentes', function(){
        return view('app.contenido_estatico.nodocentes.nuestros-nodocentes');
    })->name('nodocentes.nuestros-nodocentes');
    // Nodocentes->Convenio Colectivo de Trabajo
    Route::get('/convenio-colectivo-de-trabajo', function(){
        return view('app.contenido_estatico.nodocentes.convenio-colectivo-de-trabajo');
    })->name('nodocentes.convenio-colectivo-de-trabajo');
    // Nodocentes->Cursos y capacitaciones
    Route::get('/cursos-y-capacitaciones', function(){
        return view('app.contenido_estatico.nodocentes.cursos-y-capacitaciones');
    })->name('nodocentes.cursos-y-capacitaciones');
    // Nodocentes->Tramites y certificaciones
    Route::get('/tramites-y-certificaciones', function(){
        return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones');
    })->name('nodocentes.tramites-y-certificaciones');
    
});

//COMUNIDAD-GRADUADA
Route::group(['prefix' => 'comunidad-graduada'], function () {
    // Comunidad Graduada->Nuestras/os graduadas/os
    Route::get('/nuestra-comunidad', function(){
        return view('app.contenido_estatico.comunidad-graduada.nuestra-comunidad');
    })->name('comunidad-graduada.nuestra-comunidad');
    // Comunidad Graduada->Programa de formación permanente
    Route::get('/programa-de-formacion-permanente', function(){
        return view('app.contenido_estatico.comunidad-graduada.programa-de-formacion-permanente');
    })->name('comunidad-graduada.programa-de-formacion-permanente');
    // Comunidad Graduada->Cursos y Seminarios
    Route::get('/cursos-y-seminarios', function(){
        return view('app.contenido_estatico.comunidad-graduada.cursos-y-seminarios');
    })->name('comunidad-graduada.cursos-y-seminarios');
    // Comunidad Graduada->Concursos y selección
    Route::get('/concursos-y-seleccion', function(){
        return view('app.contenido_estatico.comunidad-graduada.concursos-y-seleccion');
    })->name('comunidad-graduada.concursos-y-seleccion');
    // Comunidad Graduada->Proyectos de investigación
    Route::get('/proyectos-de-investigacion', function(){
        return view('app.contenido_estatico.comunidad-graduada.proyectos-de-investigacion');
    })->name('comunidad-graduada.proyectos-de-investigacion');

});

// Ingresantes
Route::group(['prefix' => 'ingresantes'], function (){
    // Ingresantes-> Que estudiar
    Route::get('/que-estudiar', function(){
        return view('app.contenido_estatico.ingresantes.que-estudiar');
    })->name('ingresantes.que-estudiar');
    // Ingresantes->Como inscribirse
    Route::get('/como-inscribirse', function(){
        return view('app.contenido_estatico.ingresantes.como-inscribirse');
    })->name('ingresantes.como-inscribirse');
    // Ingresantes->Becas y ayudas económicas
    // Route::get('/becas-y-ayudas-economicas', function(){
    //     return view('app.contenido_estatico.ingresantes.becas-y-ayudas-economicas');
    // })->name('ingresantes.becas-y-ayudas-economicas');

    //Mi Primer Año En La Facultad
    Route::group(['prefix' => 'mi-primer-año-en-la-facultad'], function() {
        // 	Ingresantes->Mi primer año en la facultad-> Programa de ambientación
        Route::get('/programa-de-ambientacion', function(){
            return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.programa-de-ambientacion');
        })->name('ingresantes.mi-primer-año-en-la-facultad.programa-de-ambientacion');
        // 	Ingresantes->Mi primer año en la facultad-> Programa de Trayectorias Diversas
        Route::get('/programa-de-trayectorias-diversas', function(){
            return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.programa-de-trayectorias-diversas');
        })->name('ingresantes.mi-primer-año-en-la-facultad.programa-de-trayectorias-diversas');
        // 	Ingresantes->Mi primer año en la facultad-> EPSA
        Route::get('/epsa', function(){
            return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.epsa');
        })->name('ingresantes.mi-primer-año-en-la-facultad.epsa');
        // 	Ingresantes->Mi primer año en la facultad-> Centro de Estudiantes
        // Route::get('/centro-de-estudiantes', function(){
        //     return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.centro-de-estudiantes');
        // })->name('ingresantes.mi-primer-año-en-la-facultad.centro-de-estudiantes');
        // 	Ingresantes->Mi primer año en la facultad-> Preguntas Frecuentes
        Route::get('/preguntas-frecuentes', function(){
            return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.preguntas-frecuentes');
        })->name('ingresantes.mi-primer-año-en-la-facultad.preguntas-frecuentes');
    });
});

//DOCENTES
Route::group(['prefix' => 'planta-docente'], function (){
    
    // Docentes->Carrera docente
    Route::get('/carrera-docente', function(){
        return view('app.contenido_estatico.docentes.carrera-docente');
    })->name('docentes.carrera-docente');
    // Docentes->Calendario académico ??

    //Tramites y certificaciones
        Route::group(['prefix' => 'tramites-y-certificaciones'], function () {
            // Docentes->Trámites y Certificaciones->Recibos de sueldo (va link https://haberes.unlpam.edu.ar/recibos/)
            // Docentes->Trámites y Certificaciones->Licencias y autorizaciones
            Route::get('/licencias-y-autorizaciones', function(){
                return view('app.contenido_estatico.docentes.tramites-y-certificaciones.licencias-y-autorizaciones');
            })->name('docentes.tramites-y-certificaciones.licencias-y-autorizaciones');
            // Docentes->Trámites y Certificaciones->DDJJ
            Route::get('/ddjj', function(){
                return view('app.contenido_estatico.docentes.tramites-y-certificaciones.ddjj');
            })->name('docentes.tramites-y-certificaciones.ddjj'); 

        });

    // Docentes->Bedelía
    Route::get('/bedelia', function(){
        return view('app.contenido_estatico.docentes.bedelia');
    })->name('docentes.bedelia');
    // Docentes->Fortalecimiento y Movilidad Internacional
    Route::get('/fortalecimiento-y-movilidad-internacional', function(){
        return view('app.contenido_estatico.docentes.fortalecimiento-y-movilidad-internacional');
    })->name('docentes.fortalecimiento-y-movilidad-internacional');

});

//ESTUDIANTES route group prefix estudiantes
route::group(['prefix' => 'estudiantes'], function (){
    // Estudiantes-> Derechos Estudiantes
    Route::get('/derechos-estudiantes', function(){
        return view('app.contenido_estatico.estudiantes.derechos-estudiantes');
    })->name('estudiantes.derechos-estudiantes');
    // Estudiantes-> Calendario, aulas y horarios ??
    Route::get('/calendario-aulas-y-horarios', function(){
        return view('app.contenido_estatico.estudiantes.calendario-aulas-y-horarios');
    })->name('estudiantes.calendario-aulas-y-horarios');

    // Estudiantes-> Buscador de programas
    Route::get('/buscador-de-programas', function(){
        return view('app.contenido_estatico.estudiantes.buscador-de-programas');
    })->name('estudiantes.buscador-de-programas');

    // Estudiantes-> Centro de Estudiantes
    Route::get('/centro-de-estudiantes', function(){
        return view('app.contenido_estatico.estudiantes.centro-de-estudiantes');
    })->name('estudiantes.centro-de-estudiantes'); 
    
    // Estudiantes-> Becas y ayudas económicas
    Route::get('/becas-y-ayudas-economicas', function(){
        return view('app.contenido_estatico.estudiantes.becas-y-ayudas-economicas');
    })->name('estudiantes.becas-y-ayudas-economicas'); 

    //certificaciones group
    Route::group(['prefix' => 'certificaciones'], function () {
        	// Estudiantes->Certificaciones->¿Qué puedo solicitar?
        Route::get('/que-puedo-solicitar', function(){
            return view('app.contenido_estatico.estudiantes.certificaciones.que-puedo-solicitar');
        })->name('estudiantes.certificaciones.que-puedo-solicitar');
        // Estudiantes->Certificaciones->Equivalencias
        Route::get('/equivalencias', function(){
            return view('app.contenido_estatico.estudiantes.certificaciones.equivalencias');
        })->name('estudiantes.certificaciones.equivalencias');
        // Estudiantes->Certificaciones->Reválidas
        Route::get('/revalidas', function(){
            return view('app.contenido_estatico.estudiantes.certificaciones.revalidas');
        })->name('estudiantes.certificaciones.revalidas');
        // Estudiantes->Certificaciones->Condicionalidades
        Route::get('/condicionalidades', function(){
            return view('app.contenido_estatico.estudiantes.certificaciones.condicionalidades');
        })->name('estudiantes.certificaciones.condicionalidades');
        // Estudiantes->Certificaciones->Certificación de programas
        Route::get('/certificacion-de-programas', function(){
            return view('app.contenido_estatico.estudiantes.certificaciones.certificacion-de-programas');
        })->name('estudiantes.certificaciones.certificacion-de-programas');
    });



    // Estudiantes->Solicitud de título
    Route::get('/solicitud-de-titulo', function(){
        return view('app.contenido_estatico.estudiantes.solicitud-de-titulo');
    })->name('estudiantes.solicitud-de-titulo');
    // Estudiantes->Biblioteca (link a: http://www.unlpam.edu.ar/biblioteca)
});


//Carreras
Route::group(['prefix' => 'carreras'], function (){
    //GRADO
    Route::group(['prefix' => 'grado'], function (){
        //GRADO
        Route::group(['prefix' => 'departamento'], function (){
            Route::get('/ciencias-educacion', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.ciencias-educacion');
            })->name('carreras.grado.departamento.ciencias-educacion');
            Route::get('/comunicacion-social', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.comunicacion-social');
            })->name('carreras.grado.departamento.comunicacion-social');
            Route::get('/educacion-inicial', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.educacion-inicial');
            })->name('carreras.grado.departamento.educacion-inicial');
            Route::get('/educacion-primaria', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.educacion-primaria');
            })->name('carreras.grado.departamento.educacion-primaria');
            Route::get('/formacion-docente', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.formacion-docente');
            })->name('carreras.grado.departamento.formacion-docente');
            Route::get('/geografia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia');
            })->name('carreras.grado.departamento.geografia');
            Route::get('/historia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.historia');
            })->name('carreras.grado.departamento.historia');
            Route::get('/lenguas-extranjeras', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas-extranjeras');
            })->name('carreras.grado.departamento.lenguas-extranjeras');
            Route::get('/letras', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras');
            })->name('carreras.grado.departamento.letras');
        });
        Route::get('/distancia', function(){
                return view('app.contenido_estatico.carreras.grado.distancia');
            })->name('carreras.grado.distancia');
    });

    ///POSGRADO
    Route::group(['prefix' => 'posgrado'], function (){    
        Route::get('/especializacion', function(){
            return view('app.contenido_estatico.carreras.posgrado.especializacion');
        })->name('carreras.posgrado.especializacion');
        Route::get('/maestria', function(){
            return view('app.contenido_estatico.carreras.posgrado.maestria');
        })->name('carreras.posgrado.maestria');
        /*Route::get('/distancia', function(){
            return view('app.contenido_estatico.carreras.posgrado.distancia');
        })->name('carreras.posgrado.distancia');*/
    });

});

Route::group(['prefix' => 'institucional'], function (){    
    Route::get('/autoridades',function(){
        return view('app.slim.autoridades');
    })->name('institucional.autoridades');

    Route::get('/consejo', function(){
        return view('app.slim.consejo');
})->name('institucional.consejo');
});

Route::get('/contactos',function(){
    return view('app.slim.contacto');
})->name('contactos');