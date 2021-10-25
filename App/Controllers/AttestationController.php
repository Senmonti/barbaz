<?php

namespace App\Http\Controllers;

class AttestationController extends TestController {
    private int $att_points;

    public function setAttPoints(int $att_points): void
    {
        $this->att_points = $att_points;
    }

    public function getAttPoints(): int
    {
        return $this->att_points;
    }

    protected array $non_var = [
        'baz' => 1, 'tmp' => 2
    ];

    public function setAuthorName(string $author_name): void
    {
        parent::setAuthorName('Attestation author is: ' . $author_name);
    }
}
