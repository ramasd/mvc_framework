<?php

class First {
    
    public static function getFirstItemById($id) {

        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM first WHERE id = '.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC); 

        $firstItem = $result->fetch();
        return $firstItem;
    }

    public static function getFirstList() {

        $db = Db::getConnection();

        $firstList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content, preview FROM first ORDER BY id ASC LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $firstList[$i]['id'] = $row['id'];
            $firstList[$i]['title'] = $row['title'];
            $firstList[$i]['date'] = $row['date'];
            $firstList[$i]['author_name'] = $row['author_name'];
            $firstList[$i]['short_content'] = $row['short_content'];
            $firstList[$i]['preview'] = $row['preview'];
            $i++;
        }
        return $firstList;
    }

}