<?php

namespace Database\Seeders;

use App\Models\Mcq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class McqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()
            ->each(function ($status) {
                Mcq::factory()
                    ->create([
                        'subject_id' => $status['subject_id'],
                        'question' => $status['question'],
                        'correct_answer' => $status['correct_answer'],
                        'answer_one' => $status['answer_one'],
                        'answer_two' => $status['answer_two'],
                        'answer_three' => $status['answer_three'],
                        'answer_four' => $status['answer_four'],
                        'hint' => $status['hint'],
                        'reference' => $status['reference'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'subject_id' => '1',
                'question' => 'Select the name of Paksitani nationol poet',
                'correct_answer' => 'Allama Iqbal',
                'answer_one' => 'Quid e Azam',
                'answer_two' => 'Liaqat Ali Khan',
                'answer_three' => 'Misbah Ul Haq',
                'answer_four' => 'Imran Khan',
                'hint' => 'how are you',
                'reference' => 'google',
            ],
            [
                'subject_id' => '2',
                'question' => 'Select the name of Paksitani Founder',
                'correct_answer' => 'Quiad e Azam',
                'answer_one' => 'Quid e Azam',
                'answer_two' => 'Liaqat Ali Khan',
                'answer_three' => 'Misbah Ul Haq',
                'answer_four' => 'Imran Khan',
                'hint' => 'how are you',
                'reference' => 'google',
            ],
        ]);
    }
}
