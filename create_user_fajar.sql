-- SQL Query untuk membuat user Fajar Yudha Septianto
-- Username: Fajar Yudha Septianto
-- Password: mahakarya (MD5: 7e807e56c7523962f0a1e0de1f03425f)

-- Opsi 1: Insert user baru (jika belum ada)
INSERT INTO data_pegawai 
  (nik, nama_pegawai, username, password, jenis_kelamin, jabatan, tanggal_masuk, status, photo, hak_akses)
VALUES 
  ('24001', 'Fajar Yudha Septianto', 'Fajar Yudha Septianto', MD5('mahakarya'), 'laki-laki', 'admin', '2024-01-01', 'Pegawai Tetap', '', 1)
ON DUPLICATE KEY UPDATE
  username = 'Fajar Yudha Septianto',
  password = MD5('mahakarya'),
  nama_pegawai = 'Fajar Yudha Septianto';

-- Opsi 2: Update user yang sudah ada (jika user dengan nama ini sudah ada)
-- UPDATE data_pegawai 
-- SET username = 'Fajar Yudha Septianto',
--     password = MD5('mahakarya'),
--     nama_pegawai = 'Fajar Yudha Septianto',
--     hak_akses = 1,
--     jabatan = 'admin'
-- WHERE nama_pegawai LIKE '%Fajar%' OR username LIKE '%Fajar%';

-- Opsi 3: Insert user baru dengan ID manual (jika ID auto-increment tidak bekerja)
-- INSERT INTO data_pegawai 
--   (id_pegawai, nik, nama_pegawai, username, password, jenis_kelamin, jabatan, tanggal_masuk, status, photo, hak_akses)
-- VALUES 
--   ('FJS001', '24001', 'Fajar Yudha Septianto', 'Fajar Yudha Septianto', MD5('mahakarya'), 'laki-laki', 'admin', '2024-01-01', 'Pegawai Tetap', '', 1);

