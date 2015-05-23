<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('TrainingResourceTableSeeder');
    }
}

class TrainingResourceTableSeeder extends Seeder
{

    public function run()
    {
        // Warning! La següent línia esborrarà completament les dades de la taula indicada.
        DB::table('training_resource')->delete();

        // Inserim les dades que ens interessa.
        DB::table('training_resource')->insert(array(
            array('training_resource_id' => '1', 'training_resource_name' => 'Formació Inicial', 'training_resource_short_name' => 'form_ini', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà disponibles a l\'Institut de l\'Ebre', 'training_resource_thumbnail' => 'img/thumbnail/IesEbre2.gif', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '2', 'training_resource_name' => 'Administració i finances', 'training_resource_short_name' => 'admin_fin', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '3', 'training_resource_name' => 'Gestió administrativa (LOE)', 'training_resource_short_name' => 'ges_admin', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '2', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '4', 'training_resource_name' => 'Sanitat', 'training_resource_short_name' => 'sanitat', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '5', 'training_resource_name' => 'Cures auxiliars d\'infermeria (LOGSE)', 'training_resource_short_name' => 'aux_infermeria', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '6', 'training_resource_name' => 'Emergències sanitàries (LOE)', 'training_resource_short_name' => 'emerg_sanitaries', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '7', 'training_resource_name' => 'Farmàcia i parafarmàcia (LOE)', 'training_resource_short_name' => 'farmacia_parafarmacia', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '4', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '8', 'training_resource_name' => 'Fabricació mecànica', 'training_resource_short_name' => 'fabricacio_mecanica', 'training_resource_description' => 'Cicles Formatius de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '1', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '9', 'training_resource_name' => 'Mecanització (LOE)', 'training_resource_short_name' => 'mecanitzacio', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '8', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '18', 'training_resource_name' => 'Soldadura i caldereria (LOE)', 'training_resource_short_name' => 'soldadura_caldereria', 'training_resource_description' => 'Cicle Formatiu de Grau Mitjà', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '8', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '10', 'training_resource_name' => 'Formació Continua', 'training_resource_short_name' => 'form_ini', 'training_resource_description' => 'Cicles Formatius de Grau Superior disponibles a l\'Institut de l\'Ebre', 'training_resource_thumbnail' => 'img/thumbnail/IesEbre2.gif', 'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '11', 'training_resource_name' => 'Administració i gestió', 'training_resource_short_name' => 'admin_gestio', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '10', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '12', 'training_resource_name' => 'Administració i finances (LOE)', 'training_resource_short_name' => 'admin_finances', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '11', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '13', 'training_resource_name' => 'Assistència a la direcció (LOE)', 'training_resource_short_name' => 'assistencia_direccio', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '11', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '14', 'training_resource_name' => 'Informàtica', 'training_resource_short_name' => 'informatica', 'training_resource_description' => 'Cicles Formatius de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '10', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '15', 'training_resource_name' => 'Administració de sistemes informàtics en la xarxa (LOE)', 'training_resource_short_name' => 'ASIX', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '14', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '19', 'training_resource_name' => 'Desenvolupament d\'aplicacions multiplataforma (LOE)', 'training_resource_short_name' => 'DAM', 'training_resource_description' => 'Cicle Formatiu de Grau Superior', 'training_resource_thumbnail' => '', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '14', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),

            array('training_resource_id' => '16', 'training_resource_name' => 'ESCOLA DE L\'ESPLAI DE TORTOSA', 'training_resource_short_name' => 'escola_espai', 'training_resource_description' => 'Altres Formacions', 'training_resource_thumbnail' => 'img/thumbnail/2_wkB9dV.png', 'training_resource_external_url' => 'http://www.escolaesplai.cat/', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
            array('training_resource_id' => '17', 'training_resource_name' => 'CFO Ajuntament de Tortosa', 'training_resource_short_name' => 'CFOAT', 'training_resource_description' => 'Altres Formacions', 'training_resource_thumbnail' => 'img/thumbnail/logo_tort.png', 'training_resource_external_url' => 'http://www.tortosa.cat/webajt/cfo/index.asp', 'training_resource_parentResourceId' => '0', 'training_resource_softDeleted' => 'false', 'training_resource_softDeletedDate' => '0000-00-00 00:00:00'),
        ));
    }
}