<?php

// declare( strict_types = 1 );

include('model/Model.php');

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