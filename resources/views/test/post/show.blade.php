<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('PUT')

    <input name="title" value="{{ $post->title }}"/>
    <input name="week" value="{{$post->week}}">
    <input name="plan_id" value="{{$post->plan_id}}">
    <input name="topic_id" value="{{$post->topic_id}}">
    <input name="content" value="{{ $post->content }}"/>
    <button type="submit">GO</button>

    @error('title')
    {{$message}}
    @enderror
    @error('content')
    {{$message}}
    @enderror
    @error('plan_id')
    {{$message}}
    @enderror
    @error('plan_id')
    {{$message}}
    @enderror

</form>
<form action="/post/{{$post->id}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

</form>
