<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Training_Resource;
use Request;

class Training_Resource_Controller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        /*if (Input::has('parentResourceId')) {
        $filters = Input::only('training_resource_parentResourceId' == $id);*/
        $training_resources = Training_Resource::all();
        return $training_resources;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $training_resource = Training_Resource::create(Request::all());
        return $training_resource;

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

        $training_resource = Training_Resource::find($id);
        return $training_resource;

    }

    public function showChild($id){

        return Training_Resource::where('training_resource_parentResourceId', '=', $id)
            ->get();

    }

    /*public function showParent($id){

        //(SELECT training_resource_id, training_resource_name,training_resource_parentResourceId FROM training_resource WHERE training_resource_id=6) UNION
        //(SELECT training_resource_id, training_resource_name,training_resource_parentResourceId FROM training_resource WHERE training_resource_parentResourceId=
        //(SELECT training_resource_parentResourceId FROM training_resource WHERE training_resource_id=6));

        $childId = Training_Resource::find($id);

        $subQueryParentId = Training_Resource::WHERE('training_resource_id', '=', $id)->select(array('training_resource_parentResourceId'))->get();

        $brothersId = Training_Resource::where('training_resource_parentResourceId', '=', $subQueryParentId);
        $combined = $childId->union($brothersId);

        return $combined;

    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        // TODO: Make this working!

        $training_resource = Training_Resource::find($id);
        $training_resource->training_resource_name = Request::input('training_resource_name');
        $training_resource->training_resource_short_name = Request::input('training_resource_short_name');
        $training_resource->training_resource_description = Request::input('training_resource_description');
        $training_resource->training_resource_thumbnail = Request::input('training_resource_thumbnail');
        $training_resource->training_resource_external_url = Request::input('training_resource_external_url');
        $training_resource->training_resource_softDeleted = Request::input('training_resource_softDeleted');

        //$input = Request::all();
        /*
        $input = array_except(Input::all(), ['training_resource_last_update', 'training_resource_creationUserId',
            'training_resource_lastupdateUserId', 'training_resource_entryDate', 'training_resource_softDeletedDate',
            'training_resource_parentResourceId']);
        $training_resource->training_resource_short_name = Request::input('training_resource_short_name');
        $training_resource->training_resource_description = Request::input('training_resource_description');
        $training_resource->training_resource_thumbnail = Request::input('training_resource_thumbnail');
        $training_resource->training_resource_external_url = Request::input('training_resource_external_url');
        $training_resource->training_resource_softDeleted = Request::input('training_resource_softDeleted');*/
        $training_resource->save();

        return $training_resource;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Training_Resource::destroy($id);
    }
}