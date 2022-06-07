<?PHP

    function vat($amount){
        return (15/100)*$amount;
    }

    echo "VAT : ".vat(100);

?>