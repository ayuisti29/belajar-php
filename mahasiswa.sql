-- membuat database
CREATE DATABASE fakultas;

-- membuat tabel
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- memasukkan data ke tabel
insert into jurusan(kode, nama) values ("APBL", "Administrasi Publik");
insert into jurusan(kode, nama) values ("PTIF", "Pendidikan Teknik Informatika");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (1, "12345678", "Ahmad Susanto", "laki-laki", "Banyuwangi", "2000-12-09", "Jl. Soekarno Hatta 8");
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) values (2, "87654321", "Susi Susanti", "perempuan", "Banyuwangi", "2001-11-07", "Jl. Soekarno Hatta 20");

-- update data
update mahasiswa set alamat = "Jl. Prambanan 10" where id = 1;
update mahasiswa set nim = "12342000", tempat_lahir = "Malang" where id = 1;

-- menampilkan semua tabel pada database
show tables;

-- menampilkan tabel yang belum terisi data
desc jurusan;
desc mahasiswa;

-- menampilkan tabel yang sudah terisi data
select * from jurusan;
select * from mahasiswa;

-- menghapus data pada tabel
delete from mahasiswa where id = 2;