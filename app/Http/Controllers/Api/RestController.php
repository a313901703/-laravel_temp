<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\ApiController;

class RestController extends ApiController
{
    public $modelClass;

    public function __construct()
    {
        parent::__construct();
        $this->checkModelClass();
    }

    public function index()
    {
        $params = request()->all();
        $models = $this->modelClass::where($params)->get();
        return response()->success($models);
    }

    public function view($id)
    {
        try {
            $model = $this->findOne($id);
            return response()->success($model);
        } catch (\Exception $th) {
            return response()->fail(500,$th->getMessage());
        }catch (\Throwable $th) {
            return response()->fail(500,"Search fail");
        }
    }

    public function create()
    {
        $request = request()->all();
        $model = new $this->modelClass;
        $model->fill($request);
        if (!$model->validate())
            return response()->fail(500,$model->getFirstError());
        if (!$model->save())
            return response()->fail(500,"save fail");
        return response()->success($model);
    }

    public function update($id)
    {
        $request = request()->all();
        try {
            $model = $this->findOne($id);
            $model->fill($request);
            if (!$model->validate())
                return response()->fail(500,$model->getFirstError());
            if (!$model->save())
                return response()->fail(500,"save fail");
            return response()->success($model);
        } catch (\Exception $th) {
            return response()->fail(500,$th->getMessage());
        }catch (\Throwable $th) {
            return response()->fail(500,"update fail");
        }

    }

    public function delete($id)
    {
        try {
            $model = $this->findOne($id);
            return response()->success($model->delete());
        } catch (\Exception $th) {
            return response()->fail(500,$th->getMessage());
        }catch (\Throwable $th) {
            return response()->fail(500,"delete fail");
        }
    }

    protected function findOne($id)
    {
        $modelClass = $this->modelClass;
        if ( ($model = $modelClass::find($id)) === null) {
            throw new \Exception("Data not found,id {$id}");
        };
        return $model;
    }

    protected function checkModelClass()
    {
        if ($this->modelClass === null) {
            throw new \Exception("Model Class must be set");
        }
    }
}
