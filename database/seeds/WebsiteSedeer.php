<?php

use Illuminate\Database\Seeder;

class WebsiteSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("insert into website(title,logo,url)
                    values
                    ('fabelio','1582454895.png','https://www.fabelio.com')
        ;");
    }
}
