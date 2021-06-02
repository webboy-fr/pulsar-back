<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MemberSeeder extends Seeder
{
        public function run()
        {
                $model = model('MemberModel');


                //static::faker->create('fr_FR');

                $model->insert([
                        'firstname'      => static::faker()->name,
                        'lastname'      => static::faker()->name                        
                ]);
        }
}