<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();
        DB::table('todos')->insert([
            [
                'user_id'    => '1',
                'title'      => 'Laravel Lessonを終わらせる',
                'created_at' => Carbon::create(2018, 1, 1),
                'updated_at' => Carbon::create(2018, 1, 4),
            ],
            [
                'user_id'    => '1',
                'title'      => 'レビューに向けて理解を深める',
                'created_at' => Carbon::create(2018, 2, 1),
                'updated_at' => Carbon::create(2018, 2, 5),
            ],
            [
                'user_id'    => '1',
                'title'      => '確認投稿！',
                'created_at' => Carbon::create(2020, 2, 1),
                'updated_at' => Carbon::create(2020, 2, 1),
            ],
            [
                'user_id'    => '1',
                'title'      => 'gitLesson用',
                'created_at' => Carbon::create(2010, 2, 1),
                'updated_at' => Carbon::create(2010, 2, 5),
            ],
        ]);
    }
}
