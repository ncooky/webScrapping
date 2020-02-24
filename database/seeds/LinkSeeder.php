<?php

use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("insert into links(id, url, main_filter_selector, website_id, category_id, item_schema_id, created_at, updated_at)
                        VALUES 
                        ('1', 'https://fabelio.com/cp/ruang-tamu/sofa.html', '.products-grid .products .product-item', '1', '1', '1', '2020-02-24 04:53:19', '2020-02-24 04:53:23'),
                        ('2', 'https://fabelio.com/cp/ruang-makan/kursi.html', '.products-grid .products .product-item', '1', '3', '1', '2020-02-24 04:57:41', '2020-02-24 04:57:45'),
                        ('3', 'https://fabelio.com/cp/ruang-makan/tempat-penyimpanan/rak.html', '.products-grid .products .product-item', '1', '2', '1', '2020-02-24 05:02:33', '2020-02-24 05:02:38');"
                    );
        
    }
}
