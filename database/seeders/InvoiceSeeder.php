<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records from the invoices table
        Invoice::truncate();

        // Seed new records
        Invoice::create([
            'total' => 100.00,
        ]);

        Invoice::create([
            'total' => 150.00,
        ]);

        // Add more records as needed
    }
}
