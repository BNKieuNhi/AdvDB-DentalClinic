-- Sử dụng CSDL đã tạo
USE QLPKNHAKHOA
GO
--
-- Delete data from the table 'dbo.INVOICE'
--
DELETE INVOICE
GO
--
-- Inserting data into table into INVOICE
--
SET IDENTITY_INSERT INVOICE ON
GO
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (1, 1, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (2, 2, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (3, 3, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (4, 4, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (5, 5, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (6, 6, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (7, 7, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (8, 8, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (9, 9, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (10, 10, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (11, 11, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (12, 12, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (13, 13, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (14, 14, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (15, 15, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (16, 16, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (17, 17, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (18, 18, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (19, 19, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (20, 20, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (21, 21, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (22, 22, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (23, 23, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (24, 24, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (25, 25, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (26, 26, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (27, 27, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (28, 28, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (29, 29, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (30, 30, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (31, 31, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (32, 32, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (33, 33, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (34, 34, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (35, 35, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (36, 36, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (37, 37, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (38, 38, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (39, 39, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (40, 40, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (41, 41, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (42, 42, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (43, 43, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (44, 44, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (45, 45, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (46, 46, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (47, 47, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (48, 48, 2);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (49, 49, 1);
insert into INVOICE (ID_Invoice, ID_Select, ID_Payment) values (50, 50, 2);
GO

SET IDENTITY_INSERT INVOICE OFF
GO