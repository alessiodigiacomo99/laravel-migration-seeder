
<?php

use Illuminate\Database\Seeder;
use App\Classe;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes_list = config('classe');
        
        foreach ($classes_list as $classe) {
            $newClass = new Classe;
            $newClass->anno = $classe['anno'];
            $newClass->sezione = $classe['sezione'];
            $newClass->save();
        }
    }
}