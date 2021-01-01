from car import Car
from account import Account
from UberX import UberX
from UberPool import UberPool

if __name__ == "__main__":
    print("Hola Carebola")

    car = Car("DFA222", Account("Juanchito Bonilla", "1313131"))
    print(vars(car))
    print(vars(car.driver))

    uberX = UberX("22eee2", Account("Carlitos Bonilla", "3232323"), "Toyota","Corolla")
    print(vars(uberX))
    print(vars(uberX.driver))
    
    uberPool = UberPool("55EEE", Account("Andrea Sarmiento", "4546464"), "Renault","Sandero")
    print(vars(uberPool))
    print(vars(uberPool.driver))