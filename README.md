# INSTRUCTIONS:

1. Open visual studio and run a new terminal.

2. Use the cd command in the terminal to change the working directory to your desired project placement folder.

3. Execute inside terminal: git clone https://github.com/eimantaspav/Egzaminas_pavesys.git

4. Execute (one by one) in the terminal:

cd Egzaminas_pavesys

composer install

npm install

cp .env.example .env

php artisan key:generate

5. Open the .env file via your editor and set the following info:

DB_DATABASE=egzaminas_pavesys

DB_PASSWORD=mysql

# DATABASE IMPORT:

6. Open Mysql and make sure you have a connection with the following info (connection name can differ):

Hostname: 127.0.0.1
 
Username: root

7. Once connected, select "Server" -> "Data Import". Change the path of "Import from Dump Project Folder" to the path of "sql_files" folder stored in the cloned "egzaminas_pavesys" folder. Press the "Start Import" button at the bottom right.

8. Open command terminal in your "egzaminas_pavesys" folder and execute "php artisan serve".

9. Browse to your localhost server (it will be displayed in the terminal, or just enter localhost:8000 in your browser) to view the website.

# FEATURES

1. Display/create/delete/edit tasks and statuses.
2. Asign statuses to tasks.
3. Login/logout/register system.
4. Only registered users can use CRUD.
5. Search task by name.

