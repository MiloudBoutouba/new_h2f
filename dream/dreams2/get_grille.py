import requests
from bs4 import BeautifulSoup
from datetime import datetime

def get_grille(name, date_name, nb):
  request = requests.get('https://www.fdj.fr/jeux-de-tirage/'+name+'/resultats/')
  soup = BeautifulSoup(request.text, 'html.parser')

  #text = soup.find_all('li',id="ball")
  text = soup.find_all('h5',"break-normal")
  g = []

  for i in text:
    if(len(g)>=nb):
      break
    g.append(int(i.get_text()))

  #text = soup.find('h2',id="title-result-"+date_name)
  
  text = soup.find('button', {'class':'react-datepicker-ignore-onclickoutside'})
  
  #if(datetime.today().strftime('%d/%m/%Y') != text.get_text()):
  #  return 0

  date = text.get_text().split('/')

  url = '/kunden/homepages/9/d966702636/htdocs/dream/dreams2/'
  f = open(url+date_name+'-'+date[0]+'-'+date[1]+'-'+date[2]+'-resultat.txt', "w")
  f.write(str(g))

get_grille('loto', 'loto', 5)
get_grille('eurodreams', 'eurodreams', 6)
get_grille('euromillions-my-million', 'euromillions', 5)