(function () {
    var language_select = document.getElementById("languages");
    var result = document.getElementById("selected-language");

    language_select.addEventListener('change', function (event) {
        var selected_value = this.value;
        var selected_text = this.options[this.selectedIndex].text;
        result.innerText = selected_value + '\n' + selected_text;
    });
})();


$(function () {
    $("#languages").change(function() {
        var val = $(this).val();
        var text = $("#languages option:selected").text();
        $("#selected-language").html(val + '<br>' + text);
    });
});