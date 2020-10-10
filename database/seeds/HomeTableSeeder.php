<?php

use Illuminate\Database\Seeder;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homes = array(
            array( 
                'judul'=>'Halo Pasuruan', 
                'kabupaten'=> 'Kabupaten Pasuruan adalah kabupaten di Provinsi Jawa Timur, Indonesia. Pusat pemerintah berlokasi di Bangil, Pasuruan. Kabupaten ini berbatasan dengan Kabupaten Sidoarjo dan Laut Jawa di utara, Kabupaten Probolinggo di Timur, Kabupaten Malang di selatan, Kota Batu di barat daya, serta Kabupaten Mojokerto di barat. Kabupaten ini dikenal sebagai daerah perindustrian, pertanian, dan tujuan wisata. Kompleks pegunungan Tengger dengan Gunung Bromo merupakan atraksi wisata utama di Kabupaten Pasuruan. Wilayah timur Kabupaten Pasuruan termasuk ke dalam wilayah Tapal Kuda, Jawa Timur. Wilayah yang terluas di Kabupaten Pasuruan adalah Kecamatan Lumbang.',
                'kota'=>'Kota Pasuruan adalah sebuah kota di Provinsi Jawa Timur, Indonesia. Kota ini terletak 60 km sebelah tenggara Surabaya, ibu kota provinsi Jawa Timur dan 355 km sebelah barat laut Denpasar, Bali. Seluruh wilayah Kota Pasuruan berbatasan dengan Kabupaten Pasuruan. Kota Pasuruan berada di jalur utama pantai utara yang menghubungkan Pulau Jawa dengan Pulau Bali yang menjadikannya sebagai kota dengan prospek ekonomi yang besar di kawasan Indonesia bagian timur.',
                'letak'=>'https://www.google.com/maps/place/Pasuruan,+East+Java/@-7.7504729,112.5571809,10z/data=!3m1!4b1!4m5!3m4!1s0x2dd7cdd787edb5ed:0x3027a76e352bdd0!8m2!3d-7.7859961!4d112.858217',
                'gambar'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.ub.ac.id%2Frahmawati891%2F2013%2F06%2F04%2Fdesa-ngembal%2F&psig=AOvVaw0Jbs5y8i0QAFDuudeN2dgE&ust=1601916760545000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMC1pI-zm-wCFQAAAAAdAAAAABAU',
                'created_at'=> DB::raw('NOW()'))
            );
    
    //insert data ke db
    DB::table('homes')->insert($homes);
        }
}
