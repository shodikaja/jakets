<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Header;
use App\quotes;
use App\background_quotes;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $Product = Product::create([
            'nama_product' => 'Jaket parka',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);
              $Product2 = Product::create([
            'nama_product' => 'Jaket parasit',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);
               $Product3 = Product::create([
            'nama_product' => 'Jaket hoodei',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);
                $Product4 = Product::create([
            'nama_product' => 'jaket kulit',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);
                 $Product5 = Product::create([
            'nama_product' => 'jaket levis',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);
                  $Product6 = Product::create([
            'nama_product' => 'jaket bommber',
            'detail' =>'<!DOCTYPE html>
  						<html>
						<head>
						</head>
						<body>
						<p>Bahan&nbsp; : Levis</p>	
						<p>Ukuran : 39-41</p>
						<p>Warna&nbsp; : Navy , Black</p>
						<p>Harga&nbsp; : 234 K</p>
						</body>
						</html>',
            'cover'=>'']);


            $quotes = quotes::create([
            'text'=>'Dengan Mencintai Dan Mengunakan Product Local Dengan Tidak Sadar Anda Membantu Meningkatkan Product Local Mentuk Menembus Pasar Internasional']);
            $quotes2 = quotes::create([
            'text'=>'Aku Adalah Hujan , Dan Aku Suka Hujan , Jika Kamu Tidak Suka Tak Mengapa , Silahkan Berteduh']);
            $quotes3 = quotes::create([
            'text'=>'Aku Berpikiran Kepada Orang Lain Itu Orang Baik , Namun Orang Lain Berpikiran Saya Orang Jahat , Jadi Walaupun Saya Orang Jahat Namun Selalu Berpikiran Baik , Namun Sebaliknya Dengan Orang Lain , Orang Baik Namun Selalu Berpikiran Jahat']);

            $Header = Header::create([
            'text_besar'=>'PansCompant.cloth',
            'text_kecil'=>'Jaket compay merupakan sebuah distro yang menjual beraneka macam jaket,mulai dari levis,kulit,parka,hoode dan lain lain.Jenis toko seperti ini dikenal dikalangan konsumen dengan nama distro (distrbution outtlet).

Berbeda dengan Factory Outtlet yang lebih dulu dikenal masyarakat yang menjual pakaian dan aksesoris dengan merk terkenal, di distro ini produk yang dijual mayoritas adalah hasil kreasi sendiri.Pemilik distro pada perusahaan ini yaitu tunggal yang hanya satu pemegang modal beliau adalah Rauf Badrul Hakim.Lelaki yang menyelesaikan bangku SMA di SMAN 26 Bandung ini merupakan lelaki yang sangat rajin dan kreatif dalam melihat peluang bisnis.

Sejarah Bisnis

Bermula dari sebuah gagasan untuk membuat sebuah toko yang menjual merchandise film dan musik seperti poster dan kaos dan aksesoris lainnya, usaha ini berawal, tepatnya pada bulan Juni 2006 usaha ini didirikan hanya sebagai usaha rumahan yang dikirmkan ke distro distro tertentu yang berada di Bandung.

Dalam beberapa bulan tersebut Distro Natural ini mengalami kemajuan yang cukup pesat, maka dari itu untuk mengembangkannya Distro Natural ini membuka toko di Jl. Ir. H. Djuanda (Dago) No. 205 Bandung.

VISI

JaketCompany akan selalu memprioritaskan aktifitas bisnis terpadu dan terprogram untuk mencapai dan memberikan hasil optimal dan kepuasan pelanggan dengan harapan menjalin hubungan yang baik..
Senatiasa mampu bersaing dan tumbuh berkembang dengan sehat.
Menjadikan perusahaan ini sebagai inovator anak-anak bangsa untuk berkarya.
Menjadikan perusahaan yang ramah lingkungan yang mengedepankan go green.
MISI

Memproduksi berbagai jenis pakaian yang terkait dengan kebutuhan masyarakat dengan mutu terbaik , harga dan pasokan yang berdaya saing tinggi mmelalui pengolahan yang profesional demi kepuasan pelanggan.
Menjalin kemitran kerja sama dengan pemasok dan penyalur yang saling menguntungkan antar sesama.
Memberikan perhatian yang tulus kepada masyarakat melalui penciptaan lapangan kerja dan dukungan pembinaan sosial.
Harapan

Mampu menjadikan perusahan pakaian terbaik yang senatiasa mampu bersaing dan tumbuh berkembang dengan sehat.
Menjadikan perusahaan yang dikenal oleh masyarakat di semua kalangan di INDONESIA atau pun diluar negri.']);

			$background_quotes = background_quotes::create([
            'text'=>'PansCompant.cloth',
            'background'=>'']);
    }
}
 