<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('articles')->delete();
        $articles = array(
            array( 
                'title'=>'Taman Safari Indonesia 2', 
                'content'=> 'Taman Safari Indonesia 2 adalah salah satu safari park terluas di Asia, yang terletak di lereng Gunung Arjuno, Kecamatan Prigen, Kabupaten Pasuruan, Jawa Timur. 
                        Memiliki berbagai macam spesies hewan dan atraksi terbaik se-Indonesia, kolam renang dengan sistem filter air yang canggih, dan habitat yang tidak rusak dan suasana yang rimbun. 
                        Taman Safari Indonesia menjadi tempat wisata yang berwawasan lingkungan dan berorientasi habitat satwa pada alam bebas.
                        Ada banyak aktivitas yang bisa dinikmati serta wahana yang bisa dicoba di Taman Safari Prigen. Selain melihat-lihat dan berfoto bersama satwa-satwa yang ada, 
                        pengunjung juga dapat menikmati berbagai atraksi satwa. Bagi pengunjung yang ingin melepas lelah, dapat juga mencoba zona Waterpark serta wahana ekstrim.',
            
                'price'=>'110000',
                'open'=>'09.00 - 17.00',
                'detail'=>'https://safariprigen.com/',
                'address'=>'Alamat: Desa Jatiarjo RT.12/RW.06, Prigen, Pasuruan, Jawa Timur 67157',
                'featured_image'=>'https://cdn2.tstatic.net/travel/foto/bank/images/taman-safari-prigen-imgs.jpg',
                'created_at'=> DB::raw('NOW()')),
            
            array(
                'title'=>'Agrowisata Bhakti Alam', 
                'content'=> 'Tempat wisata Pasuruan Agrowisata Bhakti Alam menawarkan kesejukan di alam terbuka dan teduhnya tanaman tropis. 
                            Bhakti Alam Agrowisata menawarkan berbagai aktivitas dan wahana bagi pegunjung. Baik untuk orang dewasa maupun ana-anak.Banyak kegiatan yang bisa dilakukan di taman wisata alam ini. Terutama kegiatan yang berhubungan dengan peternakan dan perkebunan. Kegiatan seperti memerah susu sapi, mencicipi buah segar yang sedang panen, atau berkunjung ke pabrik susu pasteurisasi.
                            Pengunjung tempat wisata pasuruan ini bisa mengikuti tour singkat berkeliling kebun. Waktu yang dihabiskan sekitar 40 menit menggunakan kereta wisata mini yang disediakan pengelola. Pemandu wisata akan mendampingi dan menjelaskan tentang tanaman dan kebun selama tour.
                            Selain kebun sayur dan buah taman rekreasi ini wisatawan juga bisa berkeliling taman bunga. Beragam bunga warna-warni ditata rapi dan cantik. Bisa menjadi objek wisata foto yang bagus bagi penyuka fotografi.
                            Di bhakti alam terdapat kolam mini yang khusus untuk anak-anak. Kolam warna-warni dengan pancuran air yang pasti sangat menghibur untuk anak-anak. Ada juga Kegiatan Outbond seru lainnya, yaitu menyewa ATV. Moto roda 4 yang mampu berjalan dipermukaan jalan yang tidak mulus.',
                
                'price'=>'50000',
                'open'=>'08.00 - 17.00',
                'detail'=>'http://www.bhaktialam.com/',
                'address'=>'Alamat: Jl. Bhakti Alam, Kemang, Ngembal, Tutur, Pasuruan, Jawa Timur',
                'featured_image'=>'https://1.bp.blogspot.com/-Kjp-2hNDwgY/XaqXLjvje0I/AAAAAAAAE4s/q41thwTCeeAzuKBISba3oKTj1xXd1sD2QCLcBGAsYHQ/s1600/Wisata-Bhakti-Alam-Mojokerto.jpg',
                'created_at'=> DB::raw('NOW()')),

            array(
                'title'=>'Masjid Cheng Ho', 
                'content'=> 'Tempat wisata Pasuruan, Masjid Chen Ho dibangun di atas tanah seluas 6.000 meter persegi, dengan luas bangunan masjid 550 meter persegi. Masjid ini memiliki dua lantai. Lantai bawah untuk ruang pertemuan dan lantai atas khusus untuk sholat.
                            Arsitektur bangunan masjid yang mirip rumah peribadatan Khing Hu Chu terlihat unik dan artistik. Memadukan unsur-unsur budaya Islam, Jawa dan Tiongkok. Masjid dicat dengan sentuhan warna-warna cerah seperti warna terang hijau, kuning, dan merah.
                            Interior Mesjid juga memiliki motif dan ornamen yang merupakan perpaduan dari tiga unsur Islam, Jawa dan Tiongkok. Perpaduan tersebut diaplikasikan pada Langit-langit yang menjulang tinggi mengikuti bentuk struktur atap yang ditunjang tiang-tiang yang dicat kuning keemasan.
                            Dari luar, bagian atap Masjid tempat wisata Pasuruan tersebut menampakkan gaya arsitektur khas bangunan menara di Tiongkok yang berlapis-lapis. Cat hijau muda di genting dan warna merah pada setiap tepian atap serta warna emas di puncaknya menjadikan bangunan terlihat mencolok dan atraktif. Sebagai tempat persinggahan, Masjid Cheng Ho Pandaan ini menjadi pilihan yang tepat. Karena selain bisa memanfaatkan fungsi utamanya sebagai tempat sholat yang bersih, pengunjung juga bisa menikmati keramaian di sekitarnya dan pemandangan alam pegunungan sebagai latar belakangnya.',
            
                'price'=>'0',
                'open'=>'24 jam',
                'detail'=>'http://chenghoo.co/',
                'address'=>'Alamat: Jl. Raya Kasri No.18, Petung Sari, Petungasri, Kec. Pandaan, Pasuruan, Jawa Timur',
                'featured_image'=>'https://www.jejakpiknik.com/wp-content/uploads/2019/12/Foto-by-daerah.sindonews.com_.jpg',
                'created_at'=> DB::raw('NOW()')),

            array(
                'title'=>'Saygon Waterpark', 
                'content'=> 'Tempat wisata pasuruan, Saygon Waterpark memiliki wahana permainan seperti kolam arus, kolam ombak dan water slide bahkan wahana simulasi Pesawat Boeing 737 seri 400 bisa ditemui. Tidak ketinggalan beragam permainan air lainnya.
                            seperti kebanyakan waterpark yang ada, Saygon juga tidak mau ketinggalan untuk menghadirkan wahana water slide. Meluncur dengan kecepatan tinggi di tube yang terbuka maupun tertutup pasti akan menambah keceriaan bermain bersama keluarga.
                            Kalau mau bermain dengan ombak tidak perlu repot ke pantai. Karena di sini pengunjung bisa menikmati kolam ombak dengan simulasi ombak buatan seperti dilaut tanpa taku tenggelam tentunya.
                            Yang paling menarik di Waterpark ini tentu wahana yang satu ini. Pengunjung bisa merasakan langsung pengalaman demo naik pesawat seperti aslinya. Dan lebih seru lagi karena disediakan juga Cockpit dengan simulasi film 3D.
                            Ada juga kolam Arus. Area bermain di tempat wisata Pasuruan ini cocok untuk bersantai. Wahana yang menyerupai sungai berarus ini akan membawa pengunjung mengitari berbagai wahana di Saygon Pasuruan.',
                
                'price'=>'40000',
                'open'=>'09.00 - 17.00',
                'detail'=>'https://saygonwaterpark.com/',
                'address'=>'Alamat: Sengon, Desa Pucangsari,Purwosari ,Pasuruan ,Jawa Timur',
                'featured_image'=>'https://blog.reservasi.com/wp-content/uploads/2017/01/Saygon-Waterpark-2.png',
                'created_at'=> DB::raw('NOW()'))

            );

            //insert data ke db
            DB::table('articles')->insert($articles);
            }
            
}
