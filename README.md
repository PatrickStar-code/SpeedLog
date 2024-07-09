# SPEEDLOG
## REQUISITOS DO SISTEMA

A SpeedLog é uma empresa que oferece serviços de entrega rápida utilizando o serviço de motoboys em Juiz de Fora. A missão da SpeedLog é fortalecer o comércio local, oferecendo soluções que facilitem e agilizem o transporte de mercadorias. Atualmente, o atendimento é feito por telefone e funciona da seguinte forma:

1. **O cliente liga para a SpeedLog e conversa com uma atendente.**
2. **O cliente informa o peso estimado da mercadoria, CEP da retirada e CEP de entrega da mercadoria.**
3. **O atendente consulta às três tabelas abaixo para calcular o valor do frete:**

   - **Peso da mercadoria:**
     - Menos de 1Kg: R$3,00
     - Entre 1Kg e 3Kg: R$5,00
     - Entre 3Kg e 8Kg: R$9,00
     - Entre 8Kg e 12Kg: R$12,00
     - Acima de 12Kg: Não é possível transportar

   - **Distância:**
     - 1 Km rodado: R$0,50

   - **Tempo de deslocamento:**
     - 1 minuto de deslocamento: R$0,30

4. **O valor do frete é a soma de cada uma das informações: peso, distância e tempo.**
   - Exemplo: uma mercadoria de 7Kg custa R$9,00 (valor por peso). A distância de entrega é 10 Km, o que custa R$5,00. O tempo de deslocamento é 10 min, que custa R$3,00. Portanto, o valor total do frete é R$17,00.

Todo esse processo é feito de acordo com o conhecimento dos atendentes, pois o tempo de entrega e distância são calculados hoje por estimativa. A empresa tem atendido muitos clientes por telefone e não tem sido possível atender a todos de forma rápida.

### Projeto de Sistema

Você e sua equipe foram contratados para resolver o problema do atendimento e cálculo do preço de frete. Para isso, seu sistema deverá fornecer as seguintes funcionalidades:

1. **Armazenamento dos parâmetros de cálculo do valor do frete (peso, distância e tempo) no banco de dados, de forma que seja possível editá-los quando necessário.**
2. **Interface do administrador com acesso restrito por senha, onde será possível visualizar todas as entregas registradas e seus status (agendada, em andamento, finalizada).**
3. **Interface para acesso do usuário com acesso restrito por senha:**
   - Novo cliente pode se cadastrar a qualquer tempo.
   - Solicitação de transporte e acompanhamento de todas as solicitações.
   - Visualização de detalhes do transporte (nome e foto do motoboy, horário de início, horário previsto para entrega e valor do frete).
   - Acesso pelo smartphone (responsividade).

4. **Interface do motoboy com acesso restrito por senha:**
   - Visualização das solicitações em aberto e escolha das entregas que deseja atender.
   - Registro de informações do motoboy no sistema (nome completo, CPF, telefone de contato, placa da moto e foto do rosto).
   - Recebimento de 70% do total da corrida realizada.
   - Visualização das corridas aceitas e sinalização de entrega realizada.
   - Acesso pelo smartphone (responsividade).

### Tecnologias

- HTML, CSS, JavaScript, Tailwind, JQuery, PHP, CodeIgniter, MySQL.


## COMO UTILIZAR
Infelizmente devido o uso de api paga do google o sistema nao esta funcionando,caso deseje utilizar solicito a troca das keys da api do google e distance matrix<br>
#### Pesquisando API na componente NavbarUsuario.
##### Exemplo que se encontra no código:

![image](https://github.com/PatrickStar-code/SpeedLog/assets/89866722/c905810d-e47c-49a4-a109-2d2f4ed835fa)

#### E na área de Google API no componente Top
###### Exemplo que se encontra no código:

![image](https://github.com/PatrickStar-code/SpeedLog/assets/89866722/70c57a80-3484-4aa2-ac0b-c5f2298271fd)
## Funções perdidas no sistema
##### Devido a perda email organizacional do senai devido minha formatura não sera possivel utilizar a função de recuperar senha 
