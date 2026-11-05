-- Las filas viejas guardaron rutas como  public\eventos\imagenes/xxx.jpg  (barras invertidas, Windows).
-- Se pasan a barras normales; las filas nuevas ya usan "/".
UPDATE docentes                  SET CVFile             = REPLACE(CVFile, CHAR(92), '/')             WHERE CVFile             LIKE CONCAT('%', CHAR(92), '%');
UPDATE docentes                  SET imagen             = REPLACE(imagen, CHAR(92), '/')             WHERE imagen             LIKE CONCAT('%', CHAR(92), '%');
UPDATE eventos                   SET resolucion         = REPLACE(resolucion, CHAR(92), '/')         WHERE resolucion         LIKE CONCAT('%', CHAR(92), '%');
UPDATE eventos                   SET imagen             = REPLACE(imagen, CHAR(92), '/')             WHERE imagen             LIKE CONCAT('%', CHAR(92), '%');
UPDATE noticias                  SET imagen             = REPLACE(imagen, CHAR(92), '/')             WHERE imagen             LIKE CONCAT('%', CHAR(92), '%');
UPDATE publicaciones             SET imagen             = REPLACE(imagen, CHAR(92), '/')             WHERE imagen             LIKE CONCAT('%', CHAR(92), '%');
UPDATE `llamadosSeleccion`       SET resolucion         = REPLACE(resolucion, CHAR(92), '/')         WHERE resolucion         LIKE CONCAT('%', CHAR(92), '%');
UPDATE `llamadosSeleccion`       SET acta_final         = REPLACE(acta_final, CHAR(92), '/')         WHERE acta_final         LIKE CONCAT('%', CHAR(92), '%');
UPDATE programas_institucionales SET imagen             = REPLACE(imagen, CHAR(92), '/')             WHERE imagen             LIKE CONCAT('%', CHAR(92), '%');
UPDATE pasantias                 SET formulario_inscripcion = REPLACE(formulario_inscripcion, CHAR(92), '/') WHERE formulario_inscripcion LIKE CONCAT('%', CHAR(92), '%');
-- Datos de sesión de producción: no sirven en el entorno nuevo
TRUNCATE TABLE sessions;
TRUNCATE TABLE password_resets;
