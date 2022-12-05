<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UNKLAB-ADMIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
<form method="post" action="actionAdd.php">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-blue-50 py-10 sm:py-12">
        <div class="relative bg-white pt-12 pb-12 px-10 shadow-xl mx-auto w-65 rounded-lg">
            <div class="divide-y divide-gray-200/50 w-full">
                <div class="space-y-20 py-10 text-base text-gray-800">

                    <div style="align: justify;">
                    <img height="45" src="../pathwayuk.png" style="float: left; margin: -30px -100px 30px 0px;" width="200" /></div>

                    <div class="space-y-3 flex flex-col">
                    <input type="text"
                               name="email"
                               placeholder="Email"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <input type="text"
                               name="name"
                               placeholder="Name"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <input type="password"
                               name="password"
                               placeholder="password"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <select name="residence" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="Asrama">Asrama</option>
                            <option value="Outsider Dekat">Outsider Dekat</option>
                            <option value="Outsider Jauh">Outsider Jauh</option>
                        </select>
                        
                        
                        <div class="pt-5 text-base font-semibold leading-6">
                            <div class="items-center">
                                <button type="submit" name ="inputData" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Add</button>
                                <a type="cancel" href="index.php" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Cancel</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>