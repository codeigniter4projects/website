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
}
