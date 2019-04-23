<?php
require_once('INewsDB.class.php');

class NewsDB implements INewsDB
{
  const DB_NAME = '../news.db';
  private $_db = null;

  function __get ($name) {
    if($name === 'db') {
      return $this->_db;
    }
    throw new Exception ('Неверное имя базы данных');
  }
  // создаем базу данных sqlite
  function __construct () {
    $this->_db = new SQLite(self::DB_NAME);
  }

  function __destruct () {
    $this->_db->close();
  }
  // сохраняем новость в базе данных
  function saveNews($title, $category, $description, $source){
    echo 123;
  }
  // Получить все новости из БД
  function getNews(){
    echo 123;
  }
  // Удалить новость из базы данных
  function deleteNews($id){
    echo 123;
  }
}

$news = new NewsDB();