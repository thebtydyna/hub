
<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../models/Subscription.php';

class SubscriptionController {

    // Ajouter une inscription
    public function addSubscription(Subscription $subscription) {
        $db = config::getConnexion();

        $sql = "INSERT INTO subscription 
                (member_id, activity_id, subscription_date)
                VALUES 
                (:member_id, :activity_id, :subscription_date)";

        try {
            $query = $db->prepare($sql);

            $query->execute([
                'member_id' => $subscription->getMemberId(),
                'activity_id' => $subscription->getActivityId(),
                'subscription_date' => $subscription->getSubscriptionDate()
            ]);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Récupérer toutes les inscriptions
    public function getAllSubscriptions(): array {
        $db = config::getConnexion();

        $sql = "SELECT 
                    s.id,
                    s.subscription_date,
                    m.first_name,
                    m.last_name,
                    a.name AS activity_name
                FROM subscription s
                INNER JOIN member m ON m.id = s.member_id
                INNER JOIN activity a ON a.id = s.activity_id";

        try {
            $result = $db->query($sql);

            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}
?>
