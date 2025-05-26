<?php

function h1($value, $class='') {
  echo '<h1 class="'.$class.'">'.$value.'</h1>';
}

function h2($value, $class='') {
  echo '<h2 class="'.$class.'">'.$value.'</h2>';
}

function h3($value, $class='') {
  echo '<h3 class="'.$class.'">'.$value.'</h3>';
}

function a($value, $link='#', $class='') {
  echo '<a href="'.$link.'" class="'.$class.'">'.$value.'</a>';
}

function img($src, $class='') {
  echo '<img src="'.$src.'" class="'.$class.'" alt="image">';
}