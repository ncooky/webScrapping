<?php

use Illuminate\Database\Seeder;

class ItemSchemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("insert into item_schema(title,is_full_url,css_expression,full_content_selector)
                    values
                    ('list product',1,'title[a.product-item-link[title]]||excerpt[span.price]||image[img.product-image-photo[src]]||source_link[strong.product-item-name a.product-item-link[href]]','section.product-info__section--desc')
        ");
    }
}
