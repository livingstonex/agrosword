<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Commodity Trading',
                'image' => 'images/commodity.jpeg',
                'description' => '',
                'interest_rate' => '25',
                'duration' => '6',
                'amount_per_stock' => '10000'
            ],
            [
                'name' => 'Farming',
                'image' => 'images/farming.jpeg',
                'description' => '',
                'interest_rate' => '30',
                'duration' => '10',
                'amount_per_stock' => '10000'
            ],
            [
                'name' => 'Livestock Fattening',
                'image' => 'images/livestock.jpeg',
                'description' => '',
                'interest_rate' => '25',
                'duration' => '6',
                'amount_per_stock' => '10000'
            ],
            [
                'name' => 'Logistics',
                'image' => 'images/logistics.jpeg',
                'description' => '',
                'interest_rate' => '25',
                'duration' => '6',
                'amount_per_stock' => '20000'
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
