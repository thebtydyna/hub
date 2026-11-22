
<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../models/Activity.php';

class ActivityController {

    // Ajouter une activité
    public function addActivity(Activity $activity) {
        $db = config::getConnexion();

        $sql = "INSERT INTO activity 
                (name, category, description, day, time, price, spots, badge, status, promotion, places)
                VALUES 
                (:name, :category, :description, :day, :time, :price, :spots, :badge, :status, :promotion, :places)";

        try {
            $query = $db->prepare($sql);

            $query->execute([
                'name' => $activity->getName(),
                'category' => $activity->getCategory(),
                'description' => $activity->getDescription(),
                'day' => $activity->getDay(),
                'time' => $activity->getTime(),
                'price' => $activity->getPrice(),
                'spots' => $activity->getSpots(),
                'badge' => $activity->getBadge(),
                'status' => $activity->getStatus(),
                'promotion' => (int)$activity->getPromotion(),
                'places' => $activity->getPlaces()
            ]);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Afficher la liste des activités
    public function getAllActivities(): array {
        $db = config::getConnexion();
        $sql = "SELECT * FROM activity";

        try {
            $result = $db->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    // Chercher une activité par son identifiant
    public function getActivityById(int $id) {
        $db = config::getConnexion();
        $sql = "SELECT * FROM activity WHERE id = :id";

        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);

            return $query->fetch(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    // Modifier une activité
    public function updateActivity(Activity $activity, int $id) {
        $db = config::getConnexion();

        $sql = "UPDATE activity SET 
                name = :name,
                category = :category,
                description = :description,
                day = :day,
                time = :time,
                price = :price,
                spots = :spots,
                badge = :badge,
                status = :status,
                promotion = :promotion,
                places = :places
                WHERE id = :id";

        try {
            $query = $db->prepare($sql);

            $query->execute([
                'name' => $activity->getName(),
                'category' => $activity->getCategory(),
                'description' => $activity->getDescription(),
                'day' => $activity->getDay(),
                'time' => $activity->getTime(),
                'price' => $activity->getPrice(),
                'spots' => $activity->getSpots(),
                'badge' => $activity->getBadge(),
                'status' => $activity->getStatus(),
                'promotion' => (int)$activity->getPromotion(),
                'places' => $activity->getPlaces(),
                'id' => $id
            ]);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Supprimer une activité
    public function deleteActivity(int $id) {
        $db = config::getConnexion();
        $sql = "DELETE FROM activity WHERE id = :id";

        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
