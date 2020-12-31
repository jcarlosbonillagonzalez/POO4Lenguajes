from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Carebola")

    car = Car("DFA222", Account("Juanchito Bonilla", "DFA111"))
    print(vars(car))
    print(vars(car.driver))
    