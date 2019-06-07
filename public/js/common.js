/* 
 * システム固有のスクリプトを記述します
 */
$(function() {
    //datepickerのフォーマット設定(年月日入力)
    $("input.datepicker").datepicker({
        format: "yyyy-mm-dd",
        language: 'ja'
    });
    //datepickerのフォーマット設定(年月のみ入力)
    $("input.ympicker").datepicker({
        format: 'yyyy-mm',
        language: 'ja',
        minViewMode : 1
    });
    //BootstrapDataTableを日本語化
    $.extend( $.fn.dataTable.defaults, { 
        language: {
            url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
        } 
    });
});
