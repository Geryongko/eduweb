<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(){
        Writer::create(['name'=>'Ardi Pratama','bio'=>'Dosen Data Science']);
        Writer::create(['name'=>'Siti Aisyah','bio'=>'Praktisi Network Security']);
        Writer::create(['name'=>'Rina Nur','bio'=>'Pengembang Multimedia']);
    }
}
