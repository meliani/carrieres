<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class offresDeStagesApiTest extends TestCase
{
    use MakeoffresDeStagesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateoffresDeStages()
    {
        $offresDeStages = $this->fakeoffresDeStagesData();
        $this->json('POST', '/api/v1/offresDeStages', $offresDeStages);

        $this->assertApiResponse($offresDeStages);
    }

    /**
     * @test
     */
    public function testReadoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $this->json('GET', '/api/v1/offresDeStages/'.$offresDeStages->id);

        $this->assertApiResponse($offresDeStages->toArray());
    }

    /**
     * @test
     */
    public function testUpdateoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $editedoffresDeStages = $this->fakeoffresDeStagesData();

        $this->json('PUT', '/api/v1/offresDeStages/'.$offresDeStages->id, $editedoffresDeStages);

        $this->assertApiResponse($editedoffresDeStages);
    }

    /**
     * @test
     */
    public function testDeleteoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $this->json('DELETE', '/api/v1/offresDeStages/'.$offresDeStages->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/offresDeStages/'.$offresDeStages->id);

        $this->assertResponseStatus(404);
    }
}
