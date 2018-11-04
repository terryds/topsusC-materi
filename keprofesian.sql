CREATE DATABASE blogsaya;

USE blogsaya;

CREATE TABLE artikel (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    artikel TEXT NOT NULL
) DEFAULT CHARSET=utf8;

INSERT INTO `artikel`(`judul`, `artikel`) VALUES ("Kisahku yang memorable", "Ini adalah kejadian pertama saat aku mulai blablabla");
INSERT INTO `artikel`(`judul`, `artikel`) VALUES ("Kisahku selanjutnya", "Ini adalah kejadian kedua saat aku mulai blablabla");
INSERT INTO `artikel`(`judul`, `artikel`) VALUES ("Kisahku lagi", "Ini adalah kejadian ketiga saat aku mulai blablabla");

SELECT * FROM `artikel`;

UPDATE `artikel` SET `judul`="Tidak disangka, hal ini pernah terjadi!" WHERE id =2;
DELETE FROM `artikel` WHERE id=3;