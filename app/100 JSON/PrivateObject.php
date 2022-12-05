<?php

class PrivateObject
{
    private string $name;
    private int $age;
    private string $email;
    private bool $isWriting;
    private ?string $tailColor;

    public function __construct($data) {
        $this->name      = $data['name'];
        $this->age       = $data['age'];
        $this->email     = $data['email'];
        $this->isWriting = $data['isWriting'];
        $this->tailColor = $data['tailColor'];
    }

    public function __toString() {
        return json_encode([
            "name"      => $this->name,
            "age"       => $this->age,
            "email"     => $this->email,
            "isWriting" => $this->isWriting,
            "tailColor" => $this->tailColor
        ]);
    }
}

$privateObject = new PrivateObject([
    "name"      => "Dino Cajic",
    "age"       => 102,
    "email"     => "dino@example.com",
    "isWriting" => true,
    "tailColor" => null
]);

echo $privateObject;