/**
 * Created by paulversion on 2016/7/10.
 */
$(function(){
    $("#modalButton").click(function(){
        $("#modal").modal("show").find('#modalContent').load($(this).attr('value'))
    })
})