-- Bài B1: Hệ thống Thư viện
-- ISBN và Phone phải dùng VARCHAR (Acceptance Criteria)
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    isbn VARCHAR(20) UNIQUE, -- ISBN-13 cần VARCHAR để giữ số 0 đầu [cite: 44]
    author VARCHAR(100)
);

CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20), -- Dùng VARCHAR cho số điện thoại [cite: 45]
    membership_date DATE
);

CREATE TABLE borrow_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT,
    member_id INT,
    borrow_date DATE,
    due_date DATE, -- Ngày phải trả (Yêu cầu bổ sung)
    return_date DATE, -- Ngày thực tế trả
    FOREIGN KEY (book_id) REFERENCES books(id), -- Tham chiếu sách 
    FOREIGN KEY (member_id) REFERENCES members(id) -- Tham chiếu thành viên 
);