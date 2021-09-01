<?php
namespace App\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use App\Repository\RepositoryInterface;


abstract class BaseRepository implements RepositoryInterface
{
    private $app;

    /**
     * @var
     */
    protected $model;



    public function __construct(App $app)
    {
        $this->app = $app;

        $this->makeModel();
    }

    abstract public function model();

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    public function get()
    {
        return $this->model->get();
    }
    public function find($value)
    {
        return $this->model->find($value);
    }



    protected function makeModel()
    {
        $model = $this->app->make($this->model());

        return $this->model = $model;
    }


}