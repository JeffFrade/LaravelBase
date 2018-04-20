<?php

namespace App\Repositories;

abstract class AbstractRepository
{
    /**
     * @var $model
     */
    protected $model;

    /**
     * @param $field
     * @param $value
     * @param array $colums
     *
     * @return mixed
     */
    public function findBy($field, $value, array $colums = ['*'])
    {
        return $this->model->where($field, $value)->get($colums);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->get();
    }

    /**
     * @param array $values
     */
    public function create(array $values)
    {
        $this->model->fill($values);

        $this->model->save();
    }

    /**
     * @param $field
     * @param $value
     * @param array $values
     */
    public function update($field, $value, array $values)
    {
        $this->model->where($field, $value)->get();

        $this->model->fill($values);

        $this->model->save();
    }

    /**
     * @param $field
     * @param $value
     */
    public function delete($field, $value)
    {
        $this->model->where($field, $value)->get();

        $this->model->delete();
    }
}
