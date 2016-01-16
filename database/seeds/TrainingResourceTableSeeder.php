<?php
use Illuminate\Database\Seeder;
class TrainingResourceTableSeeder extends Seeder
{
    // Comanda php artisan db:seed per a executar.
    public function run()
    {
        // Warning! La següent línia esborrarà completament les dades de la taula indicada.
        DB::table('training_resource')->delete();
        $dateTime = Carbon\Carbon::now();
        // Inserim les dades que ens interessa.
        DB::table('training_resource')->insert(array(
            array(
                'training_resource_id' => '1',
                'training_resource_name' => 'Formació Inicial',
                'training_resource_short_name' => 'form_ini',
                'training_resource_description' => 'L\'objectiu principal de la Formació Inicial és oferir una formació pedagògica bàsica, eminentment pràctica, coherent amb el model educatiu europeu i que permeti al professorat el desenvolupament, millora i/o innovació de la seva actuació docent.',
                'training_resource_thumbnail' => 'images/logo_formacio_inicial.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => NULL
            ),
            array(
                'training_resource_id' => '2',
                'training_resource_name' => 'Formació Continua',
                'training_resource_short_name' => 'form_cont',
                'training_resource_description' => 'Cicles Formatius de Grau Superior disponibles a l\'Institut de l\'Ebre',
                'training_resource_thumbnail' => 'images/logo_formacio_continua.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => NULL
            ),
            array(
                'training_resource_id' => '3',
                'training_resource_name' => 'Formació Ocupacional',
                'training_resource_short_name' => 'admin_fin',
                'training_resource_description' => 'Cicles Formatius de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_formacio_ocupacional.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => NULL
            ),
            array(
                'training_resource_id' => '4',
                'training_resource_name' => 'Altres Formacions',
                'training_resource_short_name' => 'altres_formacions',
                'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'training_resource_thumbnail' => 'images/logo_altres_formacions.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => NULL
            ),
            // Formació Inicial
            //array('training_resource_id' => '', 'training_resource_name' => '', 'training_resource_short_name' => '', 'training_resource_description' => '', 'training_resource_thumbnail' => 'images/', 'training_resource_external_url' => '', 'training_resource_parentResourceId' => '1',  ),
            array(
                'training_resource_id' => '20',
                'training_resource_name' => 'Institut de l\'Ebre',
                'training_resource_short_name' => 'ies_ebre',
                'training_resource_description' => 'El centre, ubicat al barri de Ferreries de Tortosa, va ser fundat l\'any 1928 amb el nom de "Centro de Formación Técnico Industrial" i és un del més antics de Catalunya.',
                'training_resource_thumbnail' => 'images/ies_ebre.png',
                'training_resource_external_url' => 'http://www.iesebre.com/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '26',
                'training_resource_name' => 'Institut Joaquín Bau',
                'training_resource_short_name' => 'bau',
                'training_resource_description' => 'El primer Institut fou fundat el 1844 i instal·lat a l’edifici del Seminari al carrer Montcada. Aquest edifici fou arrabassat als jesuïtes el 1767 després de la seva expulsió i desamortitzat el 1841. El 1848 es va haver de tancar per manca d’alumnat.',
                'training_resource_thumbnail' => 'images/LOGOBAU2.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '33',
                'training_resource_name' => 'Institut Sól de Riu',
                'training_resource_short_name' => 'sol_de_riu',
                'training_resource_description' => 'L’Institut Sòl-de-Riu és un centre d’ensenyaments secundaris de titularitat pública depenent del Departament d’Ensenyament de la Generalitat de Catalunya. El nostre centre es troba a Alcanar, municipi situat a l’extrem més meridional de Catalunya a la comarca del Montsià formant part de les Terres de l’Ebre.  Per aquesta ubicació estratègica en la cruïlla amb les Terres del Sénia,  per les seves instal·lacions i per l’equip de professionals que des de fa vint anys ofereixen els seus serveis, l’Institut Sòl-de-Riu s’ha consolidat com un referent de l’ensenyament d’ESO, Cicles Formatius i Batxillerat tant a les comarques del sud de Catalunya com de les veïnes del nord del País Valencià. A l’Institut Sòl-de-Riu d’Alcanar s’hi imparteixen en règim de jornada intensiva els següent ensenyaments reglats: ESO, Batxillerat en la modalitat de humanitats i ciències socials i la modalitat de ciències i tecnologia i Cicles Formatius de Grau Mitjà (amb una oferta limitada a dues famílies professionals: la branca administrativa i la branca de manteniment).',
                'training_resource_thumbnail' => 'images/sol_de_riu_400x400.png',
                'training_resource_external_url' => 'http://institutsolderiu.cat/centre/estudis/fp/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '34',
                'training_resource_name' => 'Ins. Mare de Déu de la Candelera',
                'training_resource_short_name' => 'mare_de_deu_de_la_candelera',
                'training_resource_description' => 'L\'Institut Mare de Déu de la Candelera de l’Ametlla de mar és un centre públic d\'Educació Secundària on es poden cursar els estudis obligatoris (ESO) i els postobligatoris (BATXILLERAT i CICLES FORMATIUS). Al centre es rep un servei educatiu integral i innovador intel·lectualment i humanament.',
                'training_resource_thumbnail' => 'images/mare_de_deu_de_la_candelera.gif',
                'training_resource_external_url' => 'http://www.xtec.cat/centres/e3006976/INS/cicles_formatius.html',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '35',
                'training_resource_name' => 'Institut Escola de Capacitació Nauticopesquera de Catalunya',
                'training_resource_short_name' => 'iesnautica',
                'training_resource_description' => 'Institut Escola de Capacitació Nauticopesquera de Catalunya',
                'training_resource_thumbnail' => 'images/iesnautica.jpg',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '36',
                'training_resource_name' => 'Institut Ramon Berenguer IV',
                'training_resource_short_name' => 'iesramonberenguer',
                'training_resource_description' => 'Cures auxiliars d’infermeria',
                'training_resource_thumbnail' => 'images/iesramonberenguer.gif',
                'training_resource_external_url' => 'http://www.iesramonberenguer.org/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '37',
                'training_resource_name' => 'Institut de Tecnificació',
                'training_resource_short_name' => 'itecnificacio',
                'training_resource_description' => 'Conducció d’activitats físicoesportives en el medinatural',
                'training_resource_thumbnail' => 'images/itecnificacio.png',
                'training_resource_external_url' => 'http://www.itecnificacio.cat/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '38',
                'training_resource_name' => 'Institut Montsià',
                'training_resource_short_name' => 'iesmontsia',
                'training_resource_description' => 'L’Institut Montsià és un centre públic d’Ensenyaments Professionals depenent del Departament d’Ensenyament on des del curs 12/13 s’imparteixen únicament ensenyaments oficials de Formació Professional Específica de GM, GS, CACS i PQPI (PTT i FIAP).',
                'training_resource_thumbnail' => 'images/iesmontsia.gif',
                'training_resource_external_url' => 'http://www.iesmontsia.org/estudis/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '39',
                'training_resource_name' => 'Institut Deltebre',
                'training_resource_short_name' => 'iesdeltebre',
                'training_resource_description' => 'Institut Deltebre',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesdeltebre/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '40',
                'training_resource_name' => 'Institut Flix',
                'training_resource_short_name' => 'iesflix',
                'training_resource_description' => 'L\'Institut de Flix és un centre de titularitat pública que depèn del DdE de la Generalitat de Catalunya. És el resultat de la fusió de l’Institut de Batxillerat de Flix i l’Escola Municipal de Formació Professional tot i que els seus inicis es remunten a l’any 1969.De reconegut prestigi en el seu entorn per la seva oferta educativa.',
                'training_resource_thumbnail' => 'images/iesflix.png',
                'training_resource_external_url' => 'http://www.iesflix.cat/estudis',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '41',
                'training_resource_name' => 'Institut Terra Alta',
                'training_resource_short_name' => 'iesterraalta',
                'training_resource_description' => '',
                'training_resource_thumbnail' => 'images/iesterraalta.jpg',
                'training_resource_external_url' => 'http://www.xtec.cat/iesterraalta/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '42',
                'training_resource_name' => 'Institut Julio Antonio',
                'training_resource_short_name' => 'iesjulioantonio',
                'training_resource_description' => 'L’any 1984 l’Institut d’FP adquireix autonomia pròpia en crear-se l’Institut de Formació Professional de Móra d’Ebre sota la direcció de Joan A. Escribà, anteriorment director delegat de l’extensió, que exercí aquest càrrec fins a la unificació dels dos centres. Cal afegir que el curs 1983-84 es començaren a impartir les branques d’FP-I d’electricitat i FP-II d’automoció.',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://iesjulioantonio.cat/?page_id=589',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '43',
                'training_resource_name' => 'Institut Roquetes',
                'training_resource_short_name' => 'institutroquetes',
                'training_resource_description' => '',
                'training_resource_thumbnail' => 'images/institutroquetes.jpg',
                'training_resource_external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '44',
                'training_resource_name' => 'Institut La Sénia',
                'training_resource_short_name' => 'ies-la-senia',
                'training_resource_description' => '',
                'training_resource_thumbnail' => 'images/es-la-senia.jpg',
                'training_resource_external_url' => 'http://agora.xtec.cat/ies-la-senia/moodle/?lang=es',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '45',
                'training_resource_name' => 'Institut Els Alfacs',
                'training_resource_short_name' => 'insalfacs',
                'training_resource_description' => '',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '46',
                'training_resource_name' => 'Nuestra Señora de la Consolación',
                'training_resource_short_name' => 'consolaciotortosa',
                'training_resource_description' => 'Per tal de donar resposta al dret bàsic que tota persona té a l’educació, els Col·legis de la Consolació, inserits en la missió evangelitzadora de l’Església, proposem una alternativa educativa inspirada en l’Evangeli.És per això que el Caràcter Propi dels Col·legis de les Germanes de Nostra Senyora de la Consolació ens identifica davant la societat com a col·legis catòlics, que desenvolupen una tasca humanitzadora i evangelitzadora, atenent les orientacions de l’Església, els principis pedagògics i l’estil educatiu de Santa Maria Rosa Molas i Vallvé, la nostra fundadora.',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'training_resource_parentResourceId' => '1'
            ),
            array(
                'training_resource_id' => '47',
                'training_resource_name' => 'Institut Manuel Sales i Ferré',
                'training_resource_short_name' => 'ies-manuel-sales',
                'training_resource_description' => '',
                'training_resource_thumbnail' => 'images/ies-manuel-sales.jpg',
                'training_resource_external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'training_resource_parentResourceId' => '1'
            ),
            // Institut de l'Ebre
            array(
                'training_resource_id' => '5',
                'training_resource_name' => 'Administració i finances',
                'training_resource_short_name' => 'admin_fin',
                'training_resource_description' => 'Cicles Formatius de Grau Mitjà',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '7',
                'training_resource_name' => 'Sanitat',
                'training_resource_short_name' => 'sanitat',
                'training_resource_description' => 'Cicles Formatius de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_09_sanitat.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '11',
                'training_resource_name' => 'Fabricació mecànica',
                'training_resource_short_name' => 'fabricacio_mecanica',
                'training_resource_description' => 'Cicles Formatius de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_06 _mecanica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '14',
                'training_resource_name' => 'Administració i gestió',
                'training_resource_short_name' => 'admin_gestio',
                'training_resource_description' => 'Cicles Formatius de Grau Superior',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '17',
                'training_resource_name' => 'Informàtica',
                'training_resource_short_name' => 'informatica',
                'training_resource_description' => 'Cicles Formatius de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_07_informatica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '28',
                'training_resource_name' => 'Edificació i obra civil',
                'training_resource_short_name' => 'edificacio',
                'training_resource_description' => 'Cicles Formatius de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_04_edificacio.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '20'
            ),
            array(
                'training_resource_id' => '30',
                'training_resource_name' => 'Serveis socioculturals i a la comunitat',
                'training_resource_short_name' => 'sociocultural',
                'training_resource_description' => 'Cicles Formatius de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_10_sociocultural.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '20'
            ),
            //Institut Sól de Riu
            array(
                'training_resource_id' => '48',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'training_resource_parentResourceId' => '33'
            ),
            array(
                'training_resource_id' => '49',
                'training_resource_name' => 'Manteniment electromecànic',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'training_resource_parentResourceId' => '33'
            ),
            //Ins. Mare de Déu de la Candelera
            array(
                'training_resource_id' => '50',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ.',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.xtec.cat/centres/e3006976/INS/cicles_formatius.html',
                'training_resource_parentResourceId' => '34'
            ),
            //Institut Escola de Capacitació Nauticopesquera de Catalunya
            array(
                'training_resource_id' => '51',
                'training_resource_name' => 'Navegació i pesca de litora',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'training_resource_parentResourceId' => '35'
            ),
            array(
                'training_resource_id' => '52',
                'training_resource_name' => 'Manteniment i control de la maquinària de vaixells i embarcacions',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'training_resource_parentResourceId' => '35'
            ),
            array(
                'training_resource_id' => '53',
                'training_resource_name' => 'Busseig a profunditat mitjana',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'training_resource_parentResourceId' => '35'
            ),
            array(
                'training_resource_id' => '54',
                'training_resource_name' => 'Manteniment electromecànic (Manteniment vaixells d\'esbarjo)',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'training_resource_parentResourceId' => '35'
            ),
            array(
                'training_resource_id' => '55',
                'training_resource_name' => 'Cures auxiliars d’infermeria',
                'training_resource_short_name' => 'aux_enf',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/logo_09_sanitat.png',
                'training_resource_external_url' => '36',
                'training_resource_parentResourceId' => '35'
            ),
            array(
                'training_resource_id' => '56',
                'training_resource_name' => 'Conducció d’activitats físicoesportives en el medi natural',
                'training_resource_short_name' => 'cond',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://www.itecnificacio.cat',
                'training_resource_parentResourceId' => '37'
            ),
            array(
                'training_resource_id' => '57',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_adm',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '58',
                'training_resource_name' => 'Gestió administrativa (àmbit jurídic)',
                'training_resource_short_name' => 'juridic',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '59',
                'training_resource_name' => 'Comerç',
                'training_resource_short_name' => 'comers',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '60',
                'training_resource_name' => 'Instal·lacions elèctriques i automàtiques',
                'training_resource_short_name' => 'ins_elec',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '61',
                'training_resource_name' => 'Sistemes microinformàtics i xarxes',
                'training_resource_short_name' => 'smx',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '62',
                'training_resource_name' => 'Electromecànica d’automòbils',
                'training_resource_short_name' => 'elect_auto',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '63',
                'training_resource_name' => 'Carrosseria',
                'training_resource_short_name' => 'corrosseria',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '64',
                'training_resource_name' => 'Atenció a persones en situació de dependència',
                'training_resource_short_name' => 'aten_person',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '65',
                'training_resource_name' => 'Manteniment electromecànic',
                'training_resource_short_name' => 'man_elec',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '38'
            ),
            array(
                'training_resource_id' => '68',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '39'
            ),
            array(
                'training_resource_id' => '69',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '40'
            ),
            array(
                'training_resource_id' => '70',
                'training_resource_name' => 'Manteniment electromecànic',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '40'
            ),
            array(
                'training_resource_id' => '71',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '41'
            ),
            array(
                'training_resource_id' => '72',
                'training_resource_name' => 'Manteniment electromecànic',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '41'
            ),
            array(
                'training_resource_id' => '73',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '42'
            ),
            array(
                'training_resource_id' => '66',
                'training_resource_name' => 'Atenció a persones en situació de dependència',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '42'
            ),
            array(
                'training_resource_id' => '67',
                'training_resource_name' => 'Sistemes microinformàtics i xarxes',
                'training_resource_short_name' => 'nav_pesca',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '42'
            ),
            array(
                'training_resource_id' => '74',
                'training_resource_name' => 'Electromecànica d’automòbils',
                'training_resource_short_name' => 'elect_auto',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => '',
                'training_resource_parentResourceId' => '42'
            ),
            array(
                'training_resource_id' => '75',
                'training_resource_name' => 'Perruqueria i cosmètica capilar',
                'training_resource_short_name' => 'institutroquetes',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/institutroquetes.jpg',
                'training_resource_external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'training_resource_parentResourceId' => '43'
            ),
            array(
                'training_resource_id' => '76',
                'training_resource_name' => 'Estètica i bellesa ',
                'training_resource_short_name' => 'institutroquetes',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/institutroquetes.jpg',
                'training_resource_external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'training_resource_parentResourceId' => '43'
            ),
            array(
                'training_resource_id' => '77',
                'training_resource_name' => 'Institut La Sénia',
                'training_resource_short_name' => 'ies-la-senia',
                'training_resource_description' => 'Gestió administrativa',
                'training_resource_thumbnail' => 'images/es-la-senia.jpg',
                'training_resource_external_url' => 'http://agora.xtec.cat/ies-la-senia/moodle/?lang=es',
                'training_resource_parentResourceId' => '44'
            ),
            array(
                'training_resource_id' => '78',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'insalfacs',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'training_resource_parentResourceId' => '45'
            ),
            array(
                'training_resource_id' => '79',
                'training_resource_name' => 'Cultius aqüícoles',
                'training_resource_short_name' => 'insalfacs',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'training_resource_parentResourceId' => '45'
            ),
            array(
                'training_resource_id' => '80',
                'training_resource_name' => 'Cuina i gastronomia',
                'training_resource_short_name' => 'bau',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/LOGOBAU2.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'training_resource_parentResourceId' => '26'
            ),
            array(
                'training_resource_id' => '81',
                'training_resource_name' => 'Serveis de restauració',
                'training_resource_short_name' => 'bau',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/LOGOBAU2.png',
                'training_resource_external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'training_resource_parentResourceId' => '26'
            ),
            array(
                'training_resource_id' => '82',
                'training_resource_name' => 'Cures auxiliars d’infermeria',
                'training_resource_short_name' => 'consolaciotortosa',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'training_resource_parentResourceId' => '46'
            ),
            array(
                'training_resource_id' => '83',
                'training_resource_name' => 'Gestió administrativa',
                'training_resource_short_name' => 'consolaciotortosa',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'training_resource_parentResourceId' => '46'
            ),
            array(
                'training_resource_id' => '84',
                'training_resource_name' => 'Sistemes microinformàtics i xarxes',
                'training_resource_short_name' => 'ies-manuel-sales',
                'training_resource_description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'training_resource_thumbnail' => 'images/ies-manuel-sales.jpg',
                'training_resource_external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'training_resource_parentResourceId' => '47'
            ),
            //Administració i finances
            array(
                'training_resource_id' => '6',
                'training_resource_name' => 'Gestió administrativa (LOE)',
                'training_resource_short_name' => 'ges_admin',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '5'
            ),
            array(
                'training_resource_id' => '8',
                'training_resource_name' => 'Cures auxiliars d\'infermeria (LOGSE)',
                'training_resource_short_name' => 'aux_infermeria',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_09_sanitat.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '7'
            ),
            array(
                'training_resource_id' => '9',
                'training_resource_name' => 'Emergències sanitàries (LOE)',
                'training_resource_short_name' => 'emerg_sanitaries',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_09_sanitat.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '7'
            ),
            array(
                'training_resource_id' => '10',
                'training_resource_name' => 'Farmàcia i parafarmàcia (LOE)',
                'training_resource_short_name' => 'farmacia_parafarmacia',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_09_sanitat.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '7'
            ),
            array(
                'training_resource_id' => '12',
                'training_resource_name' => 'Mecanització (LOE)',
                'training_resource_short_name' => 'mecanitzacio',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_06 _mecanica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '11'
            ),
            array(
                'training_resource_id' => '13',
                'training_resource_name' => 'Soldadura i caldereria (LOE)',
                'training_resource_short_name' => 'soldadura_caldereria',
                'training_resource_description' => 'Cicle Formatiu de Grau Mitjà',
                'training_resource_thumbnail' => 'images/logo_06 _mecanica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'training_resource_parentResourceId' => '11'
            ),
            array(
                'training_resource_id' => '15',
                'training_resource_name' => 'Administració i finances (LOE)',
                'training_resource_short_name' => 'admin_finances',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '14'
            ),
            array(
                'training_resource_id' => '16',
                'training_resource_name' => 'Assistència a la direcció (LOE)',
                'training_resource_short_name' => 'assistencia_direccio',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/Logo_03_admin_fin.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '14'
            ),
            array(
                'training_resource_id' => '18',
                'training_resource_name' => 'Administració de sistemes informàtics en la xarxa (LOE)',
                'training_resource_short_name' => 'ASIX',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_07_informatica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '17'
            ),
            array(
                'training_resource_id' => '19',
                'training_resource_name' => 'Desenvolupament d\'aplicacions multiplataforma (LOE)',
                'training_resource_short_name' => 'DAM',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_07_informatica.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '17'
            ),
            array(
                'training_resource_id' => '21',
                'training_resource_name' => 'USOC',
                'training_resource_short_name' => 'usoc',
                'training_resource_description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ',
                'training_resource_thumbnail' => 'images/logo_usoc.jpg',
                'training_resource_external_url' => 'http://www.serveis.usoc.cat/',
                'training_resource_parentResourceId' => '2'
            ),
            array(
                'training_resource_id' => '22',
                'training_resource_name' => 'CAMBRA OFICIAL DE COMERÇ, INDÚSTRIA I NAVEGACIÓ DE TORTOSA',
                'training_resource_short_name' => 'cambra_oficial',
                'training_resource_description' => 'Formació contínua, formació ocupacional, formació subvencionada',
                'training_resource_thumbnail' => 'images/logo_cambra_comerc_tortosa.jpg',
                'training_resource_external_url' => 'http://www.cambratortosa.com/formacio/index.asp',
                'training_resource_parentResourceId' => '2'
            ),
            array(
                'training_resource_id' => '23',
                'training_resource_name' => 'ESCOLA DE L\'ESPLAI DE TORTOSA',
                'training_resource_short_name' => 'escola_espai',
                'training_resource_description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ',
                'training_resource_thumbnail' => 'images/2_wkB9dV.png',
                'training_resource_external_url' => 'http://www.escolaesplai.cat/',
                'training_resource_parentResourceId' => '4'
            ),
            array(
                'training_resource_id' => '24',
                'training_resource_name' => 'CFO Ajuntament de Tortosa',
                'training_resource_short_name' => 'CFOAT',
                'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'training_resource_thumbnail' => 'images/logo_tort.png',
                'training_resource_external_url' => 'http://www.tortosa.cat/webajt/cfo/index.asp',
                'training_resource_parentResourceId' => '4'
            ),
            array(
                'training_resource_id' => '25',
                'training_resource_name' => 'AECE',
                'training_resource_short_name' => 'aece',
                'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'training_resource_thumbnail' => 'images/default_thumbnail.png',
                'training_resource_external_url' => 'http://www.aecebre.org/',
                'training_resource_parentResourceId' => '4'
            ),
            array(
                'training_resource_id' => '27',
                'training_resource_name' => 'UGT-IDFO',
                'training_resource_short_name' => 'ugt',
                'training_resource_description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'training_resource_thumbnail' => 'images/logo_idfo_ugt.png',
                'training_resource_external_url' => 'http://www.idfo.com/',
                'training_resource_parentResourceId' => '3'
            ),
            array(
                'training_resource_id' => '29',
                'training_resource_name' => 'Projectes d\'edificació (LOE)',
                'training_resource_short_name' => 'ASIX',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_04_edificacio.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '28'
            ),
            array(
                'training_resource_id' => '31',
                'training_resource_name' => 'Integració social (LOGSE)',
                'training_resource_short_name' => 'integracio_social',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_10_sociocultural.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '30'
            ),
            array(
                'training_resource_id' => '32',
                'training_resource_name' => 'Educació infantil (LOE)',
                'training_resource_short_name' => 'integracio_infantil',
                'training_resource_description' => 'Cicle Formatiu de Grau Superior',
                'training_resource_thumbnail' => 'images/logo_10_sociocultural.png',
                'training_resource_external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'training_resource_parentResourceId' => '30'
            )
        ));
    }
}