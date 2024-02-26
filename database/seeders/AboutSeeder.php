<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       About::create([
        'name'=>'MRD Shop E-commerce',
        'content'=>'About Text',
        'text_1_icon'=>'icon-truck',
        'text_1'=>'Free Cargo',
        'text_1_content'=>'We provide free shipping of your products.',
        'text_2_icon'=>'icon-refresh2',
        'text_2'=>'Refund',
        'text_2_content'=>'We provide refunds within 30 days.',
        'text_3_icon'=>'icon-help',
        'text_3'=>'Support',
        'text_3_content'=>'You can reach us 24/7.'
       ]);
    }
}
