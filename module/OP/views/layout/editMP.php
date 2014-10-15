<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <title id='Description'>Editar Cadastro de Materia-Prima</title>
    <link rel="stylesheet" href="../../../../public/js/jquery/jqw/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../../../public/js/jquery/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../../../../public/js/jquery/jqw/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../../../public/js/jquery/jqw/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../../../../public/js/jquery/jqw/jqwidgets/jqxinput.js"></script>
</head>
<body class='default'>
    <div id='content'>
        <script type="text/javascript">
            $(document).ready(function () {
                var url = "./ajaxGetCodMP.php";
                // prepare the data
                var source =
                {
                    datatype: "json",
                    datafields: [
                        { name: 'codmp' },
                        { name: 'idmp' },
                        { name: 'descmp' },
                        { name: 'fornecmp' },
                        { name: 'codfornecmp' }
                    ],
                    url: url
                };
                //var dataAdapter = new $.jqx.dataAdapter(source);
                var mps = new Array();
                var dataAdapter = new $.jqx.dataAdapter(source, { autoBind: true, loadComplete: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        mps.push({ cod: data[i].codmp, desc: data[i].descmp, id: data[i].ipmp, fornec: data[i].fornecmp, codfor: data[i].codfornecmp });
                    };
                }
                });
                $("#codmp").jqxInput({
                    source: dataAdapter, placeHolder: "Codigo da MP", displayMember: "codmp", width: 200, height: 25
                });
                $("#codmp").on('select', function (event) {
                    if (event.args) {
                        var item = event.args.item;
                        if (item) {
                            var cod = item.value;
                            for (var i = 0; i < mps.length; i++) {                            
                                if (cod == mps[i].cod) {
                                    $('#descmp').val(mps[i].desc);
                                    $('#fornecmp').val(mps[i].fornec);
                                    $('#codfornecmp').val(mps[i].codfor);
                                }
                            }
                        }
                    }
                });
            });
        </script>
        <fieldset>
        <form>
        <table>
        <tr>    
            <label for="codmp">Codigo da Matéria-Prima</label><br>
            <input type="text" id="codmp" name="codmp" size="20"><br>
            <label for="descmp">Descrição da Matéria-Prima</label><br>
            <textarea name="descmp" id="descmp" maxlength="500" rows="6" cols="60" placeholder="Descrição da Matéria-Prima"></textarea><br>
            <label for="fornecmp">Fornecedor da Matéria-Prima</label><br>
            <input type="text" id="fornecmp" name="fornecmp" value="" size="20" placeholder="Nome do Fornec."><br>
            <label for="codfornecmp">Código do Fornecedor</label><br>
            <input type="text" id="codfornecmp" name="codfornecmp" value="" size="20" placeholder="Código do Fornec.">
        </tr>        
        <tr>
            <td>        
                <input type="submit" value="Gravar">
            </td>
            <td>
                <input type="button" value="Deletar">
            </td>
        </tr>
        </table>    
        </form>
        </fieldset>
        <div id="selectionlog"></div>
    </div>
</body>
</html>
