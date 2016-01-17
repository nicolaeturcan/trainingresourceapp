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
            Column::string('id')->label(trans_choice('admin::lang.trainings.id', 1)),
            Column::image('thumbnail')->label(trans_choice('admin::lang.trainings.thumbnail', 1)),
            Column::string('name')->label(trans_choice('admin::lang.trainings.name', 1)),
            Column::custom()->label(trans_choice('admin::lang.trainings.description', 1))->callback(function ($instance) {
                return $instance->description;
            }),
            Column::string('parent.name')->label(trans_choice('admin::lang.trainings.parent', 1)),
        ];

        $main->columns($columns);
        $tabs[] = AdminDisplay::tab($main)->label(trans_choice('admin::lang.trainings.main_tab', 1))->active(true);

        $tree = Admin::model(TrainingResourceTree::class)->display();
        $tabs[] = AdminDisplay::tab($tree)->label(trans_choice('admin::lang.trainings.second_tab', 1));

        return $tabs;
    });
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