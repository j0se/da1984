<?php

// declare( strict_types = 1 );

class Jugador extends Model
{
    protected string $nombre;
    protected string $numero;
    protected string $equipo;
    protected bool $captain;

    public $table_type_fields = array(
        'nombre'    =>  'string',
        'numero'   =>  'string',
        'equipo'    =>  'string',
        'captain'   =>  'boolean'
    );

    public function getFields(): array
    {
        return $this->table_type_fields;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getEquipo(): string
    {
        return $this->equipo;
    }

    public function getCaptain(): bool
    {
        return $this->captain . "...";
    }

    public function setCaptain($value): Jugador
    {
        $this->captain = $value;
        return $this;
    }

    public function isCaptain(): bool
    {
        return ($this->captain === true);
    }

    public function setEquipo($value): Jugador
    {
        $this->equipo = $value;
        return $this;
    }

    public function setNumero($value): Jugador
    {
        $this->numero = $value;
        return $this;
    }

    public function setNombre($value): Jugador
    {
        $this->nombre = $value;
        return $this;
    }

}