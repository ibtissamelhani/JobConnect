<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            'Information Technology',
            'Healthcare',
            'Finance',
            'Education',
            'Engineering',
            'Sales',
            'Marketing',
            'Hospitality',
            'Human Resources',
            'Art and Design',
        ];

        foreach ($domains as $domainName) {
            Domain::create(['name' => $domainName]);
        }
    }
}
