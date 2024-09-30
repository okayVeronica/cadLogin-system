# cadLogin-system

![Logo do Projeto]

## Sumário
1. [Introdução](#introdução)
2. [Descrição do Projeto](#descrição-do-projeto)
3. [Sobre a Atividade](#sobre-a-atividade)
4. [Tecnologias Utilizadas](#tecnologias-utilizadas)
5. [Funcionalidades](#funcionalidades)
6. [Perfis de Usuários](#perfis-de-usuários)
7. [Instalação e Configuração](#instalação-e-configuração)
8. [Uso do Sistema](#uso-do-sistema)
9. [Fontes Consultadas](#fontes-consultadas)
10. [Autores](#autores)

---

## Introdução
Este projeto tem como objetivo criar uma plataforma simples e segura para gerenciar o acesso de usuários. Usando PHP no backend e MySQL para armazenar as informações, o sistema oferece uma maneira eficiente de cadastrar novos usuários e fazer o login de forma segura. As senhas são criptografadas para garantir a segurança, e cada usuário pode acessar diferentes áreas do sistema com base no seu perfil, como administrador, gestor ou colaborador. Tudo foi pensado para ser prático e funcional, mantendo os dados protegidos e o sistema fácil de usar.


### Principais Destaques:
- **Segurança**: Criptografia de senhas e sessões seguras.
- **Flexibilidade**: Gerenciamento de diferentes perfis de usuário.
- **Escalabilidade**: Estrutura pronta para futuras expansões.

---

## Descrição do Projeto
Este sistema foi projetado para gerenciar três perfis de usuários distintos, cada um com suas permissões e funcionalidades:

- **Admin**: Acesso completo ao sistema.
- **Gestor**: Permissões intermediárias.
- **Colaborador**: Acesso limitado.

Todos os usuários têm suas senhas armazenadas de forma segura, utilizando a função `password_hash()` do PHP.

---

## Sobre a Atividade
Este projeto foi criado em sala de aula com o professor Leonardo Rocha, focando no desenvolvimento de sistemas e na segurança da informação. As competências abordadas incluem:

- **Programação Orientada a Objetos**
- **Interação com Banco de Dados**
- **Padrão MVC**
- **Gerenciamento de Sessões**

---

## Tecnologias Utilizadas

| Tecnologia          | Descrição                                                               |
|---------------------|-----------------------------------------------------------------------|
| **PHP 7+**          | Linguagem de programação utilizada para implementar o backend.       |
| **MySQL**           | Banco de dados relacional para armazenar os dados dos usuários.       |
| **HTML5**           | Linguagem de marcação utilizada para estruturar as páginas.          |
| **CSS3**            | Linguagem de estilo utilizada para a apresentação visual das páginas. |
| **PDO**             | Interface para acessar bancos de dados de forma segura e eficiente.   |
| **Bootstrap**       | Framework opcional para design responsivo e moderno.                  |

---

## Funcionalidades

### 1. Autenticação de Usuários
- **Login Seguro**: Validação de credenciais com hash de senha.
- **Gerenciamento de Sessões**: Proteção de sessões ativas.

### 2. Cadastro de Usuários
- **Perfis de Acesso**: Admin, Gestor, Colaborador.
- **Criptografia de Senhas**: Proteção das informações dos usuários.

### 3. Controle de Perfis
- Cada perfil tem permissões específicas, adaptando-se às necessidades dos usuários.

### 4. Redirecionamento Inteligente
- O sistema redireciona o usuário para a página correspondente ao seu perfil após o login.

---

## Perfis de Usuários

### 1. Admin
- Acesso total para gerenciar usuários e configurações do sistema.

### 2. Gestor
- Permissão para revisar e gerenciar colaboradores.

### 3. Colaborador
- Acesso limitado, focado em funções específicas do dia a dia.

---

## Instalação e Configuração

### Pré-requisitos
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor local (XAMPP, WAMP, MAMP, etc.)

### Clonar o Repositório
Clone o repositório em sua máquina local:
```bash
git clone https://github.com/seuusuario/sistema_autenticacao.git
```
---
## Uso do Sistema
  ### 1-Login:
 - Acesse a página de login através do navegador. Utilize suas credenciais de acesso para logar no sistema.

  ### Cadastro de Novos Usuários:
 - Na página de cadastro, insira um novo nome, email, senha e perfil de usuário. O sistema irá armazenar suas informações de forma segura no banco de dados.

  ### Perfis e Redirecionamento:
 - Dependendo do perfil do usuário, ele será redirecionado para diferentes páginas após o login.

  ### Gerenciamento de Sessões:
 - Ao sair do sistema, a sessão do usuário será destruída, garantindo que o próximo acesso necessite de uma nova autenticação.

---

## Considerações Finais
 - Este projeto está em desenvolvimento e novas funcionalidades serão adicionadas nas proximas aulas.

## Fontes Consultadas
- [Leonardo Rocha](https://github.com/LeonardoRochaMarista)
- [chatGPT](https://openai.com/chatgpt/)

## Autores
- [Verônica Borges](https://github.com/okayVeronica)
- [Leonardo Rocha](https://github.com/LeonardoRochaMarista)
