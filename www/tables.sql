CREATE TABLE customer(
customer_id VARCHAR(50) PRIMARY KEY,
password VARCHAR(15) NOT NULL,
name VARCHAR(100) NOT NULL,
address VARCHAR(200) NOT NULL
);


CREATE TABLE c_phone_no(
customer_id varchar(50),
phone_no char(10),
PRIMARY KEY(customer_id, phone_no),
FOREIGN KEY (customer_id) references customer(customer_id)
);

CREATE TABLE supplier(
supplier_id int PRIMARY KEY, 
name VARCHAR(100) NOT NULL,
address VARCHAR(300) NOT NULL
);

CREATE TABLE s_phone_no(
supplier_id int ,
phone_no VARCHAR(10),
PRIMARY KEY(supplier_id,phone_no),
FOREIGN KEY (supplier_id) references supplier(supplier_id)
);


create table delivery_agent(
agent_id int(11) PRIMARY KEY, 
name varchar(50) not null,
salary int(11) not null,
address varchar(50) not null 
);

CREATE TABLE d_phone_no(
agent_id int ,
phone_no VARCHAR(10),
PRIMARY KEY(agent_id,phone_no),
FOREIGN KEY (agent_id) REFERENCES delivery_agent(agent_id)
);


CREATE TABLE orders(
	order_id int PRIMARY KEY,
	customer_id varchar(50),
	agent_id int,
	order_date date not null,
	bill int not null,
	FOREIGN KEY (customer_id) references customer(customer_id),
	FOREIGN KEY (agent_id) references delivery_agent(agent_id)
);


CREATE TABLE medicine(
	medicine_id int PRIMARY KEY,
	name varchar(100) NOT NULL,
	max_count int NOT NULL,
	min_count int NOT NULL,
	cost int NOT NULL
);

CREATE TABLE produces(
supplier_id int,
medicine_id int,
PRIMARY KEY(supplier_id,medicine_id),
FOREIGN KEY (supplier_id) REFERENCES supplier(supplier_id),
FOREIGN KEY (medicine_id) REFERENCES medicine(medicine_id)
);

CREATE TABLE inventory(
inventory_id int PRIMARY KEY, 
medicine_id int NOT NULL,
quantity int NOT NULL,
manufacture_date date NOT NULL, 
expiry_date date NOT NULL, 
shelf_no int NOT NULL,
FOREIGN KEY (medicine_id) REFERENCES medicine(medicine_id)
);


CREATE TABLE contains(
	order_id int,
	inventory_id int,
	quantity int NOT NULL DEFAULT 0,
	PRIMARY KEY (order_id,inventory_id),
	FOREIGN KEY (order_id) references orders(order_id),
	FOREIGN KEY (inventory_id) references inventory(inventory_id)
);


CREATE TABLE pending_requests(
supplier_id int,
medicine_id int,
quantity int,
PRIMARY KEY(supplier_id,medicine_id),
FOREIGN KEY (supplier_id) REFERENCES supplier(supplier_id),
FOREIGN KEY (medicine_id) REFERENCES medicine(medicine_id)
);


CREATE TABLE requests(
customer_id varchar(50),
medicine_id int,
FOREIGN KEY (customer_id) references customer(customer_id), 
FOREIGN KEY (medicine_id) references medicine(medicine_id)
);
