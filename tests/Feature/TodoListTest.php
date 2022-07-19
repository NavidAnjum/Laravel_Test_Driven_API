<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForFetchTodoList()
    {

        //Added withoutExceptionHandling() in TestCase class
        // $this->withoutExceptionHandling();
        //preparation
        $res=TodoList::factory()->create();
        dd($res);
        //action
        $responce = $this->getJson(route('todo-lists'));
        //assertion
        $this->assertEquals(1, count($responce->json()));
    }
}
