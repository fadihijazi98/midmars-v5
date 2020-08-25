<form action="/question" method="post">
    @csrf
    <input name="name" value="{{old('name')}}" />
    <input name="level" value="{{old('level')}}" />
    <input name="url" value="{{old('url')}}" />
    <button type="submit">GO</button>
    <br>
    @error('name')
    {{$message}}
    @enderror
    <br>
    @error('level')
    {{$message}}
    @enderror
    <br>
    @error('url')
    {{$message}}
    @enderror

</form>

