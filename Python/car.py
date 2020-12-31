from account import Account
class Car: 
    id          = int
    licence     = str
    driver      = str
    passegenger = int

    def __init__(self, licence, driver):
        self.licence = licence
        self.driver = driver
