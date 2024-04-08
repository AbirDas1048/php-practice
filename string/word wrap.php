<?php

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit accusamus debitis eos quis quo consectetur ex error, pariatur dolor, iusto animi inventore obcaecati, velit deserunt deleniti repellat ullam. Ullam optio nulla ad earum ducimus, molestias mollitia dolorum corporis pariatur nisi perspiciatis consectetur laboriosam nam labore enim iusto voluptate voluptatem voluptates?";

$string2 = "Lorem ipsum dolorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr sit amet consectetur adipisicing elit.";

echo wordwrap($string, 50) . PHP_EOL . PHP_EOL;

echo wordwrap($string2, 26, "\n", true) . PHP_EOL;
