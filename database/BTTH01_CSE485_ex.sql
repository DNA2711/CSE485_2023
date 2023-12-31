-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT
    tieude
FROM
    baiviet
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE
    theloai.ten_tloai = 'Nhạc trữ tình';

-- b. Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT
    tieude
FROM
    baiviet
    INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE
    tacgia.ten_tgia = 'Nhacvietplus';

-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào.
SELECT
    ten_tloai
FROM
    theloai
    LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE
    baiviet.ma_bviet IS NULL;

-- d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết.
SELECT
    ma_bviet,
    tieude,
    ten_bhat,
    ten_tgia,
    ten_tloai,
    ngayviet
FROM
    baiviet
    INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

-- e.	Tìm thể loại có số bài viết nhiều nhất
SELECT
    ten_tloai,
    COUNT(ma_bviet) AS 'Số lượng bài viết'
FROM
    baiviet
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
GROUP BY
    ten_tloai
ORDER BY
    COUNT(ma_bviet) DESC
LIMIT
    1;

-- f. Liệt kê 2 tác giả có số bài viết nhiều nhất
SELECT
    ten_tgia,
    COUNT(ma_bviet) AS 'Số lượng bài viết'
FROM
    baiviet
    INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY
    ten_tgia
ORDER BY
    COUNT(ma_bviet) DESC
LIMIT
    2;

-- g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT
    tieude
FROM
    baiviet
WHERE
    baiviet.ten_bhat LIKE '%yêu%'
    OR baiviet.ten_bhat LIKE '%thương%'
    OR baiviet.ten_bhat LIKE '%anh%'
    OR baiviet.ten_bhat LIKE '%em%';

-- h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT
    tieude
FROM
    baiviet
WHERE
    baiviet.ten_bhat LIKE '%yêu%'
    OR baiviet.ten_bhat LIKE '%thương%'
    OR baiviet.ten_bhat LIKE '%anh%'
    OR baiviet.ten_bhat LIKE '%em%'
    OR baiviet.tieude LIKE '%yêu%'
    OR baiviet.tieude LIKE '%thương%'
    OR baiviet.tieude LIKE '%anh%'
    OR baiviet.tieude LIKE '%em%';

-- i.Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả
CREATE VIEW
    vw_Music AS
SELECT
    ma_bviet,
    tieude,
    ten_bhat,
    ten_tgia,
    ten_tloai,
    ngayviet
FROM
    baiviet
    INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;

SELECT
    *
FROM
    vw_Music;

-- j.	Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi.
DELIMITER / /
CREATE PROCEDURE sp_DSBaiViet (IN ten_tloai VARCHAR(50)) BEGIN IF NOT EXISTS (
    SELECT
        *
    FROM
        theloai
    WHERE
        ten_tloai = ten_tloai
) THEN
SELECT
    'Không tồn tại thể loại này';

ELSE
SELECT
    tieude
FROM
    baiviet
    INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE
    theloai.ten_tloai = ten_tloai;

END IF;

END / / DELIMITER;

DROP PROCEDURE IF EXISTS sp_DSBaiViet;

CALL sp_DSBaiViet ('Nhạc trữ tình');

-- k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo.