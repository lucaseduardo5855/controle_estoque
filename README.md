# 📦 Controle de Estoque - CRUD (Laravel)

Este é um projeto acadêmico de **Controle de Estoque (CRUD)** desenvolvido com o framework Laravel. O objetivo principal é fornecer uma interface simples e eficiente para gerenciar produtos, quantidades, unidades de medida, preços e alertar automaticamente sobre níveis de estoque crítico (baixo ou em falta).

---

## 🚀 Funcionalidades Principais

- **CRUD de Produtos**: Cadastro, listagem, edição e exclusão de produtos.
- **Controle Dinâmico de Status**: O status do produto (Ex: `OK`, `BAIXO`, `EM FALTA`) é atualizado dinamicamente com base na quantidade em estoque versus o estoque mínimo configurado.
- **Banco de Dados Flexível**: Configurado para uso com SQLite por padrão (ideal para desenvolvimento rápido), mas facilmente adaptável para MySQL/PostgreSQL.

---

## 🛠️ Tecnologias Utilizadas

- **Backend:** Laravel 11.x (PHP 8.2+)
- **Frontend:** Blade Templates (Laravel), Bootstrap (CSS) e Vite (para empacotamento de assets)
- **Banco de Dados:** SQLite (padrão de desenvolvimento)

---

## 🔒 Segurança & Boas Práticas (GitHub)

Para garantir a segurança do seu projeto ao subir no GitHub, as seguintes medidas foram aplicadas:

1. **Proteção de Credenciais**: O arquivo `.env` (que armazena chaves de segurança e credenciais de banco de dados) foi adicionado ao `.gitignore` e não será enviado ao repositório público.
2. **Ignorar Dependências**: As pastas `vendor/` e `node_modules/` estão listadas no `.gitignore` para evitar o upload desnecessário de milhares de arquivos de bibliotecas de terceiros.
3. **Ignorar Bancos de Dados**: Os arquivos de banco de dados SQLite (`database/database.sqlite`, `controle_estoque`, `laravel`, etc.) também estão ignorados para evitar que seus dados de testes sejam expostos no GitHub.

---

## ⚙️ Como Executar o Projeto Localmente

Siga o passo a passo abaixo para rodar o projeto na sua máquina:

### 1. Pré-requisitos
Certifique-se de ter instalado em sua máquina:
- PHP (versão 8.2 ou superior)
- Composer
- Node.js & NPM

### 2. Clonar o Repositório
```bash
git clone https://github.com/SEU_USUARIO/NOME_DO_REPOSITORIO.git
cd crud-controleestoque
```

### 3. Instalar Dependências do PHP (Composer)
```bash
composer install
```

### 4. Instalar e Compilar Dependências de Frontend (NPM)
```bash
npm install
npm run dev
```

### 5. Configurar o Arquivo de Ambiente (`.env`)
Copie o arquivo de exemplo para o arquivo `.env`:
```bash
cp .env.example .env
```
*(No Windows PowerShell, use: `copy .env.example .env`)*

### 6. Gerar a Chave da Aplicação Laravel
```bash
php artisan key:generate
```

### 7. Configurar e Executar o Banco de Dados
Certifique-se de que a configuração do banco de dados no `.env` esteja correta. Se utilizar SQLite, crie o arquivo de banco de dados vazio caso ele não exista:
```bash
# No Linux/macOS:
touch database/database.sqlite

# No Windows PowerShell:
New-Item -ItemType File -Path database/database.sqlite -Force
```
Em seguida, execute as migrações:
```bash
php artisan migrate
```

### 8. Iniciar o Servidor de Desenvolvimento
```bash
php artisan serve
```

Acesse a aplicação no navegador em: **[http://localhost:8000](http://localhost:8000)**

---

## 🎓 Projeto Acadêmico
Desenvolvido como parte das atividades da faculdade.
