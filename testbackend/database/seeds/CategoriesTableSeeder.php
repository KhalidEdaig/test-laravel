<?php

use App\Categorie;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        DB::table('categories')->insert([
            [
                "name" => 'JAVA',
                'slug' => Str::slug('JAVA'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'J2EE',
                'slug' => Str::slug('J2EE'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'Laravel 6',
                'slug' => Str::slug('Laravel 6'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'CSS 3',
                'slug' => Str::slug('CSS 3'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'HTML 5',
                'slug' => Str::slug('HTML 5'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'Vue JS',
                'slug' => Str::slug('Vue JS'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'Spring Boot',
                'slug' => Str::slug('Spring Boot'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'React',
                'slug' => Str::slug('React'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'PHP',
                'slug' => Str::slug('PHP'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'MySQL',
                'slug' => Str::slug('MySQL'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => '.NET',
                'slug' => Str::slug('.NET'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'SQL Server',
                'slug' => Str::slug('SQL Server'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'ASP.NET',
                'slug' => Str::slug('ASP.NET'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'RedHat',
                'slug' => Str::slug('RedHat'),
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                "name" => 'Business Intelligence',
                'slug' => Str::slug('Business Intelligence'),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
