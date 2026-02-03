/* 2. Proceso Inscipción. PERMISOS DE INSERT (para añadir la fila de su usuario) Y SELECT (para mostrar la lista de deportes) */
CREATE USER 'usuarioProceso2' @'localhost' IDENTIFIED BY 'contraseñaProceso2';

GRANT SELECT, INSERT ON deportes.*TO 'inscripcion'@'localhost';



/* 3. Proceso Inicio de Sesión. PERMISOS DE SELECT (para comprobar si es admin o usuario) */
CREATE USER 'usuarioProceso3' @'localhost' IDENTIFIED BY 'contraseñaProceso3';

GRANT SELECT, INSERT ON deportes.Usuarios TO 'login'@'localhost';



/* 4. Proceso Deportes_Usuarios. PERMISOS DE SELECT (para consultar todos los usuarios y los deportes a los que estan inscritos) */
CREATE USER 'usuarioProceso4' @'localhost' IDENTIFIED BY 'contraseñaProceso4';

GRANT SELECT ON deportes.Usuarios TO 'ver_usuarios'@'localhost';

GRANT SELECT ON deportes.Usuarios_deportes TO 'ver_usuarios'@'localhost';

GRANT SELECT ON deportes.Deportes TO 'ver_usuarios'@'localhost';



/* 5. Proceso Total_Deportes. PERMISOS DE SELECT (para consultar todos los deportes que tienen a alguien inscrito) */
CREATE USER 'usuarioProceso5' @'localhost' IDENTIFIED BY 'contraseñaProceso5';

GRANT SELECT ON deportes.Usuarios_deportes TO 'total_deportes'@'localhost';



/* 6. Proceso Deportes. PERMISOS DE SELECT (para consultar todos los deportes con su total de usuarios inscritos) */
CREATE USER 'usuarioProceso6' @'localhost' IDENTIFIED BY 'contraseñaProceso6';

GRANT SELECT ON deportes.Deportes TO 'ver_deportes'@'localhost';

GRANT SELECT ON deportes.Usuarios_deportes TO 'ver_deportes'@'localhost';