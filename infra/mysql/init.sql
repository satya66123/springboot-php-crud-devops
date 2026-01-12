CREATE TABLE IF NOT EXISTS employees (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE,
  role VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO employees(name, email, role)
VALUES
('Satya', 'satya@example.com', 'Developer'),
('Srinath', 'srinath@example.com', 'Engineer');
