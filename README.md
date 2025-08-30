# 📝 System Pengajuan Cuti, Lembur, dan Sakit

Sistem ini dibuat untuk mempermudah proses **pengajuan cuti, lembur, dan izin sakit** di lingkungan perusahaan/instansi.  
Dengan sistem ini, karyawan dapat melakukan pengajuan secara online dan atasan dapat menyetujui atau menolak pengajuan dengan lebih cepat.

---

## 🚀 Fitur Utama

- **Autentikasi User**
  - Login & Reset Password
  - Multi-level role (Admin & Karyawan)

- **Pengajuan**
  - Pengajuan Cuti
  - Pengajuan Lembur
  - Pengajuan Sakit
  - Upload lampiran (jika diperlukan, misalnya surat dokter)

- **Manajemen Data**
  - Data Karyawan
  - Riwayat Pengajuan
  - Status pengajuan (Menunggu, Disetujui, Ditolak)

- **Laporan**
  - Rekap cuti tahunan
  - Laporan lembur per bulan
  - Data izin sakit

---

## 🛠️ Teknologi yang Digunakan

- **Backend** : [CodeIgniter 4](https://codeigniter.com/user_guide/) (PHP Framework)
- **Frontend** : Bootstrap 5 (HTML, CSS, JS)
- **Database** : MySQL/MariaDB
- **Server Requirement** :
  - PHP >= 8.4
  - Composer
  - MySQL/MariaDB

---

## 📂 Struktur Database (Tabel Utama)

1. **karyawan**
   - id_karyawan (PK)
   - nama
   - email
   - password
   - jabatan
   - role (admin / karyawan)

2. **pengajuan**
   - id_pengajuan (PK)
   - id_karyawan (FK)
   - jenis_pengajuan (cuti / lembur / sakit)
   - tanggal_mulai
   - tanggal_selesai
   - keterangan
   - lampiran (opsional)
   - status (menunggu / disetujui / ditolak)

3. **log_aktivitas**
   - id_log (PK)
   - id_karyawan (FK)
   - aktivitas
   - created_at

---

## ⚙️ Instalasi

1. Clone repository:

   ```bash
   git clone https://github.com/username/system-pengajuan.git

2. Masuk ke folder project:

   ```bash
   cd system-pengajuan
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Copy file `.env.example` menjadi `.env` lalu sesuaikan konfigurasi database:

   ```env
   database.default.hostname = localhost
   database.default.database = system-pengajuan
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   ```

5. Jalankan migrasi database:

   ```bash
   php spark migrate
   ```

6. Jalankan server development:

   ```bash
   php spark serve
   ```

7. Akses aplikasi melalui:

   ```
   http://localhost:8080
   ```


## 👨‍💻 Role User

* **Admin**

  * Mengelola data karyawan
  * Menyetujui / menolak pengajuan
  * Melihat laporan

* **Karyawan**

  * Mengajukan cuti, lembur, atau sakit
  * Melihat status pengajuan
  * Mengunduh laporan pribadi

---

## 📸 Preview (Optional)

*Tambahkan screenshot login, dashboard, form pengajuan, dll.*

---

## 📝 Lisensi

Project ini dibuat untuk keperluan internal. Silakan kembangkan sesuai kebutuhan instansi/perusahaan.

```

👉 README ini sudah cukup lengkap untuk dokumentasi awal.  
Kamu mau saya tambahkan juga **diagram alur pengajuan (flowchart)** supaya lebih jelas?
```#
