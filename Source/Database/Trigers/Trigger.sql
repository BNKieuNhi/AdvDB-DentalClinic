-- Sử dụng CSDL đã tạo
USE QLPKNHAKHOA
GO

create trigger tg_add_TotalPrice_PRESCRIBE on PRESCRIBE
after insert
as
begin
	declare @id_select int
	declare @id_medicine int
	declare @unitPrice int
	declare @quantity int

	select @id_select = ID_Select,
			@id_medicine = ID_Medicine,
			@quantity = Quantity
	from inserted

	-- UnitPrice(PRESCRIBE) = Price(MEDICINE)
	select @unitPrice = Price
	from MEDICINE where ID_Medicine = @id_medicine

	update PRESCRIBE
	set UnitPrice = @unitPrice
	where ID_Select = @id_select and ID_Medicine = @id_medicine

	-- TotalPrice(PRESCRIBE) = Quantity * UnitPrice
	update PRESCRIBE
	set TotalPrice = @unitPrice * @quantity
	where ID_Select = @id_select and ID_Medicine = @id_medicine
end
go
drop trigger tg_add_Total_INVOICE
create trigger tg_add_Total_INVOICE on INVOICE
after insert
as
begin
	declare @id_invoice int
	declare @id_select int
	declare @id_payment int
	declare @totalToothPrice int
	declare @totalMedicinePrice int
	declare @total int

	select @id_invoice = ID_Invoice,
			@id_select = ID_Select,
			@id_payment = ID_Payment 
	from inserted

	-- ToothPrice(INVOICE) = Price(CHOOSE_TOOTH) + Price(CHOOSE_TREATMENT)
	declare @treatmentPrice int
	declare @toothPrice int
	
	select @treatmentPrice = ISNULL(SUM(Price), 0)
	from CHOOSE_TREATMENT where ID_Select = @id_select

	select @toothPrice = ISNULL(SUM(Price), 0)
	from CHOOSE_TOOTH where ID_Select = @id_select
	
	set @totalToothPrice = @treatmentPrice + @toothPrice

	update INVOICE
	set ToothPrice = @totalToothPrice
	where ID_Invoice = @id_invoice

	-- MedicineFee(INVOICE) = TotalPrice(PRESCRIBE)
	select @totalMedicinePrice = ISNULL(SUM(TotalPrice), 0)
	from PRESCRIBE where ID_Select = @id_select
	
	update INVOICE
	set MedicineFee = @totalMedicinePrice
	where ID_Invoice = @id_invoice

	-- Total(INVOICE) = ToothPrice + MedicineFee
	set @total = @totalToothPrice + @totalMedicinePrice
	
	update INVOICE
	set Total = @total
	where ID_Invoice = @id_invoice

	-- Change(INVOICE) = AmountPaid - Total (ID_Payment = 'Cash')
	declare @isByCash int
	set @isByCash = 1

	if @id_payment = @isByCash
		begin
			update INVOICE
			set Changee = AmountPaid - @total
			where ID_Invoice = @id_invoice
		end
	-- Change(INVOICE) = 0 (ID_Payment != 'Cash')
	-- AmountPaid(INVOICE) = Total
	else
		begin 
			update INVOICE
			set Changee = 0
			where ID_Invoice = @id_invoice			
			
			update INVOICE
			set AmountPaid = @total
			where ID_Invoice = @id_invoice
		end
end
go
-- Lịch hẹn khám của nha sĩ không được trùng nhau
create trigger tg_check_ApptDentist_APPOINTMENT on APPOINTMENT
after insert, update
as
begin
	if exists (select *
				from APPOINTMENT a1, APPOINTMENT a2
				where a1.ID_Appointment != a2.ID_Appointment
				and a1.Date_Appt = a2.Date_Appt
				and a1.Time_Appt = a2.Time_Appt
				and a1.ID_Dentist = a2.ID_Dentist
				)
	begin
		rollback
	end
end
go
select * from medicine
select * from invoice
select * from PRESCRIBE