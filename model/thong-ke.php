<?php
    function getStatistics() {
        $sql = "SELECT 
                    tp.Type_name AS 'type_name',
                    COUNT(p.product_id) AS 'quantity',
                    MAX(p.price) AS 'max_price',
                    MIN(p.price) AS 'min_price',
                    AVG(p.price) AS 'avg_price'
                FROM 
                    type_product tp
                LEFT JOIN 
                    product p ON tp.type_id = p.type_product
                GROUP BY 
                    tp.Type_name
                ORDER BY 
                    tp.Type_name";
        return pdo_query($sql);
    }
?>