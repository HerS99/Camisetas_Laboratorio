CREATE DATABASE IF NOT EXISTS Equipos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Equipos;

CREATE TABLE IF NOT EXISTS camisetas (
     id INT AUTO_INCREMENT PRIMARY KEY,
    equipo VARCHAR(100) NOT NULL,
    jugador VARCHAR(100) NOT NULL,
    numero INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO camisetas (equipo, jugador, numero) VALUES
('Boca Juniors', 'Juan Román Riquelme', 10),
('River Plate', 'Enzo Pérez', 24),
('Barcelona', 'Lionel Messi', 10);