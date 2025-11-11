CREATE DATABASE IF NOT EXISTS qlthuocankhangca1 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE qlthuocankhangca1;

CREATE TABLE danhmuc (
  madm INT AUTO_INCREMENT PRIMARY KEY,
  tendm VARCHAR(100)
);

CREATE TABLE donvitinh (
  madv INT AUTO_INCREMENT PRIMARY KEY,
  tendv VARCHAR(50)
);

CREATE TABLE nhanvien (
  manv INT AUTO_INCREMENT PRIMARY KEY,
  hoten VARCHAR(100),
  gt ENUM('Nam','Nữ','Khác'),
  ns DATE,
  ngayvl DATE
);

CREATE TABLE sanpham (
  masp INT AUTO_INCREMENT PRIMARY KEY,
  tensp VARCHAR(255),
  giaban DECIMAL(10,2),
  giamgia DECIMAL(10,2),
  hinhnsp VARCHAR(255),
  congdung TEXT,
  xuatsu VARCHAR(100),
  cachdung TEXT,
  madm INT,
  madv INT,
  FOREIGN KEY (madm) REFERENCES danhmuc(madm),
  FOREIGN KEY (madv) REFERENCES donvitinh(madv)
);

CREATE TABLE donhang (
  sodh INT AUTO_INCREMENT PRIMARY KEY,
  ngaytao DATETIME,
  giamgia DECIMAL(10,2),
  manv INT,
  FOREIGN KEY (manv) REFERENCES nhanvien(manv)
);

CREATE TABLE chitietdh (
  id INT AUTO_INCREMENT PRIMARY KEY,
  sodh INT,
  masp INT,
  sl INT,
  gia DECIMAL(10,2),
  FOREIGN KEY (sodh) REFERENCES donhang(sodh),
  FOREIGN KEY (masp) REFERENCES sanpham(masp)
);
