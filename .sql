DROP DATABASE IF EXISTS webbanhang;
CREATE DATABASE webbanhang CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE webbanhang;

CREATE TABLE loai_san_pham(
    Maloai INT(11) PRIMARY KEY AUTO_INCREMENT,
    Tenloai VARCHAR(50) NOT NULL,
    Mota text NULL
);
CREATE TABLE san_pham(
    Masp INT(11) PRIMARY KEY AUTO_INCREMENT,
    Tensp VARCHAR(50) NOT NULL,
    Dongia INT(11) NOT NULL,
    Hinh VARCHAR(100) NOT NULL DEFAULT 'default.jpg',
    Ngaytao DATE NOT NULL,
    Maloai INT(11) NOT NULL
);

ALTER TABLE san_pham
    ADD CONSTRAINT FK_sanpham_loai
    FOREIGN KEY (Maloai)
    REFERENCES loai_san_pham(Maloai);

INSERT INTO loai_san_pham(Maloai,Tenloai,Mota)
VALUES
( NULL,'Điện Thoại',NULL),
( NULL,'Laptop',NULL),
( NULL,'Máy Tính Bảng',NULL);

INSERT INTO san_pham(Masp,Tensp,Dongia,Hinh,Ngaytao,Maloai)
VALUES
(NULL,'iPhone 13 Pro Max 128GB',23990000,'i13-promax.jpg','2023-02-12',1),
(NULL,'iPhone 14 Pro Max',27190000,'i14-promax.jpg','2023-02-14',1),
(NULL,'Điện Thoại Oppo Reno 6 5G ',6850000,'oppo-reno6.jpg','2023-02-13',1),
(NULL,'Điện Thoại Oppo Reno 7 5G ',8900000,'oppo-reno7.jpg','2023-02-13',1),
(NULL,'Điện Thoại Oppo Reno 8 1TB ',12900000,'oppo-reno8.jpg','2023-02-14',1),
(NULL,'Laptop Acer Aspire 3 A315',11900000,'acer-aspire-a315.jpg','02-10-2023',2),
(NULL,'Laptop ASUS Rog Strix G15 G513IC',20950000,'asus-rogtrix-g15.jpg','02-11-2023',2),
(NULL,'Laptop ASUS TUF Dash F15 FX517ZE',24500000,'asus-tuf-f15.jpg','2023-02-12',2),
(NULL,'Laptop ASUS VivoBook 15X A1503ZA',18900000,'asus-vivobook-15x.jpg','2023-02-14',2),
(NULL,'Laptop Dell Latitude 3420',17900000,'Dell-latitude-3420.jpg','2023-02-14',2),
(NULL,'Laptop Dell Vostro 3400',16900000,'Dell-vostro-3400.jpg','2023-02-14',2),
(NULL,'iPad Pro 11 inch 2022 M2',20990000,'ipad-pro-m2.jpg','2023-02-12',3),
(NULL,'Samsung Galaxy Tab A8',8490000,'galaxy-tab-a8.jpg','2023-02-12',3),
(NULL,'Samsung Galaxy Tab S8 Plus 5G',25990000,'galaxy-tab-s8-plus.jpg','2023-02-12',3);
