<?php
// Data
$data = [
    [2, 4.1, 3, 6, 2, 2],
    [1, 2.9, 2, 4, 1, 1],
    [2, 3.7, 3, 5, 1, 2],
    [1, 3.5, 2, 3, 2, 1],
    [2, 3.2, 3, 7, 1, 2],
    [1, 3.9, 2, 2, 2, 1],
    [2, 3.4, 3, 6, 2, 2],
    [1, 2.8, 2, 4, 1, 1],
    [2, 3.6, 3, 5, 1, 2],
    [1, 3.1, 2, 3, 2, 1],
    [2, 3.8, 3, 7, 1, 2],
    [1, 3.3, 2, 2, 2, 1],
    [2, 3.9, 3, 6, 2, 2],
    [1, 2.7, 2, 4, 1, 1],
    [2, 3.5, 3, 5, 1, 2],
    [1, 3.2, 2, 3, 2, 1],
    [2, 3.7, 3, 7, 1, 2],
    [1, 3.4, 2, 2, 2, 1],
    [2, 3.6, 3, 6, 2, 2],
    [1, 2.9, 2, 4, 1, 1]
];

// Menentukan jumlah cluster
$k = 4;

// Menginisialisasi centroid awal secara acak
function initCentroids($data, $k) {
    $centroids = [];
    $numFeatures = count($data[0]);
    for ($i = 0; $i < $k; $i++) {
        $randomIndex = array_rand($data);
        $centroids[] = $data[$randomIndex];
    }
    return $centroids;
}

// Menghitung jarak euclidean
function euclideanDistance($a, $b) {
    $sum = 0;
    for ($i = 0; $i < count($a); $i++) {
        $sum += pow($a[$i] - $b[$i], 2);
    }
    return sqrt($sum);
}

// Menentukan cluster untuk setiap data
function assignClusters($data, $centroids) {
    $clusters = [];
    foreach ($data as $point) {
        $minDistance = INF;
        $closestCentroid = null;
        foreach ($centroids as $index => $centroid) {
            $distance = euclideanDistance($point, $centroid);
            if ($distance < $minDistance) {
                $minDistance = $distance;
                $closestCentroid = $index;
            }
        }
        $clusters[$closestCentroid][] = $point;
    }
    return $clusters;
}

// Menghitung centroid baru
function calculateNewCentroids($clusters) {
    $newCentroids = [];
    foreach ($clusters as $cluster) {
        $numPoints = count($cluster);
        $numFeatures = count($cluster[0]);
        $sums = array_fill(0, $numFeatures, 0);

        foreach ($cluster as $point) {
            for ($i = 0; $i < $numFeatures; $i++) {
                $sums[$i] += $point[$i];
            }
        }

        $means = array_map(function ($sum) use ($numPoints) {
            return $sum / $numPoints;
        }, $sums);

        $newCentroids[] = $means;
    }
    return $newCentroids;
}

// Algoritma K-Means
$centroids = initCentroids($data, $k);


// for ($iter = 0; $iter < 100; $iter++) {
//     $clusters = assignClusters($data, $centroids);
//     $newCentroids = calculateNewCentroids($clusters);

//     // Jika centroid konvergen, hentikan iterasi
//     if ($newCentroids === $centroids) {
//         break;
//     }

//     $centroids = $newCentroids;
// }

// Output hasil centroid
// ambil nilai paling kecil disetiap centroid
$centroid_awal = [];
foreach ($centroids as $centroid) {
    $centroid_awal[] = min($centroid);
}

print_r($centroid_awal);
?>
