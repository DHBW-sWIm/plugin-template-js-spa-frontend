# plugin-template-js-spa-frontend
A Moodle plugin template for the use of a single page application framework (powered by javascript) at the frontend of the plugin

# How to use the template?
The following steps should get you up and running with this module template code.

For the sake of this tutorial, it is assumed that you have a shell (or cmd on Windows) in the directory of this cloned repository. In all following command lines, it is assumed that you are not in any subdirectory. If / is used leading a path, it is assumed that this means the directory of this cloned repository and not your systems root directory.

Clone the repository and read this file

Pick a name for your module (e.g. "newname").

The module name MUST be lower case and can't contain underscores.

Keep in mind Moodle does not like numbers or special characters like . or , in names or paths. Name your plugin accordingly.

Edit all the files in this directory and its subdirectories and change all the instances of the string "testmodule" to your module name (eg "newname").

On a Windows system, you can use the following PowerShell commands. Use the command cd to change into the directory of your code.
$files = Get-ChildItem . -recurse -include *.* ; foreach ($file in $files) { (Get-Content $file.PSPath) | ForEach-Object { $_ -replace "testmodule", "newname" } | Set-Content $file.PSPath }

Replace "newname" in the commands above with your module name.

Rename the file /source/lang/en/testmodule.php to lang/en/newname.php where "newname" is the name of your module

Rename all files in /source/backup/moodle2/ folder by replacing "testmodule" with the name of your module

On a Windows system, you can use the following PowerShell command to perfrom this and the previous step:
$files = Get-ChildItem . -recurse -include *.* | Where-Object {$_.Name -like "*testmodule*"}; foreach ($file in $files) { $newname = ([String]$file).Replace("testmodule", "newname"); Rename-Item -Path $file $newname }

Version your plugin accordingly. In the file version.php, replace the value for the version with a value combined of the current date (e.g. 20180706 for the 6th of July 2018) and the number of releases on this day (in most cases, 00. If you update your plugin multiple times during one day, simply increase this number). This might look something like this: 2018070800. Also replace the value of the variable VERSION in the second line of the file db/install.xml.

# How to deploy?
Create a ZIP archive of the root folder and name it according to your app.

Login in to our Moodle instance, navigate to the Management of Moodle and select the Option to install a new plugin.

Upload your ZIP archive and click the button to proceed. You do not need to edit any other fields in this interface.

When asked if you want to update the Moodle database, do so.

Go the main page of Moodle, select a Course and click "Enable Editing" in the options on the upper right. by clicking the option of "Add a resource ...", you should see a list of available plugins including your new module.
