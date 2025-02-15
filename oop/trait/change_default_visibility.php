<?php
trait Visibility
{
    public function publicVisibility(): void
    {
        echo "Public Visibility". PHP_EOL;
    }

    private function privateVisibility(): void
    {
        echo "Private Visibility". PHP_EOL;
    }

    protected function protectedVisibility(): void
    {
        echo "Protected Visibility". PHP_EOL;
    }
}

class ChangeVisibility
{
    use Visibility{
        privateVisibility as public;
    }

    public function callPrivateVisibility(): void
    {
        $this->privateVisibility();
    }

    public function callProtectedVisibility(): void
    {
        $this->protectedVisibility();
    }
}

(new ChangeVisibility())->publicVisibility();
(new ChangeVisibility())->callPrivateVisibility();
(new ChangeVisibility())->callProtectedVisibility();