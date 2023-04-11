<?php

namespace App\Controller;



trait PositionTrait
{
    public function getPositions(int $id = null): array
    {
        $positions = [];
        $quantityPositions = 10;

        if ($id === null) {
            for($i=1; $i < $quantityPositions; $i++) {
                $positions[$i] = [
                    'id' => $i,
                    'position' => \fake()->text(100),
                    'created_at' => \now()->format('d-m-y h:i'),
                ];
            }

            return $positions;
        }

        return [
            'id' => $id,
            'position' => \fake()->text(100),
            'created_at' => \now()->format('d-m-y h:i'),
        ];
    }
}
