<?php
    #Include the connect.php file
    include('connect.php');
    #Connect to the database
    //connection String
    $connect = mysql_connect($hostname, $username, $password)
    or die('Could not connect: ' . mysql_error());
    //Select The database
    $bool = mysql_select_db($database, $connect);
    if ($bool === False){
       print "can't find $database";
    }
    
    $pagenum = $_GET['pagenum'];
    $pagesize = $_GET['pagesize'];
    $start = $pagenum * $pagesize;
    $query = "SELECT SQL_CALC_FOUND_ROWS * FROM Orders LIMIT $start, $pagesize";

    // filter data.
    if (isset($_GET['filterscount']))
    {
        $filterscount = $_GET['filterscount'];
        
        if ($filterscount > 0)
        {
            $where = " WHERE (";
            $tmpdatafield = "";
            $tmpfilteroperator = "";
            for ($i=0; $i < $filterscount; $i++)
            {
                // get the filter's value.
                $filtervalue = $_GET["filtervalue" . $i];
                // get the filter's condition.
                $filtercondition = $_GET["filtercondition" . $i];
                // get the filter's column.
                $filterdatafield = $_GET["filterdatafield" . $i];
                // get the filter's operator.
                $filteroperator = $_GET["filteroperator" . $i];
                
                if ($tmpdatafield == "")
                {
                    $tmpdatafield = $filterdatafield;            
                }
                else if ($tmpdatafield <> $filterdatafield)
                {
                    $where .= ")AND(";
                }
                else if ($tmpdatafield == $filterdatafield)
                {
                    if ($tmpfilteroperator == 0)
                    {
                        $where .= " AND ";
                    }
                    else $where .= " OR ";    
                }
                
                // build the "WHERE" clause depending on the filter's condition, value and datafield.
                switch($filtercondition)
                {
                    case "CONTAINS":
                        $where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."%'";
                        break;
                    case "DOES_NOT_CONTAIN":
                        $where .= " " . $filterdatafield . " NOT LIKE '%" . $filtervalue ."%'";
                        break;
                    case "EQUAL":
                        $where .= " " . $filterdatafield . " = '" . $filtervalue ."'";
                        break;
                    case "NOT_EQUAL":
                        $where .= " " . $filterdatafield . " <> '" . $filtervalue ."'";
                        break;
                    case "GREATER_THAN":
                        $where .= " " . $filterdatafield . " > '" . $filtervalue ."'";
                        break;
                    case "LESS_THAN":
                        $where .= " " . $filterdatafield . " < '" . $filtervalue ."'";
                        break;
                    case "GREATER_THAN_OR_EQUAL":
                        $where .= " " . $filterdatafield . " >= '" . $filtervalue ."'";
                        break;
                    case "LESS_THAN_OR_EQUAL":
                        $where .= " " . $filterdatafield . " <= '" . $filtervalue ."'";
                        break;
                    case "STARTS_WITH":
                        $where .= " " . $filterdatafield . " LIKE '" . $filtervalue ."%'";
                        break;
                    case "ENDS_WITH":
                        $where .= " " . $filterdatafield . " LIKE '%" . $filtervalue ."'";
                        break;
                }
                                
                if ($i == $filterscount - 1)
                {
                    $where .= ")";
                }
                
                $tmpfilteroperator = $filteroperator;
                $tmpdatafield = $filterdatafield;            
            }
            // build the query.
            $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
            $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
            $rows = mysql_query($sql);
            $rows = mysql_fetch_assoc($rows);
            $total_rows = $rows['found_rows'];
        
            $query = "SELECT * FROM Orders ".$where." LIMIT $start, $total_rows";            
        }
    }
    
    $result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
    $sql = "SELECT FOUND_ROWS() AS `found_rows`;";
    $rows = mysql_query($sql);
    $rows = mysql_fetch_assoc($rows);
    $total_rows = $rows['found_rows'];
    $orders = null;
    // get data and store in a json array
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $orders[] = array(
            'OrderDate' => $row['OrderDate'],
            'ShippedDate' => $row['ShippedDate'],
            'ShipName' => $row['ShipName'],
            'ShipAddress' => $row['ShipAddress'],
            'ShipCity' => $row['ShipCity'],
            'ShipCountry' => $row['ShipCountry']
          );
    }
      $data[] = array(
       'TotalRows' => $total_rows,
       'Rows' => $orders
    );
    echo json_encode($data);
?>