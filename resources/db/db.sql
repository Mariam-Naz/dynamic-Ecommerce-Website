CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE registration (
    reg_no int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    email varchar(255),
    phone int(11),
    address varchar(255),
    PRIMARY KEY (reg_no)
);

CREATE TABLE slider (
    slider_id int NOT NULL AUTO_INCREMENT,
    slider_image varchar(255) NOT NULL,
    slider_title varchar(255) NOT NULL,
    PRIMARY KEY (slider_id)
);

CREATE TABLE orders (
    order_id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    product_title varchar(255) NOT NULL,
    product_img varchar(255),
    product_quantity varchar(255),
    PRIMARY KEY (order_id)
);

CREATE TABLE products (
    product_id int NOT NULL AUTO_INCREMENT,
    product_title varchar(255),
    product_category_id int(11),
    product_image varchar(255),
    product_price int,
    product_quantity int,
    product_long_description varchar(255),
    product_description varchar(255),
    PRIMARY KEY (product_id)
);

CREATE TABLE categories (
    cat_id int NOT NULL AUTO_INCREMENT,
    cat_title varchar(255),
    PRIMARY KEY cat_id
);