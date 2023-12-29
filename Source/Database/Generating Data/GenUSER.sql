-- Sử dụng CSDL đã tạo
USE QLPKNHAKHOA
GO
--
-- Delete data from the table 'dbo.APPOINTMENT'
--
DELETE APPOINTMENT
GO
--
-- Inserting data into table into USER_DENTAL
--
SET IDENTITY_INSERT USER_DENTAL ON
GO
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (1,'Nhasi1', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User,Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (2,'Nhasi2', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (3,'Nhasi3', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (4, 'Nhasi4', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (5,'Nhasi5', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (6,'Nhasi6', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (7,'Nhasi7', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (8,'Nhasi8', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (9,'Nhasi9', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (10,'Nhasi10', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (11,'Nhasi11', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (12,'Nhasi12', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (13,'Nhasi13', N'Morris Moen', 'M', '89585', N'1201 Front Parkway', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (14,'Nhasi14', N'Leonardo Archuleta', 'F', '05852', N'586 E Rock Hill Parkway', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (15,'Nhasi15', N'Angella Munson', 'F', '80747', N'442 Mountain Pkwy', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (16,'Nhasi16', N'Dexter Driver', 'F', '87362', N'1116 Rushwood Avenue', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (17,'Nhasi17', N'Camilla Woodard', 'F', '49868', N'3727 Ski Hill Ct', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (18,'Nhasi18', N'Gregorio Bostick', 'F', '97582', N'3404 Riverside Hwy', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (19,'Nhasi19', N'Stacee Alston', 'F', '93833', N'76 Deepwood Hwy', 'Dentist')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (20,'Nhasi20', N'Abel Benavides', 'F', '14488', N'21 Beachwood Lane', 'Dentist')


INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (21,'Nhanvien1', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (22,'Nhanvien2', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr','Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (23,'Nhanvien3', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (24,'Nhanvien4', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (25,'Nhanvien5', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (26,'Nhanvien6', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (27,'Nhanvien7', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (28,'Nhanvien8', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (29,'Nhanvien9', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (30,'Nhanvien10', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (31,'Nhanvien11', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (32,'Nhanvien12', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (33,'Nhanvien13', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (34,'Nhanvien14', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (35,'Nhanvien15', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (36,'Nhanvien16', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (37,'Nhanvien17', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (38,'Nhanvien18', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (39,'Nhanvien19', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (40,'Nhanvien20', N'Patrick Perales', 'F', '76272', N'13 Edgewood Dr', 'Staff')



INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (41,'Admin1', N'Aleida Goforth', 'M', '51167', N'2709 Monument Parkway', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (42,'Admin2', N'Felipe Franco', 'M', '05233', N'56 Cedar Tree Way', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (43,'Admin3', N'Eric Gerald', 'M', '91745', N'931 2nd Hwy', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (44,'Admin4', N'Clay Abrams', 'F', '97705', N'1202 West Cedar Tree Rd', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (45,'Admin5', N'Jimmy Dexter', 'F', '35444', N'51 Hazelwood Court', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (46,'Admin6', N'Leigh Amato', 'F', '13646', N'1704 Hope Ct', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (47,'Admin7', N'Silvana Hoffmann', 'M', '37782', N'3726 Fox Hill Drive', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (48,'Admin8', N'Carmen Larue', 'F', '63368', N'2944 North Buttonwood Ln', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (49,'Admin9', N'Marvin Reis', 'F', '20735', N'2998 White Hunting Hill Ln', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (50,'Admin10', N'Demetrius Warren', 'F', '59531', N'3432 White Ashwood Hwy', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (51,'Admin11', N'Leda Bowers', 'F', '74129', N'208 Parkwood Pkwy', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (52,'Admin12', N'Jacque Johansen', 'F', '03987', N'110 Fox Hill Blvd', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (53,'Admin13', N'Darline Jobe', 'M', '74603', N'47 West Woodside Highway', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (54,'Admin14', N'Robt Huggins', 'M', '34551', N'2778 Hidden Lake Court', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (55,'Admin15', N'Leif Mast', 'M', '01121', N'218 Meadowview Way', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (56,'Admin16', N'Kent Rauch', 'F', '35735', N'62 White Town Way', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (57,'Admin17', N'Darrick Fulcher', 'F', '99497', N'3157 South Oak Parkway', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (58,'Admin18', N'Jewel Smoot', 'M', '37920', N'212 New Highland Ave', N'Admin')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (59,'Admin19', N'Elizabet Lear', 'M', '37872', N'1754 West Market Cir', 'Staff')
INSERT into USER_DENTAL(ID_User, Username, Fullname, Gender, PhoneNumber, CurrAddress, UserType) VALUES (60,'Admin20', N'Adam Conti', 'M', '95614', N'80 South Rockwood Hwy', N'Admin')
SELECT * FROM USER_DENTAL WHERE (UserType = 'Staff') and Username like '%2%' or Fullname like '%2%' or CurrAddress like '%2%'
GO

SET IDENTITY_INSERT USER_DENTAL OFF
GO