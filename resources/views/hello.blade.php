<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <section id="Home" class="relative min-h-screen pb-36 pt-36 bg-cover bg-center" style="background-image: url('undip.jpg');">
        <div class="absolute inset-0 bg-[#121026] bg-opacity-80"></div>
        <div class="flex items-center justify-center h-full my-[10rem] relative z-10">
            <div class="container mx-auto lg:px-8">
                <div class="w-full flex items-center justify-center lg:pl-8">
                    <div class="mt-10 text-center lg:text-left">
                        <h1 class="text-7xl text-center font-bold text-white md:text-8xl lg:text-9xl">SPARTA</h1>
                        <div class="pt-10 mb-10 flex justify-center items-center">
                            <a href="/login" class="text-[#121026] font-bold bg-white py-3 px-8 hover:shadow-lg hover:bg-[#121026] hover:text-white transition duration-300 shadow-lg 
                            ease-in-out hover:border-2 hover:border-primary overflow-hidden">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>