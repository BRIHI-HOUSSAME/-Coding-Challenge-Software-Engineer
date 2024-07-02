<?phpnamespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function testProductCreation()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'Test Description',
            'price' => 100.00,
            'image' => UploadedFile::fake()->image('test.jpg'),
            'categories' => [1, 2]
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }
}
