
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>UNKLAB-USER</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
<form method="post" action="actionAdd.php">
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-blue-50 py-10 sm:py-12">
        <div class="relative bg-white pt-6 pb-12 px-10 shadow-xl mx-auto w-65 rounded-lg" style="width:40%;padding-bottom:1px;">
            <div class="divide-y divide-gray-200/50 w-full">
                <div class="space-y-20 py-10 text-base text-gray-800">
                    <div style="align: justify;">
                        <img height="50" src="../pathwayuk.png" style="float: left; margin: -30px -100px 30px 0px;" width="250" />
                    </div>

                    <div class="space-y-5 flex flex-col">
                        
                        <input type="date" name="date" class="border border-gray-300/50 p-1 rounded focus:outline-none">

                        <input type="time" name="time" class="border border-gray-300/50 p-1 rounded focus:outline-none">

                        <input type="text"
                               name="id"
                               placeholder="NIM"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>

                        <input type="text"
                               name="name"
                               placeholder="Name"
                               class="border border-gray-300/50 p-1 rounded focus:outline-none"/>
                        
                        <select name="place" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="pc">Pioneer Chapel</option>
                            <option value="uic">Unklab Internatinal Church (UIC)</option>
                            <option value="fw">Fern Wallace</option>
                            <option value="audit">Auditorium</option>
                        </select>

                        <select name="residence" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="asrama">Tinggal di Asrama</option>
                            <option value="dekat">Outsider Dekat</option>
                            <option value="jauh">Outsider Jauh</option>
                        </select>

                        <select name="worship" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="midweek">Midweek</option>
                            <option value="vesper">Vesper</option>
                            <option value="sabbath">Sabbath</option>
                            <option value="ayp">Adventist Youth Program</option>
                        </select>

                        <select name="status" class="border border-gray-300/50 p-1 rounded focus:outline-none">
                            <option value="present">Present</option>
                            <option value="late">Late</option>
                            <option value="absent">Absent</option>
                            <option value="excused">Excused (Sakit)</option>
                            <option value="excused">Excused (Kedukaan)</option>
                            <option value="excused">Excused (Lain-lain)</option>
                        </select>

                    </div>
                    <div class="pt-1 text-base font-semibold leading-2" style="margin-top:25px;margin-bottom:1px;">
                        <div class="items-center">
                            <button type="submit" name="inputData" class="bg-sky-500 hover:bg-sky-600 px-4 py-0 text-white rounded">Input</button>
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