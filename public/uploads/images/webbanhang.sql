DROP DATABASE IF Exists webbanhang;
CREATE DATABASE webbanhang CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE webbanhang;

CREATE TABLE loai_san_pham(
    Maloai INT(11) PRIMARY KEY AUTO_INCREMENT,
    Tenloai VARCHAR(50) NOT NULL,
    Mota TEXT NULL
);

CREATE TABLE san_pham(
    Masp INT(11) PRIMARY KEY AUTO_INCREMENT,
    Tensp VARCHAR(50) NOT NULL,
    Dongia INT(11) NOT NULL,
    Hinh VARCHAR(100) NOT NULL DEFAULT 'images/default.jpg',
    Ngaytao DATE NOT NULL,
    Maloai INT(11)
);

ALTER TABLE san_pham
    ADD CONSTRAINT FK_LoaiSP_SP
    FOREIGN KEY (Maloai)
    REFERENCES loai_san_pham(Maloai)
    ON DELETE CASCADE 
    ON UPDATE CASCADE ;

INSERT INTO loai_san_pham (Maloai,Tenloai,Mota)
VALUES 
(NULL,'Điện Thoại',NULL),
(NULL,'Laptop',NULL),
(NULL,'Máy Tính Bảng',NULL);

INSERT INTO san_pham(Masp,Tensp,Dongia,Hinh,Ngaytao,Maloai)
 VALUES
(NULL,'Iphone 14 Pro Max (128GB)',28000000,'i14-promax.jpg','14-02-2023',1),
(NULL,'iPhone 13 Pro Max (1TB) ',34500000,'i13-promax.jpg','14-02-2023',1),
(NULL,'Oppo Reno 6z 5G ',7990000,'oppo-reno6.jpg','10-02-2023',1),
(NULL,'Oppo Reno 7 SE',8490000,'oppo-reno7.jpg','10-02-2023',1),
(NULL,'Oppo Reno 8 5G',11999000,'oppo-reno8.jpg','14-02-2023',1),
(NULL,'Laptop Asus VivoBook 15X',13990000,'asus-vivobook-15x.jpg','14-02-2023',2),
(NULL,'Laptop Asus ROG Trix G15',18490000,'asus-rogtrix-g15.jpg','12-02-2023',2),
(NULL,'Laptop Asus TUF F15',19990000,'asus-tuf-f15.jpg','11-02-2023',2),
(NULL,'Laptop Dell Latitude 3420',16790000,'Dell-latitude-3420.jpg','10-02-2023',2),
(NULL,'Laptop Dell Vostro 14 3400',17990000,'Dell-vostro-3400.jpg','13-02-2023',2),
(NULL,'Laptop Acer Aspire 3 A315',14990000,'acer-aspire-a315.jpg','13-02-2023',2),
(NULL,'Samsung Galaxy Tab A8',7790000,'galaxy-tab-a8.jpg','14-02-2023',3),
(NULL,'Samsung Galaxy Tab S8 Plus',16290000,'galaxy-tab-s8-plus.jpg','14-02-2023',3),
(NULL,'iPad Pro M2 11-inch',20490000,'ipad-pro-m2.jpg','14-02-2023',3);




