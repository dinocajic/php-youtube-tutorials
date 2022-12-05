<?php

class PublicObject
{
    public string $name;
    public int $age;
    public string $email;
    private bool $isWriting;
    private ?string $tailColor;

    public function __construct($data) {
        $this->name      = $data['name'];
        $this->age       = $data['age'];
        $this->email     = $data['email'];
        $this->isWriting = $data['isWriting'];
        $this->tailColor = $data['tailColor'];
    }
}

$publicObject = new PublicObject([
    "name"      => "Dino Cajic",
    "age"       => 102,
    "email"     => "dino@example.com",
    "isWriting" => true,
    "tailColor" => null
]);

echo json_encode($publicObject);