<form action="{{ route('change_pass') }}" method="post">
    @csrf
    <input type="password" name="old_pass" placeholder="password" value="{{ old('old_pass') }}"/>
    <input type="password" name="new_pass" placeholder="new password" value="{{old('new_pass')}}" />
    <input type="password" name="confirm_new_pass" placeholder="confirm new password" value="{{old('confirm_new_pass')}}" />
    <button type="submit">
        Change
    </button>
</form>
<div>
    @error('old_pass')
        <p> {{ $message }}</p>
    @enderror

    @error('new_pass')
    <p> {{ $message }}</p>
    @enderror

    @error('confirm_new_pass')
    <p> {{ $message }}</p>
    @enderror

</div>
