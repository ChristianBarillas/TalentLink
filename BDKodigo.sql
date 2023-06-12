CREATE TABLE `estudiante` (
  `id_carnet` integer PRIMARY KEY,
  `nombre` varchar(255),
  `apellido` varchar(255),
  `correo` varchar(255),
  `telefono` integer,
  `id_universidad` varchar(255),
  `carrera` varchar(255)
);

CREATE TABLE `universidad` (
  `id_universidad` integer PRIMARY KEY,
  `id_carnet` integer,
  `carrera` varchar(255)
);

CREATE TABLE `empresa` (
  `id_empresa` integer PRIMARY KEY,
  `nombre_empresa` varchar(255),
  `proyectos_por_carrera` varchar(255),
  `carrera` varchar(255)
);

ALTER TABLE `universidad` ADD FOREIGN KEY (`id_universidad`, `id_carnet`, `carrera`) REFERENCES `estudiante` (`id_carnet`, `id_universidad`, `carrera`);

ALTER TABLE `empresa` ADD FOREIGN KEY (`carrera`) REFERENCES `universidad` (`carrera`);
