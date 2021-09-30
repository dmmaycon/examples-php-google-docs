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
