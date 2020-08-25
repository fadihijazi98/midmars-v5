<form action="/question/{{$question->id}}" method="post">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $question->name }}" />
    <input name="level" value="{{ $question->level }}" />
    <input name="url" value="{{ $question->url }}" />
    <button type="submit">GO</button>
</form>
<form action="/question/{{$question->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
