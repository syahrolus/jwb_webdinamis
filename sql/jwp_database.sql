CREATE DATABASE jwp_database;

USE jwp_database;

DROP DATABASE jwp_database;

DROP TABLE pegawai;

########## tabel pegawai ##########
CREATE TABLE pegawai (
	id_pegawai INT(11) PRIMARY KEY AUTO_INCREMENT,
	nama VARCHAR(255),
	jk BOOLEAN,
	no_hp INT(15),
	alamat VARCHAR(255),
	jabatan VARCHAR(255),
	email VARCHAR(255)
);
########## tabel jabatan ##########
CREATE TABLE jabatan (
	id_jabatan INT(11) AUTO_INCREMENT PRIMARY KEY,
	nama_jabatan VARCHAR(255)
);

########## command ##########

SELECT * FROM pegawai;

# nambah kolom
ALTER TABLE pegawai ADD department VARCHAR(100);
ALTER TABLE pegawai ADD id_jbtn INT(11);
# hapus kolom
ALTER TABLE pegawai DROP COLUMN jabatan;
# ubah kolom
ALTER TABLE pegawai CHANGE jabatan posisi VARCHAR(255);
# ubah tipe data kolom
ALTER TABLE pegawai MODIFY COLUMN jk VARCHAR(20);
ALTER TABLE pegawai MODIFY COLUMN jk BOOLEAN;
ALTER TABLE pegawai MODIFY COLUMN jk BOOLEAN NOT NULL;
# edit constraint
ALTER TABLE pegawai MODIFY COLUMN nama VARCHAR(255) NOT NULL;
ALTER TABLE pegawai MODIFY COLUMN no_hp INT(15) NOT NULL;

ALTER TABLE pegawai ADD CONSTRAINT pegawai_key PRIMARY KEY (id_pegawai);
ALTER TABLE pegawai DROP PRIMARY KEY;

# ? setelah pkey
ALTER TABLE pegawai MODIFY COLUMN id_pegawai INT(11);

# foreign key ke jabatan
ALTER TABLE pegawai ADD id_jabatan INT(11);
ALTER TABLE pegawai MODIFY COLUMN id_jabatan INT(11) NOT NULL;
ALTER TABLE pegawai ADD FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan); # cara lain
ALTER TABLE pegawai ADD CONSTRAINT fk_jbtn_pgw FOREIGN KEY (id_jbtn) REFERENCES jabatan(id_jabatan);
# hapus foreign key
ALTER TABLE pegawai DROP FOREIGN KEY asdfasfadsf;


INSERT INTO jabatan (id_jabatan, nama_jabatan) VALUES (DEFAULT,'User');
INSERT INTO jabatan (id_jabatan, nama_jabatan) VALUES (DEFAULT,'Admin');
DELETE FROM jabatan WHERE id_jabatan>1;
SELECT * FROM jabatan;
SELECT * FROM pegawai;

ALTER TABLE pegawai DROP COLUMN jabatan;


TRUNCATE TABLE jabatan;
DROP TABLE jabatan;
DROP TABLE pegawai;

ALTER TABLE pegawai ADD CONSTRAINT pegawai_key_inc AUTO_INCREMENT (id_pegawai);

INSERT INTO pegawai (
	id_pegawai, nama, jk, no_hp, alamat, email, id_jbtn
) VALUES (
	DEFAULT, "user 2", 1, 123, "SPANYOL", "ganteng@gamil.com", 1
);
INSERT INTO pegawai (
	id_pegawai, nama, jk, no_hp, alamat, email, id_jbtn
) VALUES (
	DEFAULT, "admin 1", 1, 123, "SPANYOL", "ganteng@gamil.com", 2
);


SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jbtn=jabatan.id_jabatan;

SELECT * FROM jabatan JOIN pegawai ON jabatan.id_jabatan=pegawai.id_jbtn;

SELECT pegawai.id_pegawai AS id, pegawai.nama AS nama, jabatan.nama_jabatan AS jabatan FROM jabatan JOIN pegawai ON jabatan.id_jabatan=pegawai.id_jbtn;







