<?php

namespace Alura\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{
    public function buscaCursosPorAluno(bool $exibeCursos)
    {
        $builder = $this->createQueryBuilder('aluno')
            ->join('alunos.telefones', 'telefones')
            ->join('alunos.cursos', 'cursos')
            ->addSelect('telefones')
            ->addSelect('cursos');

        if ($exibeCursos) {
            $builder->addSelect('cursos')
                ->join('aluno.cursos', 'cursos');
        }

        $query = $builder->getQuery();
        
        return $query->getResult();
    }
}
