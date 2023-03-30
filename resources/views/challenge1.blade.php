<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge1</title>
    @vite('resources/css/app.css')
</head>
<style>
    .bgcolor{
        background-color: #d5e0ef;
    }
</style>
<body class="bgcolor">
    <div class="flex h-screen items-center">
        <div class="bg-white w-72 mx-auto rounded-lg">
            <div class="flex flex-col">
                <div class="mx-auto">
                    <img src="{{asset('images/image-qr-code.png')}}" alt="" class="w-64 h-68 rounded-lg m-3">
                </div>
                <div class="mx-auto my-4">
                    <h1 class="font-black text-center text-lg mx-6">Improve your front-end
                        skills by building projects</h1>
                    <h1 class="text-gray-500 text-sm mt-2 mb-4 text-center mx-6">Scan the QR code to visit Frontend
                        Mentor and take your coding skills to
                        the next level</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>