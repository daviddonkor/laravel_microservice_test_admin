<?php

namespace App\Console\Commands;

use App\Jobs\ProductCreated;
use Illuminate\Console\Command;

class FireEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fire';

   
    public function handle()
    {
        ProductCreated::dispatch(['id'=>12,"title"=>"Test Name","image"=>"Some Image","created_at"=>"2022-8-8",
    'updated_at'=>"2022-8-8"]);
  
    }
}
