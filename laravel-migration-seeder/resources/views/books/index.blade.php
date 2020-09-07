<h1>Elenco libri</h1>

<ul>
  @foreach ($books as $book)
    <li>
      Titolo: {{ $book->titolo }} - Autore: {{ $book->autore}}

    </li>

    <a href="{{route('books.show', $book)}}"> Maggiori informazioni</a>


  @endforeach
</ul>
