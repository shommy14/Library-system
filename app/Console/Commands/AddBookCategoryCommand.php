<?php

namespace App\Console\Commands;

use App\Category;
use Illuminate\Console\Command;

class AddBookCategoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'book:category {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates new category for books';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $category = Category::create([
            'name' => $this->argument('name'),
        ]);
        $this->info('Added: ' . $category->name);
    }
}
