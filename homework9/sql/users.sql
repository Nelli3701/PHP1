-- auto-generated definition
create table users
(
    id_user                 int auto_increment
        primary key,
    user_name               varchar(45)  null,
    user_lastname           varchar(45)  null,
    user_birthday_timestamp int          null,
    login                   varchar(20)  not null,
    hash_password           varchar(100) not null,
    token                   varchar(255) null
)
    charset = utf8;


INSERT INTO application1.users (id_user, user_name, user_lastname, user_birthday_timestamp, login, hash_password, token) VALUES (4, 'Admin', 'Admin', 1719792000, 'admin', '$2y$10$2XBi9.hcJGrUIJ5G9fLY6Owcy8z5bVIk8QXk3HdMQ0886lu.yus5y', '9afafacad1c8a5ab07d0768bb3952d3f6ed13995d01f2000d82b2a3c98bfff1c');
INSERT INTO application1.users (id_user, user_name, user_lastname, user_birthday_timestamp, login, hash_password, token) VALUES (5, 'User', 'User', 1721001600, 'user', '$2y$10$3S/vGIMdr9HFZZ4Efc.5/uFevFxBc0ncg7o2F7JplUtmvTmlwmaIq', null);
