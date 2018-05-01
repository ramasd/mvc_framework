<?php

class Home {
    
    public static function getHomeItemById($id) {

        $id = intval($id);

        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM home WHERE id = '.$id);

        $result->setFetchMode(PDO::FETCH_ASSOC); 

        $homeItem = $result->fetch();
        return $homeItem;
    }

    public static function getHomeList() {

        $db = Db::getConnection();

        $homeList = array();

        $result = $db->query('SELECT id, title, date, author_name, short_content, preview FROM home ORDER BY id ASC LIMIT 10');

        $i = 0;
        while($row = $result->fetch()) {
            $homeList[$i]['id'] = $row['id'];
            $homeList[$i]['title'] = $row['title'];
            $homeList[$i]['date'] = $row['date'];
            $homeList[$i]['author_name'] = $row['author_name'];
            $homeList[$i]['short_content'] = $row['short_content'];
            $homeList[$i]['preview'] = $row['preview'];
            $i++;
        }
        return $homeList;
    }

}