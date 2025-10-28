O propósito do padrão Facade é isolar as funcionalidades externas em relação à aplicação principal. 
Raramente se desenvolve um sistema sem o uso de bibliotecas de terceiros para atividades específicas. 
No entanto, como a evolução ou a correção dessas bibliotecas externas não está sob o controle direto do desenvolvedor, é necessário um cuidado especial ao integrá-las.
O Facade como um "Escudo" (Shield)O Facade atua como um "escudo" por duas razões principais:Sem Facade: Se as chamadas à biblioteca externa estiverem espalhadas em vários locais da aplicação, qualquer atualização, mudança de API ou substituição dessa biblioteca se torna uma tarefa complexa e propensa a erros.
Com Facade: Ao criar uma camada Facade, as chamadas são concentradas em um único ponto (essa classe). 
Isso torna a manutenção e as atualizações muito mais fáceis, pois apenas essa classe Facade precisará ser alterada para se adaptar à nova versão da biblioteca externa.
