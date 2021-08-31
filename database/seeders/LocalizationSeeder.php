<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Localization;

class LocalizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Localization();
        $type->types_localizations_id = 1;
        $type->localizations_id = null;
        $type->name = 'Venezuela';
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Amazonas';
        $type->save();//este es del 1

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Anzoátegui';
        $type->save(); //este es del 2

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Apure';
        $type->save(); //este es del 3

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Aragua';
        $type->save(); //este es del 4

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Barinas';
        $type->save(); //este es del 5

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Bolívar';
        $type->save(); //este es del 6

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Carabobo';
        $type->save(); //este es del 7

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Cojedes';
        $type->save(); //este es del 8

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Delta Amacuro';
        $type->save(); //este es del 9

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Falcón';
        $type->save(); //este es del 10

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Guárico';
        $type->save(); //este es del 11

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Lara';
        $type->save(); //este es del 12

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Mérida';
        $type->save(); //este es del 13

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Miranda';
        $type->save(); //este es del 14

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Monagas';
        $type->save(); //este es del 15

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Nueva Esparta';
        $type->save(); //este es del 16

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Portuguesa';
        $type->save(); //este es del 17

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Sucre';
        $type->save(); //este es del 18

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Táchira';
        $type->save(); //este es del 19

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Trujillo';
        $type->save(); //este es del 20

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'La Guaira';
        $type->save(); //este es del 21

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Yaracuy';
        $type->save(); //este es del 22

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Zulia';
        $type->save(); //este es del 23

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Distrito Capital';
        $type->save(); //este es del 24

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 1;
        $type->name = 'Dependencias Federales';
        $type->save(); //este es del 25


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Alto Orinoco';
        $type->save(); //este es del 1

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Atabapo'; //este es del 1
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Atures'; //este es del 1
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Autana'; //este es del 1
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Manapiare'; //este es del 1
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Maroa'; //este es del 1
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 2;
        $type->name = 'Río Negro'; //este es del 1
        $type->save();
       
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Anaco'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Aragua'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Manuel Ezequiel Bruzual'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Diego Bautista Urbaneja'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Fernando Peñalver'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Francisco Del Carmen Carvajal'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'General Sir Arthur McGregor'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Guanta'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Independencia'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Juan Antonio Sotillo'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Juan Manuel Cajigal'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Libertad'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Francisco de Miranda'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Pedro María Freites'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Píritu'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'San José de Guanipa'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'San Juan de Capistrano'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Santa Ana'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Simón Bolívar'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 3;
        $type->name = 'Simón Rodríguez'; //este es del 2
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Achaguas'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Biruaca'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Muñóz'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Páez'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Pedro Camejo'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'Rómulo Gallegos'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 4;
        $type->name = 'San Fernando'; //este es del 3
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Atanasio Girardot'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Bolívar'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Camatagua'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Francisco Linares Alcántara'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'José Ángel Lamas'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'José Félix Ribas'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'José Félix Ribas'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'José Rafael Revenga'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Libertador'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Mario Briceño Iragorry'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Ocumare de la Costa de Oro'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'San Casimiro'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'San Sebastián'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Santiago Mariño'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Santos Michelena'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Sucre'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Tovar'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Urdaneta'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 5;
        $type->name = 'Zamora'; //este es del 4
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Alberto Arvelo Torrealba'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Andrés Eloy Blanco'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Antonio José de Sucre'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Arismendi'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Barinas'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Bolívar'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Cruz Paredes'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Ezequiel Zamora'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Obispos'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Pedraza'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Rojas'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 6;
        $type->name = 'Sosa'; //este es del 5
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Caroní'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Cedeño'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'El Callao'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Gran Sabana'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Heres'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Piar'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Angostura (Raúl Leoni)'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Roscio'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Sifontes'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Sucre'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 7;
        $type->name = 'Padre Pedro Chien'; //este es del 6
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Bejuma'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Carlos Arvelo'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Diego Ibarra'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Guacara'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Juan José Mora'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Libertador'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Los Guayos'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Miranda'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Montalbán'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Naguanagua'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Puerto Cabello'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'San Diego'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'San Joaquín'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 8;
        $type->name = 'Valencia'; //este es del 7
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Anzoátegui'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Tinaquillo'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Girardot'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Lima Blanco'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Pao de San Juan Bautista'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Ricaurte'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Rómulo Gallegos'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'San Carlos'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 9;
        $type->name = 'Tinaco'; //este es del 8
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 10;
        $type->name = 'Antonio Díaz'; //este es del 9
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 10;
        $type->name = 'Casacoima'; //este es del 9
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 10;
        $type->name = 'Pedernales'; //este es del 9
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 10;
        $type->name = 'Tucupita'; //este es del 9
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Acosta'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Bolívar'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Buchivacoa'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Cacique Manaure'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Carirubana'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Colina'; //este es del 10
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Dabajuro'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Democracia'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Falcón'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Federación'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Jacura'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'José Laurencio Silva'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Los Taques'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Mauroa'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Miranda'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Monseñor Iturriza'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Palmasola'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Petit'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Píritu'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'San Francisco'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Sucre'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Tocópero'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Unión'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Urumaco'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 11;
        $type->name = 'Zamora'; //este es del 10
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Camaguán'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Chaguaramas'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'El Socorro'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'José Félix Ribas'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'José Tadeo Monagas'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Juan Germán Roscio'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Julián Mellado'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Las Mercedes'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Leonardo Infante'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Pedro Zaraza'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Ortíz'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'San Gerónimo de Guayabal'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'San José de Guaribe'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Santa María de Ipire'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 12;
        $type->name = 'Sebastián Francisco de Miranda'; //este es del 11
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Andrés Eloy Blanco'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Crespo'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Iribarren'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Jiménez'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Morán'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Palavecino'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Simón Planas'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Torres'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 13;
        $type->name = 'Urdaneta'; //este es del 12
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Alberto Adriani'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Andrés Bello'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Antonio Pinto Salinas'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Aricagua'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Arzobispo Chacón'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Campo Elías'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Caracciolo Parra Olmedo'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Cardenal Quintero'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Guaraque'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Julio César Salas'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Justo Briceño'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Libertador'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Miranda'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Obispo Ramos de Lora'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Padre Noguera'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Pueblo Llano'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Rangel'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Rivas Dávila'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Santos Marquina'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Sucre'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Tovar'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Tulio Febres Cordero'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 14;
        $type->name = 'Zea'; //este es del 13
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Acevedo'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Andrés Bello'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Baruta'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Brión'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Buroz'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Carrizal'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Chacao'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Cristóbal Rojas'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'El Hatillo'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Guaicaipuro'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Independencia'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Lander'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Páez'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Paz Castillo'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Pedro Gual'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Plaza'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Simón Bolívar'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Sucre'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Urdaneta'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 15;
        $type->name = 'Zamora'; //este es del 14
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Acosta'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Aguasay'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Bolívar'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Caripe'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Cedeño'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Ezequiel Zamora'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Libertador'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Maturín'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Piar'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Punceres'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Santa Bárbara'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Sotillo'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 16;
        $type->name = 'Uracoa'; //este es del 15
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Antolín del Campo'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Arismendi'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'García'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Gómez'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Maneiro'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Marcano'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Mariño'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Península de Macanao'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Tubores'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Villalba'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 17;
        $type->name = 'Díaz'; //este es del 16
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Agua Blanca'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Araure'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Esteller'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Guanare'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Guanarito'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Monseñor José Vicente de Unda'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Ospino'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Páez'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Papelón'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'San Genaro de Boconoíto'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'San Rafael de Onoto'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Santa Rosalía'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Sucre'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 18;
        $type->name = 'Turén'; //este es del 17
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Andrés Eloy Blanco'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Andrés Mata'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Arismendi'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Benítez'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Bermúdez'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Bolívar'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Cajigal'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Cruz Salmerón Acosta'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Libertador'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Mariño'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Mejía'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Montes'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Ribero'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Sucre'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 19;
        $type->name = 'Valdéz'; //este es del 18
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Andrés Bello'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Antonio Rómulo Costa'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Ayacucho'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Bolívar'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Cárdenas'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Córdoba'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Fernández Feo'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Francisco de Miranda'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'García de Hevia'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Guásimos'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Independencia'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Jáuregui'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'José María Vargas'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Junín'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Libertad'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Libertador'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Lobatera'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Michelena'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Panamericano'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Pedro María Ureña'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Rafael Urdaneta'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Samuel Darío Maldonado'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'San Cristóbal'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Seboruco'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Simón Rodríguez'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Sucre'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Torbes'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'Uribante'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 20;
        $type->name = 'San Judas Tadeo'; //este es del 19
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Andrés Bello'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Boconó'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Bolívar'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Candelaria'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Carache'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Escuque'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'José Felipe Márquez Cañizalez'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Juan Vicente Campos Elías'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'La Ceiba'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Miranda'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Monte Carmelo'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Motatán'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Pampán'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Pampanito'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Rafael Rangel'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'San Rafael de Carvajal'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Sucre'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Trujillo'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Urdaneta'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 21;
        $type->name = 'Valera'; //este es del 20
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 22;
        $type->name = 'Vargas'; //este es del 21
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Arístides Bastidas'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Bolívar'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Bruzual'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Cocorote'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Independencia'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'José Antonio Páez'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'La Trinidad'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Manuel Monge'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Nirgua'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Peña'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'San Felipe'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Sucre'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'Urachiche'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 23;
        $type->name = 'José Joaquín Veroes'; //este es del 22
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Almirante Padilla'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Baralt'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Cabimas'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Catatumbo'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Colón'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Francisco Javier Pulgar'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Páez'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Jesús Enrique Losada'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Jesús María Semprún'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'La Cañada de Urdaneta'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Lagunillas'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Machiques de Perijá'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Mara'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Maracaibo'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Miranda'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Rosario de Perijá'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Rosario de Perijá'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'San Francisco'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Santa Rita'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Simón Bolívar'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Sucre'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 24;
        $type->name = 'Valmore Rodríguez'; //este es del 23
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 25;
        $type->name = 'Libertador'; //este es del 24
        $type->save();

        //se realiza Pais estado municipio de colombia 

        $type = new Localization();
        $type->types_localizations_id = 1;  // pais 
        $type->localizations_id = null;
        $type->name = 'Colombia';
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado 
        $type->name = 'Antioquia';
        $type->save();//este es del 363

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Atlántico';
        $type->save();//este es del 364

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Bogotá, D.C.';
        $type->save();//este es del 365

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Bolívar';
        $type->save();//este es del 366

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Boyacá';
        $type->save();//este es del 367

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Caquetá';
        $type->save();//este es del 368

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Cauca';
        $type->save();//este es del 369

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Cesar';
        $type->save();//este es del 370

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Córdoba';
        $type->save();//este es del 371

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Cundinamarca';
        $type->save();//este es del 372

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Chocó';
        $type->save();//este es del 373

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Huila';
        $type->save();//este es del 374

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'La Guajira';
        $type->save();//este es del 375

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Magdalena';
        $type->save();//este es del 376

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Meta';
        $type->save();//este es del 377

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Nariño';
        $type->save();//este es del 378

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Norte de Santander';
        $type->save();//este es del 379

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Quindio';
        $type->save();//este es del 380

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Risaralda';
        $type->save();//este es del 381

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Santander';
        $type->save();//este es del 382

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Sucre';
        $type->save();//este es del 383

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Tolima';
        $type->save();//este es del 384

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Valle del Cauca';
        $type->save();//este es del 385

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Arauca';
        $type->save();//este es del 386

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Casanare';
        $type->save();//este es del 387

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Putumayo';
        $type->save();//este es del 388

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name ='Archipiélago de San Andrés Providencia y Santa Catalina';
        $type->save();//este es del 389

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Amazonas';
        $type->save();//este es del 390

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Guainía';
        $type->save();//este es del 391

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Guaviare';
        $type->save();//este es del 392

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Vaupés';
        $type->save();//este es del 393

        $type = new Localization();
        $type->types_localizations_id = 2;
        $type->localizations_id = 362;  // siguiendo secuencia estado
        $type->name = 'Vichada';
        $type->save();//este es del 394

        // MUNICIPIOS DE COLOMBIA

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Abriaquí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Alejandria'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Amagá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Amalfi'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Andes'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Angelópolis'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Angostura'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Anorí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Anzá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Apartadó'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Argelia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Armenia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Bello'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Belmira'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Betania'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Betulia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Bolívar'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Briceño'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Burítica'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Caicedo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Caldas'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Campamento'; //este es del 363
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Caracolí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Caramanta'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Carepa'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Carmen de Viboral'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Carolina'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Caucasia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Cañasgordas'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Chigorodó'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Cocorná'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Concepción'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Concordia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Copacabana'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Cáceres'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Dabeiba'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Don Matías'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Ebéjico'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'El Bagre'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Entrerríos'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Envigado'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Fredonia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Frontino'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Giraldo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Girardota'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Granada'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Guarne'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Guatapé'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Gómez Plata'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Heliconia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Hispania'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Itagüí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Ituango'; //este es del 363
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Jardín'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Jericó'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'La Ceja'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'La Estrella'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'La Pintada'; //este es del 363
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'La Unión'; //este es del 363
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Liborina'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Maceo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Marinilla'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Medellín'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Montebello'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Murindó'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Mutatá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Nariño'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Nechí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Necoclí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Olaya'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Peque'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Peñol'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Puerto Triunfo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Remedios'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Retiro'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Río negro'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Sabana larga'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Sabaneta'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Salgar'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Andrés de Cuerquía'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Carlos'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Francisco'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Jerónimo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San José de Montaña'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Juan de Urabá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Luís'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Pedro'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Pedro de Urabá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Rafael'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Roque'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'San Vicente'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Santa Bárbara'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Santa Fé de Antioquia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Santa Rosa de Osos'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Santo Domingo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Santuario'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Sonsón'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Tarazá'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Tarso'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Titiribí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Toledo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Turbo'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Támesis'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Uramita'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Urrao'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Valdivia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Valparaiso'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Vegachí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Venecia'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Vigía del Fuerte'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Yalí'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Yarumal'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Yolombó'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Yondó (Casabe)'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 363;
        $type->name = 'Zaragoza'; //este es del 363
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Baranoa'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Barranquilla'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Campo de la Cruz'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Candelaria'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Galapa'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Juan de Acosta'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Luruaco'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Malambo'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Manatí'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Palmar de Varela'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Piojo'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Polonuevo'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Ponedera'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Puerto Colombia'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Repelón'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Sabana grande'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Sabana larga'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Santa Lucía'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Santo Tomás'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Soledad'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Suan'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Tubará'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 364;
        $type->name = 'Usiacuri'; //este es del 364
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 365;
        $type->name = 'Bogotá D.C.'; //este es del 365
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Achí'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Altos del Rosario'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Arenal'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Arjona'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Arroyohondo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Barranco de Loba'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Calamar'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Cantagallo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Cartagena'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Cicuco'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Clemencia'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Córdoba'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'El Carmen de Bolívar'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'El Guamo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'El Peñon'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Hatillo de Loba'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Magangué'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Margarita'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'María la Baja'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Mompós'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Montecristo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Morales'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Norosí'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Pinillos'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Regidor'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Río Viejo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Cristobal'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Estanislao'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Fernando'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Jacinto'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Jacinto del Cauca'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Juan de Nepomuceno'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Martín de Loba'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'San Pablo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Santa Catalina'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Santa Rosa'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Santa Rosa del Sur'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Simití'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Soplaviento'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Talaigua Nuevo'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Tiquisio (Puerto Rico)'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Turbaco'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Turbaná'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Villanueva'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 366;
        $type->name = 'Zambrano'; //este es del 366
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Almeida'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Aquitania'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Arcabuco'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Belén'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Berbeo'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Beteitiva'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Boavita'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Boyacá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Briceño'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Buenavista'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Busbanza'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Caldas'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Campohermoso'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Cerinza'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chinavita'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chiquinquirá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chiscas'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chita'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chitaraque'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chivatá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chíquiza'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Chívor'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Ciénaga'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Coper'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Corrales'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Covarachía'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Cubará'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Cucaita'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Cuitiva'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Cómbita'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Duitama'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'El Cocuy'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'El Espino'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Firavitoba'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Floresta'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Gachantivá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Garagoa'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Guacamayas'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Guateque'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Guayatá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Guicán'; //este es del 367
        $type->save();
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Gámeza'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Izá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Jenesano'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Jericó'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'La Capilla'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'La Uvita'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'La Victoria'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Labranzagrande'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Macanal'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Maripí'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Miraflores'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Mongua'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Monguí'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Moniquirá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Motavita'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Muzo'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Nobsa'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Nuevo Colón'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Oicatá'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Otanche'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Pachavita'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Paipa'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Pajarito'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Panqueba'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Pauna'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Paya'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Paz de Río'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Pesca'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Pisva'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Puerto Boyacá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Páez'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Quipama'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Ramiriquí'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Rondón'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Ráquira'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Saboyá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Samacá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San Eduardo'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San José de Pare'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San Luís de Gaceno'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San Mateo'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San Miguel de Sema'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'San Pablo de Borbur'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Santa María'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Santa Rosa de Viterbo'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Santa Rosa del Sur'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Santa Sofía'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Santana'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sativanorte'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sativasur'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Siachoque'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Soatá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Socha'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Socotá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sogamoso'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Somondoco'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sora'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Soracá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sotaquirá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Susacón'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sutamarchán'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sutatenza'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Sáchica'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tasco'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tenza'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tibaná'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tibasosa'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tinjacá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tipacoque'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Toca'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Toguí'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Topagá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tota'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tunja'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tunungua'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Turmequé'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tuta'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Tutasá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Ventaquemada'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Villa de Leiva'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Viracachá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Zetaquirá'; //este es del 367
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 367;
        $type->name = 'Úmbita'; //este es del 367
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Aguadas'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Anserma'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Aranzazu'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Belalcázar'; //este es del 368
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Chinchiná'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Filadelfia'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'La Dorada'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'La Merced'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'La Victoria'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Manizales'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Manzanares'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Marmato'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Marquetalia'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Marulanda'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Neira'; //este es del 368
        $type->save();
        
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Norcasia'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Palestina'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Pensilvania'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Pácora'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Risaralda'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Río Sucio'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Salamina'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Samaná'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'San José'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Supía'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Villamaría'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 368;
        $type->name = 'Viterbo'; //este es del 368
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Alcalá'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Almaguer'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Argelia'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Balboa'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Bolívar'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Buenos Aires'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Cajibío'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Caldono'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Caloto'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Corinto'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'El Tambo'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Florencia'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Guachené'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Guapí'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Inzá'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Jambaló'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'La Sierra'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'La Vega'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'López (Micay)'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Mercaderes'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Miranda'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Morales'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Padilla'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Patía (El Bordo)'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Piamonte'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Piendamó'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Popayán'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Puerto Tejada'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Puracé (Coconuco)'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Páez (Belalcazar)'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Rosas'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'San Sebastián'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Santa Rosa'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Santander de Quilichao'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Silvia'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Sotara (Paispamba)'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Sucre'; //este es del 369
        $type->save();
    
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Suárez'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Timbiquí'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Timbío'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Toribío'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Totoró'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Villa Rica'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 369;
        $type->name = 'Villa Rica'; //este es del 369
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Aguachica'; //este es del 37
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Agustín Codazzi'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Astrea'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Becerríl'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Bosconia'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Chimichagua'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Chiriguaná'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Curumaní'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'El Copey'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'El Paso'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Gamarra'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'La Gloria'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'La Jagua de Ibirico'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'La Paz (Robles)'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Manaure Balcón del Cesar'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Pailitas'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Pelaya'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Pueblo Bello'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Río de oro'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'San Alberto'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'San Diego'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'San Martín'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Tamalameque'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 370;
        $type->name = 'Valledupar'; //este es del 370
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Ayapel'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Buenavista'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Canalete'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Cereté'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Chimá'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Chinú'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Ciénaga de Oro'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Cotorra'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'La Apartada y La Frontera'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Lorica'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Momil'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Montelíbano'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Monteria'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Moñitos'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Planeta Rica'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Pueblo Nuevo'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Puerto Escondido'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Puerto Libertador'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Purísima'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Sahagún'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San Andrés Sotavento'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San Antero'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San Bernardo del Viento'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San Carlos'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San José de Uré'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'San Pelayo'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Tierralta'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Tuchín'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 371;
        $type->name = 'Valencia'; //este es del 371
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Agua de Dios'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Albán'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Anapoima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Anolaima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Apulo'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Arbeláez'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Beltrán'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Bituima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Bojacá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cabrera'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cachipay'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cajicá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Caparrapí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Carmen de Carupa'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Chaguaní'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Chipaque'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Choachí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Chocontá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Chía'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cogua'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cota'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cucunubá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Cáqueza'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'El Colegio'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'El Peñón'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'El Rosal'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Facatativá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Fosca'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Funza'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Fusagasugá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Fómeque'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Fúquene'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Gachalá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Gachancipá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Gachetá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Gama'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Girardot'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Granada'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guachetá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guaduas'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guasca'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guataquí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guayabal de Siquima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Guayabetal'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Gutiérrez'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Jerusalén'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Junín'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'La Calera'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'La Mesa'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'La Palma'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'La Peña'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'La Vega'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Lenguazaque'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Machetá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Madrid'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Manta'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Medina'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Mosquera'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Nariño'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Nemocón'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Nilo'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Nimaima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Nocaima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Pacho'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Paime'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Pandi'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Paratebueno'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Pasca'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Puerto Salgar'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Pulí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Quebradanegra'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Quetame'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Quipile'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Ricaurte'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'San Antonio de Tequendama'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'San Bernardo'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'San Cayetano'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'San Francisco'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'San Juan de Río Seco'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Sasaima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Sesquilé'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Sibaté'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Silvania'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Simijaca'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Soacha'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Sopó'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Subachoque'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Suesca'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Supatá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Susa'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Sutatausa'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tabio'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tausa'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tena'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tenjo'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tibacuy'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tibirita'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tocaima'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Tocancipá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Topaipí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Ubalá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Ubaque'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Ubaté'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Une'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Venecia (Ospina Pérez)'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Vergara'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Viani'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Villagómez'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Villapinzón'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Villeta'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Viotá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Yacopí'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Zipacón'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Zipaquirá'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 372;
        $type->name = 'Útica'; //este es del 372
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Acandí'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Alto Baudó (Pie de Pato)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Atrato (Yuto)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Bagadó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Bahía Solano (Mútis)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Bajo Baudó (Pizarro)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Belén de Bajirá'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Bojayá (Bellavista)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Cantón de San Pablo'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Carmen del Darién (CURBARADÓ)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Condoto'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Cértegui'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'El Carmen de Atrato'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Istmina'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Juradó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Lloró'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Medio Atrato'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Medio Baudó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Medio San Juan (ANDAGOYA)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Novita'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Nuquí'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Quibdó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Río Iró'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Río Quito'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Ríosucio'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'San José del Palmar'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Santa Genoveva de Docorodó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Sipí'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Tadó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Tadó'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Unguía'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 373;
        $type->name = 'Unión Panamericana (ÁNIMAS)'; //este es del 373
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Acevedo'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Agrado'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Aipe'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Algeciras'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Altamira'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Baraya'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Campo alegre'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Colombia'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Elías'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Garzón'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Gigante'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Guadalupe'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Hobo'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Isnos'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'La Argentina'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'La Plata'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Neiva'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Nátaga'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Oporapa'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Paicol'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Palermo'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Palestina'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Pital'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Pitalito'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Rivera'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Salado blanco'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'San Agustín'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Santa María'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Suaza'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Tarqui'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Tello'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Teruel'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Tesalia'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Timaná'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Villa vieja'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Yaguará'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 374;
        $type->name = 'Íquira'; //este es del 374
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Albania'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Barrancas'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Dibulla'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Distracción'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'El Molino'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Fonseca'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Hato Nuevo'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'La Jagua del Pilar'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Maicao'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Manaure'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Rio hacha'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'San Juan del Cesar'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Uribia'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Urumita'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 375;
        $type->name = 'Villa Nueva'; //este es del 375
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Algarrobo'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Aracataca'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Ariguaní (El Difícil)'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Cerro San Antonio'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Chivolo'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Ciénaga'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Concordia'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'El Banco'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'El Piñon'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'El Retén'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Fundación'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Guamal'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Nueva Granada'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Pedraza'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Pijiño'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Pivijay'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Plato'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Pueblo viejo'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Remolino'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Sabanas de San Angel (SAN ANGEL)'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Salamina'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'San Sebastián de Buenavista'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'San Zenón'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Santa Ana'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Santa Bárbara de Pinto'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Santa Marta'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Sitionuevo'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Tenerife'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Zapayán (PUNTA DE PIEDRAS)'; //este es del 376
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 376;
        $type->name = 'Zona Bananera (PRADO - SEVILLA)'; //este es del 376
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Acacías'; //este es del 377
        $type->save();
       
        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Barranca de Upía'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Cabuyaro'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Castilla la Nueva'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Cubarral'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Cumaral'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'El Calvario'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'El Castillo'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'El Dorado'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Fuente de Oro'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Granada'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Guamal'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'La Macarena'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Lejanías'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Mapiripan'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Mesetas'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Puerto Concordia'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Puerto Gaitán'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Puerto Lleras'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Puerto López'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Puerto Rico'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Restrepo'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'San Carlos de Guaroa'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'San Juan de Arama'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'San Juanito'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'San Martín'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Uribe'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Villa Vicencio'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 377;
        $type->name = 'Vista Hermosa'; //este es del 377
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Albán (San José)'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Ancuya'; //este es del 377
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Arboleda (Berruecos)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Barbacoas'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Belén'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Buesaco'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Chachaguí'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Colón (Génova)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Consaca'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Contadero'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Cuaspud (Carlosama)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Cumbal'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Cumbitara'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Córdoba'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'El Charco'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'El Peñol'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'El Rosario'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'El Tablón de Gómez'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'El Tambo'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Francisco Pizarro'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Funes'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Guachavés'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Guachucal'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Guaitarilla'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Gualmatán'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Iles'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Imúes'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Ipiales'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'La Cruz'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'La Florida'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'La Llanada'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'La Tola'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'La Unión'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Leiva'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Linares'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Magüi (Payán)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Mallama (Piedrancha)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Mosquera'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Nariño'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Olaya Herrera'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Ospina'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Policarpa'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Potosí'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Providencia'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Puerres'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Pupiales'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Ricaurte'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Roberto Payán (San José)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Samaniego'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'San Bernardo'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'San Juan de Pasto'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'San Lorenzo'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'San Pablo'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'San Pedro de Cartago'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Sandoná'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Santa Bárbara (Iscuandé)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Sapuyes'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Sotomayor (Los Andes)'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Taminango'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Tangua'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Tumaco'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Túquerres'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 378;
        $type->name = 'Yacuanquer'; //este es del 378
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Arboledas'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Bochalema'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Bucarasica'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Chinácota'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Chitagá'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Convención'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Cucutilla'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Cáchira'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Cácota'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Cúcuta'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Durania'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'El Carmen'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'El Tarra'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'El Zulia'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Gramalote'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Hacarí'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Herrán'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'La Esperanza'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'La Playa'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Labateca'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Los Patios'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Lourdes'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Mutiscua'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Ocaña'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Pamplona'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Pamplonita'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Puerto Santander'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Ragonvalia'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Salazar'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'San Calixto'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'San Cayetano'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Santiago'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Sardinata'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Silos'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Teorama'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Tibú'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Toledo'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Villa Caro'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Villa del Rosario'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 379;
        $type->name = 'Ábrego'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Armenia'; //este es del 379
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Buena vista'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Calarcá'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Circasia'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Cordobá'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Filandia'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Génova'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'La Tebaida'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Monte negro'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Pijao'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Quimbaya'; //este es del 380
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 380;
        $type->name = 'Salento'; //este es del 380
        $type->save();


        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Apía'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Balboa'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Belén de Umbría'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Dos Quebradas'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Guática'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'La Celia'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'La Virginia'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Marsella'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Mistrató'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Pereira'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Pueblo Rico'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Quinchía'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Santa Rosa de Cabal'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 381;
        $type->name = 'Santuario'; //este es del 381
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Aguada'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Albania'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Aratoca'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Barbosa'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Barichara'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Barrancabermeja'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Betulia'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Bolívar'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Bucaramanga'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Cabrera'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Betulia'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'California'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Capitanejo'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Carcasí'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Cepita'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Cerrito'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Charalá'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Charta'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Chima'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Chipatá'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Cimitarra'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Concepción'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Confines'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Contratación'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Coromoro'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Curití'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'El Carmen'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'El Guacamayo'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'El Peñon'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'El Playón'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Encino'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Florida blanca'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Florián'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Galán'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Guaca'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Girón'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Guadalupe'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Guapota'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Guavatá'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Guepsa'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Gámbita'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Hato'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Jesús María'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Jordán'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'La Belleza'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'La Paz'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Landázuri'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Lebrija'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Los Santos'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Macaravita'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Matanza'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Mogotes'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Molagavita'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Málaga'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Ocamonte'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Onzaga'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Palmar'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Palmas del Socorro'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Pie de Cuesta'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Pinchote'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Puente Nacional'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Puerto Parra'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Puerto Wilches'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Páramo'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Rio Negro'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Sabana de Torres'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Andrés'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Benito'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Gíl'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Joaquín'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San José de Miranda'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Miguel'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'San Vicente del Chucurí'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Santa Bárbara'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Santa Helena del Opón'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Simacota'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Socorro'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Suaita'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Sucre'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Suratá'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Tona'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Valle de San José'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Vetas'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Villa Nueva'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Vélez'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 382;
        $type->name = 'Zapatoca'; //este es del 382
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Buena Vista'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Caimito'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Colosó (Ricaurte)'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Chalán'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Corozal'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Coveñas'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'El Roble'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Galeras (Nueva Granada)'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Guaranda'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'La Unión'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Los Palmitos'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Majagual'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Morroa'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Ovejas'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Palmito'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Sampués'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'San Benito Abad'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'San Juan de Betulia'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'San Marcos'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'San Onofre'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'San Pedro'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Sincelejo'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Sincé'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Sucre'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Tolú'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 383;
        $type->name = 'Tolú Viejo'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Alpujarra'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Alvarado'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Ambalema'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Anzoátegui'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Armero (Guayabal)'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Ataco'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Cajamarca'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Carmen de Apicalá'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Casabianca'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Chaparral'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Coello'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Coyaima'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Cunday'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Dolores'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Espinal'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Falan'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Flandes'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Fresno'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Guamo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Herveo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Honda'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Ibagué'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Icononzo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Lérida'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Líbano'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Mariquita'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Melgar'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Murillo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Natagaima'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Ortega'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Palocabildo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Piedras'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Planadas'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Prado'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Purificación'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Rio blanco'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Roncesvalles'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Rovira'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Saldaña'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'San Antonio'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'San Luis'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Santa Isabel'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Suárez'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Valle de San Juan'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Venadillo'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Villahermosa'; //este es del 384
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 384;
        $type->name = 'Villarrica'; //este es del 383
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Alcalá'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Andalucía'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Ansermanuevo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Argelia'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Bolívar'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Buena  Ventura'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Buga'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Bugalagrande'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Caicedonia'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Calima (Darién)'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Calí'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Candelaria'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Cartago'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Dagua'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'El Cairo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'El Cerrito'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'El Dovio'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'El Águila'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Florida'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Ginebra'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Guacarí'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Jamundí'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'La Cumbre'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'La Unión'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'La Victoria'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Obando'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Palmira'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Pradera'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Restrepo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Riofrío'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Roldanillo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'San Pedro'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Sevilla'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Toro'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Trujillo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Tulúa'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Ulloa'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Versalles'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Vijes'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Yotoco'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Yumbo'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 385;
        $type->name = 'Zarzal'; //este es del 385
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Arauca'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Arauquita'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Cravo Norte'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Fortúl'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Puerto Rondón'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Saravena'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 386;
        $type->name = 'Tame'; //este es del 386
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Aguazul'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Chámeza'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Hato Corozal'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'La Salina'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Maní'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Monterrey'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Nunchía'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Orocué'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Paz de Ariporo'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Pore'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Recetor'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Sabana larga'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'San Luís de Palenque'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Sácama'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Tauramena'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Trinidad'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Támara'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 387;
        $type->name = 'Villa Nueva'; //este es del 387
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Colón'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Mocoa'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Orito'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Puerto Asís'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Puerto Caicedo'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Puerto Guzmán'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Puerto Leguízamo'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'San Francisco'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'San Miguel'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Santiago'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Sibundoy'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Valle del Guamuez'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 388;
        $type->name = 'Villagarzón'; //este es del 388
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 389;
        $type->name = 'Providencia'; //este es del 389
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 390;
        $type->name = 'Leticia'; //este es del 390
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 390;
        $type->name = 'Puerto Nariño'; //este es del 390
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 391;
        $type->name = 'Inírida'; //este es del 391
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 392;
        $type->name = 'Calamar'; //este es del 392
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 392;
        $type->name = 'El Retorno'; //este es del 392
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 392;
        $type->name = 'Miraflores'; //este es del 392
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 392;
        $type->name = 'San José del Guaviare'; //este es del 392
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 393;
        $type->name = 'Carurú'; //este es del 393
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 393;
        $type->name = 'Mitú'; //este es del 393
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 393;
        $type->name = 'Taraira'; //este es del 393
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 394;
        $type->name = 'Cumaribo'; //este es del 394
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 394;
        $type->name = 'La Primavera'; //este es del 394
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 394;
        $type->name = 'Puerto Carreño'; //este es del 394
        $type->save();

        $type = new Localization();
        $type->types_localizations_id = 3;
        $type->localizations_id = 394;
        $type->name = 'Santa Rosalía'; //este es del 394
        $type->save();

      
    }

}
