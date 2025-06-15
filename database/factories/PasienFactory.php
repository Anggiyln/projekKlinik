<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'no_pasien' => $this->faker->unique()->randomNumber(5),
            'nama' => $this->faker->name(),
            'umur' => $this->faker->numberBetween(20, 50),
            'jenis_kelamin' => $this->faker->randomElement(['LAKI-LAKI', 'PEREMPUAN']),
            'alamat' => $this->faker->address(),
        ];
    }
}
