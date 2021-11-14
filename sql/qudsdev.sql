USE qudsdev;

CREATE TABLE coba (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(255)
);

DROP TABLE coba;

CREATE TABLE Admin (
	id_admin INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_admin VARCHAR(255) NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL,
	alamat VARCHAR(255) NOT NULL,
	tgl_lahir DATE NOT NULL,
	gender BOOLEAN NOT NULL
);
DROP TABLE Admin;
CREATE TABLE Peserta (
	id_peserta INT(11) PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL UNIQUE,
	pass VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	no_hp BIGINT(255) NOT NULL UNIQUE,
	tgl_lahir DATE NOT NULL,
	gender BOOLEAN NOT NULL,
	alamat_peserta VARCHAR(255)
);
ALTER TABLE Peserta ADD COLUMN id_admin INT(11) AFTER alamat_peserta;
ALTER TABLE Peserta ADD CONSTRAINT fk_peserta_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin);

CREATE TABLE Instruktur (
	id_instruktur INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_instruktur VARCHAR(255) NOT NULL,
	tgl_lahir DATE NOT NULL,
	alamat_instrukur VARCHAR(255),
	gender BOOLEAN NOT NULL,
	bidang INT(11),
	CONSTRAINT fk_instruktur_bidang FOREIGN KEY (bidang) REFERENCES Bidang(id_bidang)
);

CREATE TABLE Bidang (
	id_bidang INT(11) AUTO_INCREMENT PRIMARY KEY,
	nama_bidang VARCHAR(255) NOT NULL,
	id_admin INT(11) NOT NULL,
	CONSTRAINT fk_bidang_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin)
);

CREATE TABLE Kategori_events (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_kategori VARCHAR(255) UNIQUE
);

CREATE TABLE EVENTS (
	id_event INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_event VARCHAR(255),
	kategori INT(11) NOT NULL,
	tgl_mulai DATE NOT NULL,
	tgl_akhir DATE NOT NULL,
	harga BIGINT(255) NOT NULL,
	deskripsi VARCHAR(255),
	instruktur INT(11) NOT NULL,
	id_admin INT(11) NOT NULL,
	CONSTRAINT fk_events_kategori FOREIGN KEY (kategori) REFERENCES Kategori_events(id),
	CONSTRAINT fk_events_instruktur FOREIGN KEY (instruktur) REFERENCES Instruktur(id_instruktur),
	CONSTRAINT fk_events_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin)
);

CREATE TABLE Record_events_peserta (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	id_peserta INT(11) NOT NULL,
	id_event INT(11) NOT NULL,
	STATUS CHAR(10),
	id_admin INT(11),
	CONSTRAINT fk_record_peserta FOREIGN KEY (id_peserta) REFERENCES Peserta(id_peserta),
	CONSTRAINT fk_record_event FOREIGN KEY (id_event) REFERENCES EVENTS(id_event),
	CONSTRAINT fk_record_admin FOREIGN KEY (id_admin) REFERENCES Admin(id_admin)
);


USE qudsdev;

# data admin
INSERT INTO Admin (id_admin, nama_admin, email, alamat, tgl_lahir, gender) 
VALUES 
	(DEFAULT, "stepen", "stepen@gmail.com", "spanyol", "2000-12-15", 1),
	(DEFAULT, "carloz", "carloz@gmail.com", "argentina", "2000-12-30", 0),
	(DEFAULT, "gunawan", "gunawan@gmail.com", "jawa", "2000-12-30", 1);
SELECT * FROM Admin;

# data kategori event
INSERT INTO Kategori_events (id, nama_kategori) 
VALUES (DEFAULT, "Training");
INSERT INTO Kategori_events (id, nama_kategori) 
VALUES (DEFAULT, "Mentorship");
INSERT INTO Kategori_events (id, nama_kategori) 
VALUES (DEFAULT, "Webinar");
SELECT * FROM Kategori_events ORDER BY id;
TRUNCATE TABLE Kategori_events;
# data peserta
INSERT INTO Peserta (id_peserta, username, pass, email, no_hp, tgl_lahir, gender, alamat_peserta)
VALUES (DEFAULT, "marko", "polo", "marko@gmail.com", 08123456789, "2000-12-30", 1, "argentina");
INSERT INTO Peserta (id_peserta, username, pass, email, no_hp, tgl_lahir, gender, alamat_peserta)
VALUES (DEFAULT, "johnson", "rocky", "john@gmail.com", 08987632, "2000-12-30", 0, "spanyol");
INSERT INTO Peserta (id_peserta, username, pass, email, no_hp, tgl_lahir, gender, alamat_peserta)
VALUES (DEFAULT, "Eko", "nomi", "Oke@gmail.com", 08891237, "2000-12-30", 1, "Jepang");
INSERT INTO Peserta (id_peserta, username, pass, email, no_hp, tgl_lahir, gender, alamat_peserta)
VALUES 
	(DEFAULT, "Oke", "nomi", "Ikoy@gmail.com", 08783123178, "2000-12-30", 1, "Jepang"),
	(DEFAULT, "Wohe", "ihoy", "Wohe@gmail.com", 08715237, "2000-12-30", 0, "Jepang"),
	(DEFAULT, "Tui", "nomi", "Ikey@gmail.com", 087123447898, "2000-12-30", 1, "Jepang");
DELETE FROM Peserta WHERE gender=2;
SELECT * FROM Peserta;
# data bidang
SELECT * FROM Bidang;
SELECT * FROM Admin;
SELECT * FROM Bidang JOIN Admin ON Bidang.id_admin=Admin.id_admin;
SELECT Bidang.id_bidang AS id, Bidang.nama_bidang AS nama, Admin.nama_admin AS nama_admin FROM Bidang JOIN Admin ON Bidang.id_admin=Admin.id_admin;
# data instruktur
SELECT * FROM Instruktur;
SELECT * FROM Instruktur JOIN Bidang ON Instruktur.bidang=Bidang.id_bidang;
INSERT INTO Instruktur (id_instruktur, nama_instruktur, tgl_lahir, alamat_instrukur, gender, bidang)
VALUES 
	(DEFAULT, "instruktur 2", "1995-01-01", "Spanyol", 0, 4);
	
# events
SELECT * FROM EVENTS;
DROP TABLE EVENTS;
INSERT INTO EVENTS (id_event, nama_event, kategori, tgl_mulai, tgl_akhir, harga, deskripsi, instruktur, id_admin)
    VALUES
        (DEFAULT, "Event 1", 75, "2000-12-15", "2000-12-15", 2000000, "oke", 4, 12);

SELECT * FROM EVENTS JOIN Kategori ON Events.
