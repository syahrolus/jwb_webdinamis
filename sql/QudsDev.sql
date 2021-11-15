USE qudsdev;

CREATE TABLE Bidang (
	id_bidang INT(11) AUTO_INCREMENT PRIMARY KEY,
	nama_bidang VARCHAR(255) NOT NULL
);
CREATE TABLE Kategori_events (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_kategori VARCHAR(255) UNIQUE
);
CREATE TABLE Instruktur (
	id_instruktur INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama_instruktur VARCHAR(255) NOT NULL,
	tgl_lahir DATE NOT NULL,
	alamat_instrukur VARCHAR(255),
	gender BOOLEAN NOT NULL,
	bidang INT(11),
	CONSTRAINT fk_instruktur_bidang FOREIGN KEY (bidang) REFERENCES Bidang(id_bidang)
);
CREATE TABLE User (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL UNIQUE,
	pass VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL UNIQUE,
	no_hp BIGINT(255) NOT NULL UNIQUE,
	tgl_lahir DATE NOT NULL,
	gender BOOLEAN NOT NULL,
	alamat VARCHAR(255),
	level VARCHAR(255) NOT NULL
);

CREATE TABLE Events (
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
	CONSTRAINT fk_events_user FOREIGN KEY (id_admin) REFERENCES User(id)
);
CREATE TABLE Record_events_peserta (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	id_peserta INT(11) NOT NULL,
	id_event INT(11) NOT NULL,
	status CHAR(10),
	id_admin INT(11),
	CONSTRAINT fk_record_peserta FOREIGN KEY (id_peserta) REFERENCES User(id),
	CONSTRAINT fk_record_event FOREIGN KEY (id_event) REFERENCES Events(id_event),
	CONSTRAINT fk_record_admin FOREIGN KEY (id_admin) REFERENCES User(id)
);
CREATE TABLE Uang_peserta (
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	jumlah BIGINT(255) NOT NULL,
	id_peserta INT(11) NOT NULL,
	tgl_kirim DATE NOT NULL,
	event INT(11) NOT NULL,
	id_admin INT(11),
	CONSTRAINT fk_up_idu FOREIGN KEY (id_peserta) REFERENCES User(id),
	CONSTRAINT fk_up_event FOREIGN KEY (event) REFERENCES Events(id_event),
	CONSTRAINT fk_up_ida FOREIGN KEY (id_admin) REFERENCES User(id)
);

SELECT * FROM User;

# input admin
INSERT INTO User (id, username, pass, email, no_hp, tgl_lahir, gender, alamat, level) 
VALUES 
	(DEFAULT, "stepen", "stepen", "stepen@gmail.com", "6281234567", "2000-12-15", 1, "spanyol", "admin"),
	(DEFAULT, "cow", "cow", "cow@gmail.com", "6281234568", "2000-12-15", 0, "inggris", "admin");
SELECT * FROM User;

SELECT * FROM Events;

SELECT * FROM User WHERE email='stepen@gmail.com' AND pass='stepen';

SELECT  *
FROM Events 
JOIN Kategori_events ON Events.kategori=Kategori_events.id 
JOIN Instruktur ON Events.instruktur=Instruktur.id_instruktur 
JOIN User ON Events.id_admin=User.id

SELECT * FROM Record_events_peserta;
SELECT * FROM User;
SELECT * FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event JOIN User ON Record_events_peserta.id_peserta=User.id WHERE User.username='gunawan' AND Record_events_peserta.status='blm_bayar';
SELECT * FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event;
SELECT * FROM Record_events_peserta JOIN Events ON Record_events_peserta.id_event=Events.id_event JOIN User ON Record_events_peserta.id_peserta=User.id WHERE User.username='gunawan' AND Record_events_peserta.status='blm_bayar';
