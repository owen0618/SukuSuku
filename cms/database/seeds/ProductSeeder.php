<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
             [
                 'name' => 'Polyoxin',
                 'description' => '化学物質ではなく天然物質由来の環境に優しい殺菌剤。',
                 'image' => '/images/1.jpg',
                 'price' =>'4500'
             ],
             [
                 'name' => 'Ringo-L',
                 'description' => 'イネに発生する主要病害「いもち病」等に高い効果を示す殺菌剤。',
                 'image' => '/images/2.jpg',
                 'price' =>'4500'
             ],
             [
                 'name' => 'Satunil',
                 'description' => 'イネ科雑草やカヤツリグサ科雑草に有効な水稲用除草剤。',
                 'image' => '/images/3.jpg',
                 'price' =>'6800'
             ],
             [
                 'name' => 'Ranman',
                 'description' => 'べと病、疫病、根こぶ病など多様な病害に高い効果を示す殺菌剤（作用機作：シアノイミダゾール）。',
                 'image' => '/images/4.jpg',
                 'price' =>'4500'
             ],
             [
                 'name' => 'Onecide',
                 'description' => 'メヒシバ等の一年生イネ科雑草及びススキ等の多年生イネ科雑草も防除できる除草剤。（有効成分：フルアジホップP）',
                 'image' => '/images/5.jpg',
                 'price' =>'4500'
             ],
             [
                 'name' => 'Dragon',
                 'description' => 'Chlorpyrifos+Cypermethrinの混合剤であり、アブラムシ・アザミウマなどへの効果が高い汎用品殺虫剤。',
                 'image' => '/images/6.jpg',
                 'price' =>'4500'
             ],
             [
                 'name' => 'Intrepid',
                 'description' => 'BASF製のClorfenapyrを有効成分に持つ殺虫剤。',
                 'image' => '/images/7.jpg',
                 'price' =>'6800'
             ],
             [
                 'name' => 'Confidor',
                 'description' => 'Bayer製のImidaclopridを有効成分に持つ殺虫剤。(対象害虫：Aphid, Thrips)',
                 'image' => '/images/8.jpg',
                 'price' =>'7800'
             ],
             [
                 'name' => 'Predator',
                 'description' => 'CORTEVA製のChlorpyrifosを有効成分に持つRice・Cotton向け殺虫剤。',
                 'image' => '/images/9.jpg',
                 'price' =>'4500'
             ],
         ]);
        
        
    }
}
