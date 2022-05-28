<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('get_list')){
    function get_list($table, $join = null, $join_cond = null, $where = null)
    {
        $statement = DB::table($table)->whereNull($table . '.deleted_at');
        if($join != null){
            $statement = $statement->whereNull($join . '.deleted_at')->join($join, $join_cond);
        }
        if($where != null){
            $statement = $statement->where($where);
        }
        $statement = $statement->get();
        return $statement;
    }
}

if(!function_exists('get_column')){
    function get_column($table, $where)
    {
        return DB::table($table)->where($where)->first();
    }
}

if(!function_exists('get_column_count')){
    function get_column_count($table, $where = null)
    {
        $query = DB::table($table)->select(DB::raw('count(amount) as total'));
        if($where != null){
            $query = $query->where($where);
        }
        $query = $query->first();
        return $query;
    }
}

if(!function_exists('get_column_sum')){
    function get_column_sum($table, $where = null)
    {
        $query = DB::table($table)->select(DB::raw('sum(amount) as total'));
        if($where != null){
            $query = $query->where($where);
        }
        $query = $query->first();
        return $query;
    }
}