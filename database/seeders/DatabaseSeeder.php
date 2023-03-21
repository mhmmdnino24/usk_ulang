<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USER
        User::Create([
            'kode' => 'AD001',
            'nis'    => '203910',
            'fullname'    => 'Administrator',
            'username' => 'admin',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII-RPL',
            'alamat' => 'JL.Condet Raya',
            'verif'    => 'verified',
            'role' => 'admin',
            'join_date'    => Carbon::now(),
            'terakhir_login' => Carbon::now(),
            'foto' => '',
        ]);

        User::Create([
            'kode' => 'AA001',
            'nis'    => '0056378',
            'fullname'    => 'Muhammad Nino Pramatama',
            'username' => 'nino',
            'password'    => Hash::make("password"),
            'kelas'    => 'XII RPL',
            'alamat' => 'JL. Kemang Vilage',
            'verif'    => 'verified',
            'role' => 'user',
            'join_date'    => Carbon::now(),
            // 'terakhir_login' => '',
            'foto' => '',
        ]);

        //KATEGORI
        Kategori::create([
            'kode' => 'marvel',
            'nama' => 'Marvel',
        ]);

        Kategori::create([
            'kode' => 'dc comic',
            'nama' => 'DC Comic',
        ]);

        Kategori::create([
            'kode' => 'sejarah',
            'nama' => 'Sejarah',
        ]);

        //PENERBIT
        Penerbit::create([
            'kode' => 'P001',
            'nama'    => 'Erlangga',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'P002',
            'nama'    => 'BSE',
            // 'verif' => '',
        ]);

        Penerbit::create([
            'kode' => 'P003',
            'nama'    => 'Intermedia',
            // 'verif' => '',
        ]);

        //BUKU
        Buku::create([
            'judul' => 'Spiderman',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Ahmad Jamal',
            'tahun_terbit' => '2017',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Ironman',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Matt Mou',
            'tahun_terbit' => '2017',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Batman',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Joel Nam',
            'tahun_terbit' => '2018',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Joker',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Robert Alfin',
            'tahun_terbit' => '2018',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Sejarah Mesir Kuno',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Austin Gusman',
            'tahun_terbit' => '2019',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Sejarah Proklamasi',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Muhammad Rizki',
            'tahun_terbit' => '2019',
            'isbn' => '',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '10',
            'foto' => '',
        ]);

        //PEMINJAMAN
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tgl_peminjaman' => Carbon::now(),
            'tgl_pengembalian' => Carbon::now(),
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => '0',
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '2',
            'tgl_peminjaman' => Carbon::now(),
            // 'tgl_pengembalian' => '',
            'kondisi_buku_saat_dipinjam' => 'rusak',
            // 'kondisi_buku_saat_dikembalikan' => '',
            'denda' => '1000',
        ]);

        //PESAN
        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Pengembalian Buku',
            'isi' => 'Buku akan saya kembalikan segera',
            'status' => 'terkirim',
            'tgl_kirim' => Carbon::now(),
        ]);

        Pesan::create([
            'penerima_id' => '1',
            'pengirim_id' => '2',
            'judul' => 'Terimakasih Perpus',
            'isi' => 'Buku yang ada di perpus ini sungguh keren',
            'status' => 'terkirim',
            'tgl_kirim' => Carbon::now(),
        ]);

        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Anda merusakan buku',
            'isi' => 'Anda kena denda 10000',
            'status' => 'terkirim',
            'tgl_kirim' => Carbon::now(),
        ]);
        
        //IDENTITAS
        Identitas::create([
            'nama_app'    => 'Perpustakaanku',
            'alamat_app' => 'JL. Condet Raya, Cililitan, Kramat Jati',
            'email_app'    => 'perpustakaanku@email.com',
            'nomor_hp'    => '087840260498',
            'foto' => '',
        ]);
    }
}
