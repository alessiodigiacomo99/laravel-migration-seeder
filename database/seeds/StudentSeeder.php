<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students_list = [
            [
                'nome' => 'Alessio',
                'cognome' => 'Di Giacomo',
            ],
            [
                'nome' => 'Piero',
                'cognome' => 'Di piero',
            ],
            [
                'nome' => 'Gianni',
                'cognome' => 'Giannini',
            ],
            [
                'nome' => 'Alessandro',
                'cognome' => 'Alessandroni',
            ],
            [
                'nome' => 'Luca',
                'cognome' => 'Lucani',
            ]
        ];
        foreach ($students_list as $studente) {
            $newStudent = new Student;
            $newStudent->nome = $studente['nome'];
            $newStudent->cognome = $studente['cognome'];
            $newStudent->save();
        }
    }
}
