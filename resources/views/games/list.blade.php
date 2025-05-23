<div>
    <h1>Games List</h1>
    <ul>
        @foreach($games as $game)
            <li style="color: rgb(36, 18, 101)"><b><i>ID: {{ $game['id'] }}</i></b></li>
            <li><b>{{ $game['title'] }}</b></li>
            <li><i>{{ $game['developer'] }}</i></li>
        @endforeach
    <ul>
</div>