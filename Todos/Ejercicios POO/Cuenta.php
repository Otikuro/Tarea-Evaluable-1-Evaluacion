<?php
    class Cuenta {
        public $nombreCliente;
        public $numeroCuenta;
        public $tipoInteres;
        public $saldo;


        function __construct (String $nombreCliente, String $numeroCuenta, float $tipoInteres, float $saldo) {
            $this->nombreCliente = $nombreCliente;
            $this->numeroCuenta = $numeroCuenta;
            $this->tipoInteres = $tipoInteres;
            $this->saldo = $saldo;
        }


        function __get ($variable) {
            return $this->$variable;
        } 


        function __set ($variable, mixed $data) {
            $this->$variable = $data;
        }


        function __toString (): String {
            return             
            "<br>------------------------------------------<br>" .
            "Nombre del cliente: " . $this->nombreCliente . "<br>" .
            "Número de cuenta: " . $this->numeroCuenta . "<br>" .
            "Tipo de interés: " . $this->tipoInteres . "<br>" .
            "Saldo: " . $this->saldo . "<br>" .
            "------------------------------------------<br>";
        }


        function ingreso (float $amount): bool {
            if ($amount > 0) {
                $this->saldo += $amount;
                return true;
            } else {
                return false;
            }
        }


        function reintegro (float $amount): bool {
            if ($this->saldo > $amount) {
                $this->saldo -= $amount;
                return true;
            } else {
                return false;
            }
        }


        function transferencia (object $receptor, float $amount): bool {
            if ( $amount > 0) {
                if ( $this->reintegro($amount) ) {
                    return $receptor->ingreso($amount);
                } else {
                    return false;
                }  
            } else {
                return false;
            }
        }
    }
?>