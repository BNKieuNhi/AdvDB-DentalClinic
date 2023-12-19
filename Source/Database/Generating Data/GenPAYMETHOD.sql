-- Sử dụng CSDL đã tạo
USE QLPKNHAKHOA
GO
--
-- Delete data from the table 'dbo.PAYMENT_METHOD'
--
DELETE PAYMENT_METHOD
GO
--
-- Inserting data into table into PAYMENT_METHOD
--
SET IDENTITY_INSERT PAYMENT_METHOD ON
GO
INSERT into PAYMENT_METHOD(ID_Payment, PaymentMethod) VALUES (1, 'Cash')
INSERT into PAYMENT_METHOD(ID_Payment, PaymentMethod) VALUES (2, 'Momo')
GO

SET IDENTITY_INSERT PAYMENT_METHOD ON
GO