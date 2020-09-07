<?php

use Illuminate\Database\Seeder;
use App\Book;

use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

      for ($i=0; $i < 8 ; $i++) {

        $new_book = new Book();
        $new_book->titolo = $faker->randomElement([
          'Dieci giorni in Manicomio',
          'Il Processo',
          'Il testamento',
          'Odissea',
          'A proposito di niente',
          'Errore di sistema',
          'La simmetria dei desideri',
          'Cromorama',
          'Napoli Street',
        ]);
        $new_book->autore = $faker->firstName();
        $new_book->editore = $faker->company;
        $new_book->sinossi = $faker->paragraph();
        $new_book->anno = $faker->NumberBetween(1455, 2020);
        $new_book->prezzo = $faker->NumberBetween(2,35);

        $new_book->save();




        // code...
      }
        //
    }
}
