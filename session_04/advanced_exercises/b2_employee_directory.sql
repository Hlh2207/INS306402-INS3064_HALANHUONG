-- Bài B2: Quản lý nhân sự
-- Department dùng ENUM, Salary dùng DECIMAL, hire_date dùng DATE
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    -- Giới hạn giá trị phòng ban (ENUM) [cite: 48]
    department ENUM('Sales', 'IT', 'HR', 'Marketing') NOT NULL,
    salary DECIMAL(15, 2) NOT NULL, -- Độ chính xác cao cho lương [cite: 49]
    hire_date DATE NOT NULL -- Ngày vào làm (Yêu cầu bổ sung)
);