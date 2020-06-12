<?php namespace Tests\Repositories;

use App\Models\Style;
use App\Repositories\StyleRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class StyleRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var StyleRepository
     */
    protected $styleRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->styleRepo = \App::make(StyleRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_style()
    {
        $style = factory(Style::class)->make()->toArray();

        $createdStyle = $this->styleRepo->create($style);

        $createdStyle = $createdStyle->toArray();
        $this->assertArrayHasKey('id', $createdStyle);
        $this->assertNotNull($createdStyle['id'], 'Created Style must have id specified');
        $this->assertNotNull(Style::find($createdStyle['id']), 'Style with given id must be in DB');
        $this->assertModelData($style, $createdStyle);
    }

    /**
     * @test read
     */
    public function test_read_style()
    {
        $style = factory(Style::class)->create();

        $dbStyle = $this->styleRepo->find($style->id);

        $dbStyle = $dbStyle->toArray();
        $this->assertModelData($style->toArray(), $dbStyle);
    }

    /**
     * @test update
     */
    public function test_update_style()
    {
        $style = factory(Style::class)->create();
        $fakeStyle = factory(Style::class)->make()->toArray();

        $updatedStyle = $this->styleRepo->update($fakeStyle, $style->id);

        $this->assertModelData($fakeStyle, $updatedStyle->toArray());
        $dbStyle = $this->styleRepo->find($style->id);
        $this->assertModelData($fakeStyle, $dbStyle->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_style()
    {
        $style = factory(Style::class)->create();

        $resp = $this->styleRepo->delete($style->id);

        $this->assertTrue($resp);
        $this->assertNull(Style::find($style->id), 'Style should not exist in DB');
    }
}
