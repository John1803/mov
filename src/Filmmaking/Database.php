<?php

namespace Filmmaking;

class Database {

    private $host;
    private $user;
    private $password;
    private $databaseName;
    private $connection;

    public function __construct()
    {
        $connectionParams = simplexml_load_file("/var/www/mov/app/dbconnect.xml");
        $this->host = $connectionParams->hostname;
        $this->user = $connectionParams->username;
        $this->password = $connectionParams->password;
        $this->databaseName = $connectionParams->database;
        try {
            $this->connection = new \PDO("mysql:host=$this->host;dbname=$this->databaseName", $this->user, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        catch (\PDOException $e) {
            echo 'Conection failed: ' . $e->getMessage();
        }
    }

    public function getStudios() {
        $database = $this->connection
            ->prepare("SELECT f.id AS fid, f.title AS ftitle
                        FROM filmstudios AS f
                        ORDER BY fid");
        $database->execute();
        return $database;

    }
    public function getActorsStudios()
    {
        $database = $this->connection
            ->prepare("SELECT filmstudios.id, filmstudios.title AS FILMSTUDIO, CONCAT_WS( ' ', actors.name, actors.surname ) AS 'Actor', COUNT( movies.id ) AS 'Number of movies'
                        FROM filmstudios
                        JOIN filmstudios_movies ON filmstudios.id = filmstudios_movies.filmstudio_id
                        JOIN movies ON movies.id = filmstudios_movies.movie_id
                        JOIN movies_actors ON movies.id = movies_actors.movie_id
                        JOIN actors ON actors.id = movies_actors.actor_id
                        GROUP BY filmstudios.id, actors.id
                        ORDER BY filmstudios.title");
        $database->execute();

        return $database;

    }

} 