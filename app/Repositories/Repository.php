<?php namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Repository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    //find record from database
    public function find($id)
    {
        return $this->model->find($id);
    }

    //find record from database using more than one where clause
    public function where(array $data)
    {
        return $this->model->where($data);
    }

    //find record from database using more than one where clause
    public function whereIN($column, $value){
        return $this->model->whereIn($column, $value);
    }

    //find record from database using where between
    public function whereBetween($column, array $data){
        return $this->model->whereBetween($column,$data);
    }

    //find record from database using where month
    public function whereMonth($column, $value){
        return $this->model->whereMonth($column,$value);
    }

    //find record from database using where year
    public function whereYear($column, $value){
        return $this->model->whereYear($column,$value);
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function update(array $data, $id)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    // Update or Create data in database
    public function updateOrCreate(array $attributes, array $values = [])
    {
        return $this->model->updateOrCreate($attributes, $values);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    //Get count from model
    public function count()
    {
        return $this->model->count();
    }

    /**
     * @param array $data
     * @param $type
     * @return array
     */
    public function getResponseArrayWithCount(array $data,$type,$orderBy = 'id', $orderType= 'ASC')
    {
        if($type == 'true'){
            return $this->model->where($data)->count();
        }else{
            $dataArray = $this->model->where($data)->select('record')->orderBy($orderBy, $orderType)->get()->toArray();
            $array = [];
            foreach ($dataArray as $val) {
                $array[] = json_decode(preg_replace('/\s+/', ' ',$val['record']), true);
            }
            unset($dataArray,$data);
            return $array;
        }
    }

    //OrderBy record from database
    public function orderBy($column)
    {
        return $this->model->orderBy($column);
    }

    /**
     * @param array $array
     * @param array $field
     * @return bool
     */
    public function recordUpdate(array $array, array $field) {

        $connection = config('database.connections.qb_connections');
        $database = $connection['database'];
        $prefix = $connection['prefix'];
        $table = $this->model->getTable();
        $conditions = "";
        $updateField = "";
        $updateValue = "";
        $updated_at = Carbon::now()->toDateTimeString();

        //create the condition statement going to be updated
        foreach ($array as $key => $value){
            //remove , from the last element of the array
            $conditions .=  "`".$key."` = '".$value."',";
        }
        $conditions = rtrim($conditions, ',');

        //get column to be updated and it's value
        foreach ($field as $key => $value){
            $updateField = $key;
            $updateValue = $value;
        }

        //echo "UPDATE ".$database.'.'.$prefix.$table." SET ".$conditions." where `".$updateField."` = '".$updateValue."'";
        return DB::statement("UPDATE ".$database.'.'.$prefix.$table." SET ".$conditions." ,`updated_at`='".$updated_at."' where `".$updateField."` = '".$updateValue."'");
    }

    /**
     * @param array $array
     * @param array $field
     * @return bool
     */
    public function recordUpdateOrCreate(array $array, array $field){

        $connection = config('database.connections.qb_connections');
        $database = $connection['database'];
        $prefix = $connection['prefix'];
        //$table = (new self())->getTable();
        $table = $this->model->getTable();
        $record = $this->model->where(['rid' => $array['rid']])->first();
        $created_at = Carbon::now()->toDateTimeString();
        $updated_at = Carbon::now()->toDateTimeString();
        $conditions = "";
        $updateField = "";
        //create the condition statement going to be updated
        foreach ($array as $key => $value){
            //remove , from the last element of the array
            $conditions .=  "`".$key."` = '".$value."',";
        }
        $conditions = rtrim($conditions, ',');

        foreach ($field as $key => $value){
            $updateField = $key;
            $updateValue = $value;
        }

        if(isset($record)) {
            //echo "UPDATE ".$database.'.'.$prefix.$table." SET ".$conditions .",`updated_at`='".$updated_at."' where `".$updateField."` = '".$updateValue."'"; die;
             return DB::statement("UPDATE ".$database.'.'.$prefix.$table." SET ".$conditions .",`updated_at`='".$updated_at."' where `".$updateField."` = '".$updateValue."'");
        } else{
            //echo "INSERT "." INTO ".$database.'.'.$prefix.$table." SET ".$conditions.",`created_at`='".$created_at."',`updated_at`='".$updated_at."'"; die;
             return (DB::statement("INSERT "." INTO ".$database.'.'.$prefix.$table." SET ".$conditions.",`created_at`='".$created_at."',`updated_at`='".$updated_at."'"));
        }
    }
}
