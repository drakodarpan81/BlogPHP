<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre = $this->faker->sentence();
        return [
            'name' => $nombre,
            'descripcion' => $this->faker->paragraph(),
            'slug' => Str::slug($nombre, '-'),
            'categoria' => $this->faker->randomElement(['Desarrollo Web', 'Diseño Web'])
        ];
    }
}
