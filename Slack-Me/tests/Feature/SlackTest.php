<?php

namespace Tests\Feature;

use Tests\TestCase;

class SlackTest extends TestCase
{

    public function test_can_slack(): void
    {
        $this->assertNotNull(config('services.slack.secret'));
    }
}
