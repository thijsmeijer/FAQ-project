<?php

class QuestionControllerTest extends TestCase
{
    public function test_index_returns_view()
    {
        $response = $this->call('GET', '/questions');

        $this->assertEquals(200, $response->status());
        $this->assertViewHas('questions');
    }
}