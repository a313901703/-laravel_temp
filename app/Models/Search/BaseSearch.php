<?php

namespace App\Models\Search;

use Illuminate\Support\Arr;

class BaseSearch
{
    public $select = "*";

    public $query;

    public $pageSize;

    public $page = 1;

    public $with = [];

    public $withCount = [];

    public function __construct(array $params = [])
    {
        $this->load($params);
    }

    private function load(array $params = [])
    {
        foreach ($params as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function setSelect($select = "")
    {
        $this->select = $select;
    }

    public function getModels()
    {
        $this->buildQuery();
        return $this->query->paginate($this->getPageSize());
    }


    public function getAllModels()
    {
        $this->buildQuery();
        return $this->query->get();
    }

    private function buildQuery()
    {
        if (!$this->query) {
            throw new \Exception("invalid query");
        }
        if ($this->with) {
            $with = is_array($this->with) ? $this->with : explode(",", $this->with);
            $this->query->with($with);
        }
        if (is_array($this->withCount) && count($this->withCount))
            $this->query->withCount($this->withCount);
    }

    public function getPageSize()
    {
        $pageSize = $this->pageSize ?: request()->get('page_size');
        if (!$pageSize) {
            $pageSize = 15;
        }
        return $pageSize;
    }

    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
    }
}

?>
