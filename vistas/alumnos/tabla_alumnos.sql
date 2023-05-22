CREATE TABLE alumnos(
    alum_id SERIAL PRIMARY KEY,
    alum_nombres VARCHAR(50),
    alum_apellidos VARCHAR(50),
    alum_fecha_nac DATETIME YEAR TO DAY,
    alum_tel INTEGER,
    alum_correo VARCHAR(50)
);

Select * from alumnos