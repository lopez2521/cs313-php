CREATE TABLE orders (
order_id SERIAL PRIMARY KEY NOT NULL,
teams VARCHAR(30) NOT NULL,
hat VARCHAR(30),
shirt VARCHAR(30),
sweatshirt VARCHAR(30),
gender VARCHAR(10),
comments VARCHAR(100)
);