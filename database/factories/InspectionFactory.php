<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'serviceOrder' => fake()->numberBetween(1271,3234),
            'certificate' => fake()->numberBetween(1123,5159),
            'scope' => fake()->bothify('PSI ??#'),
            'container' => strtoupper(fake()->bothify('???? ######-#')),

            'status' => fake()->randomElement([
                'Programado',
                'Inspecionado',
                'Certificado',
                'Faturado',
                'Jornada Improdutiva',
                'Cancelado'
            ]),

             'inspector' => fake()->firstName(),
             'staff' => fake()->firstName(),

             'date' =>fake()->date(),
             'location' => fake()->city(),
             'destination' => fake()->country(),

             'order' => strtoupper(fake()->bothify('?? ####-####')),
             'contract' => strtoupper(fake()->bothify('???-###-####-???')),

             'nomination' => fake()->randomElement([
                'Cuba Control',
                'Isento',
            ]),

            'exporter' => fake()->company(),
            'importer' => fake()->company(),

            'productQty' => fake()->numberBetween(1600,2400),
            'generalProduct' => fake()->randomElement([
                'Frango',
                'Café',
                'CMS',
                'Alho',
                'Óleo Vegetal',
            ]),

            'netW' => number_format(fake()->randomFloat(5, 18435.335, 31432.265), 3, '.', ','),
            'grossW' => number_format(fake()->randomFloat(5, 18435.335, 31432.265), 3, '.', ','),

        ];

    }

}
