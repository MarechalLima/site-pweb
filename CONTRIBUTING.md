
# Como contribuir
1. Vá até o quadro de issues e escolha uma para mexer, caso tenha alguma issue a acrescentar, acrescente no quadro
2. Marque a issue como "doing"
3. Verificar em qual branch você vai mexer
4. Mudar seu ambiente de trabalho para a branch(git checkout ou dois cliques no nome da branch se estiver no git kraken)
5. Sincronizar o repositorio logal(git pull)
6. Caso o ultimo commit da branch tenha sido um merge com a master e ela esteja desatualizada, realizar "merge origin/master into 'nome-da-branch' "
7. Fazer as alterações desejadas
8. Realizar os commits com as alterações feitas
9. Realizar o push para o repositório remoto pela branch utilizada
10. Por fim, caso tenha finalizado a issue, faça um git merge da branch utilizada com a master diretamente pelo site do GitLab. 


# Branchs
1. Master
	* Branch principal, não realize commits e pushs diretamente nela
2. Corretor
	* Branch para realizar edições no corretor (corretor.php e possiveis outros arquivos criados para o corretor)
3. Email
	* Branch para fazer alterações nos arquivos referentes ao envio de emails(email.php)
4. Historico
	* Branch referente a parte do histórico de envios(historico.php, enviando.php, historico.json)
5. Materialize
	* Branch criada para instalar o MaterializeCSS no projeto, não deve precisar ser usada, apenas para corrigir bugs
6. Navbar
	* Referente ao menu superior(supmenu.php)
7. Login
	* Brach utilizada para editar ações de login no site(index.php, login.php e logout.php)