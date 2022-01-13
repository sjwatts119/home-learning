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
    <form id="editor" name="editor" onsubmit=(GetCodeMirrorValue()) method="post" action="{{ route('editor.store') }}">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">

        <textarea id="code" form="editor"></textarea>
        <input type="hidden" value="" id="editorValue" name="editorValue">

        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>
</div>

<button onclick="Test(editor)">Function</button>

<script src="{{ asset('/js/code-mirror.js') }}"></script>

<script> 
function GetCodeMirrorValue(editor){
    var cmValue = document.querySelector('.CodeMirror').CodeMirror.getValue("\n")
    document.getElementById('editorValue').value=cmValue;
}
</script>
</x-app-layout>



</html>