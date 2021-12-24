<head>
<link rel="stylesheet" href="/css/custom-editor.css">
</head>

<x-app-layout>

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif


<div class="bg-white overflow-hidden shadow-sm">
    <form action="" method="post" action="{{ route('editor.store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <textarea id="code"></textarea>
        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>
</div>

<script src="{{ asset('/js/code-mirror.js') }}"></script>
</x-app-layout>



</html>