<?php

// declare( strict_types = 1 );

class Equipo extends Model
{
    protected string $nombre;
    protected string $deporte;
    protected string $ciudad;
    protected string $alta;

    public $table_type_fields = array(
        'nombre'    =>  'string',
        'deporte'   =>  'string',
        'ciudad'    =>  'string',
        'alta'      =>  'date'
    );

    protected string $_table_relacion = 'jugador';
    protected string $_campo_relacion = 'nombre';


    // public function getRelacionados(): array
    // {
    //     return array(
    //         array('id'=> 1, 'nombre' => 'juan', 'numero' => 2),
    //         array('id'=>2,'nombre' => 'pedro', 'numero' => 4),
    //     );
    // }

    public function getFields(): array
    {
        return $this->table_type_fields;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDeporte(): string
    {
        return $this->deporte;
    }

    public function getCiudad(): string
    {
        return $this->ciudad;
    }

    public function getAlta(): string
    {
        return $this->alta;
    }

    public function setAlta($value): Equipo
    {
        $this->alta = $value;
        return $this;
    }

    public function setCiudad($value): Equipo
    {
        $this->ciudad = $value;
        return $this;
    }

    public function setDeporte($value): Equipo
    {
        $this->deporte = $value;
        return $this;
    }

    public function setNombre($value): Equipo
    {
        $this->nombre = $value;
        return $this;
    }

}