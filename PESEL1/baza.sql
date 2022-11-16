DROP DATABASE IF EXISTS baza
Create DATABASE baza

Use baza 
GO

Create table lokale (

    Id int IDENTITY(1,1),
    nazwa VARCHAR(100),
    miasto VARCHAR(100),
    ulica VARCHAR(100),
    numer int 

)

GO

Create table dania (

    Id int IDENTITY(1,1),  
    typ int,
    nazwa VARCHAR(100),  
    cena int

)

GO

Create table rezerwacje (

    Id int IDENTITY(1,1),
    nr_stolika int,
    data_rez DATE,
    liczba_osob int,
    telefon VARCHAR(100)

)

GO

Create table pracownicy (

    Id int IDENTITY(1,1),
    imie VARCHAR(100),
    nazwisko VARCHAR(100),
    stanowisko int

)

GO

Insert into rezerwacje 
Values(
1,'2017-07-04',4,'111222333')
GO

SELECT nazwa, cena FROM dania WHERE typ = 3

Select nazwa from dania
Where cena <15

Update pracownicy
Set stanowisko=4
Where stanowisko=3