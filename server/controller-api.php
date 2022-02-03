<?php 

    include_once __DIR__ . "/db.php";

    

    if(isset($_GET["genre"])) {
        $genre = $_GET["genre"];

        if(strtolower($genre) == "all") {
            header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicData,
                    'length' => count($musicData)
                ]);
        }
        else {
            $musicFiltered = [];

            foreach ($musicData as $song) {
                if(strtolower($song["genre"]) == strtolower($genre))
                {
                    $musicFiltered[] = $song;
                }
            }
            header('Content-Type: application/json');
                    echo json_encode([
                        'results' => $musicFiltered,
                        'length' => count($musicFiltered)
                    ]);
        }
        
    }
?>