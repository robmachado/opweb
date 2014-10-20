/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    $( "#tabs" ).tabs();
});
$(document).ready( function () {
    $("#extsentbob").change( function() {
        var option = $(this).find("option:selected").val();
        $("#imgextsentbob").attr("src","bob/"+option+".png");
    });
    $("#impsentbob").change( function() {
        var option = $(this).find("option:selected").val();
        $("#imgimpsentbob").attr("src","bob/"+option+".png");
    });
    $("#rebsentbob").change( function() {
        var option = $(this).find("option:selected").val();
        $("#imgrebsentbob").attr("src","bob/"+option+".png");
    });
    $("#colsentbob").change( function() {
        var option = $(this).find("option:selected").val();
        $("#imgcolsentbob").attr("src","bob/"+option+".png");
    });
    $("#mperfsentbob").change( function() {
        var option = $(this).find("option:selected").val();
        $("#imgmperfsentbob").attr("src","bob/"+option+".png");
    });
    
});

