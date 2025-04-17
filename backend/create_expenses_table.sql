DROP TABLE IF EXISTS expenses;

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    source VARCHAR(20) DEFAULT 'manual',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_user_id ON expenses(user_id);
CREATE INDEX idx_created_at ON expenses(created_at); 