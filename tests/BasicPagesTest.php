<?php

use CodeIgniter\Test\FeatureTestCase;

class BasicPagesTest extends FeatureTestCase
{
    public function testCanViewHome()
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('The small framework with powerful features');
    }

    public function testCanViewDiscuss()
    {
        $result = $this->get('/discuss');

        $result->assertStatus(200);
        $result->assertSee('Security issues should be reported');
    }
}
