# Chat de atendimento automático - WhatsApp
Automatizando tarefas que pode ser usados em delivery ou entrega de conteúdo do marketing digital. Usando API e PHP integrado ao Python com a biblioteca Selenium e Requests.
### CONFIGURAÇÕES
1. Instalar o Python == 3.9 e as seguintes bibliotecas:<br>
    ```python
    pip install selenium
    pip install requests
    ```

2. Instalar o WebDriver de sua preferência do seu navegador.<br>
<n>No meu caso foi o  Microsoft Edge Driver(recomendável a versão Beta): https://developer.microsoft.com/en-us/microsoft-edge/tools/webdriver/ <br><br>

    2.1 Instale o driver compativel com a versão do seu navegador e sistema operacional do seu computador.<br><br>

    2.2 Extraia o arquivo baixado para uma pasta de seu computador. <br><br>

    2.3 Adicione a pasta onde o Microsoft Edge Driver foi extraído ao PATH do sistema.<br><br>

    2.4 Para testar a instalação do Microsoft Edge Driver, abra o prompt de comando e execute o seguinte comando:<br>
    ```prompt
    edge_driver --version
    ```

3. Instalar o XAMPP<br>
3.1 Depois de fazer a instalação sempre que utilizar o programa ative o Apache e o MySQL.<br>
<n><img src="img/xampp_2.png" alt="Capturar QR Code" width="250" height="200">

### IMPORTAÇÕES 

<br>

```python
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import requests
```
<br>


## PASSOS
<br>

### 1. Abrir o site do WhatsApp.
- Capturar QR Code.<br>
<n><img src="img/captura_qrCode.png" alt="Capturar QR Code" width="250" height="200">


### 2. Pegar a bolinha verde.
- Clicar em cima da bolinha em caso de nova mensagem.<br>
<n><img src="img\bolinhaverde.png" alt="Capturar Bolinha" width="350" height="50">

### 3. Pegar o telefone do cliente.
- Pegar o nome do contato da pessoa que enviou a mensagem e exibi-lá no terminal.<br>
<n><img src="img\telefone_cliente.png" alt="Capturar Nome" width="370" height="60">

### 4. Pegar a mensagem.
- Pegar a ultima mensagem do cliente e exibir ao terminal.<br>
<n><img src="img\bolinhaverde.png" alt="Capturar Mensagem" width="355" height="50">

### 5. Responder a mensagem.<br>
- As respostas são realizadas internamente através do PHP e o MySQL, interagindo com o Python e a biblioteca requests que faz o 'papel' de se comunicar com servidor. Neste caso solicitaremos do que chamamos de verbo 'HTTP GET' e tem como serviço de se comunicar com as mensagens guardadas ao banco de dados ligado ao servidor através do XAMPP.<br>
<n><img src="img\bolinhaverde.png" alt="Capturar Mensagem" width="355" height="50">


### 6. Contato padrão
- Voltar para o contato padrão fixado ao topo(uma conversa com você mesmo). Para fazer isso basta mandar uma mensagem para o seu próprio numero de telefone.<br>

### 7. Aguardando novas mensagens.<br>
- ... 

<n><img src="img\buscando_mensagens.png" alt="Capturar Bolinhha" width="260" height="130">
