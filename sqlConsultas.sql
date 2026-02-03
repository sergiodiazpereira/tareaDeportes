------------------------------------- MOSTRAR USUARIOS CON SUS DEPORTES ------------------------------------------
SELECT usuarios.idUsuario, usuarios.nombreUsuario, usuarios.apeNombre, usuarios.correo, usuarios.telefono, usuarios.perfil, deportes.nombreDep
FROM usuarios
LEFT JOIN usuarios_deportes ON usuarios.idUsuario = usuarios_deportes.idUsuario
LEFT JOIN deportes ON deportes.idDeporte = usuarios_deportes.idDeporte;



----------------------------- MOSTRAR EL NUMERO DE DEPORTES CON ALGUN USUARIO INSCRITO ---------------------------
SELECT COUNT(DISTINCT idDeporte) 
FROM usuarios_deportes;



----------------------------- MOSTRAR LA CANTIDAD DE USUARIOS INSCRITOS DE CADA DEPORTE --------------------------
SELECT deportes.nombreDep, COUNT(usuarios_deportes.idDeporte) AS numeroUsuarios
FROM deportes
LEFT JOIN usuarios_deportes ON deportes.idDeporte = usuarios_deportes.idDeporte
GROUP BY deportes.idDeporte;