<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("insert INTO article (id, title, excerpt, content, image, source_link, category_id, website_id, created_at, updated_at) 
        VALUES 
        ('1', 'Sofa Tempat Tidur Arlington (Kiwi)', 'Rp 2.639.200', '<h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p style=\"text-align: justify;\"><strong>Si Pemberi Kesan Tegas dan Juga Multifungsi</strong></p>
    <p style=\"text-align: justify;\">Banyaknya teman atau kerabat membuat Anda harus berpikir lebih praktis. Keinginan memiliki sofa multifungsi untuk tamu atau ruang kecil di rumah, bisa saja dijawab dengan Arlington Sofa Bed. Desainnya yang ergonomis dan bantalan syntetic &amp; faux leather yang nyaman ini cocok untuk di gunakan sebagai alas tidur ataupun hanya untuk duduk-duduk bersama.</p>
    <p style=\"text-align: justify;\">Dengan kemampuan rangka yang dapat berpindah hingga posisi kemiringan 3 kali, sofa bed ini juga hadir dengan pilihan warna tegas yang cocok diletakkan untuk sudut manapun di rumah Anda.</p>
    <p></p>
    <p><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi </span><span class=\"pull-right\">200 cm x 82 (120) cm x 82 cm</span>
    </li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><div class=\"prod-dimension-wrap\">
    <ul class=''“prod-dimension-list\"''>
    <li>
    <span class=''“pull-left\"''>Style</span><span class=\"pull-right\">Modern</span>
    </li>
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Sandaran</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Dudukan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Lengan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Lapisan Bantalan</span><span class=\"pull-right\">Indoor Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Solid Metal</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <p></p>
    <ul>
    <li><span>Tidak untuk penggunaan luar ruangan/teras</span></li>
    <li><span>Jangan kontak dengan air, bahan kimia dan sinar matahari.</span></li>
    <li><span>Bersihkan furniture dengan lap kering,</span></li>
    <li><span>Apabila noda membandel boleh gunakan air kemudian langsung seka dengan lap kering.</span></li>
    </ul>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa Tempat Tidur Arlington (Kiwi)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://m2fabelio.imgix.net/catalog/product/cache/small_image/414x214/beff4985b56e3afdbeabfc89641a4582/a/r/arlington_kiwi_.jpg', 'https://fabelio.com/ip/sofa-tempat-tidur-arlington-kiwi.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('2', 'Sofa 2 Dudukan Manu (Mystic)', 'Rp 1.999.200', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p dir=\"ltr\"><strong>Sofa Tebaik Untuk Santai dan Istirahat Bersama </strong></p>
    <p dir=\"ltr\" style=\"text-align: justify;\">Menikmati waktu liburan sambil bersantai memang paling pas dilakukan di rumah. Suasana rumah yang nyaman dan tenang akan membuat liburan semakin sempurna. Waktu santai di rumah akan membuat tubuh semakin rileks bila disempurnakan dengan furnitur yang pas. sofa 2 Kursi Manu hadir sebagai penyempurna waktu santai Anda di rumah.</p>
    <p dir=\"ltr\" style=\"text-align: justify;\">Ukurannya yang pas dapat menampung hingga 2 orang. Sangat pas ditempatkan di apartemen ataupun hunian minimalis. Warna yang ditawarkan juga banyak menjadikan sofa 2 Kursi Manu dapat kalian kombinasikan dengan perabotan yang sudah ada, kayu solid serta natural open pore sebagai finishing pastinya Sofa 2 Kursi Manu menjadi furnitur yang eksklusif.</p>
    <p dir=\"ltr\"><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi Keseluruhan</span><span class=\"pull-right\">140cm x 75cm x 81cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Ketebalan Dudukan</span><span class=\"pull-right\">13cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Kedalaman Dudukan</span><span class=\"pull-right\">51cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Tinggi Sandaran Lengan</span><span class=\"pull-right\">42cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Lebar Sandaran Lengan</span><span class=\"pull-right\">10cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi Kaki</span><span class=\"pull-right\">18cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\"><ul>
    <li>Bersihkan menggunakan kain microfiber.</li>
    <li>Lap dengan kain lembab.</li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\">
    <div class=\"prod-dimension-wrap\">
    <ul class=''“prod-dimension-list\"''>
    <li>
    <span class=''“pull-left\"''>Style</span><span class=\"pull-right\">Scandinavian</span>
    </li>
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Sandaran</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Dudukan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Lengan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Lapisan Bantalan</span><span class=\"pull-right\">Indoor Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Finishing</span><span class=\"pull-right\">Natural Open Pore</span>
    </li>
    </ul>
    </div>
    <div><em>Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.</em></div>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 2 Dudukan Manu (Mystic)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-2-kursi-manu-mystic-new.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('3', 'Sofa Tempat Tidur Sierra (Dark Grey)', 'Rp 1.299.000', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\"><p><span>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</span></p></div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\">
    <p>Dimensi produk: </p>
    <ul>
    <li>Dimensi sofa: 165 cm x 67 cm 70 cm </li>
    <li>Dimensi Bed: 165 cm x 87 cm x 32 cm </li>
    </ul>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><p>Solid wood + Microfiber</p></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\"><ul>
    <li><span>Minimalisir kontak dengan air, bahan kimia dan sinar matahari.</span></li>
    \
    <li><span>Bersihkan furniture dengan lap kering,</span></li>
    <li><span>Apabila noda membandel boleh gunakan air kemudian langsung seka dengan lap kering.</span></li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa Tempat Tidur Sierra (Dark Grey)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-tempat-tidur-sierra-dark-grey.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('4', 'Sofa 1 Dudukan Eton (Graphite)', 'Rp 1.049.300', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p>Waktu bersantai makin lengkap dengan <strong>Eton Armchair</strong>. Kursi berkapasitas 1 orang dengan kerangka berbahan kayu solid mindi dilengkapi warna kayu alami akan membawa kehangatan kedalam ruangan. Kelebihan dari  kayu mindi adalah bahannya yang tahan jamur dan tidak mudah rapuh. Dudukan dan sandarannya yang lapang diisi oleh busa dan dilapisi dengan bahan yang elegan. Sandaran yang melengkung dengan tingkat kemiringan yang sudah disesuaikan untuk keleluasaan anda, dilengkapi dengan tumpuan lengan di kedua sampingnya. Perpaduan warna yang serasi dari kursi ini cocok untuk melengkapi rumah dan kantor. Tersedia beberapa pilihan warna untuk bahan sandaran dan dudukan sesuai dengan keinginan Anda.</p>
    <p></p>
    <p><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi keseluruhan</span><span class=\"pull-right\">66 x 67,5 x 77 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Lebar sandaran</span><span class=\"pull-right\">25 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Lebar tumpuan lengan</span><span class=\"pull-right\">5,5 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi tumpuan lengan</span><span class=\"pull-right\">22 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Dimensi dudukan</span><span class=\"pull-right\">53 x 52 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi Kaki</span><span class=\"pull-right\">32 cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan</span><span class=\"pull-right\">Foam</span>
    </li>
    <li>
    <span class=\"pull-left\">Lapisan bantalan</span><span class=\"pull-right\">Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Kayu Mindi Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Finishing</span><span class=\"pull-right\">Natural Open Pore</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <p></p>
    <ul>
    <li><span>Tidak untuk penggunaan luar ruangan/teras</span></li>
    <li><span>Jangan kontak dengan air, bahan kimia dan sinar matahari.</span></li>
    <li><span>Bersihkan furniture dengan lap kering,</span></li>
    <li><span>Apabila noda membandel boleh gunakan air kemudian langsung seka dengan lap kering.</span></li>
    </ul>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 1 Dudukan Eton (Graphite)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/eton-armchair-graphite.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('5', 'Sofa 2 Kursi Manu (Grey)', 'Rp 2.124.150', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p dir=\"ltr\"><strong>Sofa Tebaik Untuk Santai dan Istirahat Bersama </strong></p>
    <p dir=\"ltr\" style=\"text-align: justify;\">Menikmati waktu liburan sambil bersantai memang paling pas dilakukan di rumah. Suasana rumah yang nyaman dan tenang akan membuat liburan semakin sempurna. Waktu santai di rumah akan membuat tubuh semakin rileks bila disempurnakan dengan furnitur yang pas. sofa 2 Kursi Manu hadir sebagai penyempurna waktu santai Anda di rumah.</p>
    <p dir=\"ltr\" style=\"text-align: justify;\">Ukurannya yang pas dapat menampung hingga 2 orang. Sangat pas ditempatkan di apartemen ataupun hunian minimalis. Warna yang ditawarkan juga banyak menjadikan sofa 2 Kursi Manu dapat kalian kombinasikan dengan perabotan yang sudah ada, kayu solid serta natural open pore sebagai finishing pastinya Sofa 2 Kursi Manu menjadi furnitur yang eksklusif.</p>
    <p dir=\"ltr\"><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi Keseluruhan</span><span class=\"pull-right\">140cm x 75cm x 81cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Ketebalan Dudukan</span><span class=\"pull-right\">13cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Kedalaman Dudukan</span><span class=\"pull-right\">51cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Tinggi Sandaran Lengan</span><span class=\"pull-right\">42cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Lebar Sandaran Lengan</span><span class=\"pull-right\">10cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi Kaki</span><span class=\"pull-right\">18cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\"><ul>
    <li>Bersihkan menggunakan kain microfiber.</li>
    <li>Lap dengan kain lembab.</li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\">
    <div class=\"prod-dimension-wrap\">
    <ul class=''“prod-dimension-list\"''>
    <li>
    <span class=''“pull-left\"''>Style</span><span class=\"pull-right\">Scandinavian</span>
    </li>
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Sandaran</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Dudukan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Bantalan Lengan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"“pull-left”\">Lapisan Bantalan</span><span class=\"pull-right\">Indoor Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Finishing</span><span class=\"pull-right\">Natural Open Pore</span>
    </li>
    </ul>
    </div>
    <div><em>Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.</em></div>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 2 Kursi Manu (Grey)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-2-kursi-manu-grey-new.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('6', 'Sofa 1 Dudukan Eton (Blue Jay)', 'Rp 974.350', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p>Waktu bersantai makin lengkap dengan <strong>Eton Armchair</strong>. Kursi berkapasitas 1 orang dengan kerangka berbahan kayu solid mindi dilengkapi warna kayu alami akan membawa kehangatan kedalam ruangan. Kelebihan dari  kayu mindi adalah bahannya yang tahan jamur dan tidak mudah rapuh. Dudukan dan sandarannya yang lapang diisi oleh busa dan dilapisi dengan bahan yang elegan. Sandaran yang melengkung dengan tingkat kemiringan yang sudah disesuaikan untuk keleluasaan anda, dilengkapi dengan tumpuan lengan di kedua sampingnya. Perpaduan warna yang serasi dari kursi ini cocok untuk melengkapi rumah dan kantor. Tersedia beberapa pilihan warna untuk bahan sandaran dan dudukan sesuai dengan keinginan Anda.</p>
    <p></p>
    <p><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi keseluruhan</span><span class=\"pull-right\">66 x 67,5 x 77 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Lebar sandaran</span><span class=\"pull-right\">25 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Lebar tumpuan lengan</span><span class=\"pull-right\">5,5 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi tumpuan lengan</span><span class=\"pull-right\">22 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Dimensi dudukan</span><span class=\"pull-right\">53 x 52 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi Kaki</span><span class=\"pull-right\">32 cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan</span><span class=\"pull-right\">Foam</span>
    </li>
    <li>
    <span class=\"pull-left\">Lapisan bantalan</span><span class=\"pull-right\">Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Kayu Mindi Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Finishing</span><span class=\"pull-right\">Natural Open Pore</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <p></p>
    <ul>
    <li><span>Tidak untuk penggunaan luar ruangan/teras</span></li>
    <li><span>Jangan kontak dengan air, bahan kimia dan sinar matahari.</span></li>
    <li><span>Bersihkan furniture dengan lap kering,</span></li>
    <li><span>Apabila noda membandel boleh gunakan air kemudian langsung seka dengan lap kering.</span></li>
    </ul>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 1 Dudukan Eton (Blue Jay)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/eton-armchair-blue-jay.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('7', 'Sofa Tempat Tidur Dabi (Beige)', 'Rp 1.599.200', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p><strong>Janjikan Kenyamanan Bintang Lima dengan Fungsi Dinamis</strong></p>
    <p>Sebagai centerpiece pada ruang keluarga, Anda membutuhkan Dabi Sofa Bed dengan desain elegan yang akan mengangkat suasana dalam ruangan. Lekukan ergonomis sofa ini membuatnya tampil elegan dan berkelas. Molek dipandang, nyaman digunakan. Bantalan dari <em>foam</em> dibalut dengan <em>synthetic leather</em> terasa lembut di kulit.</p>
    <p>Keunggulan Dabi Sofa Bed yang utama terletak pada fungsinya yang dinamis. Di bagian tengah sofa terdapat sandaran yang dapat bertransformasi menjadi tempat minuman. Anda pun dapat menikmati acara favorit sambil menyesap minuman kesukaan. Tak hanya itu saja, Dabi Sofa Bed juga dapat disulap menjadi tempat tidur yang nyaman untuk beristirahat.</p>
    <p></p>
    <p><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Dimensi sofa</span><span class=\"pull-right\">180 cm x 83 cm x 80 cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Dimensi bed</span><span class=\"pull-right\">180 cm x 110 cm x 32 cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"pull-left\">Style</span><span class=\"pull-right\">Modern</span>
    </li>
    <li>
    <span class=\"pull-left\">Kerangka</span><span class=\"pull-right\">Solid Mindi Wood</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Sandaran</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Dudukan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Lengan</span><span class=\"pull-right\">Indoor Foam</span>
    </li>
    <li>
    <span class=\"pull-left\">Lapisan bantalan</span><span class=\"pull-right\">Polyester Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Metal Steel</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <p></p>
    <ul>
    <li><span>Tidak untuk penggunaan luar ruangan/teras</span></li>
    <li><span>Jangan kontak dengan air, bahan kimia dan sinar matahari.</span></li>
    <li><span>Bersihkan furniture dengan lap kering,</span></li>
    <li><span>Apabila noda membandel boleh gunakan air kemudian langsung seka dengan lap kering.</span></li>
    </ul>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa Tempat Tidur Dabi (Beige)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-tempat-tidur-dabi-beige.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('8', 'Sofa 1 Dudukan Dacia (Fawn)', 'Rp 2.099.000', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p><strong>Menjadi Raja di Rumah Sendiri</strong></p>
    <p>Kehadiran Dacia Armchair adalah suatu keharusan bagi Anda yang mengidamkan kenyamanan terbaik kala bersantai di rumah. Kursi dengan <em>look</em> Skandinavia ini memberikan kesan hangat dan elegan pada sudut kamar, terlebih ketika dipadukan dengan <em>standing lamp</em> dan <em>side table</em> yang sesuai. Sebagai pendukung, Anda dapat meletakkan kain <em>throw</em> dan bantal empuk.</p>
    <p>Ketika Anda ingin membaca buku, berkreasi dengan ide baru, ataupun sekadar ingin menikmati akhir pekan, Dacia Armchair siap menjadi sahabat setia. Bantalan <em>foam</em> yang berlimpah membuat Anda tak akan pegal walau duduk berlama-lama. Yang pasti, rasakan sensasi menjadi raja dengan kenyamanan yang ditawarkan Dacia Armchair!</p>
    <p></p>
    <p><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\">
    <p>Panjang: 77 cm</p>
    <p>Lebar: 82 cm</p>
    <p>Tinggi: 80 cm</p>
    <p>Kedalaman dudukan: 53 cm</p>
    <p>Tinggi dudukan: 43,5 cm</p>
    <p>Tinggi armrest: 61 cm</p>
    <p>Tinggi bebas dibawah perabot: 21 cm</p>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\">
    <style type=\"text/css\" xml=\"space\"><!--
     
     td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}
     
     --></style>
     
     <p><span data-sheets-value=''{\"1\":2,\"2\":\"Kerangka;: Kayu Solid\n \nBantalan Punggung;: Indoor Foam\n \nBantalan Lengan;: Indoor Foam\n \nBantalan Dudukan;: Indoor Foam\n \nLapisan Bantalan;: Polyester\n \nKaki;: Rubberwood\n\n\n\nProduk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.\"}'' data-sheets-userformat=''{\"2\":513,\"3\":{\"1\":0},\"12\":0}''><span>Kerangka;: Kayu Solid<br> <br>Bantalan Punggung;: Indoor Foam<br> <br>Bantalan Lengan;: Indoor Foam<br> <br>Bantalan Dudukan;: Indoor Foam<br> <br>Lapisan Bantalan;: Polyester<br> <br>Kaki;: Rubberwood<br><br><br><br></span><span>Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.</span></span>.</p>
    <p></p>
    <style type=\"text/css\" xml=\"space\"><!--
    td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}
    --></style>
    <p><em><span data-sheets-value=''{\"1\":2,\"2\":\"Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.\n\"}'' data-sheets-userformat=''{\"2\":33537,\"3\":{\"1\":0},\"11\":3,\"12\":0,\"18\":1}''>Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.<br></span></em></p>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <style type=\"text/css\" xml=\"space\"><!--
    td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}
    --></style>
    <p><strong>Berbahan Kain / Fabric Cover :</strong></p>
    <p><strong></strong>-Bersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.</p>
    <p><strong>Kerangka Besi / Steel Frame :</strong></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan kain lembab seperti, microfiber atau kanebo.<br>-Produk material besi dapat digunakan di luar ruangan yang terlindungi atap.<br></span></span></p>
    <p><strong>Material Plastik / Plastic Material :</strong></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan lap basah dan keringkan dengan kain kering.<br></span></span></p>
    <p><strong>Material Kayu / Wooden Material :</strong></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Hindari kontak dengan air, bahan kimia, dan sinar matahari.<br>-Bersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).<br>-Produk material kayu tidak disarankan digunakan di luar ruangan.</span></span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><strong>Penampang Kaca / Glass Top :</strong><span><br></span></span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. <br>-Apabila terkena air atau cairan, segera lap dengan kain kering.<br></span></span></p>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\">
    <style type=\"text/css\" xml=\"space\"><!--
    td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}
    --></style>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Pengembalian Produk\nAnda berhak atas 30 hari masa perkenalan atas produk yang dibeli. Apabila Anda merasa kurang puas atau terdapat kerusakan pabrik atas produk yang dibeli, produk dapat dikembalikan pada jangka waktu yang ditentukan selama tidak ada kerusakan dari customer. \nPengembalian produk gratis untuk wilayah JABODETABEK.\n \nPengembalian Dana\nAnda juga memiliki pilihan untuk mengajukan pengembalian dana (refund) untuk 30 hari setelah barang diterima apabila terdapat kecacatan produksi oleh pabrik. Bentuk pengembalian dana yang diberikan adalah kredit toko (store credit) atau uang tunai*.\n \n*Pengembalian uang tunai memiliki proses maksimal 3 hari kerja.\n \nUntuk informasi lebih lanjut mengenai syarat dan ketentuan pengembalian dapat mengakses https://fabelio.com/kebijakan-pengembalian.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><strong>Pengembalian Produk</strong><br>Anda berhak atas 30 hari masa perkenalan atas produk yang dibeli. Apabila Anda merasa kurang puas atau terdapat kerusakan pabrik atas produk yang dibeli, produk dapat dikembalikan pada jangka waktu yang ditentukan selama tidak ada kerusakan dari customer. <br>Pengembalian produk gratis untuk wilayah JABODETABEK.<br> <br><strong>Pengembalian Dana</strong><br>Anda juga memiliki pilihan untuk mengajukan pengembalian dana (refund) untuk 30 hari setelah barang diterima apabila terdapat kecacatan produksi oleh pabrik. Bentuk pengembalian dana yang diberikan adalah kredit toko (store credit) atau uang tunai*.<br> <br>*Pengembalian uang tunai memiliki proses maksimal 3 hari kerja.<br> <br>Untuk informasi lebih lanjut mengenai syarat dan ketentuan pengembalian dapat mengakses <a title=\"Kebijakan Pengembalian\" href=\"https://fabelio.com/kebijakan-pengembalian/\" target=\"_blank\">www.fabelio.com/kebijakan-pengembalian</a>.</span></p>
    <div><span style=\"color: #000000; font-family: Arial; font-size: 13px; white-space: pre-wrap;\"><br></span></div>
    </div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 1 Dudukan Dacia (Fawn)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-1-dudukan-dacia-fawn.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('9', 'Sofa 2 Dudukan Deni (Dark Grey)', 'Rp 1.911.650', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p dir=\"ltr\"><strong>Kesan Klasik dan Effortless untuk Ruang Tamu</strong></p>
    <p dir=\"ltr\" style=\"text-align: justify;\"><span>Bosan dengan kursi atau bangku di rumah? ingin memberi kesan klasik dan membeli kursi rotan tetapi tidak terlalu nyaman walaupun sudah dikaitkan dengan busa tambahan. Sofa 2 Kursi Deni memiliki model yang klasik layaknya sofa, serta bentuk yang effotless.</span></p>
    <p dir=\"ltr\" style=\"text-align: justify;\"><span> Warna yang ditawarkan juga beragam serta harga yang sangat reasonable. Dilapisi natural open pore untuk menjaga material utama yaitu kayu solid serta bantalan busa pada segala sisinya dan tentunya Sofa Deni menjadikan momen di ruang tamu lebih menyenangkan.</span></p>
    <p dir=\"ltr\"><em>NB: Untuk produk yang memerlukan perakitan, akan dilakukan beberapa hari setelah produk dikirim. Apabila telah melebih dari 7 (tujuh) hari setelah produk dikirim belum ada tim kami yang menghubungi jadwal perakitan, Mohon segera hubungi tim Customer Service kami.</em></p>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\"><div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>
    <span class=\"“pull-left”\">Dimensi Keseluruhan</span><span class=\"pull-right\">140cm x 75cm x 81cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Ketebalan Dudukan</span><span class=\"pull-right\">13cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Kedalaman Dudukan</span><span class=\"pull-right\">51cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Tinggi Sandaran Lengan</span><span class=\"pull-right\">22cm</span>
    </li>
    <li>
    <span class=''“pull-left\"''>Lebar Sandaran Lengan</span><span class=\"pull-right\">10cm</span>
    </li>
    <li>
    <span class=\"pull-left\">Tinggi Kaki</span><span class=\"pull-right\">18cm</span>
    </li>
    </ul>
    </div></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\"><ul>
    <li>Bersihkan menggunakan kain microfiber.</li>
    <li>Lap dengan kain lembab.</li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\">
    <div class=\"prod-dimension-wrap\">
    <ul class=\"prod-dimension-list\">
    <li>Kerangka <span class=\"pull-right\">MDF Panel</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Punggung</span><span class=\"pull-right\">Polyester Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Dudukan</span><span class=\"pull-right\">Pocket Spring</span>
    </li>
    <li>
    <span class=\"pull-left\">Bantalan Lengan</span><span class=\"pull-right\">Polyester Fabric</span>
    </li>
    <li>
    <span class=\"pull-left\">Lapisan Bantalan</span><span class=\"pull-right\">Polyester</span>
    </li>
    <li>
    <span class=\"pull-left\">Kaki</span><span class=\"pull-right\">Kayu Solid</span>
    </li>
    <li>
    <span class=\"pull-left\">Finishing</span><span class=\"pull-right\">Natural Open Pore</span>
    </li>
    </ul>
    </div>
    <div><em>Produk ini terbuat dari material alami. Barang yang akan Anda terima mungkin akan berbeda serat dan warnanya.</em></div> </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\"><ul>
    <li>
    <strong>Pengembalian Produk</strong><br>Permintaan pengembalian produk dapat dilakukan dalam 30 hari sejak hari produk tersebut tiba. Produk harus dalam kondisi prima dan akan dicek oleh tim kami.</li>
    <li>
    <strong>Pengembalian Dana</strong><br>Pengembalian dana dapat berupa kredit toko (store credit) atau uang tunai.<br>Pengembalian dalam bentuk kredit toko dapat dilakukan secara langsung oleh agen customer service kami.<br>Pengembalian dana dalam bentuk tunai dapat dilakukan selama dalam waktu 30 hari sejak hari produk tersebut tiba dan prosesnya akan memakan waktu selama maksimal 3 hari kerja.</li>
    </ul></div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Sofa 2 Dudukan Deni (Dark Grey)\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://fabelio.com/static/version1582214499/frontend/Fabelio/aurela/id_ID/images/loader-2.gif', 'https://fabelio.com/ip/sofa-2-dudukan-deni-dark-grey.html', '1', '1', '2020-02-24 04:54:12', '2020-02-24 04:54:12'),
    ('10', 'Bangku Elis', 'Rp 974.350', '
        <h3>Tentang Produk Ini</h3>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <!-- Product Description -->
                <div class=\"product-info__description\">
                    <div id=\"description\">
    <p dir=\"ltr\"><strong>Aksen Elegan Pada Bangku Panjang Elis</strong></p>
    <p dir=\"ltr\"><span>Ketika kenyamanan dan keunikan dituangkan dalam bangku panjang elis, menjadikan bangku ini memiliki perpaduan elegan untuk mengisi ruang pilihanmu. Kerangka yang dibuat dari material berkualitas, membuat bangku panjang ini dapat dipercaya ketahanannya. Selain itu, dudukan bangku ini dilapisi dengan busa empuk untuk menjamin kenyamananmu. Bersama bangku panjang elis, momen bersama menjadi semakin asyik!</span></p>
    <div><span><br></span></div>
    </div>
                </div>
    
                                            <div class=\"product-info__attributes__wrapper\">
                        <div class=\"product-info__attributes\">
                            <div class=\"product-info__attributes__title\">Spesifikasi Produk</div>
                            <div id=\"additional-data\">
                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Dimensi</div>
                                            <div class=\"data\" data-th=\"Dimensi\">
    <p>Panjang : 120 cm</p>
    <p>Lebar : 45 cm</p>
    <p>Tinggi : 45 cm</p>
    <style type=\"text/css\" xml=\"space\"><!--
    td {border: 1px solid #ccc;}br {mso-data-placement:same-cell;}
    --></style>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Instruksi Perawatan</div>
                                            <div class=\"data\" data-th=\"Instruksi Perawatan\">
    <p><span>Berbahan Kain / Fabric Cover :</span></p>
    <p><span></span>-Bersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.</p>
    <p><span>Kerangka Besi / Steel Frame :</span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan kain lembab seperti, microfiber atau kanebo.<br>-Produk material besi dapat digunakan di luar ruangan yang terlindungi atap.<br></span></span></p>
    <p><span>Material Plastik / Plastic Material :</span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan lap basah dan keringkan dengan kain kering.<br></span></span></p>
    <p><span>Material Kayu / Wooden Material :</span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Hindari kontak dengan air, bahan kimia, dan sinar matahari.<br>-Bersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).<br>-Produk material kayu tidak disarankan digunakan di luar ruangan.</span></span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span>Penampang Kaca / Glass Top :</span><span><br></span></span></p>
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Berbahan Kain / Fabric Cover :\nBersihkan dengan menggunakan vacuum cleaner atau dengan dry clean.\n\nKerangka Besi / Steel Frame :\nBersihkan dengan kain lembab seperti, microfiber atau kanebo.\nProduk material besi dapat digunakan di luar ruangan yang terlindungi atap.\n\nMaterial Plastik / Plastic Material : \nBersihkan dengan lap basah dan keringkan dengan kain kering.\n\nMaterial Kayu / Wooden Material : \nHindari kontak dengan air, bahan kimia, dan sinar matahari.\nBersihkan dengan lap kering (khusus noda membandel dapat menggunakan lap basah dan harus segera dikeringkan).\nProduk material kayu tidak disarankan digunakan di luar ruangan. \n\nPenampang Kaca / Glass Top :\nBersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih. \nApabila terkena air atau cairan, segera lap dengan kain kering.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><span></span><span>-Bersihkan dengan cairan khusus pembersih kaca dan lap dengan kain pembersih.<br>-Apabila terkena air atau cairan, segera lap dengan kain kering.</span></span></p>
    </div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Finish/Material</div>
                                            <div class=\"data\" data-th=\"Finish/Material\"><ul>
    <li>Kaki: Steel</li>
    <li>Dudukan: Indoor foam with fabric</li>
    </ul></div>
                                        </div>
                                                                                                                                                                    <div class=\"product-info__attributes__row\">
                                            <div class=\"label\" scope=\"row\">Pengiriman/Pengembalian</div>
                                            <div class=\"data\" data-th=\"Pengiriman/Pengembalian\">
    <div class=\"label\">Pengembalian Produk</div>
    <div class=\"data\" data-th=\"Pengiriman/Pengembalian\">
    <p><span data-sheets-value=''{\"1\":2,\"2\":\"Pengembalian Produk\nAnda berhak atas 30 hari masa perkenalan atas produk yang dibeli. Apabila Anda merasa kurang puas atau terdapat kerusakan pabrik atas produk yang dibeli, produk dapat dikembalikan pada jangka waktu yang ditentukan selama tidak ada kerusakan dari customer. \nPengembalian produk gratis untuk wilayah JABODETABEK.\n \nPengembalian Dana\nAnda juga memiliki pilihan untuk mengajukan pengembalian dana (refund) untuk 30 hari setelah barang diterima apabila terdapat kecacatan produksi oleh pabrik. Bentuk pengembalian dana yang diberikan adalah kredit toko (store credit) atau uang tunai*.\n \n*Pengembalian uang tunai memiliki proses maksimal 3 hari kerja.\n \nUntuk informasi lebih lanjut mengenai syarat dan ketentuan pengembalian dapat mengakses https://fabelio.com/kebijakan-pengembalian.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''>Anda berhak atas 30 hari masa perkenalan atas produk yang dibeli. Apabila Anda merasa kurang puas atau terdapat kerusakan pabrik atas produk yang dibeli, produk dapat dikembalikan pada jangka waktu yang ditentukan selama tidak ada kerusakan dari customer.<br>Pengembalian produk gratis untuk wilayah JABODETABEK.<br><br>Pengembalian Dana<br>Anda juga memiliki pilihan untuk mengajukan pengembalian dana (refund) untuk 30 hari setelah barang diterima apabila terdapat kecacatan produksi oleh pabrik. Bentuk pengembalian dana yang diberikan adalah kredit toko (store credit) atau uang tunai*.<br><br>*Pengembalian uang tunai memiliki proses maksimal 3 hari kerja.<br><br>Untuk informasi lebih lanjut mengenai syarat dan ketentuan pengembalian dapat mengakses <a title=\"Kebijakan Pengembalian\" href=\"https://fabelio.com/kebijakan-pengembalian/\" target=\"_blank\">www.fabelio.com/kebijakan-pengembalian</a>.</span></p>
    <div><span data-sheets-value=''{\"1\":2,\"2\":\"Pengembalian Produk\nAnda berhak atas 30 hari masa perkenalan atas produk yang dibeli. Apabila Anda merasa kurang puas atau terdapat kerusakan pabrik atas produk yang dibeli, produk dapat dikembalikan pada jangka waktu yang ditentukan selama tidak ada kerusakan dari customer. \nPengembalian produk gratis untuk wilayah JABODETABEK.\n \nPengembalian Dana\nAnda juga memiliki pilihan untuk mengajukan pengembalian dana (refund) untuk 30 hari setelah barang diterima apabila terdapat kecacatan produksi oleh pabrik. Bentuk pengembalian dana yang diberikan adalah kredit toko (store credit) atau uang tunai*.\n \n*Pengembalian uang tunai memiliki proses maksimal 3 hari kerja.\n \nUntuk informasi lebih lanjut mengenai syarat dan ketentuan pengembalian dapat mengakses https://fabelio.com/kebijakan-pengembalian.\n\"}'' data-sheets-userformat=''{\"2\":769,\"3\":{\"1\":0},\"11\":3,\"12\":0}''><br></span></div>
    </div>
    </div>
                                        </div>
                                                                                        </div>
                        </div>
                        <button class=\"show-more\" title=\"Tampilkan Semua\" data-toggled=\"Tutup\" data-gtm-category=\"Product Finalization - Product Description\" data-gtm-action=\"Click on ''Show All''\" data-gtm-label=\"Bangku Elis\">
                            <span>Tampilkan Semua</span>
                        </button>
                    </div>
                        </div>
            <div class=\"col-lg-6\">
                <div class=\"product-media__wrapper\">
                                </div>
                <div class=\"product-media__wrapper\">
                    <img class=\"product-media__img\">
                </div>
            </div>
        </div>
    ', 'https://m2fabelio.imgix.net/catalog/product/cache/small_image/414x214/beff4985b56e3afdbeabfc89641a4582/b/a/bangku_elis_blue_ocean_1_1.jpg', 'https://fabelio.com/ip/bangku-elis.html', '3', '1', '2020-02-24 04:58:40', '2020-02-24 04:58:40');
    ");
        
    }
}
