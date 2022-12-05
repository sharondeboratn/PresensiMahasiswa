<?php
include("config.php");
include("firebaseRDB.php");

//$db = new firebaseRDB($databaseURL);
$id_user_admin = $_REQUEST['id'];
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
    <title>UNKLAB-ADMIN</title>
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

                    <div class="form-group">
                        <input type="text" name="userID" class="border border-gray-300/50 p-1 rounded focus:outline-none" value="<?php echo $id_user_admin; ?>" readonly>
                    </div>

                    
                        <input type="text"
                               name="username"
                               placeholder="Name"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <input type="date" name="birthDate" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                        
                        <select name="residence" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="Asrama">Asrama</option>
                            <option value="Outsider Dekat">Outsider Dekat</option>
                            <option value="Outsider Jauh">Outsider Jauh</option>
                        </select>

                        <select name="seating" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="Pioneer Chapel">Pioneer Chapel</option>
                            <option value="Fern Wallace">Fern Wallace</option>
                            <option value="Auditorium">Auditorium</option>
                            <option value="UIC">UIC</option>
                        </select>

                        <input type="text"
                               name="seatingRow"
                               placeholder="Row"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>
                    

                    <div class="pt-5 text-base font-semibold leading-6">
                        <div class="items-center">
                            <button type="submit" name="editData" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Update</button>
                            <a type="cancel" href="index.php" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>