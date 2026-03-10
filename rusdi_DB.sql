CREATE DATABASE rusdi_barbershop;

USE rusdi_barbershop;

CREATE TABLE pelanggan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    model_rambut VARCHAR(100),
    harga INT
);