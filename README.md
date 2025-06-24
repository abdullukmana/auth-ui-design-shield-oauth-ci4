# Menambahkan UI Authentication dengan Shield & Shield OAuth di CodeIgniter 4

## Prasyarat

Pastikan proyek Anda menggunakan **CodeIgniter 4**, serta telah menginstal:

* [**Shield**](https://github.com/codeigniter4/shield) sebagai sistem autentikasi.
* [**Shield OAuth**](https://github.com/codeigniter4/shield-oauth) sebagai tambahan autentikasi berbasis OAuth.

## Langkah-langkah

### 1. Menambahkan Tampilan UI Autentikasi

* Unduh folder `auth` dari repositori (bisa dari template yang disediakan atau buatan sendiri).
* Pindahkan folder `auth` ke dalam direktori `app/Views/` proyek Anda.

Struktur direktori Anda seharusnya menjadi seperti berikut:

```
app/
└── Views/
    └── auth/
        ├── login.php
        ├── register.php
        ├── email_2fa_show.php
        ├── email_2fa_verify.php
        ├── email_activate_show.php
        ├── magic_link_form.php
        ├── magic_link_message.php
        └── ...
```

### 2. Konfigurasi Tampilan Autentikasi

Edit file `app/Config/Auth.php` pada properti `$views` agar sesuai dengan tampilan UI yang Anda tambahkan:

```php
public array $views = [
    'login'                       => '\App\Views\auth\login',
    'register'                    => '\App\Views\auth\register',
    'layout'                      => '\CodeIgniter\Shield\Views\layout',
    'action_email_2fa'            => '\App\Views\auth\email_2fa_show',
    'action_email_2fa_verify'     => '\App\Views\auth\email_2fa_verify',
    'action_email_2fa_email'      => '\CodeIgniter\Shield\Views\Email\email_2fa_email',
    'action_email_activate_show'  => '\App\Views\auth\email_activate_show',
    'action_email_activate_email' => '\CodeIgniter\Shield\Views\Email\email_activate_email',
    'magic-link-login'            => '\App\Views\auth\magic_link_form',
    'magic-link-message'          => '\App\Views\auth\magic_link_message',
    'magic-link-email'            => '\CodeIgniter\Shield\Views\Email\magic_link_email',
];
```

### 3. Menambahkan File Bahasa

Pastikan Anda juga menambahkan file bahasa berikut:

* Salin file `Auth.php` dari folder `Language/en/` (jika Anda membuat kostumisasi) ke `app/Language/en/Auth.php`.
* Anda bisa menyesuaikan teks dan pesan autentikasi yang ditampilkan pada UI.
