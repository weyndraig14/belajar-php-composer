<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### PHP COMPOSER
> - Dependensi manajemen membantu mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi.
> - Composer adalah alat manajemen dependensi yang paling populer untuk PHP saat ini, terinspirasi oleh NPM dan Bundler.
> - Instalasi Composer cukup mudah, dan setelah terpasang, dapat dengan mudah mengelola dependensi proyek PHP.
>
> Berikut kode untuk mengecek versi composer :
>
> <img width="420" alt="Cuplikan layar 2024-03-25 104801" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/5441d774-fda2-40e1-bbe6-1d2a434dd109">
>
> #### PROJECT COMPOSER
> - Untuk Membuat proyek menggunakan Composer cukup sederhana dengan membuat file ```composer.json```, bisa dilakukan secara manual atau otomatis dengan perintah ```composer init```.
> - Composer memungkinkan pengguna untuk menambahkan lisensi dan metadata ke proyek dengan mudah.
> - Composer akan membuat folder vendor dan file ```composer.lock``` secara otomatis saat menginstal dependensi.
> - Menghapus file ```composer.json```, ```composer.lock```, dan folder ```vendor``` adalah cara mudah untuk menghapus proyek Composer.
> - Composer menyediakan autoload untuk memuat otomatis semua class yang ada di direktori vendor.
>
> Berikut kode ketika melakukan composer init :
>
> <img width="484" alt="Cuplikan layar 2024-03-25 104830" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/7cadbd55-5c88-4406-ac0b-c3471a57ad89">
>
> Berikut file composer.json :
>
> <img width="307" alt="Cuplikan layar 2024-03-25 105001" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/bd478267-3e7a-4549-80f8-b4b1e7a28689">
>
> Berikut kode ketika melakukan composer update :
>
> <img width="436" alt="Cuplikan layar 2024-03-25 105546" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/e1ddb0af-20bb-483f-8cb0-c7430ebba9bf">
>
> <img width="607" alt="Cuplikan layar 2024-03-25 105844" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/e412bbc9-053a-4376-ae1c-652ab6861eb7">
---
> #### HELLO WORLD
> - Composer menyediakan autoload untuk memuat otomatis semua class yang ada di direktori vendor.
>
> Berikut kode composer hello world :
>
> <img width="432" alt="Cuplikan layar 2024-03-25 110005" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/d180e1f1-7045-4838-8589-0d6f903376d9">
---
> #### AUTOLOAD
> - Untuk menggunakan autoload, proyek harus mengikuti standar, seperti PSR-4, dan menambahkan konfigurasi autoload di file ```composer.json```.
>
> Berikut kode untuk membuat autoload :
>
> <img width="230" alt="Cuplikan layar 2024-03-25 110032" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/de36492a-1749-402c-bfe3-23d5b012b7b8">
---
> #### COMPOSER DUMP-AUTOLOAD
> - Perintah composer dump-autoload digunakan untuk memperbarui file ```autoload.php``` setelah mengubah konfigurasi autoload.
> - Named space dalam Composer harus sama dengan nama direktori dan nama file yang digunakan.
> - Fitur autoload di Composer memungkinkan penggunaan library secara otomatis tanpa perlu manual include file-file PHP.
>
> Berikut kode class people :
>
> <img width="383" alt="Cuplikan layar 2024-03-25 110103" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/02a38a18-b2a8-42c5-8b0d-273df75297a8">
>
> Berikut kode untuk menggunakan autoload :
>
> <img width="327" alt="Cuplikan layar 2024-03-25 110123" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/16c6d3a0-0745-49d1-990e-df92ab7e2a0d">
---
> #### REPOSITORY
> - Repositori Packagist adalah tempat penyimpanan library, dependensi, dan framework berbasis Composer secara default.
---
> #### MENAMBAH DEPENDENCY
> - Disarankan untuk membagi aplikasi menjadi bagian kecil dan menyimpan library dependensinya di repositori untuk kemudahan pengelolaan.
> - Menentukan versi library yang akan digunakan dalam file composer.json menggunakan Semantic Versioning.
> - Pastikan untuk composer update setiap menambah library dan melakukan generate autoload : ```composer dump-autoload```
>
> Berikut kode composer dependency :
>
> <img width="291" alt="Cuplikan layar 2024-03-25 110144" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/0e51ba3a-383e-47e6-bdf8-51121e06cd42">
>
> Berikut kode menambah library monolog :
>
> <img width="323" alt="Cuplikan layar 2024-03-25 110156" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/5d5b43cf-4288-423c-afd0-79858469c1ba">
>
> Hasil composer update :
>
> <img width="151" alt="Cuplikan layar 2024-03-25 110233" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/cc767aa4-51cf-4ffa-b450-5fe6174418ec">
>
> Berikut kode mencoba monolog :
>
> <img width="500" alt="Cuplikan layar 2024-03-25 110257" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/24264e0f-e981-4fdc-9941-53f9336f8b5a">
---
> #### LIBRARY
> - Composer tidak hanya mendukung pembuatan proyek, tetapi juga pembuatan library yang dapat digunakan dalam proyek orang lain.
> - Proses membuat library dengan Composer mirip dengan membuat proyek, namun dengan perbedaan pada pemilihan jenis project saat inisialisasi.
> - Setelah membuat library, Anda dapat menentukan dependency dan versi PHP yang dibutuhkan di file ```composer.json```.
> - Autoload dan namespace perlu ditentukan dalam library untuk memastikan interoperabilitas yang baik.
> - Setelah membuat library, Anda dapat mengunggahnya ke repository Git agar dapat digunakan oleh orang lain.
> - Penggunaan library dari repository dapat diintegrasikan dengan Composer dengan menambahkannya sebagai repository di file ```composer.json```.
> - Proses upgrade versi library cukup mudah, hanya perlu mengubah kode, membuat rilis baru, dan melakukan update versi di project yang menggunakannya.
>
> Berikut kode untuk membuat library :
>
> <img width="536" alt="Cuplikan layar 2024-03-25 110511" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/6c326bfa-ccdf-4df9-89e5-f05103ec5d95">
>
> Berikut kode class customer :
>
> <img width="467" alt="Cuplikan layar 2024-03-25 110557" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/1c651c83-d2ab-4515-83fe-0b798e8ff10d">
>
> Berikut kode menambah dependency :
>
> <img width="518" alt="Cuplikan layar 2024-03-25 110716" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/35a56cb0-b64a-4f0f-8256-ed45673ae49d">
>
> Berikut kode hello library :
>
> <img width="332" alt="Cuplikan layar 2024-03-25 110921" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/df702cd1-5a11-40a3-b705-e4c27b7284f1">
>
> Berikut kode update library :
>
> <img width="351" alt="Cuplikan layar 2024-03-25 111740" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/c6b42f34-6610-49e9-add3-ced6f2583f16">
---
> #### PACKAGIST
> - Menggunakan Packagist untuk submit library memudahkan manajemen dependensi, tidak perlu tambahkan repository manual di ```composer.json```.
> - Keuntungannya adalah kita tidak perlu menambahkan repository git di composer.json satu per satu
> - bisa sync secara otomatis ketika ada release versi baru
---
> #### SCRIPT
> = Fitur script pada Composer memungkinkan pembuatan perintah khusus untuk shortcut atau eksekusi perintah terminal.
>
> Contoh kode script :
>
> <img width="344" alt="Cuplikan layar 2024-03-25 111027" src="https://github.com/weyndraig14/belajar-php-composer/assets/162102805/affa7abf-764b-459f-b07f-3102a72176b2">
---

<p align="center" >
  <b>PERTANYAAN</b>
</p>

---

> - Jika terkena rate limited oleh composer bagaimana cara menghilangkannya selain mengganti wifi/ip

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Dengan composer kita dapat mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi.

---

















