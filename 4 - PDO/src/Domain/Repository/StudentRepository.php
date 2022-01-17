<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\Model\Student;
use DateTimeInterface;
use PDOStatement;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsBirthAt(DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function hydrateStudentsLists(PDOStatement $stmt): array;
    public function remove(Student $student): bool;
    public function studentsWithPhones(): array;

}