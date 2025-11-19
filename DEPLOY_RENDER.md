# 🚀 Panduan Deploy Aplikasi Mahakarya ke Render.com

## Langkah 1: Siapkan Repository GitHub
Pastikan semua kode sudah di-push ke GitHub:
```bash
git add .
git commit -m "Prepare for Render deployment"
git push origin main
```

## Langkah 2: Buat Database MySQL di Render

1. **Di Dashboard Render.com:**
   - Klik **"+ Add new"** → Pilih **"Create a Postgres database"** (atau MySQL jika tersedia)
   - Atau gunakan **"Create a MySQL database"** jika ada
   - **Name:** `penggajian-db`
   - **Plan:** Free (untuk testing)
   - Klik **"Create Database"**

2. **Catat Kredensial Database:**
   - Setelah database dibuat, Render akan memberikan:
     - `Internal Database URL` (untuk koneksi dari aplikasi)
     - `External Connection String` (untuk koneksi dari luar)
     - `Database Name`
     - `Username`
     - `Password`
     - `Host`
     - `Port`

## Langkah 3: Import Database Schema

1. **Download file SQL:**
   - File: `Database/penggajian.sql`

2. **Import ke Render Database:**
   - Gunakan tool seperti **phpMyAdmin** (jika tersedia)
   - Atau gunakan **MySQL Workbench** / **TablePlus**
   - Atau gunakan command line:
     ```bash
     mysql -h [HOST] -u [USER] -p [DATABASE] < Database/penggajian.sql
     ```

## Langkah 4: Deploy Web Service

1. **Klik "+ Add new"** → Pilih **"Deploy a Web Service"**

2. **Connect Repository:**
   - Pilih **"Connect GitHub"** atau **"Connect GitLab"**
   - Authorize Render untuk mengakses repository
   - Pilih repository: `fajaryudhaseptianto/mahakarya-kelompok1`
   - Klik **"Connect"**

3. **Konfigurasi Service:**
   - **Name:** `mahakarya-kelompok1`
   - **Region:** Pilih yang terdekat (Singapore/Jakarta jika ada)
   - **Branch:** `main`
   - **Runtime:** `PHP`
   - **Build Command:** (kosongkan)
   - **Start Command:** `php -S 0.0.0.0:$PORT -t .`
   - **Plan:** Free

4. **Environment Variables:**
   Tambahkan variabel berikut:
   ```
   CI_ENV = production
   PHP_VERSION = 8.2
   
   # Database (dari database yang dibuat di Langkah 2)
   DB_HOST = [HOST_DARI_RENDER]
   DB_USER = [USERNAME_DARI_RENDER]
   DB_PASS = [PASSWORD_DARI_RENDER]
   DB_NAME = penggajian
   DB_PORT = [PORT_DARI_RENDER]
   ```

5. **Klik "Create Web Service"**

## Langkah 5: Update Konfigurasi CodeIgniter

Setelah service dibuat, update file `application/config/database.php` untuk membaca environment variables:

```php
$db['default'] = array(
    'hostname' => getenv('DB_HOST') ?: 'localhost',
    'username' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASS') ?: '',
    'database' => getenv('DB_NAME') ?: 'penggajian',
    'dbdriver' => 'mysqli',
    // ... rest of config
);
```

Dan update `application/config/config.php`:
```php
$config['base_url'] = getenv('RENDER_EXTERNAL_URL') ?: 'http://localhost/penggajian/';
```

## Langkah 6: Tunggu Deploy Selesai

- Render akan otomatis build dan deploy aplikasi
- Proses ini memakan waktu 2-5 menit
- Setelah selesai, kamu akan mendapat URL seperti: `https://mahakarya-kelompok1.onrender.com`

## Langkah 7: Test Aplikasi

1. Buka URL yang diberikan Render
2. Pastikan halaman landing page muncul
3. Test login dengan user yang sudah ada di database
4. Pastikan semua fitur berfungsi

## Troubleshooting

### Jika aplikasi error:
1. Cek **Logs** di Render Dashboard
2. Pastikan environment variables sudah benar
3. Pastikan database sudah di-import
4. Pastikan `base_url` di `config.php` sudah benar

### Jika database connection error:
1. Pastikan database sudah dibuat
2. Pastikan environment variables DB_* sudah di-set
3. Pastikan database sudah di-import dengan benar

### Jika file tidak ditemukan:
1. Pastikan semua file sudah di-push ke GitHub
2. Pastikan `.gitignore` tidak mengabaikan file penting

## Catatan Penting

- **Free Plan** di Render akan **sleep setelah 15 menit tidak aktif**
- Untuk production, pertimbangkan upgrade ke **Starter Plan** ($7/bulan)
- Database free plan juga memiliki limit, pertimbangkan upgrade jika perlu

---

**Selamat! Aplikasi Mahakarya sudah online di Render.com! 🎉**

