<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
Cadastro do Produto
COD_ITEM
DESCR_ITEM
COD_BARRA
COD_ANT_ITEM
UNID_INV
TIPO_ITEM
    00 – Mercadoria para Revenda;
    01 – Matéria-Prima;
    02 – Embalagem;
    03 – Produto em Processo;
    04 – Produto Acabado;
    05 – Subproduto;
    06 – Produto Intermediário;
    07 – Material de Uso e Consumo;
    08 – Ativo Imobilizado;
    09 – Serviços;
    10 – Outros insumos;
COD_NCM
EX_IPI
COD_GEN (Código do gênero do item, conforme a Tabela 4.2.1)
COD_LST (Código do serviço conforme lista do Anexo I da Lei Complementar Federal no 116/03.)
ALIQ_ICMS

Observações:
1. O Código do Item deverá ser preenchido com as informações utilizadas na última ocorrência do período.
2. O campo COD_NCM é obrigatório:
2.1) para empresas industriais e equiparadas a industrial, referente aos itens correspondentes à atividade
fim, ou quando gerarem créditos e débitos de IPI;
2.2) para contribuintes de ICMS que sejam substitutos tributários;
2.3) para empresas que realizarem operações de exportação ou importação.”
3. Não existe COD-NCM para serviços.
4. O campo COD_GEN é obrigatório a todos os contribuintes somente na aquisição de produtos primários
Nível hierárquico - 2
Ocorrência - vários (por arquivo)
Campo 01 - Valor Válido: [0200]
Campo 02 - Preenchimento: informar com códigos próprios do informante do arquivo os itens das operações de entradas
de mercadorias ou aquisições de serviços, bem como das operações de saídas de mercadorias ou prestações de serviços,
bem como dos produtos e subprodutos gerados no processo produtivo.
Validação: o valor informado neste campo deve existir em pelo menos um registro dos demais blocos ou no registro 0220.
Campo 03 - Preenchimento: são vedadas descrições diferentes para o mesmo item ou descrições genéricas, ressalvadas as
operações abaixo, desde que não destinada à posterior circulação ou apropriação na produção:
1- de aquisição de "materiais para uso/consumo" que não gerem direitos a créditos;
2- que discriminem por gênero a aquisição de bens para o "ativo fixo" (e sua baixa);
3- que contenham os registros consolidados relativos aos contribuintes com atividades econômicas de
fornecimento de energia elétrica, de fornecimento de água canalizada, de fornecimento de gás canalizado e de prestação de
serviço de comunicação e telecomunicação que poderão, a critério do Fisco, utilizar registros consolidados por classe de
consumo para representar suas saídas ou prestações.
É permitida a modificação da descrição, desde que não implique descaracterização do produto. Neste caso, o
campo deve ser preenchido com a atual descrição utilizada no período. As descrições substituídas devem ser informadas
nos registros 0205.
Campo 04 - Preenchimento: informar o código GTIN-8, GTIN-12, GTIN-13 ou GTIN-14 (antigos códigos EAN, UPC e
DUN-14). Não informar o conteúdo do campo se o produto não possui este código.
Campo 05 - Não preencher. Se houver a informação, esta deve ser prestada no registro 0205.
Campo 06 - Validação: Deve existir no registro 0190, campo UNID.
Campo 07 - Preenchimento: informar o tipo do item aplicável. Nas situações de um mesmo código de item possuir mais
de um tipo de item (destinação), deve ser informado o tipo de maior relevância.
Deve ser informada a destinação inicial do produto, considerando-se os conceitos:
00 - Mercadoria para revenda – produto adquirido para comercialização;
01 – Matéria-prima: a mercadoria que componha, física e/ou quimicamente, um produto em processo ou produto
acabado e que não seja oriunda do processo produtivo. A mercadoria recebida para industrialização é classificada
como Tipo 01, pois não decorre do processo produtivo, mesmo que no processo de produção se produza
mercadoria similar classificada como Tipo 03;
03 – Produto em processo: o produto que possua as seguintes características, cumulativamente: oriundo do
processo produtivo; e, preponderantemente, consumido no processo produtivo. Dentre os produtos em processo
está incluído o produto resultante caracterizado como retorno de produção. Um produto em processo é
caracterizado como retorno de produção quando é resultante de uma fase de produção e é destinado, rotineira e
exclusivamente, a uma fase de produção anterior à qual o mesmo foi gerado. No “retorno de produção”, o produto
retorna (é consumido) a uma fase de produção anterior à qual ele foi gerado. Isso é uma excepcionalidade, pois o
normal é o produto em processo ser consumido em uma fase de produção posterior à qual ele foi gerado, e
acontece, portanto, em poucos processos produtivos.
04 – Produto acabado: o produto que possua as seguintes características, cumulativamente: oriundo do processo
produtivo; produto final resultante do objeto da atividade econômica do contribuinte; e pronto para ser
comercializado;
05 - Subproduto: o produto que possua as seguintes características, cumulativamente: oriundo do processo
produtivo e não é objeto da produção principal do estabelecimento; tem aproveitamento econômico; não se
enquadre no conceito de produto em processo (Tipo 03) ou de produto acabado (Tipo 04);
06 – Produto intermediário - aquele que, embora não se integrando ao novo produto, for consumido no processo de
industrialização;
Valores válidos: [00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 99]
Campo 08 – Preenchimento: para as empresas industriais ou equiparadas é obrigatório informar o Código NCM,
conforme a Nomenclatura Comum do MERCOSUL. Não existe COD-NCM para serviços.
Para as demais empresas, é obrigatória a informação da NCM para os itens importados, exportados ou, no caso de
substituição tributária, para os itens sujeitos à substituição, quando houver a retenção do ICMS.
Validação: o preenchimento do campo é obrigatório se o campo IND_ATIV do registro 0000 for igual a “0” (zero)
(industrial ou equiparado a industrial), mas apenas para os itens correspondentes à atividade fim ou quando gerarem
créditos e débitos de IPI. Fica dispensado o preenchimento deste campo, quando o tipo de item informado no campo
TP_ITEM for igual a 07 - Material de Uso e Consumo; ou 08 – Ativo Imobilizado; ou 09 -Serviços; ou 10 - Outros
insumos; ou 99 - Outras.
Campo 09 - Preenchimento: informar com o Código de Exceção de NCM, de acordo com a Tabela de Incidência do
Imposto de Produtos Industrializados (TIPI), quando existir.
Campo 10 - Preenchimento: obrigatório para todos os contribuintes na aquisição de produtos primários. A Tabela
"Gênero do Item de Mercadoria/Serviço", referenciada no Item 4.2.1 do Ato COTEPE/ICMS no 09, de 18 de abril de 2008,
corresponde à tabela de "Capítulos da NCM", acrescida do código "00 - Serviço".
Validação: o valor informado no campo deve existir na Tabela “Gênero do Item de Mercadoria/Serviço”, item 4.2.1 do
Ato COTEPE/ICMS no 09, de 18 de abril de 2008.
Campo 11 - Preenchimento: informar o código de serviços, de acordo com a Lei Complementar 116/03.
Campo 12 - Preenchimento: neste campo deve ser informada a alíquota interna prevista em regulamento.

REGISTRO 0205: ALTERAÇÃO DO ITEM
Este registro tem por objetivo informar alterações ocorridas na descrição do produto ou quando ocorrer alteração
na codificação do produto, desde que não o descaracterize ou haja modificação que o identifique como sendo novo produto.
Caso não tenha ocorrido movimentação no período da alteração do item, deverá ser informada no primeiro período em que
houver movimentação do item ou no inventário.
Não podem ser informados dois ou mais registros com sobreposição de períodos para o mesmo campo alterado (02
ou 05).
DESCR_ANT_ITEM
DT_INI
DT_FIM
COD_ANT_ITEM

Observações: Os campos 02 e 05 são mutuamente excludentes, sendo obrigatório o preenchimento de um deles. Em caso de
alteração da DESCR_ANT_ITEM e do COD_ANT_ITEM deverá ser gerado um registro para cada alteração.
Nível hierárquico - 3
Ocorrência - 1:N
Campo 03 - Preenchimento: informar a data inicial de utilização da descrição anterior do item.
Validação: o valor informado no campo deve ser uma data válida no formato “ddmmaaaa”.
Campo 04 - Preenchimento: informar o período final de utilização da descrição anterior do item.
Validação: o valor informado no campo deve ser uma data válida, obedecido o formato “ddmmaaaa”. O valor informado
no campo deve ser menor que o valor no campo DT_FIN do registro 0000.

REGISTRO 0210: CONSUMO ESPECÍFICO PADRONIZADO
Este registro deve ser apresentado pelos estabelecimentos industriais ou a eles equiparados pela legislação federal.
Atacadistas obrigados à apresentação do bloco K não estão obrigados à apresentação deste registro.
Deve ser informado o consumo específico padronizado e a perda normal percentual de um insumo/componente
para se produzir uma unidade de produto resultante, segundo as técnicas de produção de sua atividade, referentes aos
produtos que foram fabricados pelo próprio estabelecimento ou por terceiro.
Este registro somente deve existir quando o conteúdo do campo 7 - TIPO_ITEM do Registro 0200 for igual a 03
(produto em processo) ou 04 (produto acabado).
Se existirem insumos interdependentes (insumos em que o aumento da participação de um resulta em diminuição
da participação de outro ou outros) deverá ser eleito um insumo de cada grupamento interdependente para informação do
total de consumo específico padrão ou perda normal percentual do conjunto de insumos que representa (na unidade do
insumo eleito). Os demais insumos do grupamento interdependente serão considerados substitutos e deverão ser
informados somente nos Registros K235 ou K255 com a informação do insumo substituído.
A unidade de medida é, obrigatoriamente, a de controle de estoque constante no registro 0200 – campo
UNID_INV.
Não podem ser informados dois ou mais registros com o mesmo campo COD_ITEM do Registro 0200 e o mesmo
campo COD_ITEM_COMP.

COD_ITEM_COMP
QTD_COMP
PERDA
 
Campo 01 - Valor Válido: [0210]
Campo 02 – Validações:
a) o código do componente/insumo deverá existir no campo COD_ITEM do Registro 0200;
b) o código do item componente/insumo deve ser diferente do código do produto resultante - Reg. 0200 correspondente ao
nível hierárquico superior ao Registro 0210 que se declara.
Campo 03 – Preenchimento: deverá ser preenchido tendo como base a quantidade bruta de insumo a ser consumida por
unidade do item composto, considerando-se apenas a perda normal do processo industrial;
Campo 04 - Preenchimento: a perda ou quebra normal percentual refere-se à parte do insumo que não se transformou em
produto resultante. Este campo depende da eficiência dos processos de cada contribuinte. Não se incluem neste campo fatos
como inundações, perecimento por expiração de validade, deterioração e quaisquer situações que impliquem a diminuição
da quantidade em estoque sem relação com o processo produtivo do contribuinte.

 
*/
