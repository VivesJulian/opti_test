import requests

def req_Api(code)

    url = "https://openexchangerates.org/api/historical/2022-07-25.json?app_id="+code

    reponse = requests.get(url)
    print(reponse)
