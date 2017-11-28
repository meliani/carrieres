<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostulerApiTest extends TestCase
{
    use MakePostulerTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePostuler()
    {
        $postuler = $this->fakePostulerData();
        $this->json('POST', '/api/v1/postulers', $postuler);

        $this->assertApiResponse($postuler);
    }

    /**
     * @test
     */
    public function testReadPostuler()
    {
        $postuler = $this->makePostuler();
        $this->json('GET', '/api/v1/postulers/'.$postuler->id);

        $this->assertApiResponse($postuler->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePostuler()
    {
        $postuler = $this->makePostuler();
        $editedPostuler = $this->fakePostulerData();

        $this->json('PUT', '/api/v1/postulers/'.$postuler->id, $editedPostuler);

        $this->assertApiResponse($editedPostuler);
    }

    /**
     * @test
     */
    public function testDeletePostuler()
    {
        $postuler = $this->makePostuler();
        $this->json('DELETE', '/api/v1/postulers/'.$postuler->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/postulers/'.$postuler->id);

        $this->assertResponseStatus(404);
    }
}
