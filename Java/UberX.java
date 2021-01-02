class UberX extends Car{
    String brand;
    String model;

    public UberX(String license, Account driver, String brand, String model){ //Constructor
        super(license, driver);
        this.brand = brand;
        this.model = model;

    }
    @Override
    void printDatacar(){
        super.printDatacar();
        System.out.println("Model: " + model + " " + " Brand: " + brand);

    }
}
