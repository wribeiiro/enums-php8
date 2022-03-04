<?php
declare(strict_types=1);

require_once __DIR__ . './vendor/autoload.php';
use Wribeiiro\EnumsPhp8\Naipe;

function paintTable(array $data)
{
    $str = alignString("Name") . alignString("| Value") . alignString("| Color") . alignString("| Symbol") . PHP_EOL;
    foreach ($data as $row) {
        $str .= alignString($row->name) . alignString("| {$row->value}") . alignString("| {$row->color}") . alignString("| {$row->symbol}")  . PHP_EOL;
    }

    echo $str;
}

function alignString(string $input): string
{
    return str_pad($input, 12, " ");
}

$clubs = new stdClass();
$clubs->name = Naipe::Clubs->name;
$clubs->value = Naipe::Clubs->value;
$clubs->symbol = Naipe::Clubs->symbol();
$clubs->color = Naipe::Clubs->color();

$hearts = new stdClass();
$hearts->name = Naipe::Hearts->name;
$hearts->value = Naipe::Hearts->value;
$hearts->symbol = Naipe::Hearts->symbol();
$hearts->color = Naipe::Hearts->color();

$diamonds = new stdClass();
$diamonds->name = Naipe::Diamonds->name;
$diamonds->value = Naipe::Diamonds->value;
$diamonds->symbol = Naipe::Diamonds->symbol();
$diamonds->color = Naipe::Diamonds->color();

$spades = new stdClass();
$spades->name = Naipe::Spades->name;
$spades->value = Naipe::Spades->value;
$spades->symbol = Naipe::Spades->symbol();
$spades->color = Naipe::Spades->color();

paintTable([$clubs, $hearts, $diamonds, $spades]);
