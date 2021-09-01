<?php
namespace App\Repository\Eloquent;


class UserRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\User';
    }

    public function latest()
    {
        return $this->model->orderBy('id', 'desc')
            ->take('2')
            ->get();
    }
    public function with($relations)
    {
        if (is_string($relations)) {
            $this->with = explode(',', $relations);
            return $this->model->with($this->with);
        }
        $this->with = is_array($relations) ? $relations : [];
        return $this;
    }
}