<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SlackMe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slack-me';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (config('services.slack.secret')) {
            $this->info("SUCCESS! A message was sent");
        } else {
            $this->fail("Could not send a message due to missing SLACK_SECRET");
        }
    }
}
