**Ideias do projeto**

\*Criar uma api que a pessoa escolhe o modelo de relatório que ele quiser e envia um array com os
dados, nele deve conter os headers do relatório como um array e cada header deve ser também um índice para um outro array no seguinte formato

    //padrao de entrada dos dados do relatório

{
"title": "Relatório de produtos",
"subtitle": "subtitulo",
"model": "r1",
"format": "pdf"

"headers": [
"nome do produto",
"descricao",
"preço",
"quantidade"
],
"data": [
["ovo", "dúzia", 5, 200],
["mandioca", "da terra", 3, 30]
],
}

    //Padrão de retorno do relatório

    [

{
"dados enviados": [
{
"title": "titulo do relatório"
},
{
"format": "pdf"
},
{
"headers": [
"nome do produto",
"descricao",
"preço",
"quantidade"
]
}
]
},
{
"relatorio":"cod em base 64 aqui que seria o pdf"
},
{
"dados do relatorio": [
{
"hora de cricao": "timestamp de criacao"
},
{
"total de registros": "2"
}
]
}
]

\*A principío deve ter uma rota de post e enviar o json no corpo do requisição

#passo 01 contruir o teste unitário da classe geradora de relatórios, para o mvp só ela bem básica

#passo 02 Construir o test de feature do meu controllador da api

#passo 03 contruir a classe geradora do relatório

#passo 04 contruir o controller que retorna o relatório

#passo 05 instalar o dompdf ou alguma lib q gere pdf

#passo 06 contruir o template do relatório básico

#passo 07 testar como ele vai ficar visualmente

#passo 08 testar a classe de geração de relatórios

#passo 09 testar o endpoint se está funcionando
