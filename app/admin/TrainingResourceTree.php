<?php

use App\Models\TrainingResourceTree;

Admin::model(TrainingResourceTree::class)->alias('training_resources_tree')->title(trans_choice('admin::lang.trainings.title', 1))->display(function ()
{

    $display = AdminDisplay::tree();
    $display->value('training_resource_name');

    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::text('training_resource_name', trans_choice('admin::lang.trainings.title', 1))->required(),
        FormItem::select('training_resource_parentResourceId', trans_choice('admin::lang.trainings.parent', 1))->model(TrainingResourceTree::class)->display('training_resource_name')->nullable(),
        FormItem::image('training_resource_thumbnail', trans_choice('admin::lang.trainings.thumbnail', 1)),
        FormItem::ckeditor('training_resource_description', trans_choice('admin::lang.trainings.description', 1)),
    ]);
    return $form;
});