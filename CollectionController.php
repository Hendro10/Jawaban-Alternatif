<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection);

    }

    public function collectionDua()
    {
        $collection = collect([
            [1, 2, 3, 4, 5]
        ]);
        echo $collection;

        echo "<br>";

        $collection = collect([
            [6, 7, 8, 9, 10]
        ]);
        echo $collection;

        echo "<br>";

        $collection = collect([
            [11, 12, 13, 14, 15]
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        //  berguna untuk mengurutkan isi collection

        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump( $collection->sort() );
        // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}

    }

    public function collectionEmpat()
    {
        //  cara penulisan lain dari perulangan foreach.

        $collection = collect([
            "nama" => "Hendro Gunawan",
            "sekolah" => "Universitas Siber Asia",
            "kota" => "Jakarta",
            "jurusan" => "PJJ Informatika",
            ]);

        foreach( $collection as $key => $val ) {
            echo "$key= $val <br>";
            }
    }

    public function collectionLima()
    {
        $collection = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 59990000],
            ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaProduk' => 'Speaker C', 'harga' => 350000],
            ]);

        // Ambil namaProduk dari semua element
        dump( $collection->pluck('namaProduk') );

    }

    public function collectionEnam()
    {
        $siswa00 = new \stdClass();
        $siswa00->nama = "Rian";
        $siswa00->sekolah = "SMK Pelita Ibu";
        $siswa00->jurusan = "IPA";

        $siswa01 = new \stdClass();
        $siswa01->nama = "Nova";
        $siswa01->sekolah = "SMA 2 Kota Baru";
        $siswa01->jurusan = "IPA";

        $siswa02 = new \stdClass();
        $siswa02->nama = "Rudi";
        $siswa02->sekolah = "MA Al Hidayah";
        $siswa02->jurusan = "IPS";

        $siswas = collect([
        0 => $siswa00,
        1 => $siswa01,
        2 => $siswa02,
        ]);

        $namaJurusanIpa = $siswas->groupBy('jurusan')->get('IPA')->pluck('nama')->all();
        echo 'Nama siswa jurusan IPA: '.implode(', ',$namaJurusanIpa);


    }

    public function collectionTujuh()
    {
        $matkul00 = new \stdClass();
        $matkul00->namaMatkul = "Sistem Operasi";
        $matkul00->jumlahSks = 3;
        $matkul00->semester = 3;

        $matkul01 = new \stdClass();
        $matkul01->namaMatkul = "Algoritma dan Pemrograman";
        $matkul01->jumlahSks = 4;
        $matkul01->semester = 1;

        $matkul02 = new \stdClass();
        $matkul02->namaMatkul = "Kalkulus Dasar";
        $matkul02->jumlahSks = 2;
        $matkul02->semester = 1;

        $matkul03 = new \stdClass();
        $matkul03->namaMatkul = "Basis Data";
        $matkul03->jumlahSks = 2;
        $matkul03->semester = 3;

        $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);

        $matkulsSemester3 = $matkuls->where( 'semester',3 );
        $stringMatkul = "";
        foreach($matkulsSemester3 as $matkul) {
            $stringMatkul .= $matkul->namaMatkul.", ";
        }

        echo 'Nama mata kuliah di semester 3: '.substr($stringMatkul,0,-2);

    }
}
