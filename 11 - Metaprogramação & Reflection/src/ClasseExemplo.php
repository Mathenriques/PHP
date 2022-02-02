<?php

namespace Alura\Reflection;

final class ClasseExemplo implements \JsonSerializable
{
    #[Atributo]
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private static string $propriedadePrivada = 'privada';

    public function __construct()
    {
        echo 'Executando construtor de ' . __CLASS__;
    }
    /**
     * Undocumented function
     *
     * @param string $mensagem
     * @throws \Exception quando algo der errado
     * @return void
     */
    public function metodoPublico(string $mensagem): void
    {
        echo 'Executando método público: ' . $mensagem . PHP_EOL;
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido' . PHP_EOL;
        return 1;
    }

    private function metodoPrivado(int $a): void
    {
        echo 'Executando método privado' . PHP_EOL;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
