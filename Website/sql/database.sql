CREATE TABLE account (
    id int(10) unsigned not null primary key auto_increment,
    username varchar(255) not null,
    password varchar(255) not null,
    isAdmin tinyint(3) not null
);

INSERT INTO account VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 0);

CREATE TABLE news (
    id int(10) unsigned not null primary key auto_increment,
    title varchar(255) not null,
    content text(10000) not null,
    userId int(10) not null,
    createDate timestamp not null
);
