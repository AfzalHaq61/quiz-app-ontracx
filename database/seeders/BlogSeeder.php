<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Support\Collection;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
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
                Blog::factory()
                    ->create([
                        'subject_id' => $status['subject_id'],
                        'title' => $status['title'],
                        'description' => $status['description'],
                    ]);
            });
    }

    private function data(): Collection
    {
        return collect([
            [
                'subject_id' => '1',
                'title' => 'Nationol Poet',
                'description' => 'Allama Iqbal asdf fdsa dfsa dsfa sfd sdf dsf sdfa sdfa fds ',
            ],
            [
                'subject_id' => '2',
                'title' => 'Allama Iqbal',
                'description' => 'Allama Iqbal asdf fdsa dfsa dsfa sfd sdf dsf sdfa sdfa fds',
            ],
        ]);
    }
}
