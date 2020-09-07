Titolo: {{ $book->titolo }} - Autore: {{ $book->autore}}

<ul>
  <li> Editore: {{ $book->editore  }}</li>
  <li> Sinossi: {{ $book->sinossi  }}</li>
  <li> Anno: {{ $book->anno }}</li>
  <li> Prezzo: {{ $book->prezzo  }} euro </li>
</ul>


<a href="{{route('books.index', $book)}}"> Torna alla lista</a>
