<?php

use Illuminate\Support\Facades\Route;

//--------------------------------NO DOCENTES--------------------------------
        // NODocentes->Trámites y Certificaciones->Recibos de Sueldo
        Route::get('nodocentes/tramites-y-certificaciones/recibos_de_sueldo', function(){
            return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones.recibos_de_sueldo');
        })->name('nodocentes.tramites-y-certificaciones.recibos_de_sueldo');
        // NODocentes->Trámites y Certificaciones->Licencias justificaciones y franquicias
        Route::get('nodocentes/tramites-y-certificaciones/licencias_justificaciones_y_franquicias', function(){
            return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones.licencias_justificaciones_y_franquicias');
        })->name('nodocentes.tramites-y-certificaciones.licencias_justificaciones_y_franquicias');
        // NODocentes->Trámites y Certificaciones->DDJJ
        Route::get('nodocentes/tramites-y-certificaciones/ddjj', function(){
            return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones.ddjj');
        })->name('nodocentes.tramites-y-certificaciones.ddjj');
        // NODocentes->Trámites y Certificaciones->Certificacion de Servicios
        Route::get('nodocentes/tramites-y-certificaciones/certificacion_de_servicios', function(){
            return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones.certificacion_de_servicios');
        })->name('nodocentes.tramites-y-certificaciones.certificacion_de_servicios');

        // Nodocentes->Concursos
        Route::get('nodocentes/concursos', function(){
            return view('app.contenido_estatico.nodocentes.concursos-nodocentes');
        })->name('nodocentes.concursos-nodocentes');        
//--------------------------------NO DOCENTES--------------------------------

//--------------------------------DOCENTES--------------------------------
    // Docentes->Trámites y Certificaciones->Recibos de Sueldo
    Route::get('docentes/tramites-y-certificaciones/recibos_de_sueldo', function(){
        return view('app.contenido_estatico.docentes.tramites-y-certificaciones.recibos_de_sueldo');
    })->name('docentes.tramites-y-certificaciones.recibos_de_sueldo');

    // Docentes->Trámites y Certificaciones->Adicional por Título de Posgrado
    Route::get('docentes/tramites-y-certificaciones/adicional-por-titulo-de-posgrado', function(){
        return view('app.contenido_estatico.docentes.tramites-y-certificaciones.adicional-por-titulo-de-posgrado');
    })->name('docentes.tramites-y-certificaciones.adicional-por-titulo-de-posgrado');    

    // Docentes->Reglamentos y Actas
    Route::get('docentes/reglamentos/Reglamentos-y-Normativas', function(){
        return view('app.contenido_estatico.docentes.reglamentos_actas_concursos_docentes');
    })->name('docentes.reglamentos_actas_concursos_docentes');

    // Docentes->Convocatorias
    Route::get('Convocatorias', function(){
        return view('app.contenido_estatico.docentes.convocatorias');
    })->name('docentes.convocatorias');
        
//--------------------------------DOCENTES--------------------------------

//--------------------------------ESTUDIANTES--------------------------------
    // Estudiantes-> Adscripciones
    Route::get('estudiantes/adscripcion_a_catedra', function(){
        return view('app.contenido_estatico.estudiantes.adscripcion_a_catedra');
    })->name('estudiantes.adscripcion_a_catedra');
    // Estudiantes-> Ayudante de Segunda
    Route::get('estudiantes/ayudante_de_segunda', function(){
        return view('app.contenido_estatico.estudiantes.ayudante_de_segunda');
    })->name('estudiantes.ayudante_de_segunda');
    // Estudiantes-> Tutoria de pares    
    Route::get('estudiantes/tutoria_de_pares', function(){
        return view('app.contenido_estatico.estudiantes.tutoria_de_pares');
    })->name('estudiantes.tutoria_de_pares');
    // Estudiantes-> Biblioteca
    Route::get('estudiantes/biblioteca', function(){
        return view('app.contenido_estatico.estudiantes.biblioteca');
    })->name('estudiantes.biblioteca');

    // Estudiantes->Certificaciones->Convalidación
    Route::get('estudiantes/certificaciones/convalidaciones', function(){
        return view('app.contenido_estatico.estudiantes.certificaciones.convalidaciones');
    })->name('estudiantes.certificaciones.convalidaciones');

    // Estudiantes->Certificaciones->Formularios
    Route::get('estudiantes/certificaciones/formularios', function(){
        return view('app.contenido_estatico.estudiantes.certificaciones.formularios');
    })->name('estudiantes.certificaciones.formularios');
    
    // Estudiantes-> Pasantías Vigentes
    Route::get('estudiantes/pasantias-vigentes', function(){
        return view('app.contenido_estatico.estudiantes.pasantias-vigentes');
    })->name('estudiantes.pasantias-vigentes');
    
    // Estudiantes-> Pasantías y Becas
    Route::get('estudiantes/pasantias-y-becas', function(){
        return view('app.contenido_estatico.estudiantes.pasantias-y-becas');
    })->name('estudiantes.pasantias-y-becas');        
//--------------------------------ESTUDIANTES--------------------------------


//--------------------------------CARRERAS--------------------------------
        //Departamentos
        Route::get('carreras/grado/Departamentos', function(){
            return view('app.contenido_estatico.carreras.grado.departamentos');
        })->name('carreras.grado.departamentos');
        //Carreras de Grado
        Route::get('carreras/grado/Carreras', function(){
            return view('app.contenido_estatico.carreras.grado.departamento.carreras-de-grado');
        })->name('carreras.grado.departamento.carreras-de-grado');        

            /* 1) Ciencias de la Educacion */
            /* Profesorado en Cs de la Educacion */
            Route::get('/Ciencias_de_la_Educacion/Profesorado_en_Ciencias_de_la_Educacion', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.carrera_prof_en_cs_de_la_eduacion');
            })->name('carreras.grado.departamento.cs_de_la_educacion.carrera_prof_en_cs_de_la_eduacion');
            /* Profesorado en Cs de la Educación Programa de Asignaturas*/
            Route::get('/Ciencias_de_la_Educacion/Profesorado_en_Ciencias_de_la_Educacion/Programa-Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_prof_cs_de_la_educacion');
            })->name('carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_prof_cs_de_la_educacion');
            
            /* Licenciatura en Cs de la Educacion */
            Route::get('/Ciencias_de_la_Educacion/Licenciatura_en_Ciencias_de_la_Educacion', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion');
            })->name('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion');
            /* Licenciatura en Cs de la Educación Programa de Asignaturas*/
            Route::get('/Ciencias_de_la_Educacion/Licenciatura_en_Ciencias_de_la_Educacion/Programa-Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_lic_cs_de_la_educacion');
            })->name('carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_lic_cs_de_la_educacion');
            
            /* Licenciatura en Cs de la Educacion a Distancia*/
            Route::get('/Ciencias_de_la_Educacion/Licenciatura_en_Ciencias_de_la_Educacion_a_Distancia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion_a_distancia');
            })->name('carreras.grado.departamento.cs_de_la_educacion.carrera_lic_en_cs_de_la_educacion_a_distancia');
            /* Licenciatura en Cs de la Educación a Distancia Programa de Asignaturas*/
            Route::get('/Ciencias_de_la_Educacion/Licenciatura_en_Ciencias_de_la_Educacion_a_Distancia/Programa-Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_lic_cs_de_la_educacion_a_distancia');
            })->name('carreras.grado.departamento.cs_de_la_educacion.programas_asignaturas.p_asignaturas_lic_cs_de_la_educacion_a_distancia');
            /* Ciencias de la Educacion */

            /* 2) Educacion Inicial */
            /* Profesorado en Educacion Inicial*/
            Route::get('/Educacion_Inicial/Profesorado_en_Educacion_Inicial', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.ed_inicial.carrera_ed_inicial');
            })->name('carreras.grado.departamento.ed_inicial.carrera_ed_inicial');
            Route::get('/Educacion_Inicial/Profesorado_en_Educacion_Inicial/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.ed_inicial.programa_asignaturas.p_asignaturas');
            })->name('carreras.grado.departamento.ed_inicial.programa_asignaturas.p_asignaturas');            
            /* Educacion Inicial*/

            /* 3) Educacion Primaria */
            /* Profesorado en Educacion Primaria*/
            Route::get('/Educacion_Primaria/Profesorado_en_Educacion_Primaria', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.ed_primaria.carrera_ed_primaria');
            })->name('carreras.grado.departamento.ed_primaria.carrera_ed_primaria');
            /*Programa Asignaturas */
            Route::get('/Educacion_Primaria/Profesorado_en_Educacion_Primaria/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.ed_primaria.programa_asignaturas.p_asignaturas');
            })->name('carreras.grado.departamento.ed_primaria.programa_asignaturas.p_asignaturas');              
            /* Educacion Primaria*/

            /* 5) Geografia */
            /* Profesorado en Geografia*/
            Route::get('/Geografia/Profesorado_en_Geografia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.carrera_prof_geografia');
            })->name('carreras.grado.departamento.geografia.carrera_prof_geografia');
            /* Programa Asignaturas Prof. en Geografia*/
            Route::get('/Geografia/Profesorado_en_Geografia/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.programa_asignaturas.prof_geo_p_asignaturas');
            })->name('carreras.grado.departamento.geografia.programa_asignaturas.prof_geo_p_asignaturas');
            
            /* Licenciatura en Geografia*/
            Route::get('/Geografia/Licenciatura_en_Geografia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.carrera_lic_geografia');
            })->name('carreras.grado.departamento.geografia.carrera_lic_geografia');
            /* Programa Asignaturas Lic. en Geografia*/
            Route::get('/Geografia/Lic_en_Geografia/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.programa_asignaturas.lic_geo_p_asignaturas');
            })->name('carreras.grado.departamento.geografia.programa_asignaturas.lic_geo_p_asignaturas');
            
            /* Licenciatura en Turismo*/
            Route::get('/Geografia/Licenciatura_en_Turismo', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.carrera_lic_turismo');
            })->name('carreras.grado.departamento.geografia.carrera_lic_turismo');            
            /* Programa Asignaturas Lic. en Geografia*/
            Route::get('/Geografia/Lic_en_Turismo/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.geografia.programa_asignaturas.lic_turismo');
            })->name('carreras.grado.departamento.geografia.programa_asignaturas.lic_turismo');
            /* Geografia*/            

            /* 6) Historia */
            /* Profesorado en Historia*/
            Route::get('/Historia/Profesorado_en_Historia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.historia.carrera_prof_historia');
            })->name('carreras.grado.departamento.historia.carrera_prof_historia');
            /* Programa Asignaturas Profesorado en Historia*/
             Route::get('/Historia/Profesorado_en_Historia/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.historia.programa_asignaturas.prof_hist_p_asignaturas');
            })->name('carreras.grado.departamento.historia.programa_asignaturas.prof_hist_p_asignaturas');

            /* Licenciatura en Historia*/
            Route::get('/Historia/Licenciatura_en_Historia', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.historia.carrera_lic_historia');
            })->name('carreras.grado.departamento.historia.carrera_lic_historia');     
            /* Programa Asignaturas Lic en Historia*/
            Route::get('/Historia/Licenciatura/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.historia.programa_asignaturas.lic_hist_p_asignaturas');
            })->name('carreras.grado.departamento.historia.programa_asignaturas.lic_hist_p_asignaturas');
            /* Historia*/  

            /* 7) Lenguas Extranjeras */
            /* Licenciatura en Ingles con orientacion en estudios literarios*/
            Route::get('/Lenguas_Extranjeras/Licenciatura_en_Ingles_con_orientacion_en_estudios_literarios', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_oel');
            })->name('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_oel');
            /* Programa Asignaturas Licenciatura en Ingles con orientacion en estudios literarios*/
            Route::get('/Lenguas_Extranjeras/Licenciatura_en_Ingles_con_orientacion_en_estudios_literarios/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.lic_ingles_oel');
            })->name('carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.lic_ingles_oel');

            /* Licenciatura en Ingles con orientacion en lingüistica aplicada*/
            Route::get('/Lenguas_Extranjeras/Licenciatura_en_Ingles_con_orientacion_lingüistica_aplicada', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_ola');
            })->name('carreras.grado.departamento.lenguas_extranjeras.carrera_lic_ingles_ola');
            /* Programa Asignaturas Licenciatura en Ingles con orientacion en lingüistica aplicada*/
            Route::get('/Lenguas_Extranjeras/Licenciatura_en_Ingles_con_orientacion_lingüistica_aplicada/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.lic_ingles_ola');
            })->name('carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.lic_ingles_ola');

            /* Profesorado en Ingles con orientacion en lingüistica aplicada*/
            Route::get('/Lenguas_Extranjeras/Profesorado_En_Ingles', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.carrera_prof_en_ingles');
            })->name('carreras.grado.departamento.lenguas_extranjeras.carrera_prof_en_ingles');
            /* Programa Asignaturas Licenciatura en Ingles con orientacion en lingüistica aplicada*/
            Route::get('/Lenguas_Extranjeras/Profesorado_en_Ingles/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.prof_en_ingles');
            })->name('carreras.grado.departamento.lenguas_extranjeras.programas_asignaturas.prof_en_ingles');
            /* Lenguas Extranjeras*/
            
            /* 8) Letras */
            /* Profesorado en Letras*/
            Route::get('/Letras/Profesorado_en_Letras', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.carrera_prof_en_letras');
            })->name('carreras.grado.departamento.letras.carrera_prof_en_letras');
            /*Programa Asignaturas Profesorado en Letras*/
            Route::get('/Letras/Profesorado_en_Letras/Programas_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.programas_asignaturas.prof_en_letras');
            })->name('carreras.grado.departamento.letras.programas_asignaturas.prof_en_letras');            
            
            /* Licenciatura en Letras*/
            Route::get('/Letras/Licenciatura_en_Letras', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.carrera_lic_en_letras');
            })->name('carreras.grado.departamento.letras.carrera_lic_letras');     
            /*Programa Asignaturas Licenciatura en Letras*/
            Route::get('/Letras/Licenciatura_en_Letras/Programas_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.programas_asignaturas.lic_en_letras');
            })->name('carreras.grado.departamento.letras.programas_asignaturas.lic_en_letras');

            /* Profesorado de Nivel Secundario en lengua y literatura*/
            Route::get('/Letras/Profesorado_de_nivel_secundario_en_lengua_y_literatura', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura');
            })->name('carreras.grado.departamento.letras.carrera_prof_de_nivel_secundario_en_lengua_y_literatura');
            /*Programa Asignaturas Profesorado de Nivel Secundario en lengua y literatura*/
            Route::get('/Letras/Profesorado_de_nivel_secundario_en_lengua_y_literatura/Programas_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.letras.programas_asignaturas.prof_sec_lengua_y_literatura');
            })->name('carreras.grado.departamento.letras.programas_asignaturas.prof_sec_lengua_y_literatura');
            /* Letras */

            /* 9) Comunicacion Social */
            /* Licenciatura en Comunicación Social*/
            Route::get('/Comunicacion_Social/Licenciatura_en_Comunicacion_Social', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.comunicacion_social.carrera_com_social');
            })->name('carreras.grado.departamento.comunicacion_social.carrera_com_social');
            /* Licenciatura en Comunicación Social*/
            Route::get('/Comunicacion_Social/Licenciatura_en_Comunicacion_Social/Programa_Asignaturas', function(){
                return view('app.contenido_estatico.carreras.grado.departamento.comunicacion_social.programa_asignaturas.p_asignaturas');
            })->name('carreras.grado.departamento.comunicacion_social.programa_asignaturas.p_asignaturas');            
            /* Comunicacion Social*/
//--------------------------------CARRERAS--------------------------------

//--------------------------------POSGRADO--------------------------------
        //Aranceles
        Route::get('carreras/posgrado/Aranceles/Aranceles', function(){
            return view('app.contenido_estatico.carreras.posgrado.aranceles.aranceles');
        })->name('carreras.posgrado.aranceles.aranceles');

        //Carreras Posgrado
        Route::get('carreras/posgrado/Carreras', function(){
            return view('app.contenido_estatico.carreras.posgrado.carreras-posgrado');
        })->name('carreras.posgrado.carreras-posgrado');

        /*Especializacion*/
        //Docencia en Educacion Superior
        Route::get('carreras/posgrado/Especializacion/Docencia_en_Educacion_Superior', function(){
            return view('app.contenido_estatico.carreras.posgrado.especializacion.esp_doc_ed_superior');
        })->name('carreras.posgrado.especializacion.esp_doc_ed_superior');
        
        //Historia Regional
        Route::get('carreras/posgrado/Especializacion/Historia_Regional', function(){
            return view('app.contenido_estatico.carreras.posgrado.especializacion.esp_historia_regional');
        })->name('carreras.posgrado.especializacion.esp_historia_regional');
        
        //Ensenaza de la Lengua y la Literatura
        Route::get('carreras/posgrado/Especializacion/Ensenanza_de_la_Lengua_y_la_Literatura', function(){
            return view('app.contenido_estatico.carreras.posgrado.especializacion.esp_ens_lengua_y_literatura');
        })->name('carreras.posgrado.especializacion.esp_ens_lengua_y_literatura');
        /*Especializacion*/
        
        /*Maestrias*/
        //Docencia en Educacion Superior
        Route::get('carreras/posgrado/Maestria/Docencia_en_Educacion_Superior', function(){
            return view('app.contenido_estatico.carreras.posgrado.maestria.doc_ed_superior');
        })->name('carreras.posgrado.maestria.doc_ed_superior');
      
        //Ensenaza de la Lengua y la Literatura
        Route::get('carreras/posgrado/Maestria/Estudios_Sociales_y_Culturales', function(){
            return view('app.contenido_estatico.carreras.posgrado.maestria.estudios_sociales_y_culturales');
        })->name('carreras.posgrado.maestria.estudios_sociales_y_culturales');
        /*Maestrias*/

        /*Investigacion y posgrado */
        /*----------Investigacion----------*/
        /*Investigacion -> Programa de Incentivos*/
        Route::get('Investigacion/Programa_de_Incentivos', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.investigacion.programa_incentivos');
        })->name('investigacion_y_posgrado.investigacion.programa_incentivos');

        /*Investigacion -> Jornadas*/
        Route::get('Investigacion/Jornadas', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.investigacion.jornadas');
        })->name('investigacion_y_posgrado.investigacion.jornadas');

        /*----------Posgrado----------*/
        /*Posgrado -> Cursos y seminarios Anteriores*/
        Route::get('Cursos_y_Seminarios_Anteriores', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.cursos_anteriores');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.cursos_anteriores');
        
        /*Cursos Anteriores de Posgrado*/
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2021*/
        Route::get('Cursos_y_Seminarios_Anteriores/2021', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2021');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2021');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2020*/
        Route::get('Cursos_y_Seminarios_Anteriores/2020', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2020');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2020');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2019*/
        Route::get('Cursos_y_Seminarios_Anteriores/2019', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2019');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2019');

        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2018*/
        Route::get('Cursos_y_Seminarios_Anteriores/2018', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2018');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2018');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2017*/
        Route::get('Cursos_y_Seminarios_Anteriores/2017', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2017');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2017');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2016*/
        Route::get('Cursos_y_Seminarios_Anteriores/2016', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2016');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2016');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2015*/
        Route::get('Cursos_y_Seminarios_Anteriores/2015', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2015');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2015');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2014*/
        Route::get('Cursos_y_Seminarios_Anteriores/2014', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2014');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2014');
        
        /*Posgrado -> Cursos y seminarios Anteriores -> Cursos 2013*/
        Route::get('Cursos_y_Seminarios_Anteriores/2013', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2013');
        })->name('investigacion_y_posgrado.posgrado.cursos_y_seminarios_anteriores.2013');        
        
        /*Cursos Anteriores de Posgrado*/

        /*Posgrado -> Programa de Formacion Permanente -> Cursos y Seminarios 2020*/
        Route::get('Posgrado/Programa_de_Formacion_Permanente/Cursos_2020', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.programa_de_formacion_permanente.cursos_2020');
        })->name('cursos_2020');

        /*Posgrado -> Programa de Formacion Permanente -> Cursos y Seminarios 2021*/
        Route::get('Posgrado/Programa_de_Formacion_Permanente/Cursos_2021', function(){
            return view('app.contenido_estatico.investigacion_y_posgrado.posgrado.programa_de_formacion_permanente.cursos_2021');
        })->name('cursos_2021');        
        /*Investigacion y posgrado */        
//--------------------------------POSGRADO--------------------------------

//--------------------------------SERVICIOS--------------------------------
    // Servicios->Servicios Externos
    Route::get('/servicios_externos', function(){
        return view('app.contenido_estatico.servicios.servicios_externos');
    })->name('servicios.servicios_externos');

    /*Examen de Acreditación de Lengua Inglesa*/
    Route::get('/servicios_externos/serex/Examen_Acreditacion', function(){
        return view('app.contenido_estatico.servicios.serex.examen_acreditacion');
    })->name('servicios.serex.examen_acreditacion');
    
    /*Evaluacion de Competencias*/
    Route::get('/servicios_externos/serex/Evaluacion_de_Competencias', function(){
        return view('app.contenido_estatico.servicios.serex.evaluacion_competencias');
    })->name('servicios.serex.evaluacion_competencias');
//--------------------------------SERVICIOS--------------------------------

//--------------------------------FOOTER--------------------------------
    // Footer->Estatutos
    Route::get('/estatutos', function(){
        return view('app.contenido_estatico.footer.estatutos');
    })->name('footer.estatutos');
    
    // Footer->Protocolo
    Route::get('/protocolo', function(){
        return view('app.contenido_estatico.footer.protocolo');
    })->name('footer.protocolo');
    
    // Footer->Reglamentos
    Route::get('/reglamentos', function(){
        return view('app.contenido_estatico.footer.reglamentos');
    })->name('footer.reglamentos');

    // Footer->Boletin de Prensa
    Route::get('/boletin', function(){
        return view('app.contenido_estatico.footer.boletin');
    })->name('footer.boletin');

    // Footer->Consejo Directivo
    Route::get('/Consejo-Directivo', function(){
        return view('app.contenido_estatico.footer.consejo');
    })->name('footer.consejo');

    // Footer->Autoridades
    Route::get('/Autoridades', function(){
        return view('app.contenido_estatico.footer.autoridades');
    })->name('footer.autoridades');

    // Footer->Contactos
    Route::get('/Contacto', function(){
        return view('app.contenido_estatico.footer.contacto');
    })->name('footer.contacto');    
//--------------------------------FOOTER--------------------------------

//--------------------------------COMUNIDAD GRADUADA--------------------------------
    // Comunidad Graduada
    Route::get('/comunidad_graduada', function(){
        return view('app.contenido_estatico.comunidad-graduada.comunidad_graduada');
    })->name('comunidad-graduada.comunidad_graduada');

//--------------------------------Docentes--------------------------------
    
    // Docentes
    Route::get('/docentes-inicio', function(){
        return view('app.contenido_estatico.docentes.inicio');
    })->name('docentes.inicio');    

    // Docentes->Tramites y certificaciones
    Route::get('/docentes/tramites-y-certificaciones/tramites_y_certificaciones', function(){
        return view('app.contenido_estatico.docentes.tramites-y-certificaciones.tramites_y_certificaciones');
    })->name('docentes.tramites_y_certificaciones');

//--------------------------------NoDocentes--------------------------------
    
    // NoDocentes
    Route::get('/nodocentes-inicio', function(){
        return view('app.contenido_estatico.nodocentes.inicio');
    })->name('nodocentes.inicio');    

    // NoDocentes->Tramites y certificaciones
    Route::get('/nodocentes/tramites-y-certificaciones/tramites_y_certificaciones', function(){
        return view('app.contenido_estatico.nodocentes.tramites-y-certificaciones.tramites_y_certificaciones');
    })->name('nodocentes.tramites_y_certificaciones');

//--------------------------------Ingresantes--------------------------------
    
    // Ingresantes
    Route::get('/ingresantes-inicio', function(){
        return view('app.contenido_estatico.ingresantes.inicio');
    })->name('ingresantes.inicio');    

    // Ingresantes->Mi Primer Año
    Route::get('/ingresantes/Mi-1er-año-en-la-facultad', function(){
        return view('app.contenido_estatico.ingresantes.mi-primer-año-en-la-facultad.mi-primer-anio');
    })->name('mi-primer-año-en-la-facultad.mi-primer-anio');

//--------------------------------Estudiantes--------------------------------
    
    // Estudiantes
    Route::get('/estudiantes-inicio', function(){
        return view('app.contenido_estatico.estudiantes.inicio');
    })->name('estudiantes.inicio');    

    // Estudiantes->Certificaciones y formularios
    Route::get('/estudiantes/certificaciones_y_formularios', function(){
        return view('app.contenido_estatico.estudiantes.certificaciones.certificaciones_y_formularios');
    })->name('certificaciones-y-formularios.certificaciones_y_formularios');
    
//--------------------------------Carousel--------------------------------
    
    // Carousel
    Route::get('/carousel/extension', function(){
        return view('app.contenido_estatico.carousel.extension');
    })->name('carousel.extension');

//--------------------------------Extension--------------------------------
    //Proyecto de digitalización
    Route::get('/extension/Proyecto-digitalizacion', function(){
        return view('app.contenido_estatico.extension.proyecto-de-digitalizacion');
    })->name('extension.proyecto-de-digitalizacion');     

//-------------------------------Departamentos Contacto--------------------
Route::get('/contactos/ciencias-educacion', function(){
    return view('app.contenido_estatico.departamento.ciencias-educacion');
})->name('departamento.ciencias-educacion');

Route::get('/contactos/comunicacion-social', function(){
    return view('app.contenido_estatico.departamento.comunicacion-social');
})->name('departamento.comunicacion-social');

Route::get('/contactos/educacion-inicial', function(){
    return view('app.contenido_estatico.departamento.educacion-inicial');
})->name('departamento.educacion-inicial');

Route::get('/contactos/educacion-primaria', function(){
    return view('app.contenido_estatico.departamento.educacion-primaria');
})->name('departamento.educacion-primaria');

Route::get('/contactos/formacion-docente', function(){
    return view('app.contenido_estatico.departamento.formacion-docente');
})->name('departamento.formacion-docente');

Route::get('/contactos/geografia', function(){
    return view('app.contenido_estatico..departamento.geografia');
})->name('departamento.geografia');

Route::get('/contactos/historia', function(){
    return view('app.contenido_estatico.departamento.historia');
})->name('departamento.historia');

Route::get('/contactos/lenguas-extranjeras', function(){
    return view('app.contenido_estatico.departamento.lenguas-extranjeras');
})->name('departamento.lenguas-extranjeras');

Route::get('/contactos/letras', function(){
    return view('app.contenido_estatico.departamento.letras');
})->name('departamento.letras');


/*Sección Posgrado Nueva*/
Route::get('/Posgrado', function(){
    return view('app.contenido_estatico.posgrado.home');
})->name('posgrado.home');

Route::get('/Posgrado/Especializacion-en-docencia-en-educacion-superior', function(){
    return view('app.contenido_estatico.posgrado.especializacion-en-docencia-en-educacion-superior');
})->name('posgrado.especializacion-en-docencia-en-educacion-superior');

Route::get('/Posgrado/Especializacion-Historia-Regional', function(){
    return view('app.contenido_estatico.posgrado.especializacion-historia-regional');
})->name('posgrado.especializacion-historia-regional');

Route::get('/Posgrado/Especializacion-en-Ensenanza-de-la-Lengua-y-Literatura', function(){
    return view('app.contenido_estatico.posgrado.especializacion-en-ensenanza');
})->name('posgrado.especializacion-en-ensenanza');

Route::get('/Posgrado/Maestria-en-Docencia-en-Educacion-Superior', function(){
    return view('app.contenido_estatico.posgrado.maestria-educacion');
})->name('posgrado.maestria-educacion');

Route::get('/Posgrado/Maestria-en-Estudios-Sociales-y-Culturales', function(){
    return view('app.contenido_estatico.posgrado.maestria-estudios-sociales');
})->name('posgrado.maestria-estudios-sociales');

/*Certificados Jornadas Investigacion */
/*Route::get('/Posgrado/Certificados-Jornadas-Investigacion', function(){
    return view('app.contenido_estatico.posgrado.certificados-jornadas-investigacion');
})->name('posgrado.certificados-jornadas-investigacion');*/

/*Sección Posgrado Nueva*/


/* Archivo Noticias*/
Route::get('/Noticias/Archivo', function(){
    return view('app.contenido_estatico.archivo-noticias.noticias');
})->name('archivo-noticias.noticias');

// Institutos->Institutos de Investigación
Route::get('/Institutos-de-investigación', function(){
    return view('app.contenido_estatico.institutos.institutos-de-investigacion');
})->name('institutos.institutos-de-investigacion');



    // Carousel
    Route::get('/Asignaturas-licenciaturas', function(){
        return view('app.contenido_estatico.carousel.asignaturas-licenciaturas');
    })->name('carousel.asignaturas-licenciaturas');


// Investigacion->Investigación
/*Route::get('/Investigacion', function(){
    return view('app.contenido_estatico.investigacion.investigacion');
})->name('investigacion.investigacion');*/

        /*Posgrado a distancia*/
        /*Especializacion*/
        //Docencia en Educacion Superior
        Route::get('carreras/posgrado/Especializacion/Docencia_en_Educacion_Superior_a_distancia', function(){
            return view('app.contenido_estatico.carreras.posgrado.especializacion.esp_doc_ed_superior-a-distancia');
        })->name('carreras.posgrado.especializacion.esp_doc_ed_superior-a-distancia');
        
        /*Maestrias*/
        //Docencia en Educacion Superior
        Route::get('carreras/posgrado/Maestria/Docencia_en_Educacion_Superior_a_distancia', function(){
            return view('app.contenido_estatico.carreras.posgrado.maestria.doc_ed_superior-a-distancia');
        })->name('carreras.posgrado.maestria.doc_ed_superior-a-distancia');


    // Carousel
    Route::get('/doctorado-en-estudios-contemporaneos', function(){
        return view('app.contenido_estatico.carousel.doctorado-en-estudios-contemporaneos');
    })->name('carousel.doctorado-en-estudios-contemporaneos');  
    
    // Carousel
    Route::get('/Especializacion-y-Maestria-en-Docencia-en-Educacion-Superior-carreras-de-posgrado-a-distancia', function(){
        return view('app.contenido_estatico.carousel.plazos-inscripcion');
    })->name('carousel.plazos-inscripcion');
    
    // Carousel
    Route::get('/Estudiantes/Beca-tutor', function(){
        return view('app.contenido_estatico.carousel.beca-tutor');
    })->name('carousel.beca-tutor');
    
    // Cursos y seminarios anteriores a 2022
    Route::get('/Comunidad-graduada/Cursos-y-Seminarios-anteriores', function(){
        return view('app.contenido_estatico.comunidad-graduada.cursos-y-seminarios-anteriores');
    })->name('comunidad-graduada.cursos-y-seminarios-anteriores');

    // Carousel
    Route::get('/Practica-Educativa-Interna', function(){
        return view('app.contenido_estatico.carousel.practica-educativa-interna');
    })->name('carousel.practica-educativa-interna');
    
/*Doctorado es estudios contemporáneos*/
Route::get('carreras/posgrado/Doctorado/Doctorado-en-Estudios-Contemporaneos', function(){
    return view('app.contenido_estatico.carreras.posgrado.doctorado.doctorado-en-estudios-contemporaneos');
})->name('carreras.posgrado.doctorado.doctorado-en-estudios-contemporaneos');    


/*-------------------------------------------------------- Servicios --------------------------------------------------------*/
/* Inicio */
Route::get('/servicios', function(){
    return view('app.contenido_estatico.servicios.inicio');
})->name('servicios.inicio');

/* SERTRA */
Route::get('/servicios/sertra', function(){
    return view('app.contenido_estatico.servicios.sertra');
})->name('servicios.sertra');

/* SERLECES */
Route::get('/servicios/serleces', function(){
    return view('app.contenido_estatico.servicios.serleces');
})->name('servicios.serleces');

/* SerEx */
Route::get('/servicios/serex', function(){
    return view('app.contenido_estatico.servicios.serex');
})->name('servicios.serex');

/* SerEx */
Route::get('/servicios/serex/inicio', function(){
    return view('app.contenido_estatico.servicios.serex.inicio');
})->name('servicios.serex.inicio');

/* Examenes de acreditación */
Route::get('/servicios/serex/examenes-de-acreditacion-de-nivel-de-lengua-inglesa', function(){
    return view('app.contenido_estatico.servicios.serex.examenes-de-acreditacion-de-nivel-de-lengua-inglesa');
})->name('servicios.serex.examenes-de-acreditacion-de-nivel-de-lengua-inglesa');

/* Evaluación de Compentencias */
Route::get('/servicios/serex/evaluacion-de-competencias-comunicativas', function(){
    return view('app.contenido_estatico.servicios.serex.evaluacion-de-competencias-comunicativas');
})->name('servicios.serex.evaluacion-de-competencias-comunicativas');

/*-------------------------------------------------------- Servicios --------------------------------------------------------*/

/*Carousel Difusión*/
Route::get('/Difusion', function(){
    return view('app.contenido_estatico.carousel.difusion');
})->name('carousel.difusion');

/*-------------------------------------------------------- Posgrado PFPG --------------------------------------------------------*/
/*Convocatoria-para-la-presentacion-de-propuestas-Programa-de-Formacion-Permanente-para-graduadxs*/
Route::get('/Convocatoria-para-la-presentacion-de-propuestas-Programa-de-Formacion-Permanente-para-graduadxs', function(){
    return view('app.contenido_estatico.difusion.convocatorias');
})->name('.difusion.convocatorias');

/*Carousel Difusión*/
Route::get('/Pautas-para-la-presentacion-de-propuestas', function(){
    return view('app.contenido_estatico.difusion.pautas');
})->name('difusion.pautas');

/*-------------------------------------------------------- Posgrado PFPG --------------------------------------------------------*/

/*-------------------------------------------------------- Test --------------------------------------------------------*/
Route::get('/Test', function(){
    return view('app.contenido_estatico.test.test');
})->name('test.test');
/*-------------------------------------------------------- Test --------------------------------------------------------*/

/*-------------------------------------------------------- Beca --------------------------------------------------------*/
    // Carousel
    Route::get('/Estudiantes/Beca', function(){
        return view('app.contenido_estatico.carousel.beca');
    })->name('carousel.beca');
/*-------------------------------------------------------- Beca --------------------------------------------------------*/



/*-------------------------------------------------------- Direccion-del-Instituto-de-Estudios-Clasicos-y-Traduccion  --------------------------------------------------------*/
    // Carousel
    Route::get('/direccion-del-Instituto-de-Estudios-Clasicos-y-Traduccion', function(){
        return view('app.contenido_estatico.carousel.direccion-del-Instituto-de-Estudios-Clasicos-y-Traduccion');
    })->name('carousel.direccion-del-Instituto-de-Estudios-Clasicos-y-Traducciona');

/*-------------------------------------------------------- Direccion-del-Instituto-de-Estudios-Clasicos-y-Traduccion  --------------------------------------------------------*/


/*ChatBot Reglamento Academico FCH*/
/*Route::get('/chatbot-Reglamento-Academico-FCH', function(){
    return view('app.contenido_estatico.chatbot.chatbot-reglamento-academico');
})->name('chatbot.chatbot-reglamento-academico');*/



/*Carousel Difusión - Reglamento Académico Youtube*/
Route::get('/Reglamento-Academico', function(){
    return view('app.contenido_estatico.difusion.reglamento-academico');
})->name('difusion.reglamento-academico');

/*Carousel Difusión*/
Route::get('/Puentes-a-la-comunidad', function(){
    return view('app.contenido_estatico.carousel.puentes-a-la-comunidad');
})->name('carousel.puentes-a-la-comunidad');


/*Comunidad Graduada Elecciones*/
Route::get('/comunidad-graduada/elecciones', function(){
    return view('app.contenido_estatico.comunidad-graduada.elecciones');
})->name('comunidad-graduada.elecciones');


/*Carousel Difusión Becas Posgrado*/
Route::get('/Convocatoria-a-las-Becas-de-Estimulo-a-las-Vocaciones-Cientificas', function(){
    return view('app.contenido_estatico.carousel.becas');
})->name('carousel.becas');


/* --------------------------- Sección Declaraciones--------------------------- */
/*-- Home --*/
Route::get('/Declaraciones', function(){
    return view('app.contenido_estatico.carousel.declaraciones.home');
})->name('carousel.declaraciones.home');

/* Listado de declaraciones  */
/*-- 1 --*/
Route::get('/Declaraciones/1', function(){
    return view('app.contenido_estatico.carousel.declaraciones.1');
})->name('carousel.declaraciones.1');
/*-- 1 --*/

/* --------------------------- Sección Declaraciones--------------------------- */