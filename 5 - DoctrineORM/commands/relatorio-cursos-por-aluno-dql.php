<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunosRepository = $entityManager->getRepository(Aluno::class);

$classeAluno = Aluno::class;
$dql = "SELECT aluno, telefones, cursos FROM $classesAluno aluno JOIN aluno.telefones telefone JOIN aluno.cursos cursos";
$query = $entityManager->createQuery($dql);
/** @var Aluno[] $alunos */
$alunos = $query->getResult();

foreach ($alunos as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone) {
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()}\n";
    echo "Nome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(",", $telefones);

    $cursos = $aluno->getCursos;

    foreach ($cursos as $curso) {
        echo "ID Curso: {$curso->getId()}";
        echo "ID Nome: {$curso->getNome()}";
        echo "\n";
    }
    echo "\n";

}
