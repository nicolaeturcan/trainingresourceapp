<?php

use App\Models\TrainingResourceTree;

Admin::model(TrainingResourceTree::class)->alias('training_resources_tree')->title(trans_choice('admin::lang.trainings.title', 1))->display(function ()
{

    $display = AdminDisplay::tree();
    $display->value('name');

    return $display;
})->createAndEdit(function ()
{
    $form = AdminForm::form();
    $form->items([
        FormItem::text('name', trans_choice('admin::lang.trainings.name', 1))->required(),
        FormItem::select('parent_id', trans_choice('admin::lang.trainings.parent', 1))->model(TrainingResource::class)->display('name')->nullable(),
        FormItem::text('external_url', trans_choice('admin::lang.trainings.url', 1)),
        FormItem::image('thumbnail', trans_choice('admin::lang.trainings.thumbnail', 1)),
        FormItem::ckeditor('description', trans_choice('admin::lang.trainings.description', 1)),
    ]);
    return $form;
});