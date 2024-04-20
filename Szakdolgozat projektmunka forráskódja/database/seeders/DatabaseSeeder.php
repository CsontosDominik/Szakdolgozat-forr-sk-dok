<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Test;
use App\Models\Course;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        //\App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*Course::create([
            'title' => 'A Microsoft Word alapjai',
           'description' => 'A kurzus célja a Microsoft Word szövegszerkesztő program általános használatának elsajátítása a mindennapi életben előforduló tevékenységekhez.',
            'platform' => 'word'
        ]);
        Course::create([
            'title' => 'A Microsoft Excel alapjai',
            'description' => 'A kurzus célja a Microsoft Excel táblázatkezelő program általános használatának elsajátítása a mindennapi életben előforduló tevékenységekhez.',
            'platform' => 'excel'
        ]);
        Course::create([
            'title' => 'A PowerPoint alapjai',
            'description' => 'A kurzus célja a Microsoft PowerPoint program általános használatának elsajátítása a mindennapi életben előforduló tevékenységekhez.',
            'platform' => 'powerpoint'
        ]);
        Test::create([
            'course_id' => '3',
            'description' => 'A Powerpoint kurzus végén található teszt',
            'title' => 'Powerpoint Teszt',
        ]);*/
    }
}
