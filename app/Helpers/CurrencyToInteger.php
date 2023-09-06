 <?php
    function CurrencyToInteger($currencyString)
    {
        // Menghapus karakter koma (,) dan titik (.)
        $cleanedString = str_replace([',', '.'], '', $currencyString);

        // Mengkonversi string ke integer
        $integerValue = intval($cleanedString);

        return $integerValue;
    }
    ?>