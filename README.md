# Chat de atendimento automático - WhatsApp
Chat de atendimento automático usando API e PHP junto ao Python com a biblioteca Selenium.

### Requisitos
- Python == 3.9
- ... 

### Configuração
1. Instalar o python

### Importação
```python
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import requests
```

## Passos

### Abrir o site do WhatsApp.
1. Capturar QR Code.<br>
<img src="img/captura_qrCode.png" alt="Capturar QR Code" width="250" height="200">


### Buscar a bolinha verde de notificação.
2. Clicar em cima da bolinha em caso de nova mensagem.<br>
<img src="img\bolinhaverde.png" alt="Capturar Bolinhha" width="260" height="60">

3. Pegar o contato da pessoa que enviou a mensagem.
6. Pegar a ultima mensagem dessa pessoa
7. Responder a mensagem
8. Voltar para o contato padrão
9. ...aguardando novas mensagens