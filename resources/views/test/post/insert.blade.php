<form action="/post" method="post">
    @csrf
    <input name="title" />
    <input name="week" />
    <select name="plan_id">
        @foreach(\App\plan::where('user_id', \Illuminate\Support\Facades\Auth::id())->get() as $plan)
            <option value="{{$plan->id}}">{{$plan->name}}</option>
        @endforeach
    </select>
    <select name="topic_id">
        @foreach(\App\topic::all() as $plan)
            <option value="{{$plan->id}}">{{$plan->name}}</option>
        @endforeach
    </select>
    <textarea name="content" ></textarea>
    <button type="submit">GO</button>
        @error('title')
        {{$message}}
        @enderror
        <br>
        @error('week')
        {{$message}}
        @enderror
        <br>
        @error('plan_id')
        {{$message}}
        @enderror
        <br>
        @error('topic_id')
        {{$message}}
        @enderror
        <br>
        @error('content')
        {{$message}}
        @enderror
        <br>
</form>

