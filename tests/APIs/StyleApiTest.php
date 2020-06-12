<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Style;

class StyleApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_style()
    {
        $style = factory(Style::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/styles', $style
        );

        $this->assertApiResponse($style);
    }

    /**
     * @test
     */
    public function test_read_style()
    {
        $style = factory(Style::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/styles/'.$style->id
        );

        $this->assertApiResponse($style->toArray());
    }

    /**
     * @test
     */
    public function test_update_style()
    {
        $style = factory(Style::class)->create();
        $editedStyle = factory(Style::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/styles/'.$style->id,
            $editedStyle
        );

        $this->assertApiResponse($editedStyle);
    }

    /**
     * @test
     */
    public function test_delete_style()
    {
        $style = factory(Style::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/styles/'.$style->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/styles/'.$style->id
        );

        $this->response->assertStatus(404);
    }
}
