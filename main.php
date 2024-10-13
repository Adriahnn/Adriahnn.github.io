<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CURRICULUM VITAE</title>
</head>
<body class="bg-[#131327]">
    <section id="aboutme">
        <div class="flex my-28 px-56">
            <img src="img/img_princi.png" class="w-[280px] h-[460px] rounded-3xl">
        </div>
        
        <div class="mt-[-550px] ml-[560px] mr-[180px]">
            <div class="text-6xl text-white text-justify font-thin">Sobre Mi...</div>
            <div class="text-xl text-white text-justify font-thin mt-4">
                Me llamo Adrian Salazar, tengo 19 años y llevo dos años estudiando Desarrollo de Software. 
                La programación es mi pasión, y me encuentro en constante aprendizaje y evolución. 
                Estoy comprometido con mejorar mis habilidades para enfrentar nuevos desafíos y aportar soluciones 
                eficientes en el mundo del desarrollo de software.
            </div>
        </div>

        <div class="flex flex-row ml-[320px] justify-center">
            <div class="text-center">
                <img src="img/html.png" class="w-[160px] h-[128px]">
            </div>
            <div class="text-center">
                <img src="img/css.webp" class="w-[80px] h-[90px] mt-[17px]">
            </div>
            <div class="text-center">
                <img src="img/jscript.png" class="w-[180px] h-[125px]">
            </div>
            <div class="text-center">
                <img src="img/php.png" class="w-[80px] h-[60px] mt-[30px]">
            </div>
            <div class="text-center">
                <img src="img/python.png" class="w-[60px] h-[80px] mt-[30px] ml-12">
            </div>
        </div>

        <div class="flex flex-row ml-[320px] justify-center mt-2">
            <div class="text-center">
                <img src="img/insti.png" class="w-[80px] h-[85px] rounded-full">
                <p class="text-white mt-2">Institución</p>
            </div>
        </div>
    </section>

    <section id="proyects" class="w-full h-[550px] mt-12 bg-[#5b5a74] font-thin">
        <div class="flex justify-center text-4xl text-white py-10">
            PROYECTOS GUIADOS
        </div>

        <div class="flex justify-center px-20 space-x-12">
            <div class="text-center">
                <img src="img/store.png" class="w-[250px] h-[250px] rounded-xl">
                <p class="text-white mt-2">
                    Tienda virtual. Mediante el uso de HTML y plantillas de
                    Boostrap cree una página web conectada a Paypal
                    para pagos.
                </p>
            </div>

            <div class="text-center">
                <img src="img/library.png" class="w-[250px] h-[250px] rounded-xl">
                <p class="text-white mt-2">
                    Biblioteca web. Página web con Java y Tomcat en el
                    que se ingresarán datos de una biblioteca vinculada
                    a una base de datos.
                </p>
            </div>

            <div class="text-center">
                <img src="img/bank.png" class="w-[250px] h-[250px] rounded-xl">
                <p class="text-white mt-2">
                    Cajero automático. Creado a base de caracteres en
                    C++ y gráficamente con Java, con una segunda versión
                    hecha en NetBeans.
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="w-full h-[550px] mt-12 bg-[#131327] text-white">
        <div class="max-w-[800px] mx-auto p-8">
            <h2 class="text-3xl font-semibold text-center mb-8">Contáctame</h2>
            <div class="flex flex-col space-y-6">
                <div>
                    <h3 class="text-xl font-bold">Correo Personal:</h3>
                    <p class="text-lg">adrianjosalazar@gmail.com</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Correo Institucional:</h3>
                    <p class="text-lg">1511254@senti.pe</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Número Telefónico:</h3>
                    <p class="text-lg">+51 920843709</p>
                </div>
                <div class="mt-8">
                    <h3 class="text-xl font-bold">Envíame un Mensaje</h3>
                    <form action="send-message.php" method="POST" class="mt-4 flex flex-col space-y-4">
                        <input type="text" name="name" placeholder="Tu Nombre" class="p-2 rounded bg-gray-800 text-white focus:outline-none" required>
                        <input type="email" name="email" placeholder="Tu Correo" class="p-2 rounded bg-gray-800 text-white focus:outline-none" required>
                        <textarea name="message" placeholder="Tu Mensaje" class="p-2 rounded bg-gray-800 text-white focus:outline-none h-[120px]" required></textarea>
                        <button type="submit" class="w-full bg-[#ff4c60] p-3 rounded text-lg font-bold">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
