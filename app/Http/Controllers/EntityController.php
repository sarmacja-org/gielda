<?php

namespace App\Http\Controllers;

use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{

    private function getBasicQuery()
    {
        return Entity::where('id', '>', '-1');
    }

    private function applyFilters($query, $request)
    {
        if ($request->has('type')) {
            $query = $query->where('type', $request->get('type'));
        }
        return $query;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
     
     $entities = $this->applyFilters($this->getBasicQuery(), $request)->get();

     return response()->json($entities);

    }
}