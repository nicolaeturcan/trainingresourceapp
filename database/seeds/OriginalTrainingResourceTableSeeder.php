<?php

use Illuminate\Database\Seeder;

class TrainingResourceTableSeeder extends Seeder
{
    // Comanda php artisan db:seed per a executar.
    public function run()
    {
        // Warning! La següent línia esborrarà completament les dades de la taula indicada.
        DB::table('training_resources')->delete();

        // Inserim les dades que ens interessa.
        DB::table('training_resources')->insert(array(
            array(
                'id' => '1',
                'name' => 'Formació Inicial',
                'short_name' => 'form_ini',
                'description' => 'L\'objectiu principal de la Formació Inicial és oferir una formació pedagògica bàsica, eminentment pràctica, coherent amb el model educatiu europeu i que permeti al professorat el desenvolupament, millora i/o innovació de la seva actuació docent.',
                'thumbnail' => 'images/logo_formacio_inicial.png',
                'external_url' => '',
                'parent_id' => NULL
            ),
            array(
                'id' => '2',
                'name' => 'Formació Continua',
                'short_name' => 'form_cont',
                'description' => 'Cicles Formatius de Grau Superior disponibles a l\'Institut de l\'Ebre',
                'thumbnail' => 'images/logo_formacio_continua.png',
                'external_url' => '',
                'parent_id' => NULL
            ),
            array(
                'id' => '3',
                'name' => 'Formació Ocupacional',
                'short_name' => 'admin_fin',
                'description' => 'Cicles Formatius de Grau Mitjà',
                'thumbnail' => 'images/logo_formacio_ocupacional.png',
                'external_url' => '',
                'parent_id' => NULL
            ),
            array(
                'id' => '4',
                'name' => 'Altres Formacions',
                'short_name' => 'altres_formacions',
                'description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'thumbnail' => 'images/logo_altres_formacions.png',
                'external_url' => '',
                'parent_id' => NULL
            ),
            // Formació Inicial
            array(
                'id' => '20',
                'name' => 'Institut de l\'Ebre',
                'short_name' => 'ies_ebre',
                'description' => 'El centre, ubicat al barri de Ferreries de Tortosa, va ser fundat l\'any 1928 amb el nom de "Centro de Formación Técnico Industrial" i és un del més antics de Catalunya.',
                'thumbnail' => 'images/ies_ebre.png',
                'external_url' => 'http://www.iesebre.com/',
                'parent_id' => '1'
            ),
            array(
                'id' => '26',
                'name' => 'Institut Joaquín Bau',
                'short_name' => 'bau',
                'description' => 'El primer Institut fou fundat el 1844 i instal·lat a l’edifici del Seminari al carrer Montcada. Aquest edifici fou arrabassat als jesuïtes el 1767 després de la seva expulsió i desamortitzat el 1841. El 1848 es va haver de tancar per manca d’alumnat.',
                'thumbnail' => 'images/LOGOBAU2.png',
                'external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'parent_id' => '1'
            ),
            array(
                'id' => '33',
                'name' => 'Institut Sól de Riu',
                'short_name' => 'sol_de_riu',
                'description' => 'L’Institut Sòl-de-Riu és un centre d’ensenyaments secundaris de titularitat pública depenent del Departament d’Ensenyament de la Generalitat de Catalunya. El nostre centre es troba a Alcanar, municipi situat a l’extrem més meridional de Catalunya a la comarca del Montsià formant part de les Terres de l’Ebre.  Per aquesta ubicació estratègica en la cruïlla amb les Terres del Sénia,  per les seves instal·lacions i per l’equip de professionals que des de fa vint anys ofereixen els seus serveis, l’Institut Sòl-de-Riu s’ha consolidat com un referent de l’ensenyament d’ESO, Cicles Formatius i Batxillerat tant a les comarques del sud de Catalunya com de les veïnes del nord del País Valencià. A l’Institut Sòl-de-Riu d’Alcanar s’hi imparteixen en règim de jornada intensiva els següent ensenyaments reglats: ESO, Batxillerat en la modalitat de humanitats i ciències socials i la modalitat de ciències i tecnologia i Cicles Formatius de Grau Mitjà (amb una oferta limitada a dues famílies professionals: la branca administrativa i la branca de manteniment).',
                'thumbnail' => 'images/sol_de_riu_400x400.png',
                'external_url' => 'http://institutsolderiu.cat/centre/estudis/fp/',
                'parent_id' => '1'
            ),
            array(
                'id' => '34',
                'name' => 'Ins. Mare de Déu de la Candelera',
                'short_name' => 'mare_de_deu_de_la_candelera',
                'description' => 'L\'Institut Mare de Déu de la Candelera de l’Ametlla de mar és un centre públic d\'Educació Secundària on es poden cursar els estudis obligatoris (ESO) i els postobligatoris (BATXILLERAT i CICLES FORMATIUS). Al centre es rep un servei educatiu integral i innovador intel·lectualment i humanament.',
                'thumbnail' => 'images/mare_de_deu_de_la_candelera.gif',
                'external_url' => 'http://www.xtec.cat/centres/e3006976/INS/cicles_formatius.html',
                'parent_id' => '1'
            ),
            array(
                'id' => '35',
                'name' => 'Institut Escola de Capacitació Nauticopesquera de Catalunya',
                'short_name' => 'iesnautica',
                'description' => 'Institut Escola de Capacitació Nauticopesquera de Catalunya',
                'thumbnail' => 'images/iesnautica.jpg',
                'external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'parent_id' => '1'
            ),
            array(
                'id' => '36',
                'name' => 'Institut Ramon Berenguer IV',
                'short_name' => 'iesramonberenguer',
                'description' => 'Cures auxiliars d’infermeria',
                'thumbnail' => 'images/iesramonberenguer.gif',
                'external_url' => 'http://www.iesramonberenguer.org/',
                'parent_id' => '1'
            ),
            array(
                'id' => '37',
                'name' => 'Institut de Tecnificació',
                'short_name' => 'itecnificacio',
                'description' => 'Conducció d’activitats físicoesportives en el medinatural',
                'thumbnail' => 'images/itecnificacio.png',
                'external_url' => 'http://www.itecnificacio.cat/',
                'parent_id' => '1'
            ),
            array(
                'id' => '38',
                'name' => 'Institut Montsià',
                'short_name' => 'iesmontsia',
                'description' => 'L’Institut Montsià és un centre públic d’Ensenyaments Professionals depenent del Departament d’Ensenyament on des del curs 12/13 s’imparteixen únicament ensenyaments oficials de Formació Professional Específica de GM, GS, CACS i PQPI (PTT i FIAP).',
                'thumbnail' => 'images/iesmontsia.gif',
                'external_url' => 'http://www.iesmontsia.org/estudis/',
                'parent_id' => '1'
            ),
            array(
                'id' => '39',
                'name' => 'Institut Deltebre',
                'short_name' => 'iesdeltebre',
                'description' => 'Institut Deltebre',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://agora.xtec.cat/iesdeltebre/',
                'parent_id' => '1'
            ),
            array(
                'id' => '40',
                'name' => 'Institut Flix',
                'short_name' => 'iesflix',
                'description' => 'L\'Institut de Flix és un centre de titularitat pública que depèn del DdE de la Generalitat de Catalunya. És el resultat de la fusió de l’Institut de Batxillerat de Flix i l’Escola Municipal de Formació Professional tot i que els seus inicis es remunten a l’any 1969.De reconegut prestigi en el seu entorn per la seva oferta educativa.',
                'thumbnail' => 'images/iesflix.png',
                'external_url' => 'http://www.iesflix.cat/estudis',
                'parent_id' => '1'
            ),
            array(
                'id' => '41',
                'name' => 'Institut Terra Alta',
                'short_name' => 'iesterraalta',
                'description' => '',
                'thumbnail' => 'images/iesterraalta.jpg',
                'external_url' => 'http://www.xtec.cat/iesterraalta/',
                'parent_id' => '1'
            ),
            array(
                'id' => '42',
                'name' => 'Institut Julio Antonio',
                'short_name' => 'iesjulioantonio',
                'description' => 'L’any 1984 l’Institut d’FP adquireix autonomia pròpia en crear-se l’Institut de Formació Professional de Móra d’Ebre sota la direcció de Joan A. Escribà, anteriorment director delegat de l’extensió, que exercí aquest càrrec fins a la unificació dels dos centres. Cal afegir que el curs 1983-84 es començaren a impartir les branques d’FP-I d’electricitat i FP-II d’automoció.',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://iesjulioantonio.cat/?page_id=589',
                'parent_id' => '1'
            ),
            array(
                'id' => '43',
                'name' => 'Institut Roquetes',
                'short_name' => 'institutroquetes',
                'description' => '',
                'thumbnail' => 'images/institutroquetes.jpg',
                'external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'parent_id' => '1'
            ),
            array(
                'id' => '44',
                'name' => 'Institut La Sénia',
                'short_name' => 'ies-la-senia',
                'description' => '',
                'thumbnail' => 'images/es-la-senia.jpg',
                'external_url' => 'http://agora.xtec.cat/ies-la-senia/moodle/?lang=es',
                'parent_id' => '1'
            ),
            array(
                'id' => '45',
                'name' => 'Institut Els Alfacs',
                'short_name' => 'insalfacs',
                'description' => '',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'parent_id' => '1'
            ),
            array(
                'id' => '46',
                'name' => 'Nuestra Señora de la Consolación',
                'short_name' => 'consolaciotortosa',
                'description' => 'Per tal de donar resposta al dret bàsic que tota persona té a l’educació, els Col·legis de la Consolació, inserits en la missió evangelitzadora de l’Església, proposem una alternativa educativa inspirada en l’Evangeli.És per això que el Caràcter Propi dels Col·legis de les Germanes de Nostra Senyora de la Consolació ens identifica davant la societat com a col·legis catòlics, que desenvolupen una tasca humanitzadora i evangelitzadora, atenent les orientacions de l’Església, els principis pedagògics i l’estil educatiu de Santa Maria Rosa Molas i Vallvé, la nostra fundadora.',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'parent_id' => '1'
            ),
            array(
                'id' => '47',
                'name' => 'Institut Manuel Sales i Ferré',
                'short_name' => 'ies-manuel-sales',
                'description' => '',
                'thumbnail' => 'images/ies-manuel-sales.jpg',
                'external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'parent_id' => '1'
            ),
            // Institut de l'Ebre
            array(
                'id' => '5',
                'name' => 'Administració i finances',
                'short_name' => 'admin_fin',
                'description' => 'Cicles Formatius de Grau Mitjà',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '20'
            ),
            array(
                'id' => '7',
                'name' => 'Sanitat',
                'short_name' => 'sanitat',
                'description' => 'Cicles Formatius de Grau Mitjà',
                'thumbnail' => 'images/logo_09_sanitat.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '20'
            ),
            array(
                'id' => '11',
                'name' => 'Fabricació mecànica',
                'short_name' => 'fabricacio_mecanica',
                'description' => 'Cicles Formatius de Grau Mitjà',
                'thumbnail' => 'images/logo_06 _mecanica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '20'
            ),
            array(
                'id' => '14',
                'name' => 'Administració i gestió',
                'short_name' => 'admin_gestio',
                'description' => 'Cicles Formatius de Grau Superior',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '20'
            ),
            array(
                'id' => '17',
                'name' => 'Informàtica',
                'short_name' => 'informatica',
                'description' => 'Cicles Formatius de Grau Superior',
                'thumbnail' => 'images/logo_07_informatica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '20'
            ),
            array(
                'id' => '28',
                'name' => 'Edificació i obra civil',
                'short_name' => 'edificacio',
                'description' => 'Cicles Formatius de Grau Superior',
                'thumbnail' => 'images/logo_04_edificacio.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '20'
            ),
            array(
                'id' => '30',
                'name' => 'Serveis socioculturals i a la comunitat',
                'short_name' => 'sociocultural',
                'description' => 'Cicles Formatius de Grau Superior',
                'thumbnail' => 'images/logo_10_sociocultural.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '20'
            ),
            //Institut Sól de Riu
            array(
                'id' => '48',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'parent_id' => '33'
            ),
            array(
                'id' => '49',
                'name' => 'Manteniment electromecànic',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'parent_id' => '33'
            ),
            //Ins. Mare de Déu de la Candelera
            array(
                'id' => '50',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ.',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.xtec.cat/centres/e3006976/INS/cicles_formatius.html',
                'parent_id' => '34'
            ),
            //Institut Escola de Capacitació Nauticopesquera de Catalunya
            array(
                'id' => '51',
                'name' => 'Navegació i pesca de litora',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'parent_id' => '35'
            ),
            array(
                'id' => '52',
                'name' => 'Manteniment i control de la maquinària de vaixells i embarcacions',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'parent_id' => '35'
            ),
            array(
                'id' => '53',
                'name' => 'Busseig a profunditat mitjana',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'parent_id' => '35'
            ),
            array(
                'id' => '54',
                'name' => 'Manteniment electromecànic (Manteniment vaixells d\'esbarjo)',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://agora.xtec.cat/iesnautica/intranet/index.php?module=Pages&func=display&pageid=5',
                'parent_id' => '35'
            ),
            array(
                'id' => '55',
                'name' => 'Cures auxiliars d’infermeria',
                'short_name' => 'aux_enf',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/logo_09_sanitat.png',
                'external_url' => '36',
                'parent_id' => '35'
            ),
            array(
                'id' => '56',
                'name' => 'Conducció d’activitats físicoesportives en el medi natural',
                'short_name' => 'cond',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://www.itecnificacio.cat',
                'parent_id' => '37'
            ),
            array(
                'id' => '57',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_adm',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '58',
                'name' => 'Gestió administrativa (àmbit jurídic)',
                'short_name' => 'juridic',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '59',
                'name' => 'Comerç',
                'short_name' => 'comers',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '60',
                'name' => 'Instal·lacions elèctriques i automàtiques',
                'short_name' => 'ins_elec',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '61',
                'name' => 'Sistemes microinformàtics i xarxes',
                'short_name' => 'smx',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '62',
                'name' => 'Electromecànica d’automòbils',
                'short_name' => 'elect_auto',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '63',
                'name' => 'Carrosseria',
                'short_name' => 'corrosseria',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '64',
                'name' => 'Atenció a persones en situació de dependència',
                'short_name' => 'aten_person',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '65',
                'name' => 'Manteniment electromecànic',
                'short_name' => 'man_elec',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '38'
            ),
            array(
                'id' => '68',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => '',
                'parent_id' => '39'
            ),
            array(
                'id' => '69',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => '',
                'parent_id' => '40'
            ),
            array(
                'id' => '70',
                'name' => 'Manteniment electromecànic',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '40'
            ),
            array(
                'id' => '71',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => '',
                'parent_id' => '41'
            ),
            array(
                'id' => '72',
                'name' => 'Manteniment electromecànic',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '41'
            ),
            array(
                'id' => '73',
                'name' => 'Gestió administrativa',
                'short_name' => 'ges_admin',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => '',
                'parent_id' => '42'
            ),
            array(
                'id' => '66',
                'name' => 'Atenció a persones en situació de dependència',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '42'
            ),
            array(
                'id' => '67',
                'name' => 'Sistemes microinformàtics i xarxes',
                'short_name' => 'nav_pesca',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '42'
            ),
            array(
                'id' => '74',
                'name' => 'Electromecànica d’automòbils',
                'short_name' => 'elect_auto',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => '',
                'parent_id' => '42'
            ),
            array(
                'id' => '75',
                'name' => 'Perruqueria i cosmètica capilar',
                'short_name' => 'institutroquetes',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/institutroquetes.jpg',
                'external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'parent_id' => '43'
            ),
            array(
                'id' => '76',
                'name' => 'Estètica i bellesa ',
                'short_name' => 'institutroquetes',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/institutroquetes.jpg',
                'external_url' => 'http://www.institutroquetes.cat/?page_id=222',
                'parent_id' => '43'
            ),
            array(
                'id' => '77',
                'name' => 'Institut La Sénia',
                'short_name' => 'ies-la-senia',
                'description' => 'Gestió administrativa',
                'thumbnail' => 'images/es-la-senia.jpg',
                'external_url' => 'http://agora.xtec.cat/ies-la-senia/moodle/?lang=es',
                'parent_id' => '44'
            ),
            array(
                'id' => '78',
                'name' => 'Gestió administrativa',
                'short_name' => 'insalfacs',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'parent_id' => '45'
            ),
            array(
                'id' => '79',
                'name' => 'Cultius aqüícoles',
                'short_name' => 'insalfacs',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://moodle.insalfacs.cat/moodle/',
                'parent_id' => '45'
            ),
            array(
                'id' => '80',
                'name' => 'Cuina i gastronomia',
                'short_name' => 'bau',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/LOGOBAU2.png',
                'external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'parent_id' => '26'
            ),
            array(
                'id' => '81',
                'name' => 'Serveis de restauració',
                'short_name' => 'bau',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/LOGOBAU2.png',
                'external_url' => 'http://agora.xtec.cat/iesjbau/projecte-educatiu/estudis/',
                'parent_id' => '26'
            ),
            array(
                'id' => '82',
                'name' => 'Cures auxiliars d’infermeria',
                'short_name' => 'consolaciotortosa',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'parent_id' => '46'
            ),
            array(
                'id' => '83',
                'name' => 'Gestió administrativa',
                'short_name' => 'consolaciotortosa',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'https://sites.google.com/a/xtec.cat/webconsolaciotortosa/',
                'parent_id' => '46'
            ),
            array(
                'id' => '84',
                'name' => 'Sistemes microinformàtics i xarxes',
                'short_name' => 'ies-manuel-sales',
                'description' => 'CICLE FORMATIU DE GRAU MITJÀ',
                'thumbnail' => 'images/ies-manuel-sales.jpg',
                'external_url' => 'http://www.xtec.cat/ies-manuel-sales/portada.htm',
                'parent_id' => '47'
            ),
            //Administració i finances
            array(
                'id' => '6',
                'name' => 'Gestió administrativa (LOE)',
                'short_name' => 'ges_admin',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '5'
            ),
            array(
                'id' => '8',
                'name' => 'Cures auxiliars d\'infermeria (LOGSE)',
                'short_name' => 'aux_infermeria',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/logo_09_sanitat.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '7'
            ),
            array(
                'id' => '9',
                'name' => 'Emergències sanitàries (LOE)',
                'short_name' => 'emerg_sanitaries',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/logo_09_sanitat.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '7'
            ),
            array(
                'id' => '10',
                'name' => 'Farmàcia i parafarmàcia (LOE)',
                'short_name' => 'farmacia_parafarmacia',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/logo_09_sanitat.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '7'
            ),
            array(
                'id' => '12',
                'name' => 'Mecanització (LOE)',
                'short_name' => 'mecanitzacio',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/logo_06 _mecanica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '11'
            ),
            array(
                'id' => '13',
                'name' => 'Soldadura i caldereria (LOE)',
                'short_name' => 'soldadura_caldereria',
                'description' => 'Cicle Formatiu de Grau Mitjà',
                'thumbnail' => 'images/logo_06 _mecanica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgm',
                'parent_id' => '11'
            ),
            array(
                'id' => '15',
                'name' => 'Administració i finances (LOE)',
                'short_name' => 'admin_finances',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '14'
            ),
            array(
                'id' => '16',
                'name' => 'Assistència a la direcció (LOE)',
                'short_name' => 'assistencia_direccio',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/Logo_03_admin_fin.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '14'
            ),
            array(
                'id' => '18',
                'name' => 'Administració de sistemes informàtics en la xarxa (LOE)',
                'short_name' => 'ASIX',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/logo_07_informatica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '17'
            ),
            array(
                'id' => '19',
                'name' => 'Desenvolupament d\'aplicacions multiplataforma (LOE)',
                'short_name' => 'DAM',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/logo_07_informatica.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '17'
            ),
            array(
                'id' => '21',
                'name' => 'USOC',
                'short_name' => 'usoc',
                'description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ',
                'thumbnail' => 'images/logo_usoc.jpg',
                'external_url' => 'http://www.serveis.usoc.cat/',
                'parent_id' => '2'
            ),
            array(
                'id' => '22',
                'name' => 'CAMBRA OFICIAL DE COMERÇ, INDÚSTRIA I NAVEGACIÓ DE TORTOSA',
                'short_name' => 'cambra_oficial',
                'description' => 'Formació contínua, formació ocupacional, formació subvencionada',
                'thumbnail' => 'images/logo_cambra_comerc_tortosa.jpg',
                'external_url' => 'http://www.cambratortosa.com/formacio/index.asp',
                'parent_id' => '2'
            ),
            array(
                'id' => '23',
                'name' => 'ESCOLA DE L\'ESPLAI DE TORTOSA',
                'short_name' => 'escola_espai',
                'description' => 'Fruebatur ha ut cupientem ingeniosi re inscitiae ac formantur. Ex re quomodo punctum ignotae quisnam de ii. Quem at quod du quam suam modo de solo. Societati at de ea persuasus dubitarem. Invenit majorem quiddam ad et at ac. Dissimilem ne ei ad utilitatis perfectius re durationis affirmabam. Assumere iii cap loquebar physicae. ',
                'thumbnail' => 'images/2_wkB9dV.png',
                'external_url' => 'http://www.escolaesplai.cat/',
                'parent_id' => '4'
            ),
            array(
                'id' => '24',
                'name' => 'CFO Ajuntament de Tortosa',
                'short_name' => 'CFOAT',
                'description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'thumbnail' => 'images/logo_tort.png',
                'external_url' => 'http://www.tortosa.cat/webajt/cfo/index.asp',
                'parent_id' => '4'
            ),
            array(
                'id' => '25',
                'name' => 'AECE',
                'short_name' => 'aece',
                'description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'thumbnail' => 'images/default_thumbnail.png',
                'external_url' => 'http://www.aecebre.org/',
                'parent_id' => '4'
            ),
            array(
                'id' => '27',
                'name' => 'UGT-IDFO',
                'short_name' => 'ugt',
                'description' => 'Superque poterunt aliasque cognitum cum vel tractant importat. Sensibus ideamque tollatur fas quisquis sub non meo. Ne to habeat animam cuncta at figere ei animum. At ea ingens et plures vocant mandat optime carnem. Effectus formalem videntur est ostensum tur possumus. Meditatas hac hoc sua nitebatur existimem iis. Reliquiae sequentia duo perfectis nec eundemque contineat hac. ',
                'thumbnail' => 'images/logo_idfo_ugt.png',
                'external_url' => 'http://www.idfo.com/',
                'parent_id' => '3'
            ),
            array(
                'id' => '29',
                'name' => 'Projectes d\'edificació (LOE)',
                'short_name' => 'ASIX',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/logo_04_edificacio.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '28'
            ),
            array(
                'id' => '31',
                'name' => 'Integració social (LOGSE)',
                'short_name' => 'integracio_social',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/logo_10_sociocultural.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '30'
            ),
            array(
                'id' => '32',
                'name' => 'Educació infantil (LOE)',
                'short_name' => 'integracio_infantil',
                'description' => 'Cicle Formatiu de Grau Superior',
                'thumbnail' => 'images/logo_10_sociocultural.png',
                'external_url' => 'http://www.iesebre.com/index.php/2011-10-28-13-41-40/cfgs',
                'parent_id' => '30'
            )
        ));
    }
}