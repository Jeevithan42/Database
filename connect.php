<?php
$pythonPath = 'C:\Users\jeevo\AppData\Local\Microsoft\WindowsApps\PythonSoftwareFoundation.Python.3.11_qbz5n2kfra8p0'; // Change this to your Python installation path 
$scriptPath = 'C:\xamppp\htdocs\CLUBHUB\connect.php'; // Change this to your script path 
$output = shell_exec("$pythonPath $scriptPath"); 
echo "<pre>$output</pre>"; 
?>