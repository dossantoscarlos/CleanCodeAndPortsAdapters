<?php
declare(strict_types= 1);

class ValidaCpfUseCase 
{
    public function soma (string $inteiro) : int 
    {
        return intval($inteiro);
    }

} 

$p = new ValidaCpfUseCase();
echo $p->soma('02140527765');