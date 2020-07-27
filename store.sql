
 CREATE DATABASE store CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE account (
	id int(11) PRIMARY KEY auto_increment,
	name varchar(255) NOT NULL, 
	email varchar(50) NOT NULL , 
	phone int (10) NOT NULL,
	password varchar(255) NOT NULL,
	adress varchar(100) NOT NULL,
	status tinyint(1) NOT NULL DEFAULT '1',
	created_at current_timestamp,
	updated_at current_timestamp,
	
);
CREATE TABLE category (
	id int(11) PRIMARY KEY auto_increment,
	name varchar(255) NOT NULL UNIQUE,
	slug varchar(255) NOT NULL,
	status tinyint(1) NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,

);

CREATE TABLE blog (
	id int(11) PRIMARY KEY auto_increment,
	name varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	image varchar(255) NOT NULL,
	content text NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,

);

CREATE TABLE comment (
	id int(11) PRIMARY KEY auto_increment,
	product_id int(11) NOT NULL,
	account_id int(11) NOT NULL,
	comment text NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,

);

CREATE TABLE orders (
	id int(11) PRIMARY KEY auto_increment,
	account_id int(11) NOT NULL,
	name varchar(100) NOT NULL,
	adress varchar(255) NOT NULL,
	phone int(10) NOT NULL,
	status tinyint(1) NOT NULL DEFAULT '1',
	total_price int(30) NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,
);

CREATE TABLE order_detail (
	order_id int(11) NOT NULL,
	product_id int(11) NOT NULL,
	quantity int(11) NOT NULL,
	price int(11) NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,
);
CREATE TABLE product(
	id int(11) PRIMARY KEY,
	name varchar(255) NOT NULL,
	slug varchar(255) NOT NULL,
	image varchar(255) NOT NULL,
	price int(11) NOT NULL,
	sale_price int(11),
	status tinyint(1) NOT NULL DEFAULT '1',
	description varchar(255) NOT NULL,
	created_at current_timestamp,
	updated_at current_timestamp,
);

ALTER TABLE product ADD FOREIGN KEY fk_pro_cate(category_id) REFERENCES category(id);

ALTER TABLE orders ADD FOREIGN KEY fk_order_account(id) REFERENCES account(id);
ALTER TABLE comment ADD FOREIGN KEY fk_comment_account(id) REFERENCES account(id);

ALTER TABLE order_detail ADD FOREIGN KEY fk_ordetail_orders(order_id) REFERENCES orders(id);
ALTER TABLE comment ADD FOREIGN KEY fk_comm_pro(id) REFERENCES product(id);
ALTER TABLE order_detail ADD FOREIGN KEY fk_ordetail_pro(product_id) REFERENCES product(id);





