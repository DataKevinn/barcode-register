# 📦 Cadastro de Produtos via Scanner com SQL  

Este projeto permite cadastrar produtos automaticamente em um banco de dados SQL utilizando um scanner de código de barras. Ele é composto por duas interfaces: uma para leitura dos códigos e outra para complementar os dados do produto.  

## 🛠️ Funcionalidades  

✅ **Leitura de códigos de barras**: Captura os códigos via scanner e os armazena temporariamente no banco de dados.  
✅ **Cadastro e atualização de produtos**: Interface para completar informações como nome, quantidade e valor do produto.  
✅ **Banco de dados SQL**: Registros armazenados e atualizados em um banco de dados SQL para melhor organização.  
✅ **Interface simples e responsiva**: Layout intuitivo para facilitar a operação tanto no computador quanto em dispositivos móveis.  

## 📂 Estrutura do Projeto  

- `scanner.html` → Página que recebe e salva os códigos de barras automaticamente.  
- `celular.html` → Página para complementar os dados do produto associado ao código de barras.  
- `salvar_codigo.php` → Script PHP para armazenar os códigos no banco de dados.  
- `ultimo_registro.php` → Busca o último código escaneado que ainda não foi cadastrado.  
- `atualizar_registro.php` → Atualiza os dados do produto no banco de dados.  

## 🚀 Como Usar  

1️⃣ Acesse `scanner.html` e utilize um leitor de código de barras para registrar um novo código.  
2️⃣ Em seguida, vá para `celular.html` e preencha as informações adicionais do produto.  
3️⃣ Clique em "Salvar Dados" para armazenar as informações no banco de dados.  

## 📌 Tecnologias Utilizadas  

- HTML, CSS e JavaScript para a interface do usuário  
- PHP para comunicação com o banco de dados  
- MySQL para armazenar os registros dos produtos  

💡 **Sugestão:** Você pode expandir este projeto adicionando suporte para múltiplos usuários ou relatórios de produtos cadastrados.  

🔗 **Licença**: Projeto open-source, sinta-se livre para contribuir!  
