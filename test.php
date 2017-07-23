<?php
    $request = "https://api.themoviedb.org/3/movie/550?api_key=5d3e05e2d12a6b7a95fa4479a0894bfb";
    $json = file_get_contents($request);
    print_r(json_decode($json, true));
?>
