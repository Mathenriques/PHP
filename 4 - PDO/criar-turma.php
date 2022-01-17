<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição de turma

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1998-05-01'),
    );

    $studentRepository->save($aStudent);

    $bStudent = new Student(
        null,
        'Jose Alberto',
        new DateTimeImmutable('1998-05-01'),
    );

    $studentRepository->save($bStudent);

    $connection->commit();
} catch (RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
