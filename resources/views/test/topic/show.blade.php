<form action="/topic/{{$topic->id}}" method="post">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $topic->name }}"/>
    <button type="submit">GO</button>

    @error('name')
    {{dd($message)}}
    @enderror
</form>
<form action="/topic/{{$topic->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

    @error('name')
    {{dd($message)}}
    @enderror
</form>
