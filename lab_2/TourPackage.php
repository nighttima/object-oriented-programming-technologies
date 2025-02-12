<?php
/**
 * Клас, що представляє туристичний пакет.
 */
class TourPackage {
    public string $hotel;
    public string $flight;
    public string $excursion;

    /**
     * Виводить інформацію про турпакет.
     *
     * @return void
     */
    public function showDetails(): void {
        echo "Готель: $this->hotel, Переліт: $this->flight, Екскурсія: $this->excursion\n";
    }
}
