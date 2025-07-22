<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateTableController extends AbstractController
{
    #[Route('/create-table', name: 'create_table')]
    public function createTable(Connection $connection): Response
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS user_account (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) UNIQUE,
                name VARCHAR(255),
                email VARCHAR(255) UNIQUE,
                enable BOOLEAN,
                birthdate DATETIME,
                address LONGTEXT
            )
        ";

        try {
            $connection->executeStatement($sql);
            $message = "✅ Tabella 'user_account' creata con successo (o già esistente).";
        } catch (\Exception $e) {
            $message = "❌ Errore durante la creazione: " . $e->getMessage();
        }

        return $this->render('create_table/index.html.twig', [
            'message' => $message,
        ]);
    }
}
