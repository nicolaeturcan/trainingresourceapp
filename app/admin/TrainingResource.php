<?php

use App\Models\TrainingResource;
use App\Models\TrainingResourceTree;

Admin::model(TrainingResource::class)->alias('training_resources')->title(trans_choice('admin::lang.trainings.title', 1))->display(function ()
{
    $display = AdminDisplay::tabbed();

    $display->tabs(function ()
    {
        $tabs = [];

        $main = AdminDisplay::datatables();
        $columns = [
            Column::string('training_resource_id')->label(trans_choice('admin::lang.trainings.id', 1)),
            Column::image('training_resource_thumbnail')->label(trans_choice('admin::lang.trainings.thumbnail', 1)),
            Column::string('training_resource_name')->label(trans_choice('admin::lang.trainings.title', 1)),
            Column::custom()->label(trans_choice('admin::lang.trainings.description', 1))->callback(function ($instance) {
                return $instance->training_resource_description;
            }),
            Column::string('parent.training_resource_name')->label(trans_choice('admin::lang.trainings.parent', 1)),
        ];

        $main->columns($columns);
        $tabs[] = AdminDisplay::tab($main)->label('Main')->active(true);

        $tree = Admin::model(TrainingResourceTree::class)->display();
        $tabs[] = AdminDisplay::tab($tree)->label('Tree');

        return $tabs;
    });
    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::text('training_resource_name', trans_choice('admin::lang.trainings.title', 1))->required(),
        FormItem::select('training_resource_parentResourceId', trans_choice('admin::lang.trainings.parent', 1))->model(TrainingResource::class)->display('training_resource_name')->nullable(),
        FormItem::image('training_resource_thumbnail', trans_choice('admin::lang.trainings.thumbnail', 1)),
        FormItem::ckeditor('training_resource_description', trans_choice('admin::lang.trainings.description', 1)),
    ]);
    return $form;
});