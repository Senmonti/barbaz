<?php

namespace App\Http\Controllers;

class ExamController extends TestController {
    protected array $non_var = [
        'foo' => 1, 'bar' => 2,
    ];

    public function setAuthorName(string $author_name): void
    {
        parent::setAuthorName('Exam author is: ' . $author_name);
    }

    public function saveResult(): bool
    {
        // result save cool code
        return true;
    }
}
