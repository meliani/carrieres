<?php

use App\Models\Admin\reportSubmission;
use App\Repositories\Admin\reportSubmissionRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class reportSubmissionRepositoryTest extends TestCase
{
    use MakereportSubmissionTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var reportSubmissionRepository
     */
    protected $reportSubmissionRepo;

    public function setUp()
    {
        parent::setUp();
        $this->reportSubmissionRepo = App::make(reportSubmissionRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatereportSubmission()
    {
        $reportSubmission = $this->fakereportSubmissionData();
        $createdreportSubmission = $this->reportSubmissionRepo->create($reportSubmission);
        $createdreportSubmission = $createdreportSubmission->toArray();
        $this->assertArrayHasKey('id', $createdreportSubmission);
        $this->assertNotNull($createdreportSubmission['id'], 'Created reportSubmission must have id specified');
        $this->assertNotNull(reportSubmission::find($createdreportSubmission['id']), 'reportSubmission with given id must be in DB');
        $this->assertModelData($reportSubmission, $createdreportSubmission);
    }

    /**
     * @test read
     */
    public function testReadreportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $dbreportSubmission = $this->reportSubmissionRepo->find($reportSubmission->id);
        $dbreportSubmission = $dbreportSubmission->toArray();
        $this->assertModelData($reportSubmission->toArray(), $dbreportSubmission);
    }

    /**
     * @test update
     */
    public function testUpdatereportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $fakereportSubmission = $this->fakereportSubmissionData();
        $updatedreportSubmission = $this->reportSubmissionRepo->update($fakereportSubmission, $reportSubmission->id);
        $this->assertModelData($fakereportSubmission, $updatedreportSubmission->toArray());
        $dbreportSubmission = $this->reportSubmissionRepo->find($reportSubmission->id);
        $this->assertModelData($fakereportSubmission, $dbreportSubmission->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletereportSubmission()
    {
        $reportSubmission = $this->makereportSubmission();
        $resp = $this->reportSubmissionRepo->delete($reportSubmission->id);
        $this->assertTrue($resp);
        $this->assertNull(reportSubmission::find($reportSubmission->id), 'reportSubmission should not exist in DB');
    }
}
