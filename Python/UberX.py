from car import Car

class UberX(Car):
    brand = str
    model = str

    def __init__(self, licence, driver, brand, model):
        super().__init__(licence, driver)
        self.brand = brand
        self.model = model
        