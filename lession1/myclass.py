

class Vehicle:
    def __init__(self, modelname, year, price):
        self.modelname = modelname
        self.year = year
        self.price = price

    def displayVehicle(self):
        print(" Model: {} Year: {} Price: {}".format(self.modelname, self.year, self.price))

class Car(Vehicle):
    pass

vw = Car("Polo", 2010, 500000)
vw.displayVehicle()
