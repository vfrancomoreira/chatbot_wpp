# <b>Chat de atendimento automático - WhatsApp</b>
Use o WhatsApp automatizado que pode ser usado em delivery ou entrega de conteúdo do marketing digital.Usando API e PHP integrado ao Python com a biblioteca Selenium e Requests.<br><br>

## <b>Indíce</b>
- [O que é o sistema?](#o-que-é-este-sistema)

- [Configurações](#configurações)
    - [Python](#python)
    - [WebDriver](#webdriver)
    - [XIAMPP](#xampp)

- [Importações](#importações)

- [Funcionamento do sistema](#funcionamento-do-sistema)
    - [Abrindo o navegador](#1-abrir-o-site-do-whatsapp)
    - [Clicando no círculo verde](#círculo-de-notificação-verde)
    - [Recuperar o telefone do cliente](#recuperar-o-telefone-do-cliente)
    - [Recuperar a mensagem do cliente](#recuperar-a-mensagem)
    - [Responder a mensagem do cliente](#responder-a-mensagem)
    - [Voltar ao contato pardão](#contato-padrão)

- [Créditos](#créditos)

- [Licença](#licença)
<br><br>

## <b>O que é este sistema?</b>
Este sistema é um assistente que permite enviar mensagens no WhatsApp usando Python, PHP e MySQL.<br><br>


## <b>Configurações</b><br><br>
#### <b>Python</b>
Para rodar o sistema você deverá instalar a versão 3.9 do Python e as seguintes bibliotecas:<br>
```python
pip install selenium
pip install requests
```


#### <b>WebDriver</b>
Instale o WebDriver de sua preferência conforme o navegador qyue você está utilizando. No meu caso foi o  Microsoft Edge Driver(recomendável a versão Beta independente do navegador que você irá utilizar): [Microsoft Edge Driver](https://developer.microsoft.com/en-us/microsoft-edge/tools/webdriver//)<br>

1. Instale o driver compativel com a versão do seu navegador e sistema operacional do seu computador.<br>

2. Extraia o arquivo baixado para uma pasta de seu computador. <br>

3. Adicione a pasta onde o Microsoft Edge Driver foi extraído ao PATH do sistema.<br>

4. Para testar a instalação do Microsoft Edge Driver, abra o prompt de comando e execute o seguinte comando:<br>
    ```prompt
    edge_driver --version
    ```


#### <b>XAMPP</b>
3.1 Depois de fazer a instalação, sempre que utilizar o programa ative o Apache e o MySQL.<br><br>
<n><img src="img/xampp_2.png" alt="Capturar QR Code" width="250" height="200"><br><br>

## <b>Importações</b>

<br>

```python
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import requests
```
<br>


## <b>Funcionamento do Sistema</b>


### Abrirá o site do WhatsApp.
- Capturar QR Code para ter acesso ao seu WhatsApp.<br><br>
<n><img src="img/captura_qrCode.png" alt="Capturar QR Code" width="340" height="290"><br><br>


### Círculo de notificação verde.
- Caso de nova mensagem o sistema vai identificar que é uma mensagem não vizualizada e ira clicar abrindo a nova conversa.<br><br>
<n><img src="img\bolinhaverde.png" alt="Capturar Bolinha" width="350" height="50"><br><br>

### Recuperar o telefone do cliente.
- Pegar o nome do contato que enviou a mensagem e exibi-lá no terminal.<br><br>
<n><img src="img\telefone_cliente.png" alt="Capturar Nome" width="350" height="50"><br><br>

### Recuperar a mensagem.
- Pegar a ultima mensagem do cliente e exibir ao terminal.<br><br>
<n><img src="img\ultima_msg.png" alt="Capturar Mensagem" width="200" height="100"><br><br>
<n> No exemplo acima, o usuário vai receber uma mensagem de boas vindas. Após isso, ele começará a interagir com o robô, através dos números passados no menu em PHP.<br><br>
    ```php
    <?php
    $menu = "Olá, obrigado por entrar em contato com a Pizzaria GitHub.
    Já vamos começar seu atendimento.
    Escolha a opção de sua prefêrencia.
    ----------------Pizza---------------
    *1* - Pizza de mussarela --- R$20,00
    *2*- Pizza de calabresa --- R$20,00";
    ?>
    ```
<br>

### Responder a mensagem.<br>
- As respostas são realizadas internamente através do PHP e o MySQL, interagindo com o Python e a biblioteca requests que faz o 'papel' de se comunicar com servidor. Neste caso solicitaremos do que chamamos de verbo 'HTTP GET' e tem como serviço de se comunicar com as mensagens guardadas ao banco de dados ligado ao servidor através do PHP e MySQL.<br><br>
<n><img src="img\resposta.png" alt="Capturar Mensagem" width="350" height="140">


### Contato padrão
- Voltar para o contato padrão fixado ao topo(uma conversa com você mesmo). Para fazer isso basta mandar uma mensagem para o seu próprio numero de telefone.<br><br>
<n><img src="img\contato_padrao.png" alt="Capturar Mensagem" width="355" height="60">


### Buscando novas mensagens.<br>
- Neste ultimo passo, ficará em loop até que um contato nos envie uma nova mensagem.<br><br>
<n><img src="img\buscando_mensagens.png" alt="Buscando novas mensagem" width="260" height="150"><br><br>


## <b>Créditos</b>
## <b>Licença</b>
