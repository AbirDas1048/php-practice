<?php

interface PrinterInterface
{
    public function print();

    public function photocopy();

    public function scan();
}

class DigitalPrinter implements PrinterInterface
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

class ModernPrinter implements PrinterInterface
{
    public function print()
    {
        return 'Print';
    }

    public function photocopy()
    {
        return 'Photocopy';
    }

    // ISP Violates here
    public function scan()
    {
        return 'Not supported';
    }
}

class OldPrinter implements PrinterInterface
{
    public function print()
    {
        return 'print';
    }

    // ISP Violates here
    public function photocopy()
    {
        return 'Not supported';
    }

    // ISP Violates here
    public function scan()
    {
        return 'Not supported';
    }
}