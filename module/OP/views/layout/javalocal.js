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
    //*************************************
    //ajax para edição do cadastro das MP
    var url = "./ajaxGetCodMP.php";
    var mps = new Array();
    var source = function(request, response) 
    {
        $.ajax({
            url: url,
            dataType: "json",
            datafields: [
                        { name: 'codmp' },
                        { name: 'idmp' },
                        { name: 'descmp' },
                        { name: 'fornecmp' },
                        { name: 'codfornecmp' },
                        { name: 'densmp' },
                    ],
            //data: {
            //    q: request.term
            //},
            success: function( data ) {
                for (var i = 0; i < data.length; i++) {
                    mps.push({ cod: data[i].codmp, desc: data[i].descmp, id: data[i].ipmp, fornec: data[i].fornecmp, codfor: data[i].codfornecmp, densmp: data[i].densmp });
                };
                response( $.map( data, function( item ) {
                    return {
                        label: item.codmp,
                        value: item.codmp
                    }
                }));
            }
	});
    };
    $( "#codmp" ).autocomplete({
        source: source,
        minLength: 2,
	select: function( event, ui ) {
            for (var i = 0; i < mps.length; i++) {                            
                if (ui.item.label == mps[i].cod) {
                    $('#descmp').val(mps[i].desc);
                    $('#fornecmp').val(mps[i].fornec);
                    $('#codfornecmp').val(mps[i].codfor);
                    $('#densmp').val(mps[i].densmp);
                }
            }
	}
    });
    //*************************************
    //*************************************
    // Cadastro de MP Ajax Post grava
    $( "#gravaMP" ).click(function() {
        alert("aqui!!!!");
        var dados = {
            codmp: $('#codmp').val(),
            descmp: $('#descmp').val(),
            fornecmp: $('#fornecmp').val(),
            codfornecmp: $('#codfornecmp').val(),
            densmp: $('#densmp').val()
        };
        $.post("./ajaxSaveMP.php", dados, function(data, status) {
            alert("Data: " + data + "\nStatus: " + status);
        });
    });

    //*************************************
});

//****************************
// Cadastro de MP
function limpaMP() {
    $('#codmp').val('');
    $('#descmp').val('');
    $('#fornecmp').val('');
    $('#codfornecmp').val('');
    $('#densmp').val('');
};
//****************************
