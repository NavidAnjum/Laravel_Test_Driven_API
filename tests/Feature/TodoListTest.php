<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForStoreTodoList()
    {
        $this->withoutExceptionHandling();
        //preparation

        //action
        $responce = $this->getJson(route('todo-lists'));

        //assertion
        $this->assertEquals(1,count($responce->json()));
    }
}
