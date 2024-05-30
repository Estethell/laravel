<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Slot;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity_ids= Activity::all()->pluck("id")->all();
        $slot_ids= Slot::all()->pluck("id")->all();

        Course::create([ 
            "location"=> "Stanza 1",
            'activity_id'=>fake()->randomElement($activity_ids),
            'slot_id'=>fake()->randomElement($slot_ids),
        ]);
        Course::create([ 
            "location"=> "Stanza 2",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 3",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 4",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 5",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 6",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 7",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 8",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 9",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
        Course::create([ 
            "location"=> "Stanza 10",
            'activity_id'=>fake()->randomElement($activity_ids), 
            'slot_id'=>fake()->randomElement($slot_ids), 
        ]);
    
    
    }
}
