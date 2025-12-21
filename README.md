**ElectroMap - WebGIS Sebaran Rasio Elektrifikasi Sulawesi Tenggara**

ElectroMap adalah aplikasi WebGIS (Sistem Informasi Geografis berbasis Web) yang dirancang untuk memetakan dan memonitoring status ketersediaan energi listrik di Provinsi Sulawesi Tenggara. Aplikasi ini memberikan visualisasi spasial mengenai rasio elektrifikasi, mencakup data pengguna listrik PLN, Non-PLN, dan wilayah yang belum teraliri listrik.

Website ini terdiri dari dua komponen antarmuka utama:
1. Landing Page: Halaman pengantar yang informatif berisi ringkasan fitur teknologi dan akses cepat ke peta.
2. Dashboard WebGIS: Halaman peta interaktif yang menampilkan :
   
   a. Analisis Wilayah (Choropleth): Visualisasi warna (Merah-Kuning-Hijau) berdasarkan persentase rasio elektrifikasi.
   
   b. Layer WMS GeoServer: Integrasi langsung peta batas administrasi dari GeoServer.
   
   c. Panel Data: Tabel statistik detail per Kabupaten/Kota yang terhubung langsung ke database.

Teknologi Pembangun Produk :
1. Frontend :
   a. HTML5
   b. CSS3
   c. Bootstrap 5
   d. JavaScript (ES6)
   e. Leaflet.js
   d. Leaflet Plugins
   e. Font Awesome
2. Backend & Geospatial
   a. PHP Native
   b. MySQL
   c. GeoServer

Sumber Data :
1. Data Atribut: Data statistik kelistrikan (Jumlah KK PLN, Non-PLN, Bukan Listrik, dan Rasio Elektrifikasi) yang bersumber dari publikasi Badan Pusat Statistik (BPS), yang kemudian dikelola dalam database MySQL.
2. Peta Dasar (Basemap): OpenStreetMap & CartoDB Dark Matter.
3. Data Spasial: Data shapefile Batas Administrasi Kabupaten/Kota Provinsi Sulawesi

<img width="1899" height="865" alt="image" src="https://github.com/user-attachments/assets/a5dd043b-9fda-481b-bd7a-9d22b2de493b" />
<img width="1900" height="866" alt="Screenshot 2025-12-21 154044" src="https://github.com/user-attachments/assets/cd3d5831-2d28-47ca-85ed-63f99ccea358" />
<img width="1900" height="866" alt="image" src="https://github.com/user-attachments/assets/8e1c31d8-cfab-466d-835b-f09456c52e76" />




