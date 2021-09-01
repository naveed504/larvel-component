<?php
namespace App\Repository;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;

interface RepositoryInterface
{
   public function all();
   
   public function get();
   
   public function find($value);

   public function with($relations);

}