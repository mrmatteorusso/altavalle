<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Altavalle</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>

<body class="bg-white">

    <div id="editor">

        <div class="card bg-base-100  shadow-xl flex-none mb-8 mt-8 w-1/2 mx-auto">
            <div class="card-body">
                <form action="/events" class="space-y-4" method="POST">
                    @csrf


                    <!-- Event Description -->
                    <div class="form-control">
                        <label for="editor" class="label">
                            <span class="label-text">Event Description</span>
                        </label>
                        <textarea id="editor1" name="long_description" >
        </textarea>
                    </div>

                    <div class="form-control mt-4">
                        <button class="btn btn-primary w-full">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-nav></x-nav>

    {{ $slot }}
</body>

</html>


