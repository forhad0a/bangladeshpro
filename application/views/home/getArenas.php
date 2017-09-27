<h2>Arenas</h2>
<pre>
    {{ $arenas }}
    @foreach(json_decode($arenas) as $row)
    
        ID: {{ $row->_id }}  <br>
        idName: {{ $row->idName }}<br>
        number:{{ $row->number }}<br>
       name {{ $row->name }}<br>
        name{{ $row->name }}<br>
    
    @endforeach
    {{ var_dump(json_decode($arenas)) }}
</pre>