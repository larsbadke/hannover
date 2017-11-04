<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path('data/data.csv');

        $projects = Excel::load($path, function($reader) {

        })->get();


        foreach ($projects as $project){

            $project = \App\Project::create([
                'name' => $project->name,
                'description' => $project->description,
            ]);

            $project->times()->create([
                'user_id' => 1,
                'work' => 10,
            ]);
        }




//        factory(App\Project::class, 10)->create()->each(function ($p) {
//            $p->times()->saveMany(factory(App\Time::class, 10)->make());
//        });
    }
}
