<?php

use App\Models\Admin\offresStages;
use App\Repositories\Admin\offresStagesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class offresStagesRepositoryTest extends TestCase
{
    use MakeoffresStagesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var offresStagesRepository
     */
    protected $offresStagesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->offresStagesRepo = App::make(offresStagesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateoffresStages()
    {
        $offresStages = $this->fakeoffresStagesData();
        $createdoffresStages = $this->offresStagesRepo->create($offresStages);
        $createdoffresStages = $createdoffresStages->toArray();
        $this->assertArrayHasKey('id', $createdoffresStages);
        $this->assertNotNull($createdoffresStages['id'], 'Created offresStages must have id specified');
        $this->assertNotNull(offresStages::find($createdoffresStages['id']), 'offresStages with given id must be in DB');
        $this->assertModelData($offresStages, $createdoffresStages);
    }

    /**
     * @test read
     */
    public function testReadoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $dboffresStages = $this->offresStagesRepo->find($offresStages->id);
        $dboffresStages = $dboffresStages->toArray();
        $this->assertModelData($offresStages->toArray(), $dboffresStages);
    }

    /**
     * @test update
     */
    public function testUpdateoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $fakeoffresStages = $this->fakeoffresStagesData();
        $updatedoffresStages = $this->offresStagesRepo->update($fakeoffresStages, $offresStages->id);
        $this->assertModelData($fakeoffresStages, $updatedoffresStages->toArray());
        $dboffresStages = $this->offresStagesRepo->find($offresStages->id);
        $this->assertModelData($fakeoffresStages, $dboffresStages->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteoffresStages()
    {
        $offresStages = $this->makeoffresStages();
        $resp = $this->offresStagesRepo->delete($offresStages->id);
        $this->assertTrue($resp);
        $this->assertNull(offresStages::find($offresStages->id), 'offresStages should not exist in DB');
    }
}
