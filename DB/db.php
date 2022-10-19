<?php

$db = new mysqli('localhost', 'root', '', 'test_saneto');

// Получение всех статей
function get_singles_all(){
    global $db;
    return $db->query("SELECT * FROM singles ORDER BY id DESC");
}

// Получение статьи по ее id
function get_single_by_id($id){
    global $db;
    $singles = $db->query("SELECT * FROM singles WHERE id = $id");
    foreach($singles as $single){
        return $single;
    }
}

// Получение всех категорий
function get_all_category(){
    global $db;
    return $db->query("SELECT * FROM categories");
}

// Получение названия категории для singles
function get_category_by_id($id){
    global $db;
    $categories = $db->query("SELECT * FROM categories WHERE id = $id");
    foreach ($categories as $category){
        return $category["category_name"];
    }
}

// Получение имен авторов
function get_authors_by_id($id){
    global $db;
    $authors = $db->query("SELECT * FROM authors WHERE id = $id");
    foreach($authors as $author){
        return $author["author_name"];
    }
}

// Получение комментариев по id
function get_comments_by_id($id){
    global $db;
    $comments = $db->query("SELECT * FROM comments WHERE id_comment = $id");
    foreach($comments as $comment){
        return $comment["comment_text"];
    }
}