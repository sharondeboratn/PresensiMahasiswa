<?php
include("config.php");
include("firebaseRDB.php");

//$db = new firebaseRDB($databaseURL);
//$retrieve = $db->retrieve("userAdmin/$id");
//$id_user_admin = $_REQUEST['id'];
//$retrieve = $db->retrieve("userAdmin/$id");
//$data = json_decode($retrieve. 1);

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UNKLAB LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
<form method="post" action="actionEdit.php">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-blue-50 py-10 sm:py-12">
        <div class="relative bg-white pt-6 pb-12 px-10 shadow-xl mx-auto w-65 rounded-lg" style="width:40%;padding-bottom:1px;">
            <div class="divide-y divide-gray-200/50 w-full">
                <div class="space-y-20 py-10 text-base text-gray-800">
                    <div style="align: justify;">
                        <img height="50" src="../pathwayuk.png" style="float: left; margin: -30px -100px 30px 0px;" width="250" />
                    </div>
                    <div class="space-y-5 flex flex-col">
                    
                    <input type="text"
                            name="email"
                            placeholder="Email"
                            class="border border-gray-300/50 p-1 rounded focus:outline-none"/>
                    
                    <input type="text"
                            name="username"
                            placeholder="Username"
                            class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                    <input type="text"
                               name="password"
                               placeholder="Password"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                    <select name="residence" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="Asrama">Asrama</option>
                            <option value="Outsider Dekat">Outsider Dekat</option>
                            <option value="Outsider Jauh">Outsider Jauh</option>
                    </select>
                        
                    <div class="pt-5 text-base font-semibold leading-6">
                        <div class="items-center">
                            <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Save</button>
                            <button type="cancel" href="index.php" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>