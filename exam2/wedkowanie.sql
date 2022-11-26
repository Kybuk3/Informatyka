CREATE database wedkowanie;
use wedkowanie;

CREATE table Ryby (
  id int not null auto_increment,
  nazwa text not null,
  wystepowanie text not null,
  styl_zycia int not null,
  primary key (id)
);

CREATE table Okres_ochronny (
    id int not null auto_increment,
    Ryby_id int not null,
    od_miesiaca int not null,
    do_miesiaca int not null,
    wymiar_ochronny int not null,
    primary key (id),
    foreign key (Ryby_id) references Ryby(id)
);

CREATE table Lowisko (
    id int not null auto_increment,
    Ryby_id int not null,
    akwen text not null,
    wojewodztwo text not null,
    rodzaj int not null,
    primary key (id),
    foreign key (Ryby_id) references Ryby(id)
);