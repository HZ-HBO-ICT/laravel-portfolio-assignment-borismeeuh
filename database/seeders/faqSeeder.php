<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Q1: How do you print a document from your laptop at HZ?',
            'answer' => 'A1: To print a document at HZ you first need to make sure there is money on your HZ student card. Then locate your document on the printing device and print.',
            'link' => ''
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q2: How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'A2: You can connect your e-mail address to the scanning device. When the device is done scanning, you can either send the PDF-document to your HZ-mail address or store it on a USB stick.',
            'link' => ''
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q3: What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer' => 'A3: Inform the school administration that youre feeling sick. Stay home for the safety of everyone else at school. ',
            'link' => ''
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q4: How can you book a project space in one of the wings?',
            'answer' => 'A4: Youre able to book a project space at the administration counter. ',
            'link' => ''
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q5: What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'A5: In order to use the HZ parking lot, you have to use your school pass to get passed the barrier.',
            'link' => ''
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q6: How do you use the lockers?',
            'answer' => 'A6: In order to use the lockers, scan your school pass and a random locker will open. You can choose wheter to open the locker and lock it again, or open it and leave it open for someone else to use.',
            'link' => ''
        ]);


    }
}
