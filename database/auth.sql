create table users (
  id int primary key auto_increment,
  full_name varchar(100) not null,
  user_name varchar(100) not null unique,
  email varchar(100) not null unique,
  password varchar(255) not null,
  birthday date,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp on update current_timestamp
);
