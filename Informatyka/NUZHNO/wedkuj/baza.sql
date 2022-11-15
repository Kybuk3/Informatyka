
Drop DATABASE  If Exists wedkowanie
GO 

Create Database wedkowanie
Go

USE wedkowanie
GO


CREATE TABLE Ryby(
id int Identity(1,1) not null primary key,
nazwa Varchar(100),
wystepowanie varchar(100),
styl_zycia int
)
GO

Create table Lowisko(
id int Identity(1,1) ,
Ryby_id int,
akwen varchar(100),
wojewodswto varchar(100),
rodzaj int,
foreign key (Ryby_id) REFERENCES Ryby(id)
)
GO

Create Table Okres_ochronny(
id int Identity(1,1) ,
Ryby_id int,
od_miesiaca int,
do_miesiaca int,
wymiar_ochronny int
foreign key (Ryby_id) REFERENCES Ryby(id)
)
GO
