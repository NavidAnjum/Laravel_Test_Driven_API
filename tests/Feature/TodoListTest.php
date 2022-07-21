<?php

namespace Tests\Feature;

use App\Models\TodoList;
use Database\Seeders\TodoListSeeder;
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
       // $res=TodoList::factory()->create();
		// Run a single seeder...
		$this->seed(TodoListSeeder::class);

        //action
        $responce = $this->getJson(route('todo-lists'));
        //assertion
        $this->assertEquals(1, count($responce->json()));
    }

    public function testFetchSingleTodoList(){
		//preparation
		$list=$this->seed(TodoListSeeder::class);

		//action
		$responce=$this->getJson(route('todo-list.show',1));

		//assertion
		$responce->assertStatus(200);
		$this->assertEquals($responce->json()['name'],"Navid");

	}
}
