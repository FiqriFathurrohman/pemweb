# ANALISA

### Struktur

struktur dalam projek ini ada : 
1. nginx yg di dalam nya ada * nginx.conf *

    Befungsi unntuk menangani request dan memnentukan port, akses dan folder penyimpanan.
    
2. Folder SRC yg di dalam nya div.html dan index.html
    
    Yang di gunakan sebagai halaman utama, dan utuk manambahkan kalimat

3. Lalu ada file .env

     Menyimpan variabel lingkungan (environment variables) untuk konfigurasi proyek agar lebih fleksibel dan mudah dikelola.


4. Dan Yang terakhir ada docker-compose.yml

    Mengatur dan menjalankan layanan berbasis Docker secara otomatis.



#### Apa yang di buat
* Web berbasis docker dan Nginx untuk menyajikan file HTML.
#### Kenapa di buat dengan struktur tersebut
* Struktur ini di buat agar lebih fleksibel dan mudah di keloala
* Dapat memisahkan konfigurasi,kode, dan variabel linkgungan untuk efisiensi dalam pengembangan
* Memanfaatkan docker dapat mempermudah setup.
#### Siapa yang terlbat
* Yang terlibat di sini adalah mahasiswa itu sendiri sebagai developer dan devOps
#### Dimana di gunakan 
* Code ini bisa di lihat di browswer lalu masuk ke localhost/div.html
#### Kapan di gunakan
* Saat pengembangan karna pengembang biar tau jika adan kesalahn ata kekurangan
#### Bagaimana cara kerjanya
* Nginx dalam Docker bertugas menyajikan file HTML dari folder src/.

* Konfigurasi server dikelola dengan nginx.conf.

* Docker Compose menjalankan semua layanan dengan satu perintah (docker-compose up).

==================================================================
#### Kelebihan/Kekuatan
* Bisa di jalankan di browswer
* Dengan Docker, aplikasi berjalan konsisten di berbagai lingkungan pengembangan dan produksi.
* Semua layanan bisa dijalankan hanya dengan satu perintah: docker-compose up.
* Menggunakan Nginx sebagai web server, yang terkenal ringan dan cepat dalam menyajikan file statis.

#### Kekurangan/Kelebihan
* Secara default, Nginx tidak memiliki fitur keamanan bawaan yang kuat, sehingga harus menambahkan konfigurasi ekstra agar lebih aman dari serangan cyber.

#### Peluang
* Dapat di kembangkan lebih lanjut dengan cod yg tepat dan kompleks

#### Ancaman
* Keamanan

        jika tidak dikonfigurasi dengan benar, Nginx bisa menjadi target serangan



