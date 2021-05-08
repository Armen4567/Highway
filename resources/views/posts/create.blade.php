@extends('loyouts.app')
@section('content')
    <div class="form-create" style="margin-top: 200px">
        <form action="" method="post">
        @csrf
            <label for="fname">Title</label>
        <input type="text" id="fname" name="title" placeholder="Enter Title.."><br>
        <label for="subject">Body</label>
        <textarea id="subject" name="body" placeholder="Enter text.." style="height:200px"></textarea><br>
        <input type="submit" value="Submit">
    </form>
    </div>
@endsection
