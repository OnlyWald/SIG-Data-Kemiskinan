<?php

namespace Database\Seeders;

use App\Models\Dinsos;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Dinsos::create([
            'nama_kota'=>'Bojonegoro',
            'nama_dinsos' => 'Dinas Sosial Bojonegoro',
            'longitude' => '-7.1520205',
            'latitude' => '111.8784363',
            'jumlah_penduduk' => '1249692',
            'jumlah_penduduk_miskin' => '154640',
        ]);

        Dinsos::create([
            'nama_kota'=>'Mojokerto',
            'nama_dinsos' => 'Dinas Sosial Mojokerto',
            'longitude' => '-7.5031821',
            'latitude' => '112.4196879',
            'jumlah_penduduk' => '1117688',
            'jumlah_penduduk_miskin' => '108810',
        ]);

        Dinsos::create([
            'nama_kota'=>'Madiun',
            'nama_dinsos' => 'Dinas Sosial Madiun',
            'longitude' => '-7.6562828',
            'latitude' => '111.5568233',
            'jumlah_penduduk' => '682684',
            'jumlah_penduduk_miskin' => '71910',
        ]);

        Dinsos::create([
            'nama_kota'=>'Ponorogo',
            'nama_dinsos' => 'Dinas Sosial Ponorogo',
            'longitude' => '-7.9708568',
            'latitude' => '111.4748383',
            'jumlah_penduduk' => '871370',
            'jumlah_penduduk_miskin' => '83970',
        ]);

        Dinsos::create([
            'nama_kota'=>'Trenggalek',
            'nama_dinsos' => 'Dinas Sosial Trenggalek',
            'longitude' => '-8.0588283',
            'latitude' => '111.7149757',
            'jumlah_penduduk' => '696295',
            'jumlah_penduduk_miskin' => '76440',
        ]);

        Dinsos::create([
            'nama_kota'=>'Tulungagung',
            'nama_dinsos' => 'Dinas Sosial Tulungagung',
            'longitude' => '-8.0426922',
            'latitude' => '111.9111012',
            'jumlah_penduduk' => '1039284',
            'jumlah_penduduk_miskin' => '70010',
        ]);

        Dinsos::create([
            'nama_kota'=>'Blitar',
            'nama_dinsos' => 'Dinas Sosial Blitar',
            'longitude' => '-8.0992959',
            'latitude' => '112.1725872',
            'jumlah_penduduk' => '1160677',
            'jumlah_penduduk_miskin' => '103750',
        ]);

        Dinsos::create([
            'nama_kota'=>'Malang',
            'nama_dinsos' => 'Dinas Sosial Malang',
            'longitude' => '-8.1236609',
            'latitude' => '112.5803288',
            'jumlah_penduduk' => '2606204',
            'jumlah_penduduk_miskin' => '246600',
        ]);

        Dinsos::create([
            'nama_kota'=>'Lumajang',
            'nama_dinsos' => 'Dinas Sosial Lumajang',
            'longitude' => '-8.1046369',
            'latitude' => '113.2300644',
            'jumlah_penduduk' => '1042395',
            'jumlah_penduduk_miskin' => '98880',
        ]);

        Dinsos::create([
            'nama_kota'=>'Jember',
            'nama_dinsos' => 'Dinas Sosial Jember',
            'longitude' => '-8.1664088',
            'latitude' => '113.7025483',
            'jumlah_penduduk' => '2450668',
            'jumlah_penduduk_miskin' => '226570',
        ]);

        Dinsos::create([
            'nama_kota'=>'Banyuwangi',
            'nama_dinsos' => 'Dinas Sosial Banyuwangi',
            'longitude' => '-8.216919',
            'latitude' => '114.296281',
            'jumlah_penduduk' => '1613991',
            'jumlah_penduduk_miskin' => '121370',
        ]);

        Dinsos::create([
            'nama_kota'=>'Bondowoso',
            'nama_dinsos' => 'Dinas Sosial Bondowoso',
            'longitude' => '-7.9314846',
            'latitude' => '113.7556324',
            'jumlah_penduduk' => '775715',
            'jumlah_penduduk_miskin' => '103330',
        ]);

        Dinsos::create([
            'nama_kota'=>'Situbondo',
            'nama_dinsos' => 'Dinas Sosial Situbondo',
            'longitude' => '-7.6989533',
            'latitude' => '113.9934204',
            'jumlah_penduduk' => '682978',
            'jumlah_penduduk_miskin' => '76440',
        ]);

        Dinsos::create([
            'nama_kota'=>'Probolinggo',
            'nama_dinsos' => 'Dinas Sosial Probolinggo',
            'longitude' => '-7.7455737',
            'latitude' => '113.2141962',
            'jumlah_penduduk' => '1168503',
            'jumlah_penduduk_miskin' => '207220',
        ]);

        Dinsos::create([
            'nama_kota'=>'Pasuruan',
            'nama_dinsos' => 'Dinas Sosial Pasuruan',
            'longitude' => '-7.6514296',
            'latitude' => '112.835225',
            'jumlah_penduduk' => '1627396',
            'jumlah_penduduk_miskin' => '141090',
        ]);

        Dinsos::create([
            'nama_kota'=>'Sidoarjo',
            'nama_dinsos' => 'Dinas Sosial Sidoarjo',
            'longitude' => '-7.4599768',
            'latitude' => '112.706267',
            'jumlah_penduduk' => '2249476',
            'jumlah_penduduk_miskin' => '119290',
        ]);

        Dinsos::create([
            'nama_kota'=>'Jombang',
            'nama_dinsos' => 'Dinas Sosial Jombang',
            'longitude' => '-7.5502769',
            'latitude' => '112.2392677',
            'jumlah_penduduk' => '1263814',
            'jumlah_penduduk_miskin' => '116440',
        ]);

        Dinsos::create([
            'nama_kota'=>'Nganjuk',
            'nama_dinsos' => 'Dinas Sosial Nganjuk',
            'longitude' => '-7.6013142',
            'latitude' => '111.8985102',
            'jumlah_penduduk' => '1054611',
            'jumlah_penduduk_miskin' => '118510',
        ]);

        Dinsos::create([
            'nama_kota'=>'Magetan',
            'nama_dinsos' => 'Dinas Sosial Magetan',
            'longitude' => '-7.6453676',
            'latitude' => '111.3269009',
            'jumlah_penduduk' => '628977',
            'jumlah_penduduk_miskin' => '60430',
        ]);

        Dinsos::create([
            'nama_kota'=>'Tuban',
            'nama_dinsos' => 'Dinas Sosial Tuban',
            'longitude' => '-6.8947031',
            'latitude' => '112.0376247',
            'jumlah_penduduk' => '1172790',
            'jumlah_penduduk_miskin' => '170800',
        ]);

        Dinsos::create([
            'nama_kota'=>'Lamongan',
            'nama_dinsos' => 'Dinas Sosial Lamongan',
            'longitude' => '-7.1121017',
            'latitude' => '112.4096337',
            'jumlah_penduduk' => '1189106',
            'jumlah_penduduk_miskin' => '157110',
        ]);

        Dinsos::create([
            'nama_kota'=>'Gresik',
            'nama_dinsos' => 'Dinas Sosial Gresik',
            'longitude' => '-7.1649162',
            'latitude' => '112.5830677',
            'jumlah_penduduk' => '1312881',
            'jumlah_penduduk_miskin' => '148610',
        ]);

        Dinsos::create([
            'nama_kota'=>'Sampang',
            'nama_dinsos' => 'Dinas Sosial Sampang',
            'longitude' => '-7.187905',
            'latitude' => '113.2351251',
            'jumlah_penduduk' => '978875',
            'jumlah_penduduk_miskin' => '202210',
        ]);

        Dinsos::create([
            'nama_kota'=>'Sumenep',
            'nama_dinsos' => 'Dinas Sosial Sumenep',
            'longitude' => '-7.0132217',
            'latitude' => '113.8634513',
            'jumlah_penduduk' => '1088910',
            'jumlah_penduduk_miskin' => '211980',
        ]);

        Dinsos::create([
            'nama_kota'=>'Batu',
            'nama_dinsos' => 'Dinas Sosial Kota Batu',
            'longitude' => '-7.8661799',
            'latitude' => '112.5110521',
            'jumlah_penduduk' => '207490',
            'jumlah_penduduk_miskin' => '7890',
        ]);

        Dinsos::create([
            'nama_kota'=>'Bangkalan',
            'nama_dinsos' => 'Dinas Sosial Bangkalan',
            'longitude' => '-7.049565',
            'latitude' => '112.7366989',
            'jumlah_penduduk' => '986672',
            'jumlah_penduduk_miskin' => '186110',
        ]);

        Dinsos::create([
            'nama_kota'=>'Kediri',
            'nama_dinsos' => 'Dinas Sosial Kediri',
            'longitude' => '-7.8423991',
            'latitude' => '111.8764407',
            'jumlah_penduduk' => '1574272',
            'jumlah_penduduk_miskin' => '163950',
        ]);

        Dinsos::create([
            'nama_kota'=>'Ngawi',
            'nama_dinsos' => 'Dinas Sosial Ngawi',
            'longitude' => '-7.432141',
            'latitude' => '111.4530233',
            'jumlah_penduduk' => '830108',
            'jumlah_penduduk_miskin' => '119430',
        ]);
        
        Dinsos::create([
            'nama_kota'=>'Pacitan',
            'nama_dinsos' => 'Dinas Sosial Pacitan',
            'longitude' => '-8.2037116',
            'latitude' => '111.095914',
            'jumlah_penduduk' => '555304',
            'jumlah_penduduk_miskin' => '75860',
        ]);

        Dinsos::create([
            'nama_kota'=>'Surabaya',
            'nama_dinsos' => 'Dinas Sosial Kota Surabaya',
            'longitude' => '-7.2680827',
            'latitude' => '112.7308363',
            'jumlah_penduduk' => '2896195',
            'jumlah_penduduk_miskin' => '130550',
        ]);

    }
}
