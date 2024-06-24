<?php

namespace App\components;

use App\components\TarjetaDedo;

class TarjetaMano
{
    private $mano;
    private $dedos;
    private $dedosReqeridos;
    private $ladoBorde;

    public function __construct($mano, $dedosReqeridos = 2)
    {
        $this->mano = $mano;
        $this->dedosReqeridos = $dedosReqeridos;
        $this->ladoBorde = $mano == 'derecha' ? 'left' : 'right';

        for ($i = 1; $i <= $this->dedosReqeridos; $i++) {
            $this->dedos[] = new TarjetaDedo($mano, $i);
        }
    }

    public function mostrar()
    {
        $dedos = '';
        foreach ($this->dedos as $dedo) {
            $dedos .= $dedo->mostrar();
        }

        return '<div class="col-md-6" style="text-align: center; border-' . $this->ladoBorde . ': 1px solid #000000;">
                    <h3>Mano ' . $this->mano . '</h3>
                    <div id="mano' . $this->mano . '"  class="form-group" style="margin: 0; display: flex; justify-content: space-around;">
                        ' . $dedos . '
                    </div>
                </div>';
    }
}
