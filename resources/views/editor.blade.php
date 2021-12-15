<head>
<link rel="stylesheet" href="mystyle.css">
</head>

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <textarea id="code"></textarea>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('/js/code-mirror.js') }}"></script>
</x-app-layout>