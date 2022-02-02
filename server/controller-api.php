<?php 

    include_once __DIR__ . "/db.php";

    

    if(isset($_GET["genre"])) {
        $genre = $_GET["genre"];

        switch ($genre) {
            case 'all':
                header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicData,
                    'length' => count($musicData)
                ]);
                break;
            
            case 'rock':

                $musicFiltered = [];

                foreach ($musicData as $song) {
                    if(strtolower($song["genre"]) == strtolower("rock")) {
                        $musicFiltered[] = $song;
                    }
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicFiltered,
                    'length' => count($musicFiltered)
                ]);
                break;

            case 'metal':
                
                $musicFiltered = [];

                foreach ($musicData as $song) {
                    if(strtolower($song["genre"]) == strtolower("metal")) {
                        $musicFiltered[] = $song;
                    }
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicFiltered,
                    'length' => count($musicFiltered)
                ]);
                break;
            
            case 'pop':
                
                $musicFiltered = [];

                foreach ($musicData as $song) {
                    if(strtolower($song["genre"]) == strtolower("pop")) {
                        $musicFiltered[] = $song;
                    }
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicFiltered,
                    'length' => count($musicFiltered)
                ]);
                break;

            case 'jazz':
                
                $musicFiltered = [];

                foreach ($musicData as $song) {
                    if(strtolower($song["genre"]) == strtolower("jazz")) {
                        $musicFiltered[] = $song;
                    }
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'results' => $musicFiltered,
                    'length' => count($musicFiltered)
                ]);
                break;
        }
        
    }
?>