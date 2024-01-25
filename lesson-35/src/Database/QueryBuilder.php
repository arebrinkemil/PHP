<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class QueryBuilder
{
    private string $query;

    public function __construct(
        private PDO $database
    ) {
    }

    public function select(array $columns = ['*']): static
    {
        $this->query = sprintf('SELECT %s', implode(', ', $columns));

        return $this;
    }

    public function from(string $table): static
    {
        $this->query = sprintf('%s FROM %s', $this->query, $table);

        return $this;
    }

    public function get(): array
    {
        $statement = $this->database->prepare($this->query);

        $statement->execute();

        if ($result = $statement->fetchAll(PDO::FETCH_CLASS)) {
            return $result;
        }

        return [];
    }


    public function limit(int $count): static
    {
        $this->query = sprintf('%s LIMIT %d', $this->query, $count);

        return $this;
    }


    public function orderBy($column, $direction): static
    {
        $this->query = sprintf('%s ORDER BY %s %s', $this->query, $column, $direction);

        return $this;
    }

    public function first()
    {
        $this->query = sprintf('%s LIMIT 1', $this->query);
        $statement = $this->database->prepare($this->query);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function where($column, $operator, $value)
    {
        $this->query = sprintf('%s WHERE %s %s %s', $this->query, $column, $operator, $value);

        return $this;
    }
}
