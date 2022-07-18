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
        TodoList::create(['name' => 'navid']);
        //action
        $responce = $this->getJson(route('todo-lists'));
        dd($responce);
        //assertion
        $this->assertEquals(1, count($responce->json()));
    }
}
