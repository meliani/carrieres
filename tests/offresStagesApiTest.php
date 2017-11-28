<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class offresStagesApiTest extends TestCase
{
    use MakeoffresStagesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateoffresStages()
    {
        $offresStages = $this->fakeoffresStagesData();
        $this->json('POST', '/api/v1/offresStages', $offresStages);

        $this->assertApiResponse($offresStages);
    }

    /**
     * @test
     */
    public function testReadoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $this->json('GET', '/api/v1/offresStages/'.$offresStages->id);

        $this->assertApiResponse($offresStages->toArray());
    }

    /**
     * @test
     */
    public function testUpdateoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $editedoffresStages = $this->fakeoffresStagesData();

        $this->json('PUT', '/api/v1/offresStages/'.$offresStages->id, $editedoffresStages);

        $this->assertApiResponse($editedoffresStages);
    }

    /**
     * @test
     */
    public function testDeleteoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $this->json('DELETE', '/api/v1/offresStages/'.$offresStages->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/offresStages/'.$offresStages->id);

        $this->assertResponseStatus(404);
    }
}
