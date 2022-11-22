from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
import requests

import time

driver = webdriver.Edge()
driver.get('https://web.whatsapp.com/')
time.sleep(10)

def bot():
    try:
        # Pega a bolinha verde
        classe_bolinha = 'c0uhu3dl' # <span class = qualquer um dos valores da class><\span>
        bolinha = driver.find_element(By.CLASS_NAME, classe_bolinha) # Pode haver uma classe 'bolinha' = aumms1qt = bolinhas verdes
        bolinha = driver.find_elements(By.CLASS_NAME, classe_bolinha) # Pode haver muitas classes 'bolinha' = aumms1qt = bolinhas verdes
        clica_bolinha = bolinha[-1] # Clicar na mais recente
        acao_bolinha = webdriver.common.action_chains.ActionChains(driver)
        acao_bolinha.move_to_element_with_offset(clica_bolinha, 0, -20) # Move o click para a bolinha
        acao_bolinha.click()
        acao_bolinha.perform()
        acao_bolinha.click()
        acao_bolinha.perform() # Click duplo
        
        # Pega o telefone do cliente
        xpath_telefone = '//*[@id="main"]/header/div[2]/div/div/span' # Cópiar em formato xPath do corpo da função <span>
        telefone_cliente = driver.find_element(By.XPATH, xpath_telefone)
        contato_cliente = telefone_cliente.text
        print(contato_cliente)
        time.sleep(5)
        
        # Pega a mensagem
        class_ultima_mensagem = '_1Gy50' # div._1Gy50
        todas_msg = driver.find_elements(By.CLASS_NAME, class_ultima_mensagem)
        todas_msg_txt = [e.text for e in todas_msg]
        msg = todas_msg_txt[-1] # Pega a ultima mensagem
        print(msg)
        time.sleep(5)
        
        # Responder a mensagem
        xpath_campo_txt = '//*[@id="main"]/footer/div[1]/div/span[2]/div/div[2]/div[1]/div/div[1]'
        campo_txt = driver.find_element(By.XPATH, xpath_campo_txt)
        campo_txt.click()
        
        # Resposta da pagina
        resposta = requests.get("http://localhost/bot/index.php", params={'msg':{msg}, 'telefone':{contato_cliente}})
        bot_resposta = resposta.text
        time.sleep(3)
        campo_txt.send_keys(bot_resposta, Keys.ENTER) # Envia no campo de mensagem do whatsapp, a mensagem.
        
        # Voltar para o contato padrão
        contato_padrao = driver.find_element('_2TiQe')
        acao_contato = webdriver.common.action_chains.ActionChains(driver)
        acao_contato.move_to_element_with_offset(contato_padrao, 0, -20)
        acao_contato.click()
        acao_contato.perform()
        acao_contato.click()
        acao_contato.perform()
        
    except:
        print('Buscando novas mensagens...')
        time.sleep(5)
        
while True:
    bot()
    time.sleep(2)
    