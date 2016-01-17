<?php namespace App\Http\Controllers;

use Request;
use Illuminate\Http\Response;
use App\Models\TrainingResource;
use Illuminate\Support\Facades\Input;

class TrainingResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $training_resources = new TrainingResource;

        $parent_id = Input::get('parent_id');

        if ($parent_id || ($parent_id == 0)) {
            $training_resources = $training_resources::where('parent_id', '=', $parent_id);
        }

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
        $training_resource->name = Request::input('name');
        $training_resource->short_name = Request::input('short_name');
        $training_resource->description = Request::input('description');
        $training_resource->thumbnail = Request::input('thumbnail');
        $training_resource->external_url = Request::input('external_url');
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