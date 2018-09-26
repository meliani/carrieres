<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class reportSubmissionApiTest extends TestCase
{
    use MakereportSubmissionTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatereportSubmission()
    {
        $reportSubmission = $this->fakereportSubmissionData();
        $this->json('POST', '/api/v1/reportSubmissions', $reportSubmission);

        $this->assertApiResponse($reportSubmission);
    }

    /**
     * @test
     */
    public function testReadreportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $this->json('GET', '/api/v1/reportSubmissions/'.$reportSubmission->id);

        $this->assertApiResponse($reportSubmission->toArray());
    }

    /**
     * @test
     */
    public function testUpdatereportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $editedreportSubmission = $this->fakereportSubmissionData();

        $this->json('PUT', '/api/v1/reportSubmissions/'.$reportSubmission->id, $editedreportSubmission);

        $this->assertApiResponse($editedreportSubmission);
    }

    /**
     * @test
     */
    public function testDeletereportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $this->json('DELETE', '/api/v1/reportSubmissions/'.$reportSubmission->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/reportSubmissions/'.$reportSubmission->id);

        $this->assertResponseStatus(404);
    }
}
