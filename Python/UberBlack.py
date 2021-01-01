from car import Car

class UberBlack(car):
    typeCarAccepted = []
    seatsMaterial = []

    def __init__(self, licence, driver, typeCarAccepted, seatsMaterial):
        super.__init__(licence,driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial