
<?php

class Member {

    private ?int $id = null;
    private string $firstName;
    private string $lastName;
    private string $email;

    // Constructeur de la classe
    public function __construct(
        string $firstName,
        string $lastName,
        string $email
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    // Récupérer les informations du membre
    public function getId(): ?int {
        return $this->id;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getEmail(): string {
        return $this->email;
    }

    // Modifier les informations du membre
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

}
?>
