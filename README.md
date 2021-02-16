# IP Tools for your Website
A simple collection of tools to add to your website. Created in PHP.

# Installation
**iplog.php**
1. Find your "index.html" or "index.php" file on your webserver. If it is an html file, rename it from "index.html to "index.php". Make sure your webserver supports php.
2. Copy paste the code inside "iplog.php" in this repository and paste it below your <head> tag in your "index.php" file.
3. Create a file name "geoip.txt" with permissions "rw-rw-rw-" (0666) and copy it's directory.
4. In your "index.php" file, go to the PHP code you just added and enter the directory of your "geoip.txt" file into the quotation marks like so: $logFile = '/var/geoip/geoip.txt';
5. Save all files and load "index.php" in a web browser. If you see an error message, it means your php file is having permission errors opening and writing to the geoip.txt file. If no error message appeared, go back and check your geoip.txt file for a line.
6. All done
