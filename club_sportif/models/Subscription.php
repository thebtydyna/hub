
<?php

class Subscription {

    private ?int $id = null;
    private int $memberId;
    private int $activityId;
    private string $subscriptionDate;

    // Constructeur
    public function __construct(
        int $memberId,
        int $activityId,
        ?string $subscriptionDate = null
    ) {
        $this->memberId = $memberId;
        $this->activityId = $activityId;

        if ($subscriptionDate === null) {
            $this->subscriptionDate = date('Y-m-d');
        } else {
            $this->subscriptionDate = $subscriptionDate;
        }
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getMemberId(): int {
        return $this->memberId;
    }

    public function getActivityId(): int {
        return $this->activityId;
    }

    public function getSubscriptionDate(): string {
        return $this->subscriptionDate;
    }

    // Obtenir la date dans le format souhaité
    public function getFormattedDate(string $format = 'd/m/Y'): string {
        $date = new DateTime($this->subscriptionDate);
        return $date->format($format);
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setMemberId(int $memberId): void {
        $this->memberId = $memberId;
    }

    public function setActivityId(int $activityId): void {
        $this->activityId = $activityId;
    }

    public function setSubscriptionDate(string $subscriptionDate): void {
        $this->subscriptionDate = $subscriptionDate;
    }
}

?>
