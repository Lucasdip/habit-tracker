<h1>📝 Habit Tracker - Laravel Edition <h1>
O Habit Tracker é um sistema robusto para gerenciamento e acompanhamento de hábitos diários. Desenvolvido com Laravel, o projeto foca em ajudar usuários a manterem a consistência em suas rotinas através de uma interface intuitiva e métricas de progresso.

✨ Funcionalidades
📅 Registro de Hábitos: Crie e personalize seus próprios hábitos (frequência, nome e categoria).

📊 Dashboard de Progresso: Visualize streaks (sequências) e taxas de conclusão.

🔔 Lembretes Automáticos: Notificações para garantir que você não esqueça suas metas.

📱 Interface Responsiva: Totalmente adaptado para uso em dispositivos móveis.

🔐 Autenticação Segura: Sistema de login e registro integrado.

🛠️ Tecnologias Utilizadas
Este projeto utiliza o que há de mais moderno no ecossistema PHP/Laravel:

Framework: Laravel 11

Frontend: Blade ou [Inertia.js/Livewire] + Tailwind CSS

Banco de Dados: MySQL / PostgreSQL / SQLite

Cache/Queue: Redis

🚀 Como Instalar e Rodar o Projeto
Siga os passos abaixo para configurar o ambiente em sua máquina local:

1. Clonar o Repositório
Bash
git clone https://github.com/seu-usuario/habit-tracker.git
cd habit-tracker
2. Instalar Dependências
Bash
composer install
npm install && npm run build
3. Configuração do Ambiente
Crie o arquivo de ambiente e gere a chave da aplicação:

Bash
cp .env.example .env
php artisan key:generate
Nota: Não esqueça de configurar as credenciais do seu banco de dados no arquivo .env.

4. Migrações e Seeders
Crie as tabelas no banco de dados:

Bash
php artisan migrate
5. Iniciar o Servidor
Bash
php artisan serve
Acesse: http://localhost:8000

🏗️ Estrutura de Banco de Dados
Para entender como os dados estão organizados:

📈 Roadmap / Próximos Passos
[ ] Implementar Gamificação (Badges e Pontuação).

[ ] Exportação de relatórios em PDF/CSV.

[ ] Integração com Google Calendar.

[ ] Aplicativo Mobile usando Flutter ou React Native.

🤝 Contribuição
Contribuições são o que fazem a comunidade open source um lugar incrível para aprender, inspirar e criar.

Faça um Fork do projeto.

Crie uma Branch para sua feature (git checkout -b feature/NovaFeature).

Dê um Commit nas suas alterações (git commit -m 'Add: Nova Feature').

Faça um Push para a Branch (git push origin feature/NovaFeature).

Abra um Pull Request.