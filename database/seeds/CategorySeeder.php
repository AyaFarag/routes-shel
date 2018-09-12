<?php

use Illuminate\Database\Seeder;
use App\Models\Category as Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Yard',
                    'children' => [
                        [    
                            'name' => 'sub yard',
                            'children' => [
                                    ['name' => 'Marvel yard'],
                                    ['name' => 'DC yard'],
                                    ['name' => 'fresh yard'],
                            ],
                        ],
                        [    
                            'name' => 'Textbooks',
                            'children' => [
                                    ['name' => 'Business'],
                                    ['name' => 'Finance'],
                                    ['name' => 'Computer Science'],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Electronics',
                        'children' => [
                        [
                            'name' => 'TV',
                            'children' => [
                                ['name' => 'LED'],
                                ['name' => 'Blu-ray'],
                            ],
                        ],
                        [
                            'name' => 'Mobile',
                            'children' => [
                                ['name' => 'Samsung'],
                                ['name' => 'iPhone'],
                                ['name' => 'Xiomi'],
                            ],
                        ],
                    ],
                ],
        ];
        foreach($categories as $category)
        {
            Category::create($category);
        }
    }
}
