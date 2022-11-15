<?php

function changeClassHome(){
    $url = $_SERVER['REQUEST_URI'];
        if($url == '/views/index.view.php'){
            echo "active";
        }           
    }

function changeClassContact(){
    $url = $_SERVER['REQUEST_URI'];
        if($url == '/views/contact.view.php'){
                echo "active";
            }           
        }
function changeClassAbout(){
        $url = $_SERVER['REQUEST_URI'];
            if($url == '/views/about.view.php'){
                    echo "active";
                }           
            }

