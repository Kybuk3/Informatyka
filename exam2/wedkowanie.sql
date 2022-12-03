DROP DATABASE IF EXISTS wedkowanie;
Create DATABASE wedkowanie;

Use wedkowanie ;
GO



CREATE table Ryby (
  id int Identity(1,1) NOT NULL  primary key ,
  nazwa varchar(100) ,
  wystepowanie varchar(100),
  styl_zycia int,
);

CREATE table Okres_ochronny (
    id int Identity(1,1)  NOT NULL primary key,
    Ryby_id int,
    od_miesiaca int,
    do_miesiaca int,
    wymiar_ochronny int,
    foreign key (Ryby_id) references Ryby(id)
);

CREATE table Lowisko (
    id int Identity(1,1) NOT NULL primary key ,
    Ryby_id int,
    akwen varchar(100),
    wojewodztwo varchar(100) ,
    rodzaj int ,
    foreign key (Ryby_id) references Ryby(id)
);

select id, nazwa, wystepowanie from Ryby;
where styl_zycia = "1";

select Ryby_id, wymiar_ochronny from Okres_ochronny;
where wymiar_ochronny < 30;

select nazwa, wystepowanie, wojewodztwo from ryby;
join lowisko on ryby.id = lowisko.ryby_id;
where rodzaj = 3;