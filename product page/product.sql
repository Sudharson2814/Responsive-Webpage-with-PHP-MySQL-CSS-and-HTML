create database product;
use  product;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    details TEXT,
    image_path VARCHAR(255) NOT NULL
);

    INSERT INTO products (name, price, details, image_path)
VALUES
    ('Product 1', 19.99, 'Product 1 details', 'images/product1.jpg'),
    ('Product 2', 29.99, 'Product 2 details', 'images/product2.jpg'),
    ('Product 3', 39.99, 'Product 3 details', 'images/product3.jpg'),
    ('Product 4', 9.99, 'Product 4 details', 'images/product4.jpg'),
    ('Product 5', 49.99, 'Product 5 details', 'images/product5.jpg'),
    ('Product 6', 59.99, 'Product 6 details', 'images/product6.jpg'),
    ('Product 7', 69.99, 'Product 7 details', 'images/product7.jpg'),
    ('Product 8', 79.99, 'Product 8 details', 'images/product8.jpg'),
    ('Product 9', 89.99, 'Product 9 details', 'images/product9.jpg'),
    ('Product 10', 99.99, 'Product 10 details', 'images/product10.jpg');

    
    