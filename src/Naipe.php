<?php

namespace Wribeiiro\EnumsPhp8;

enum Naipe: string implements ColoredInterface
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';

    public function color(): string
    {
        return match ($this) {
            Naipe::Hearts, Naipe::Diamonds => 'Red',
            Naipe::Spades, Naipe::Clubs => 'Black',
            default => throw new \Exception('Deu ruim no Biridin')
        };
    }

    public function symbol(): string {
        return match ($this) {
            Naipe::Hearts => '♥',
            Naipe::Diamonds => '♦',
            Naipe::Spades => '♠',
            Naipe::Clubs => '♣',
            default => throw new \Exception('Deu ruim no Biridin')
        };
    }

    public function form(): string
    {
        return "Biridin";
    }
}
