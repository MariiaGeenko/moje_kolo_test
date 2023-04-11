<?php

namespace App\Controller;



trait WorkerTrait
{
    public function getWorkers(int $id = null): array
    {
        $workers = [];
        $quantityWorkers = 10;

        if ($id === null) {
            for($i=1; $i < $quantityWorkers; $i++) {
                $workers[$i] = [
                    'id' => $i,
                    'name' => \fake()->jobTitle(),
                    'surname' => \fake()->text(100),
                    'created_at' => \now()->format('d-m-y h:i'),
                ];
            }

            return $workers;
        }

        return [
            'id' => $id,
            'name' => \fake()->jobTitle(),
            'surname' => \fake()->text(100),
            'created_at' => \now()->format('d-m-y h:i'),
        ];
    }
}
