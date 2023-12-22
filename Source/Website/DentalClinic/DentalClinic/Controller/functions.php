<?php
    //session_start();

    function validate($data)
    {
        global $conn;
        //$validateData = sqlsrv_real_escape_string($conn, $data);

        return trim($data);
    }

    function redirect($path, $status, $noti)
    {
        $_SESSION['status'] = $status;
        $_SESSION['noti'] = $noti;
        header('location: ' .$path);
        exit(0);
    }

    function insert($tableName, $data)
    {
        global $conn;

        $table = validate($tableName);

        $keys = array_keys($data);
        $values = array_values($data);
       
        $keys = implode(',' , $keys);
        $values = "'".implode("','" , $values)."'";

        $query = "INSERT INTO $table ($keys) VALUES ($values)";
        
        //echo $query;
        $result = sqlsrv_query($conn, $query);
        return $result;
    }

    function updatebyEmail($tableName, $keys, $values, $data)
    {
        global $conn;
        //print_r($data);
        $table = validate($tableName);
        $keys = validate($keys);
        $values = validate($values);


        $dataString = "";

        //" key=value,"
        foreach($data as $key => $value)
        {
            $dataString .= "$key = '$value', ";
        }

        $setClause = rtrim($dataString, ', ');

        $query = "UPDATE $table SET $setClause WHERE $keys ='$values'";

        //echo $query;
        $result =  sqlsrv_query($conn, $query);

        return $result;
    }

    
    function getAllWithPagination($tableName, $pageSize, $pageNumber, $pageOrder)
    {
        global $conn;

        $table = validate($tableName);
        $startRow = ($pageNumber - 1) * $pageSize;

        $query = "SELECT COUNT(*) as total FROM $table"; // Đếm tổng số dòng
        $result = sqlsrv_query($conn, $query);
        $totalRows = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)['total'];

        $query = "SELECT * FROM $table ORDER BY $pageOrder OFFSET $startRow ROWS FETCH NEXT $pageSize ROWS ONLY";
        $result = sqlsrv_query($conn, $query);

        if ($result) {
            $data = array();

            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }

            $response = [
                'status' => 'Data Found',
                'data' => $data,
                'total' => $totalRows,
            ];
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
        }

        return $response;
    }

    function getByUserTypeWithPagination($tableName, $userType, $pageSize, $pageNumber, $pageOrder)
    {
        global $conn;

        $table = validate($tableName);
        $startRow = ($pageNumber - 1) * $pageSize;
        $userType = validate($userType);

        $query = "SELECT COUNT(*) as total FROM $table WHERE UserType = '$userType'"; // Đếm tổng số dòng
        $result = sqlsrv_query($conn, $query);
        $totalRows = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)['total'];

        $query = "SELECT * FROM $table WHERE UserType = '$userType' ORDER BY $pageOrder OFFSET $startRow ROWS FETCH NEXT $pageSize ROWS ONLY";
        $result = sqlsrv_query($conn, $query);

        if ($result) {
            $data = array();

            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }

            $response = [
                'status' => 'Data Found',
                'data' => $data,
                'total' => $totalRows,
            ];
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
        }

        return $response;
    }

    function getAll($tableName)
    {
        global $conn;
    
        $table = validate($tableName);
    
        $query = "SELECT * FROM $table";
        $result = sqlsrv_query($conn, $query);
    
        if ($result) {
            $data = array();
    
            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
    
            if (!empty($data)) {
                $response = [
                    'status' => 'Data Found',
                    'data' => $data,
                ];
            } else {
                $response = [
                    'status' => 'No Data Found',
                ];
            }
    
            return $response;
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
            return $response;
        }
    }
    

    function getbyKeyValue($tableName, $key, $value)
    {
        global $conn;

        $table = validate($tableName);
        $key = validate($key);
        $value = validate($value);

        $query = "SELECT * FROM $table WHERE $key = '$value'";
        $result =  sqlsrv_query($conn, $query);

        if($result)
        {
            if(sqlsrv_num_rows($result) == 1)
            {
                $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

                $response = [
                    'status' => 'Data Found',
                    'data' => $row,
                ];
                return $response;
            }
            else
            {
                $response = [
                    'status' => 'No Data Found',
                ];
                return $response;
            }
        }
        else
        {
            $response = [
                'status' => 'Somethig went wrong! Please try again.',
            ];
            return $response;
        }
    }


    function delete($tableName, $key, $value)
    {
        global $conn;

        $table = validate($tableName);
        $key = validate($key);
        $value = validate($value);

        $query = "DELETE FROM $table WHERE $key = '$value' LIMIT 1";
        
        $result =  sqlsrv_query($conn, $query);

        return $result;
    }

    function searchUserByKeyword($tableName, $key, $value, $userType=null)
    {
        global $conn;
    
        $table = validate($tableName);
        $key = validate($key);
        $userType = validate($userType);
        $value = validate($value);
    
        $query = "SELECT * FROM $table WHERE $key LIKE '%$value%' AND UserType = '$userType'";
        $result = sqlsrv_query($conn, $query);
    
        if ($result) {
            $data = array();
    
            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
    
            if (!empty($data)) {
                $response = [
                    'status' => 'Data Found',
                    'data' => $data,
                ];
            } else {
                $response = [
                    'status' => 'No Data Found',
                ];
            }
    
            return $response;
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
            return $response;
        }
    }

    function searchByKeyword($tableName, $key, $value)
    {
        global $conn;
    
        $table = validate($tableName);
        $key = validate($key);
        $value = validate($value);
    
        $query = "SELECT * FROM $table WHERE $key LIKE '%$value%'";
        $result = sqlsrv_query($conn, $query);
    
        if ($result) {
            $data = array();
    
            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
    
            if (!empty($data)) {
                $response = [
                    'status' => 'Data Found',
                    'data' => $data,
                ];
            } else {
                $response = [
                    'status' => 'No Data Found',
                ];
            }
    
            return $response;
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
            return $response;
        }
    }

    function getbyUserType($tableName, $userType)
    {
        global $conn;

        $table = validate($tableName);
        $userType = validate($userType);
    
        $query = "SELECT * FROM $table WHERE UserType = '$userType'";
        $result = sqlsrv_query($conn, $query);
    
        if ($result) {
            $data = [];
    
            while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
    
            if (!empty($data)) {
                $response = [
                    'status' => 'Data Found',
                    'data' => $data,
                ];
            } else {
                $response = [
                    'status' => 'No Data Found',
                ];
            }
    
            return $response;
        } else {
            $response = [
                'status' => 'Something went wrong! Please try again.',
            ];
            return $response;
        }
    }
    
    function checkParam($type)
    {
        if(!empty($_GET[$type]))
        {
            return $_GET[$type];
        }
        else
        {
            return false;
        }
    }
?>