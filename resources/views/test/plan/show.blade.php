<form action="/plan/{{$plan->id}}" method="post">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $plan->name }}"/>
    <input name="description" value="{{ $plan->description }}"/>
    <button type="submit">GO</button>

    @error('name')
    {{dd($message)}}
    @enderror
</form>
<form action="/plan/{{$plan->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

    @error('name')
    {{dd($message)}}
    @enderror
</form>
