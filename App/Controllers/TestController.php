<?php

namespace App\Http\Controllers;

class TestController {
    protected array $non_var;
    private int $task_count;
    private string $author_name;

    public function getTaskCount(): int
    {
        return $this->task_count;
    }

    public function setTaskCount(int $task_count): void
    {
        $this->task_count = $task_count;
    }

    public function getAuthorName(): string
    {
        return $this->author_name;
    }

    public function setAuthorName(string $author_name): void
    {
        $this->author_name = $author_name;
    }

    // выводит является ли имя подходящим для имени автора
    protected function isAuthor(string $author_name): bool
    {
        return $this->author_name === $author_name;
    }
}
