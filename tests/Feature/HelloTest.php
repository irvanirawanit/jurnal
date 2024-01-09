<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_hello(): void
    {
        $this->view('pembayaran')
        ->assertSeeText('Dashboard');
    }
}
