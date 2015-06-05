<?php

Admin::model('\App\Training_Resource')->title('Recursos de formació')->with()->filters(function ()
{

})->columns(function ()
{
    //Column::image('training_resource_thumbnail');
    Column::string('training_resource_id', 'ID');
	Column::string('training_resource_name', 'Nom');
	//Column::string('training_resource_short_name', 'Nom Curt');
	Column::string('training_resource_description', 'Descripció');
	//Column::string('training_resource_external_url', 'URL');
    //Column::string('training_resource_name', 'Pare')->append(Column::where('training_resource_id', '=', 'training_resource_parentResourceId'));
    Column::string('parent.training_resource_name', 'Pare');

})->form(function ()
{
	FormItem::text('training_resource_name', 'Nom')->required();
	FormItem::text('training_resource_short_name', 'Nom Curt');
	//FormItem::image('training_resource_thumbnail', 'Foto');
	FormItem::text('training_resource_external_url', 'URL Externa');
    FormItem::select('training_resource_id', 'Pare')->list('\App\Training_Resource')->required();
	//FormItem::timestamp('training_resource_entryDate', 'Data Creació');//->seconds(true);
	//FormItem::timestamp('training_resource_last_update', 'Data de l\'última modificació');//->seconds(true);
    FormItem::checkbox('training_resource_softDeleted', 'SoftDeleted');
    FormItem::ckeditor('training_resource_description', 'Descripció');



	//FormItem::text('training_resource_creationUserId', 'Training Resource Creation User Id');
	//FormItem::text('training_resource_lastupdateUserId', 'Training Resource Lastupdate User Id');

    //FormItem::timestamp('training_resource_softDeletedDate', 'Training Resource Soft Deleted Date');//->seconds(true);
});