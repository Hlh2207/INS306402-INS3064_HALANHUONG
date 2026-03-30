-- Bài B3: Hệ thống sự kiện
-- Metadata dùng JSON, thời gian dùng DATETIME
CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(200) NOT NULL,
    event_details JSON, -- Lưu thông tin linh hoạt [cite: 52]
    start_time DATETIME NOT NULL, -- Ngày giờ bắt đầu [cite: 53]
    end_time DATETIME NOT NULL -- Ngày giờ kết thúc (Yêu cầu bổ sung)
);
