# IP Tools for your Website
A simple collection of PHP based tools to aid in traffic and IP logging for your website.<br>

Each tool needs to be installed on every webpage file you want it to work on.
Each webpage must be a PHP file for the scripts to opperate ('.php').
PHP must be supported and setup on your webserver for the tools to opperate [see here for apache2](#apache2-php-setup)

API: https://ip-api.com (3rd party API - I have no affiliation with the creators)

## Sections
* [Installation & Setup](#installation--setup)
* - [iplog.php](#iplogphp)
* - [Apache2 PHP Setup](#apache2-php-setup)
* [Demo](#demo)
* - [iplog.php demo](#iplogphp-demo)

## Installation & Setup
#### **iplog.php**
1. Find the webpage with the extention of ".html" or ".php" on your webserver that you'd like to add the script to. If it is an html file, rename it from "FILENAME.html to "FILENAME.php". Make sure your webserver supports php.
2. Copy paste the code inside "iplog.php" in this repository and paste it below your <head> tag in your "FILENAME.php" file.
3. Create a file name "geoip.txt" with permissions "rw-rw-rw-" (0666) and copy it's directory.
4. We are now looking in the CONFIGURATION section of the script code in your "FILENAME.php" file. First, enter the directory of your "geoip.txt" file into the quotation marks of the '$logFile' variable like so: $logFile = '/var/geoip/geoip.txt';
5. As well as that, you'll need to type in the name of the webpage you added the code to into the '$webpagename' variable like so: $webpagename = "FILENAME.php"; 
6. Save all files and load "FILENAME.php" in a web browser. If you see an error message, it means your php file is having permission errors opening and writing to the geoip.txt file, or you have entered the wrong directory for your geoip.txt file. If no error message appeared, go back and check your geoip.txt file for an entry.
7. All done

#### **Apache2 PHP Setup**
* If you're running apache2 for webhosting (like me), and you haven't already setup PHP for it, you'll need to run these commands:
```
apt-get install libapache2-mod-php7.4
a2enmod php7.4
service apache2 reload
```
* If you would prefer a different PHP version, just change the "7.4" in the first two commands to the version you require.
  
  
## Demo
#### **iplog.php demo**<br>
When a user loads into a webpage that has this php script enabled, you'll get this style of output in your log file: <br>
```
[16/02/2021 05:24 am] [US] United States - Washington, D.C., Washington | 12.34.56.789
```
