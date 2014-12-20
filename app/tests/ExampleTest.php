<?php

    use Mockery as m;
class ExampleTest extends TestCase {
    public function tearDown()
    {
        m::close();
    }
    /** @test */    
	public function BasicExample()
	{
        //$mock = m::mock("Illuminate\Hashing\HasherInterface");
        //View::shouldReceive("make")->with("hello")->andReturn("mocked view");
        //$mock->shouldReceive("make")->andReturn("mocked-string");
        $response = $this->call("GET","/");
        //$response = $this->action("GET","HomeController@index");
        //dd($response->getContent());
        //$crawler = $this->client->request('POST', '',["hello"]);
        $this->assertTrue($this->client->getResponse()->isOk());
	}
}
