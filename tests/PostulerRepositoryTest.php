<?php

use App\Models\Admin\Postuler;
use App\Repositories\Admin\PostulerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostulerRepositoryTest extends TestCase
{
    use MakePostulerTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PostulerRepository
     */
    protected $postulerRepo;

    public function setUp()
    {
        parent::setUp();
        $this->postulerRepo = App::make(PostulerRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePostuler()
    {
        $postuler = $this->fakePostulerData();
        $createdPostuler = $this->postulerRepo->create($postuler);
        $createdPostuler = $createdPostuler->toArray();
        $this->assertArrayHasKey('id', $createdPostuler);
        $this->assertNotNull($createdPostuler['id'], 'Created Postuler must have id specified');
        $this->assertNotNull(Postuler::find($createdPostuler['id']), 'Postuler with given id must be in DB');
        $this->assertModelData($postuler, $createdPostuler);
    }

    /**
     * @test read
     */
    public function testReadPostuler()
    {
        $postuler = $this->makePostuler();
        $dbPostuler = $this->postulerRepo->find($postuler->id);
        $dbPostuler = $dbPostuler->toArray();
        $this->assertModelData($postuler->toArray(), $dbPostuler);
    }

    /**
     * @test update
     */
    public function testUpdatePostuler()
    {
        $postuler = $this->makePostuler();
        $fakePostuler = $this->fakePostulerData();
        $updatedPostuler = $this->postulerRepo->update($fakePostuler, $postuler->id);
        $this->assertModelData($fakePostuler, $updatedPostuler->toArray());
        $dbPostuler = $this->postulerRepo->find($postuler->id);
        $this->assertModelData($fakePostuler, $dbPostuler->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePostuler()
    {
        $postuler = $this->makePostuler();
        $resp = $this->postulerRepo->delete($postuler->id);
        $this->assertTrue($resp);
        $this->assertNull(Postuler::find($postuler->id), 'Postuler should not exist in DB');
    }
}
