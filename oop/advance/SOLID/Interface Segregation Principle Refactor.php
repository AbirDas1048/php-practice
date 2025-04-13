<?php

interface PrinterInterface
{
    public function print();
}

interface PhotocopyInterface
{
    public function photocopy();
}

interface ScannerInterface
{
    public function scan();
}

// ISP refactors here
class DigitalPrinter implements PrinterInterface, PhotocopyInterface, ScannerInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }

    public function scan()
    {
        return 'Scan';
    }
}

// ISP refactors here
class ModernPrinter implements PrinterInterface, PhotocopyInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }
}

// ISP refactors here
class OldPrinter implements PrinterInterface
{
    public function print()
    {
        return 'print';
    }
}