<?php
class Activity {
    private int $id;
    private string $name;
    private string $category;
    private string $description;
    private string $day;
    private string $time;
    private float $price;
    private string $spots;
    private string $badge;
    private string $status;
    private bool $promotion;
    private int $places;

   
    public function __construct(string $name, string $category, string $description,string $day, string $time, float $price, string $spots, string $badge, string $status, bool $promotion, int $places) {
        
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->day = $day;
        $this->time = $time;
        $this->price = $price;
        $this->spots = $spots;
        $this->badge = $badge;
        $this->status = $status;
        $this->promotion = $promotion;
        $this->places = $places;
    }

    
    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getCategory(): string { return $this->category; }
    public function getDescription(): string { return $this->description; }
    public function getDay(): string { return $this->day; }
    public function getTime(): string { return $this->time; }
    public function getPrice(): float { return $this->price; }
    public function getSpots(): string { return $this->spots; }
    public function getBadge(): string { return $this->badge; }
    public function getStatus(): string { return $this->status; }
    public function getPromotion(): bool { return $this->promotion; }
    public function getPlaces(): int { return $this->places; }

   
    public function setName(string $name): void { $this->name = $name; }
    public function setPrice(float $price): void { $this->price = $price; }
    public function setCategory(string $category): void { $this->category = $category; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function setDay(string $day): void { $this->day = $day; }
    public function setTime(string $time): void { $this->time = $time; }
    public function setSpots(string $spots): void { $this->spots = $spots; }
    public function setBadge(string $badge): void { $this->badge = $badge; }
    public function setStatus(string $status): void { $this->status = $status; }
    public function setPromotion(bool $promotion): void { $this->promotion = $promotion; }
    public function setPlaces(int $places): void { $this->places = $places; }
    
    public function displayDetails(): void {
    echo "<h3>Activity Details: {$this->name}</h3>";
    echo "Category: {$this->category} <br>";
    echo "Day and Time: {$this->day} at {$this->time} <br>";
    echo "Price: {$this->price} EUR <br>";
    echo "Available spots: {$this->places} ({$this->spots})<br>";
}
}
?>