<script>
    function fixNumbers(str) {
            var persianNumbers = [
                /۰/g,
                /۱/g,
                /۲/g,
                /۳/g,
                /۴/g,
                /۵/g,
                /۶/g,
                /۷/g,
                /۸/g,
                /۹/g
            ];
            var arabicNumbers = [
                /٠/g,
                /١/g,
                /٢/g,
                /٣/g,
                /٤/g,
                /٥/g,
                /٦/g,
                /٧/g,
                /٨/g,
                /٩/g
            ];
            if (typeof str === "string") {
                for (var i = 0; i < 10; i++) {
                    str = str
                        .replace(persianNumbers[i], i)
                        .replace(arabicNumbers[i], i);
                }
            }
            return str;
        }
    function formatMoney(n, c, d, t) {
            n = this.fixNumbers(n);
            var c = isNaN((c = Math.abs(c))) ? 2 : c,
                d = d == undefined ? "." : d,
                t = t == undefined ? "٫" : t,
                s = n < 0 ? "-" : "",
                i = String(parseInt((n = Math.abs(Number(n) || 0).toFixed(c)))),
                j = (j = i.length) > 3 ? j % 3 : 0;

            return (
                s +
                (j ? i.substr(0, j) + t : "") +
                i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t)
            );
        }

        function calculate_sum(){
    var sum = 0;
$('.price_checkbox:checked').each(function(){
    sum += parseFloat($(this).attr("data_price"));  // Or this.innerHTML, this.innerText
});


    $('#checkout_sum').html(formatMoney(sum));
}
        
    $(function () {

        

        $("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
calculate_sum();
});

    });
        
</script>