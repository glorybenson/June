<?php
session_start();

require "dbconfig.php";


function validate($inputData)
{
    global $conn;
    $validateDate = mysqli_real_escape_string($conn, $inputData);
    return trim($validateDate);
}


function webSetting($columnName)
{
    $setting = getById('settings', 1);
    if ($setting['status'] == 200) {
        return $setting['data'][$columnName];
    }
}
function VatSetting($columnName)
{
    $setting = getById('packages', 1);
    if ($setting['status'] == 200) {
        return $setting['data'][$columnName];
    }
}

function clientInfo($columnName)
{
    $client = getById('users', 1);
    if ($client['status'] == 200) {
        return $client['data'][$columnName];
    }
}

function logoutSession()
{
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUser']);
}

function redirect($url, $status)
{

    $_SESSION['status'] = $status;
    header('Location: ' . $url);
    exit(0);
}

function getCount($tableName)
{
    global $conn;

    $table = validate($tableName);
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $totalCount = mysqli_num_rows($result);
    return $totalCount;
}


function alertMessage()
{
    if (isset($_SESSION['status'])) {
        echo '<div class="alert alert-success ">
                <h6 >' . $_SESSION['status'] . '</h6> 
            </div>';
        unset($_SESSION['status']);
    }
}

function checkParamId($paramType)
{
    if (isset($_GET[$paramType])) {
        if ($_GET[$paramType] != null) {
            return $_GET[$paramType];
        } else {
            return "No id Found";
        }
    } else {
        return "No id given";
    }
}


function getAll($tableName)
{
    global $conn;
    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}


function getById($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                "status" => 200,
                "message" => "Fected data",
                "data" => $row
            ];
            return $response;
        } else {
            $response = [
                "status" => 400,
                "message" => "NO Record"
            ];
            return $response;
        }
    } else {
        $response = [
            "status" => 500,
            "message" => "Something went wrong"
        ];
        return $response;
    }
}

function deleteQuery($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE  FROM $table  WHERE  id='$id'LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;
}


function insert($tableName, $data)
{
    global $conn;
    $table = validate($tableName);

    $columns = array_keys($data);
    $values = array_values($data);

    $finalColums = implode(',', $columns);
    $finalValues = "'" . implode("','", $values) . "'";

    $query = "INSERT INTO users ($finalColums) VALUES ($finalValues)";
    $result = mysqli_query($conn, $query);
    return $result;
}


function update($tableName, $id, $data)
{
    global  $conn;

    $table = validate($tableName);
    $id = validate($id);

    $updateColumValuesData = "";
    foreach ($data as $columns => $values) {
        $updateColumValuesData .= $columns . '=' . "'$values',";
    }

    $finalUpdateData = substr(trim($updateColumValuesData), 0, -1);

    $query = "UPDATE $table SET $finalUpdateData WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    return $result; 
}
