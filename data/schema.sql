drop database if exists noteapp;
create database if not exists noteapp;

-- SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
use noteapp;

-- user
create table if not exists note_users (
  user_id int(11) not null auto_increment,
  email_id varchar(255) not null,
  first_name varchar(255) not null,
  last_name varchar(255) not null,
  login_pw varchar(255) not null,
  lastmod timestamp not null default current_timestamp on update current_timestamp,
  primary key (user_id),
  unique key (email_id)
) Engine=InnoDB Default Charset=latin1;

-- reference table..
create table if not exists note_categories (
  category_id int(11) not null,
  user_id int(11) not null,
  category_name varchar(255) not null,
  active_sw enum('Y','N') not null default 'Y',
  primary key (category_id),
  foreign key (user_id) references note_users(user_id) on update cascade on delete cascade
) Engine=InnoDB Default Charset=latin1;

create table if not exists note_notes (
  note_id int(11) not null auto_increment,
  user_id int(11) not null,
  category_id int(11) not null,
  note_title varchar(255) not null,
  note_content text not null,
  create_date date not null,
  lastmod timestamp not null default current_timestamp on update current_timestamp,
  primary key (note_id),
  foreign key (user_id) references note_users(user_id) on update cascade on delete cascade,
  foreign key (category_id) references note_categories(category_id) on update cascade on delete restrict
) Engine=InnoDB Default Charset=latin1;

SET FOREIGN_KEY_CHECKS=1;
