<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Raw_And_Bold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Raw_And_Bold:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummy data for the Raw & Bold Application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->confirm('This will delete All your current data and insatll the default dummy data. Are you?')){
            File::deleteDirectory(public_path('storage/products/dummy'));
            $this->callSilent('storage:link');
            $copysuccess = File::copyDirectory(public_path('images/products'),public_path('storage/products/dummy'));
            if($copysuccess){
                $this->info('Images successfully copied to storage folder');
            }
            $this->call('migrate:fresh', [
               '--seed' => true,
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDatabaseSeeder',
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDummyDatabaseSeeder',
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDummyDatabaseSeeder',
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDummyDatabaseSeeder',
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDummyDatabaseSeeder',
            ]);
            $this->call('db:seed', [
                '--class' => 'VoyagerDummyDatabaseSeeder',
            ]);
            $this->info('Dummy data installed');
        }

    }
}
