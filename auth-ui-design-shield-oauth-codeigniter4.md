# Menambahkan UI Authentication dengan Shield & Shield OAuth di CodeIgniter 4  

## Prasyarat  
Pastikan proyek Anda menggunakan **CodeIgniter 4** serta telah menginstal **Shield** dan **Shield OAuth** sebagai library autentikasi.  

## Langkah-langkah  

### 1. Menambahkan Tampilan UI Autentikasi  
- Unduh folder `auth` dari repositori.  
- Pindahkan folder `auth` ke dalam folder `app/Views/` di proyek Anda.  

### 2. Konfigurasi Tampilan Autentikasi  
Ubah nilai array pada file `app/Config/Auth.php` untuk menyesuaikan tampilan dengan UI baru:  

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
