{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import</title>
</head>
<body>
    <form action="/users/import" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Import/Export Data</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>



<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">Data Import/Export</h1>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-6">
            <h2 class="text-xl font-semibold mb-4">Import Data</h2>
            <form action="/users/import" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="file" class="block text-gray-700 font-semibold mb-2">Choose file to import:</label>
                    <input type="file" name="file" id="file" class="border rounded px-4 py-2 w-full">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Import
                </button>
            </form>
        </div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @if (isset($errors) && $errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif

            {{-- @if (session()->has('failures')) --}}
            {{----}}
            {{-- <table class="table table-danger"> --}}
            {{-- <tr> --}}
            {{-- <th>Row</th> --}}
            {{-- <th>Attribute</th> --}}
            {{-- <th>Errors</th> --}}
            {{-- <th>Value</th> --}}
            {{-- </tr> --}}
            {{----}}
            {{-- @foreach (session()->get('failures') as $validation) --}}
            {{-- <tr> --}}
            {{-- <td>{{ $validation->row() }}</td> --}}
            {{-- <td>{{ $validation->attribute() }}</td> --}}
            {{-- <td> --}}
            {{-- <ul> --}}
            {{-- @foreach ($validation->errors() as $e) --}}
            {{-- <li>{{ $e }}</li> --}}
            {{-- @endforeach --}}
            {{-- </ul> --}}
            {{-- </td> --}}
            {{-- <td> --}}
            {{-- {{ $validation->values()[$validation->attribute()] }} --}}
            {{-- </td> --}}
            {{-- </tr> --}}
            {{-- @endforeach --}}
            {{-- </table> --}}
            {{----}}
            {{-- @endif --}}

        </div>
        <div>Hello world for testing </div>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <h2 class="text-xl font-semibold mb-4">Export Data</h2>
            <p class="mb-4">Click below to download the exported data:</p>
            <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block w-full text-center">
                Export
            </a>
        </div>
    </div>
</body>

</html>
