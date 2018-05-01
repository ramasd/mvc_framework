<?php

class Second {
    
    public static function getSecondItemById($id) {

        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM second WHERE id = '.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC); 

        $secondItem = $result->fetch();
        return $secondItem;
    }

    public static function getSecondList() {

        $db = Db::getConnection();

        $secondList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content, preview FROM second ORDER BY id ASC LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $secondList[$i]['id'] = $row['id'];
            $secondList[$i]['title'] = $row['title'];
            $secondList[$i]['date'] = $row['date'];
            $secondList[$i]['author_name'] = $row['author_name'];
            $secondList[$i]['short_content'] = $row['short_content'];
            $secondList[$i]['preview'] = $row['preview'];
            $i++;
        }
        return $secondList;
    }

}