<form action="/topic" method="post">
    @csrf
    <input name="name" />
    <button type="submit">GO</button>
    @error('name')
        {{dd($message)}}
    @enderror
</form>

