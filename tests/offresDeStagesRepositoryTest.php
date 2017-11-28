<?php

use App\Models\Admin\offresDeStages;
use App\Repositories\Admin\offresDeStagesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class offresDeStagesRepositoryTest extends TestCase
{
    use MakeoffresDeStagesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var offresDeStagesRepository
     */
    protected $offresDeStagesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->offresDeStagesRepo = App::make(offresDeStagesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateoffresDeStages()
    {
        $offresDeStages = $this->fakeoffresDeStagesData();
        $createdoffresDeStages = $this->offresDeStagesRepo->create($offresDeStages);
        $createdoffresDeStages = $createdoffresDeStages->toArray();
        $this->assertArrayHasKey('id', $createdoffresDeStages);
        $this->assertNotNull($createdoffresDeStages['id'], 'Created offresDeStages must have id specified');
        $this->assertNotNull(offresDeStages::find($createdoffresDeStages['id']), 'offresDeStages with given id must be in DB');
        $this->assertModelData($offresDeStages, $createdoffresDeStages);
    }

    /**
     * @test read
     */
    public function testReadoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $dboffresDeStages = $this->offresDeStagesRepo->find($offresDeStages->id);
        $dboffresDeStages = $dboffresDeStages->toArray();
        $this->assertModelData($offresDeStages->toArray(), $dboffresDeStages);
    }

    /**
     * @test update
     */
    public function testUpdateoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $fakeoffresDeStages = $this->fakeoffresDeStagesData();
        $updatedoffresDeStages = $this->offresDeStagesRepo->update($fakeoffresDeStages, $offresDeStages->id);
        $this->assertModelData($fakeoffresDeStages, $updatedoffresDeStages->toArray());
        $dboffresDeStages = $this->offresDeStagesRepo->find($offresDeStages->id);
        $this->assertModelData($fakeoffresDeStages, $dboffresDeStages->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteoffresDeStages()
    {
        $offresDeStages = $this->makeoffresDeStages();
        $resp = $this->offresDeStagesRepo->delete($offresDeStages->id);
        $this->assertTrue($resp);
        $this->assertNull(offresDeStages::find($offresDeStages->id), 'offresDeStages should not exist in DB');
    }
}
