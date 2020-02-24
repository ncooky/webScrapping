<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("insert into category(title)
                    values
                    ('sofa'),
                    ('rak'),
                    ('kursi')
        ");
    }
}
