<?php

// Function to perform the company search
function searchCompanies($query, $itemsPerPage, $startIndex) {
    // API endpoint
    $url = 'https://api.company-information.service.gov.uk/search/companies';

    // Query parameters
    $params = [
        'q' => $query,
        'items_per_page' => $itemsPerPage,
        'start_index' => $startIndex
    ];

    // Authorization header
    $headers = [
        'Authorization: Bearer 5633cc60-3f61-4f2a-9bc7-a9f6c1583068' // Replace with your actual API key
    ];

    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, [
        CURLOPT_URL => $url . '?' . http_build_query($params),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers
    ]);

    // Execute the cURL request
    $response = curl_exec($curl);

    // Check for errors
    if (curl_errno($curl)) {
        echo 'Error: ' . curl_error($curl);
    }

    // Close cURL session
    curl_close($curl);

    // Return the response
    return $response;
}

// Example usage
$query = 'your_search_query';
$itemsPerPage = 10;
$startIndex = 0;

$response = searchCompanies($query, $itemsPerPage, $startIndex);

// Output the response
echo $response;
