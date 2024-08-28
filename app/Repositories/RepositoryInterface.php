<?php namespace App\Repositories;

interface RepositoryInterface
{
    public function find($id);

    public function where(array $data);

    public function whereIN($column, $value);

    public function whereBetween($column, array $data);

    public function whereMonth($column, $value);

    public function whereYear($column, $value);

    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function updateOrCreate(array $attributes, array $values = []);

    public function delete($id);

    public function show($id);

    public function count();
}