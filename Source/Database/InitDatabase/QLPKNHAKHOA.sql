-- Kiểm tra CSLD QLDTAI tồn tại chưa
IF DB_ID('QLPKNHAKHOA') IS NOT NULL
	DROP DATABASE QLPKNHAKHOA
CREATE DATABASE QLPKNHAKHOA
GO
-- Sử dụng CSDL đã tạo
USE QLPKNHAKHOA
GO
-- ACCOUNT --
create table ACCOUNT
(
	Username varchar(20) not null,
	Pass_word varchar(20) not null,
	isActive varchar(3) not null default 'Yes',

	constraint PK_ACCOUNT
	primary key (Username),

	constraint CK_ACCOUNT_isActive
	check (isActive = 'Yes' or isActive = 'No'),
);
-- USER --
create table USER_DENTAL
(
	ID_User integer identity(1,1) not null,
	ID as 'U' + right('00000000' + cast(ID_User as varchar(10)),9) persisted,
	Username varchar(20) not null,
	Fullname nvarchar(50) not null,
	Gender nvarchar(3) not null,
	PhoneNumber char(10) not null,
	CurrAddress nvarchar(50) not null,
	UserType nvarchar(9) not null,

	constraint PK_USERDENTAL
	primary key (ID_User),

	constraint CK_USER_Gender
	check (Gender = 'Nam' or Gender = N'Nữ'),

	constraint CK_USER_UserType
	check (UserType = N'Nha sĩ' or UserType = N'Nhân viên' or UserType = 'Admin'),
);

-- ADMIN --
create table AD
(
	ID_Admin integer not null

	constraint PK_AD
	primary key (ID_Admin)
);

-- STAFF --
create table STAFF
(
	ID_Staff integer not null

	constraint PK_STAFF
	primary key (ID_Staff)
);

-- DENTIST --
create table DENTIST
(
	ID_Dentist integer not null

	constraint PK_DENTIST
	primary key (ID_Dentist)
);

-- CUSTOMER --
create table CUSTOMER
(
	ID_Customer integer identity(1,1) not null,
	ID as 'CU' + right('00000000' + cast(ID_Customer as varchar(10)),8) persisted,
	Fullname nvarchar(50) not null,
	Gender nvarchar(3) not null,
	PhoneNumber char(10) not null,
	CurrAddress nvarchar(50) not null,
	DOB date not null,

	constraint PK_CUSTOMER
	primary key (ID_Customer),

	constraint CK_CUSTOMER_Gender
	check (Gender = 'Nam' or Gender = N'Nữ')
);

-- ROOM --
create table ROOM
(
	ID_Room char(5) not null,
	Floorr integer not null,

	constraint PK_ROOM
	primary key (ID_Room),

	constraint CK_ROOM_Floorr
	check (1 <= Floorr and Floorr <= 3)
);

-- APPOINTMENT --
create table APPOINTMENT
(	
	ID_Appointment integer identity(1,1) not null,
	ID as 'AP' + right('00000000' + cast(ID_Appointment as varchar(10)),8) persisted,
	ID_Dentist integer not null,
	ID_Customer integer not null,
	ID_Room char(5) not null,
	Date_Appt date not null,
	Time_Appt time not null,
	Status_Appt nvarchar(8) not null,

	constraint PK_APPOINTMENT
	primary key (ID_Appointment),

	constraint CK_APPT_Status
	check (Status_Appt = N'Mới' or Status_Appt = N'Tái khám')
);

-- TOOTH PROBLEM --
create table TOOTH_PROBLEM
(
	ID_Customer integer not null,
	NoteDate datetime not null default getdate(),
	Descript nvarchar(50) not null,

	constraint PK_TOOTHPROBLEM
	primary key (ID_Customer, NoteDate)
);

-- MEDICINE --
create table MEDICINE
(
	ID_Medicine integer identity(1,1) not null,
	ID as 'ME' + right('00000000' + cast(ID_Medicine as varchar(10)),8) persisted,
	MedicineName nvarchar(255) not null,
	Price integer not null,

	constraint PK_MEDICINE
	primary key (ID_Medicine)
);
-- CONTRAINDICATION --
create table CONTRAINDICATION
(
	ID_Customer integer not null,
	ID_Medicine integer not null,

	constraint PK_CONTRAINDICATION
	primary key (ID_Customer, ID_Medicine)
);

-- SELECT_TREATMENT --
create table SELECT_TREATMENT
(
	ID_Select integer identity(1,1) not null,
	ID as 'ST' + right('00000000' + cast(ID_Select as varchar(10)),8) persisted,
	ID_Dentist integer not null,
	ID_Customer integer not null,
	DateSelect datetime not null,
	ReturnDays integer,
	SelectionStatus nvarchar(13) not null default N'Kế hoạch',
	Note nvarchar(50),

	constraint PK_SELECTTREATMENT
	primary key (ID_Select),

	constraint CK_ST_SelectionStatus
	check (SelectionStatus = N'Kế hoạch' or SelectionStatus = N'Đã hoàn thành' 
		or SelectionStatus = N'Đã hủy')
);

-- PRESCRIBE --
create table PRESCRIBE
(
	ID_Medicine integer not null,
	ID_Select integer not null,
	Quantity integer not null,
	UnitPrice integer,
	TotalPrice integer,

	constraint PK_PRESCRIBE
	primary key (ID_Medicine, ID_Select)
);
-- TOOTH --
create table TOOTH
(
	ID_Tooth integer not null,
	ID_Surface varchar(10) not null,
	ToothName nvarchar(50) not null,

	constraint PK_TOOTH
	primary key (ID_Tooth, ID_Surface)
);

-- CHOOSE_TOOTH --
create table CHOOSE_TOOTH
(
	ID_Select integer not null,
	ID_Tooth integer not null,
	ID_Surface varchar(10) not null,
	Price integer not null,

	constraint PK_CHOOSETOOTH
	primary key (ID_Select, ID_Tooth, ID_Surface)
);

-- TREATMENT --
create table TREATMENT
(
	ID_Treatment integer identity(1,1) not null,
	ID as 'TR' + right('00000000' + cast(ID_Treatment as varchar(10)),8) persisted,
	TreatmentName nvarchar(20) not null,
	Descript nvarchar(50) not null,

	constraint PK_TREATMENT
	primary key (ID_Treatment)
);

-- CHOOSE_TREATMENT --
create table CHOOSE_TREATMENT
(
	ID_Select integer not null,
	ID_Treatment integer not null,
	Price integer not null,

	constraint PK_CHOOSETREATMENT
	primary key (ID_Select, ID_Treatment)
);

-- PAYMENT_METHOD --
create table PAYMENT_METHOD
(
	ID_Payment integer identity(1,1) not null,
	ID as 'PM' + right('000' + cast(ID_Payment as varchar(5)),3) persisted,
	PaymentMethod varchar(10) not null,

	constraint PK_PAYEMENT_METHOD
	primary key (ID_Payment)
);

-- INVOICE --
create table INVOICE
(
	ID_Invoice integer identity(1,1) not null,
	ID as 'U' + right('00000000' + cast(ID_Invoice as varchar(10)),9) persisted,
	ID_Select integer not null,
	ID_Payment integer not null,
	ToothPrice integer not null default 0,
	MedicineFee integer not null default 0,
	Total integer not null default 0,
	AmountPaid integer not null default 0,
	Changee integer not null default 0,
	InvoiceTime datetime not null default getdate(),

	constraint PK_INVOICE
	primary key (ID_Invoice)
);
-- USER_DENTAL --
alter table USER_DENTAL
add 
	constraint FK_USER_ACC
	foreign key (Username)
	references ACCOUNT(Username),

	constraint UC_USER_Username
	unique (Username)

-- AD --
alter table AD
add
	constraint FK_AD_USER
	foreign key (ID_Admin)
	references USER_DENTAL(ID_User)
-- STAFF --
alter table STAFF
add
	constraint FK_STAFF_USER
	foreign key (ID_Staff)
	references USER_DENTAL(ID_User)
-- DENTIST --
alter table DENTIST
add
	constraint FK_DENTIST_USER
	foreign key (ID_Dentist)
	references USER_DENTAL(ID_User)
-- APPOINTMENT --
alter table APPOINTMENT
add
	constraint FK_APPOINTMENT_DENTIST
	foreign key (ID_Dentist)
	references DENTIST (ID_Dentist),

	constraint FK_APPOINTMENT_CUSTOMER
	foreign key (ID_Customer)
	references CUSTOMER (ID_Customer),

	constraint FK_APPOINTMENT_ROOM
	foreign key (ID_Room)
	references ROOM (ID_Room)
-- TOOTH_PROBLEM --
alter table TOOTH_PROBLEM
add
	constraint FK_TP_CUSTOMER
	foreign key (ID_Customer)
	references CUSTOMER (ID_Customer)
-- CONTRAINDICATION --
alter table CONTRAINDICATION
add
	constraint FK_CONTRAINDICATION_CUSTOMER
	foreign key (ID_Customer)
	references CUSTOMER (ID_Customer),

	constraint FK_CONTRAINDICATION_MEDICINE
	foreign key (ID_Medicine)
	references MEDICINE (ID_Medicine)
-- SELECT_TREATMENT --
alter table SELECT_TREATMENT
add 
	constraint FK_ST_DENTIST
	foreign key (ID_Dentist)
	references DENTIST (ID_Dentist),

	constraint FK_ST_CUSTOMER
	foreign key (ID_Customer)
	references CUSTOMER (ID_Customer)
-- PRESCRIBE --
alter table PRESCRIBE
add
	constraint FK_PRESCRIBE_MEDICINE
	foreign key (ID_Medicine)
	references MEDICINE (ID_Medicine),
	
	constraint FK_PRESCRIBE_ST
	foreign key (ID_Select)
	references SELECT_TREATMENT (ID_Select)
-- CHOOSE_TOOTH --	
alter table CHOOSE_TOOTH
add
	constraint FK_CTOOTH_ST
	foreign key (ID_Select)
	references SELECT_TREATMENT (ID_Select),

	constraint FK_CTOOTH_TOOTH
	foreign key (ID_Tooth, ID_Surface)
	references TOOTH (ID_Tooth, ID_Surface)
-- CHOOSE_TREATMENT --
alter table CHOOSE_TREATMENT
add
	constraint FK_CTREATMENT_STREATMENT
	foreign key (ID_Select)
	references SELECT_TREATMENT (ID_Select),

	constraint FK_CTREATMENT_TREATMENT
	foreign key (ID_Treatment)
	references TREATMENT (ID_Treatment)
-- INVOICE --
alter table INVOICE
add
	constraint FK_INVOICE_STREATMENT
	foreign key (ID_Select)
	references SELECT_TREATMENT (ID_Select),

	constraint FK_INVOICE_PAYMENT
	foreign key (ID_Payment)
	references PAYMENT_METHOD (ID_Payment)