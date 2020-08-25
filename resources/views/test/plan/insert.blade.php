<form action="/plan" method="post">
    @csrf
    <input name="name" />
    <input name="description" />
    <button type="submit">GO</button>
        @error('name')
        {{dd($message)}}
        @enderror
        <br>
        @error('description')
        {{dd($message)}}
        @enderror
</form>

