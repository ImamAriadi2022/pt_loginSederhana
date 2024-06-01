# pt_loginSederhana
Imam Ariadi
function
documentation
Berikut adalah contoh dokumentasi untuk README yang bisa digunakan untuk proyek multi-user Anda. Dokumen ini mencakup panduan pengaturan, penggunaan, dan penjelasan singkat tentang struktur proyek.

```markdown
# Multi-User Project

Proyek ini adalah sebuah aplikasi web sederhana dengan fitur multi-user. Aplikasi ini memungkinkan pengguna untuk login dan mengakses halaman tertentu berdasarkan peran mereka.

## Struktur Direktori

```
multi-user-project/
├── function/
│   └── helper.php
│   └── koneksi.php
│   └── validasi_login.js
│   └── validasi.js
├── page/
│   └── user.php
│   └── admin.php
├── process.php
│   └── process_login.php
│   └── process_logout.php
│   └── process_register.php
├── README.md
├── index.php
└── dashboard.php
```

## Persyaratan

- PHP 7.x atau lebih baru
- Server web seperti Apache (disarankan menggunakan XAMPP untuk pengembangan lokal)

## Instalasi

1. **Kloning Repository**:
   ```sh
   git clone https://github.com/username/multi-user-project.git
   ```
2. **Navigasi ke Direktori Proyek**:
   ```sh
   cd multi-user-project
   ```

3. **Konfigurasi Database**:
   Buat database dan tabel yang diperlukan. Anda bisa menggunakan `helper.php` untuk menyertakan fungsi koneksi database.

4. **Konfigurasi Server**:
   Pastikan Anda mengarahkan root server web Anda ke direktori `multi-user-project`.

## Penggunaan

### Halaman Login (index.php)

File `index.php` digunakan untuk proses login pengguna. Jika login berhasil, username dan peran pengguna disimpan dalam session, dan pengguna diarahkan ke halaman user.

**Contoh Kode**:
```php
<?php
require_once('function/helper.php');
session_start(); // Memulai sesi

// Misalkan ini adalah proses login
// Anda mungkin sudah memiliki proses validasi login di sini
// Jika login berhasil, simpan username di session dan redirect ke halaman user

$username = 'nama_pengguna'; // Gantilah 'nama_pengguna' dengan username yang sebenarnya
$_SESSION['username'] = $username;
$_SESSION['role'] = 'user'; // Setel role pengguna

// Menyimpan username di local storage melalui JavaScript
echo "<script>
    localStorage.setItem('username', '$username');
    window.location.href = '" . BASE_URL . "page/user.php';
</script>";
exit();
?>
```

### Halaman User (user.php)

File `user.php` digunakan untuk menampilkan halaman pengguna setelah login yang berhasil. File ini memeriksa session dan menampilkan pesan "Hallo [username]".

**Contoh Kode**:
```php
<?php
require_once('../function/helper.php'); // Pastikan jalur sudah benar

// Cek apakah session sudah dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Mulai session jika belum dimulai
}

// Cek apakah user memiliki role 'user'
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
    header("Location: " . BASE_URL . 'dashboard-php?page-user');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mengambil username dari local storage
            const username = localStorage.getItem('username') || 'Guest';
            document.getElementById('greeting').innerText = 'Hallo ' + username;
        });
    </script>
</head>
<body>
    <div class="class">
        <h1>halaman user</h1>
        <div id="greeting">Hallo</div>
    </div>
</body>
</html>
```

### Helper Functions (function/helper.php)

File `helper.php` berisi fungsi-fungsi yang berguna untuk proyek ini, seperti koneksi database dan fungsi lainnya yang sering digunakan.

## Penanganan Kesalahan

- Jika file `helper.php` tidak ditemukan, pastikan jalur yang digunakan sudah benar.
- Jika session sudah dimulai, pastikan tidak ada pemanggilan `session_start()` yang berlebihan.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan fork repository ini dan kirimkan pull request dengan perubahan Anda.

## Lisensi

Proyek ini dilisensikan di bawah MIT License. Lihat file [LICENSE](LICENSE) untuk informasi lebih lanjut.

## Kontak

Untuk pertanyaan lebih lanjut, silakan hubungi [email@example.com].
```

Dokumentasi ini menyediakan panduan lengkap mulai dari instalasi hingga penggunaan, serta beberapa tips untuk penanganan kesalahan umum. Anda bisa menyesuaikan bagian-bagian tertentu sesuai dengan kebutuhan proyek Anda.