-- create_tables.sql
CREATE TABLE blog (
    id SERIAL PRIMARY KEY,
    pseudonyme VARCHAR(100),
    message TEXT,
    client_ip VARCHAR(45) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

