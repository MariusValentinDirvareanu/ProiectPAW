create table comenzi
(
    id        int auto_increment,
    user      varchar(255) not null,
    email     varchar(255) not null,
    produs    varchar(255) not null,
    firma     varchar(255) not null,
    cantitate int          not null,
    dataTimp  datetime     null,
    constraint id
        unique (id)
);

alter table comenzi
    add primary key (id);


