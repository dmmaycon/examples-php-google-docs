# examples-php-google-docs

Documentação https://developers.google.com/docs/api/quickstart/php

1 - Primeiro passo criar um projeto dentro do Google Cloud
![image](https://user-images.githubusercontent.com/20804563/135532721-65233399-acd9-4507-923a-9b71ebcc302b.png)

2 - Ativiar a API do Google Sheets
![image](https://user-images.githubusercontent.com/20804563/135532956-82ccfc92-88b0-410d-b53c-60fd4eaffa63.png)

3 - Google Sheets API Ativada no projeto escolhido na etapa 1
![image](https://user-images.githubusercontent.com/20804563/135533292-e60b53fd-95f7-4002-bb0b-6fec7df593a7.png)

4 - Criar as credenciais de acesso
![image](https://user-images.githubusercontent.com/20804563/135533555-c5053f11-c744-4967-8ebe-4b220ca9d359.png)

5 - Conta de serviço criado
![image](https://user-images.githubusercontent.com/20804563/135533666-6c7d6471-c6b6-45a6-9565-09ba39a5ab9f.png)

6 - Criar chave de acesso para a conta de serviço criada. Utilizar o formato JSON e baixar-lá
![image](https://user-images.githubusercontent.com/20804563/135533870-c937801a-cabf-4309-9916-7fb6e0322207.png)

7 - Compartilhar a planinha com o e-mail da conta de serviço criado no passo 5
![image](https://user-images.githubusercontent.com/20804563/135534113-f86e4094-a71f-465f-b639-f6b549effa68.png)

8 - Criar o projeto php e utilizar o composer para instalar o Client do Google
```shell
composer require google/apiclient:^2.0
```
9 - Rodar o código do app.php

# Resultados do código Exemplo:

1 - Busca as informações da planilha modelo
![image](https://user-images.githubusercontent.com/20804563/135541368-051a4c2c-6823-465e-b0f6-1e0e0561d213.png)

2 - Calcula as informações pedidas: 
![image](https://user-images.githubusercontent.com/20804563/135541424-f837e543-0f3c-4fcd-adbc-09c63b6f7300.png)

3 - Loga no console as informações e altera a planilha original após a execução do script
```shell
--------------------------------------------
Matricula: 1
Aluno: Eduardo
Faltas: 8
P1: 35
P2: 63
P3: 61
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 2
Aluno: Murilo
Faltas: 8
P1: 64
P2: 97
P3: 36
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 3
Aluno: Guilherme
Faltas: 19
P1: 68
P2: 74
P3: 51
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 4
Aluno: Flavia 
Faltas: 23
P1: 66
P2: 98
P3: 62
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 5
Aluno: Ruan
Faltas: 13
P1: 80
P2: 65
P3: 41
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 6
Aluno: Arnando
Faltas: 23
P1: 83
P2: 68
P3: 77
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 7
Aluno: Lucas
Faltas: 5
P1: 38
P2: 53
P3: 80
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 8
Aluno: Fabio
Faltas: 10
P1: 53
P2: 96
P3: 89
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Aprovado
Nota para Aprovação: 0
--------------------------------------------
Matricula: 9
Aluno: Alisson
Faltas: 15
P1: 45
P2: 61
P3: 68
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 10
Aluno: Felipe
Faltas: 12
P1: 32
P2: 41
P3: 85
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 11
Aluno: Rachel
Faltas: 11
P1: 84
P2: 66
P3: 39
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 12
Aluno: Jouy
Faltas: 13
P1: 42
P2: 93
P3: 57
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 13
Aluno: François
Faltas: 19
P1: 59
P2: 87
P3: 89
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 14
Aluno: Dâmaris
Faltas: 10
P1: 44
P2: 50
P3: 62
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 7
--------------------------------------------
Matricula: 15
Aluno: Leonardo
Faltas: 16
P1: 83
P2: 92
P3: 32
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 16
Aluno: Guilherme 
Faltas: 6
P1: 36
P2: 38
P3: 76
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Exame Final
Nota para Aprovação: 6
--------------------------------------------
Matricula: 17
Aluno: Wesley
Faltas: 16
P1: 41
P2: 52
P3: 87
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 18
Aluno: Yuri
Faltas: 2
P1: 87
P2: 75
P3: 50
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Aprovado
Nota para Aprovação: 0
--------------------------------------------
Matricula: 19
Aluno: Kira
Faltas: 8
P1: 36
P2: 46
P3: 48
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por nota
Nota para Aprovação: 0
--------------------------------------------
Matricula: 20
Aluno: Cleici
Faltas: 22
P1: 91
P2: 88
P3: 92
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 21
Aluno: João Moacir
Faltas: 23
P1: 38
P2: 90
P3: 98
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Reprovado por Falta
Nota para Aprovação: 0
--------------------------------------------
Matricula: 22
Aluno: Bruno
Faltas: 15
P1: 96
P2: 37
P3: 100
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Aprovado
Nota para Aprovação: 0
--------------------------------------------
Matricula: 23
Aluno: Elcio
Faltas: 9
P1: 73
P2: 71
P3: 75
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Aprovado
Nota para Aprovação: 0
--------------------------------------------
Matricula: 24
Aluno: Criscia
Faltas: 0
P1: 50
P2: 95
P3: 84
Situação: 
Nota para Aprovação: 
----------- Calculo Efetuado -----------------------
Situação: Aprovado
Nota para Aprovação: 0
```
4 - Resultado da planilha atualizada
![image](https://user-images.githubusercontent.com/20804563/135541561-950d429d-4032-4299-898d-f4c2b99f6238.png)



