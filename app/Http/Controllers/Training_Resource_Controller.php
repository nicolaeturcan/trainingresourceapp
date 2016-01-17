<?php namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use App\Models\TrainingResource;
use Illuminate\Support\Facades\Input;

class Training_Resource_Controller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $training_resources = new TrainingResource;

        $id = Input::get('training_resource_parentResourceId');

        if ($id || ($id == 0))
            $training_resources = $training_resources::where('training_resource_parentResourceId', '=', $id);

        return $training_resources->get();

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
        $training_resource = TrainingResource::create(Request::all());

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
        return TrainingResource::find($id);
    }

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
        $training_resource = TrainingResource::find($id);
        $training_resource->training_resource_name = Request::input('training_resource_name');
        $training_resource->training_resource_short_name = Request::input('training_resource_short_name');
        $training_resource->training_resource_description = Request::input('training_resource_description');
        $training_resource->training_resource_thumbnail = Request::input('training_resource_thumbnail');
        $training_resource->training_resource_external_url = Request::input('training_resource_external_url');
        $training_resource->training_resource_softDeleted = Request::input('training_resource_softDeleted');
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
        TrainingResource::destroy($id);
    }
}